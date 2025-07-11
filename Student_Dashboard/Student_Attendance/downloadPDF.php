<?php
require('fpdf/fpdf.php'); // Ensure the path to the FPDF library is correct

session_start();
if (!isset($_SESSION["Email"])) {
    header("Location: ../../Login_button/login.php");
    exit();
}

if (isset($_GET['Semester']) && isset($_GET['Code']) && isset($_GET['ID']) && isset($_GET['regno']) && isset($_GET['name'])) {
    $semester = $_GET['Semester'];
    $courseCode = $_GET['Code'];
    $allocationID = $_GET['ID'];
    $regno = $_GET['regno'];
    $coursename = $_GET['name'];

    include("../connect.php");
    $query = "SELECT DISTINCT c.*, ca.*, s.* FROM course c
              JOIN courseallocation ca ON ca.CourseCode = c.CourseCode
              JOIN student s ON s.Batch = ca.Batch
              WHERE s.RegNo = '$regno' AND c.Semester = '$semester' AND c.CourseCode = '$courseCode'";
    $result_course = mysqli_query($conn, $query);
    $studentName = "";
    $batch = "";
    $courseName = "";
    $totalClasses = 0;
    $attendedClasses = 0;
    $absentClasses = 0;
    $pendingClasses = 0;

    while ($row_course = mysqli_fetch_assoc($result_course)) {
        $firstName = $row_course['FirstName'];
        $middleName = $row_course['MidName'];
        $lastName = $row_course['LastName'];

        $studentName = $firstName . ' ' . $middleName . ' ' . $lastName;
        $batch = $row_course['Batch'];
        $courseName = $row_course['CourseName'];
    }

    $tableName = "allocation_" . $allocationID;
    $sql_id = "SELECT ScheduleID, Date, StartTime, EndTime FROM TimeSchedule t WHERE AllocationID = $allocationID ORDER BY t.Date DESC";
    $result_id = mysqli_query($conn, $sql_id);
    $totalClasses = mysqli_num_rows($result_id); // Total number of classes

    class PDF extends FPDF {
        function Header() {
            // Add watermark image
            $this->Image('1.png', 10, 10, 190); // Adjust the position and size as needed
            
            // Draw border
            $this->Rect(5, 5, 200, 287);
        }
        
        // Adding the footer
        function Footer() {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 19);
    $pdf->SetFillColor(173,  216, 230); // Light grey background
    $pdf->Cell(0, 10, 'Attendance Report', 0, 1, 'C', true);
    $pdf->Ln(10);
    // Set font and details alignment
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Name: ' . $studentName, 0, 1, 'L');
    $pdf->Cell(0, 10, 'Registration No: ' . $regno, 0, 1, 'L');
    $pdf->Cell(0, 10, 'Batch: ' . $batch, 0, 1, 'L');
    $pdf->Cell(0, 10, 'Semester: ' . $semester, 0, 1, 'L');
    $pdf->Cell(0, 10, 'Course: ' . $courseName . ' (' . $courseCode . ')', 0, 1, 'L');


    // Center the table header
    $tableWidth = 140; // Total width of the table
    $pageWidth = $pdf->GetPageWidth();
    $marginX = ($pageWidth - $tableWidth) / 2;
    // Style the table header
    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Report',  0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetFillColor(200, 200, 200, 10);
    $pdf->SetX($marginX);
    $pdf->Cell(90, 10, 'Date [Start Time - End Time]', 1, 0, 'C',true);
    $pdf->Cell(50, 10, 'Attendance Status', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 12);
    while ($row_id = mysqli_fetch_assoc($result_id)) {
        $scheduleID = $row_id["ScheduleID"];
        $sql_check_ma_action = "SELECT `MA-Action` FROM timeschedule 
                                WHERE ScheduleID = $scheduleID 
                                AND `MA-Action` = 'Not'";
        $result_check_ma_action = mysqli_query($conn, $sql_check_ma_action);
        if (mysqli_num_rows($result_check_ma_action) > 0) {
            $pendingClasses++; // Increment the counter if the class is pending
            $pdf->SetX($marginX);
            $pdf->SetFont('Arial', 'B', 11);
            $pdf->Cell(90, 10, $row_id["Date"] . ' [' . $row_id["StartTime"] . ' - ' . $row_id["EndTime"] . ']', 1, 0, 'C');
            $pdf->Cell(50, 10, 'Pending', 1, 0, 'C');
            $pdf->Ln();
        } else {
            $columnName = "Column_" . $row_id["ScheduleID"];
            $sql_attent = "SELECT $columnName FROM $tableName WHERE RegNo = '$regno'";
            $result_attent = mysqli_query($conn, $sql_attent);
            while ($row_attent = mysqli_fetch_assoc($result_attent)) {
                if ($row_attent[$columnName] == 'Present') {
                    $attendedClasses++; // Increment the counter if the student was present
                    $status = 'Present';
                } else {
                    $absentClasses++; // Increment the counter if the student was absent
                    $status = 'Absent';
                }
                $pdf->SetX($marginX);
                $pdf->SetFont('Arial', 'B', 11);
                $pdf->Cell(90, 10, $row_id["Date"] . ' [' . $row_id["StartTime"] . ' - ' . $row_id["EndTime"] . ']', 1, 0, 'C');
                $pdf->Cell(50, 10, $status, 1, 0, 'C');
                $pdf->Ln();
            }
        }
    }

    $attendancePercentage = ($attendedClasses / $totalClasses) * 100;
    $absentPercentage = ($absentClasses / $totalClasses) * 100;
    $pendingPercentage = ($pendingClasses / $totalClasses) * 100;

    $pdf->Ln(15);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Attendance Summary',  0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 12);

    // Center the summary table
    $summaryTableWidth = 140; // Width of the summary table
    $summaryMarginX = ($pageWidth - $summaryTableWidth) / 2;

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Total Classes:', 1);
    $pdf->Cell(50, 10, $totalClasses, 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Attended Classes:', 1);
    $pdf->Cell(50, 10, $attendedClasses, 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Absent Classes:', 1);
    $pdf->Cell(50, 10, $absentClasses, 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Pending Classes:', 1);
    $pdf->Cell(50, 10, $pendingClasses, 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Attendance Percentage:', 1);
    $pdf->Cell(50, 10, number_format($attendancePercentage, 2) . '%', 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Absent Percentage:', 1);
    $pdf->Cell(50, 10, number_format($absentPercentage, 2) . '%', 1, 0, 'C');
    $pdf->Ln();
    $pdf->SetX($summaryMarginX);
    $pdf->Cell(90, 10, 'Pending Percentage:', 1);
    $pdf->Cell(50, 10, number_format($pendingPercentage, 2) . '%', 1, 0, 'C');
    $pdf->Ln();

    $pdf->Output('D', 'Attendance_Report_' . $regno . '.pdf');
}
?>

