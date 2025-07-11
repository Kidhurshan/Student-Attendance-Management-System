<?php
require('fpdf/fpdf.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regNo = $_POST['regNo'];
    $allocationID = $_POST['allocationID'];

    include("../connect.php");

    // Fetch student details
    $studentQuery = "
        SELECT CONCAT(LEFT(s.FirstName, 1), '. ', IF(s.MidName IS NOT NULL, CONCAT(LEFT(s.MidName, 1), '. '), ''), s.LastName) AS StudentName
        FROM Student s
        WHERE s.RegNo = ?
    ";
    $stmt = $conn->prepare($studentQuery);
    $stmt->bind_param("s", $regNo);
    $stmt->execute();
    $stmt->bind_result($studentName);
    $stmt->fetch();
    $stmt->close();

    // Fetch course and lecturer details
    $courseLecturerQuery = "
        SELECT c.CourseName, c.CourseCode, CONCAT(LEFT(l.FirstName, 1), IF(l.MidName IS NOT NULL, CONCAT('. ', LEFT(l.MidName, 1), '. '), ' '), l.LastName) AS LecturerName
        FROM CourseAllocation a
        JOIN Course c ON a.CourseCode = c.CourseCode
        JOIN Lecturer l ON a.`Lecture-ID` = l.`Lecture-ID`
        WHERE a.AllocationID = ?
    ";
    $stmt = $conn->prepare($courseLecturerQuery);
    $stmt->bind_param("i", $allocationID);
    $stmt->execute();
    $stmt->bind_result($courseName, $courseCode, $lecturerName);
    $stmt->fetch();
    $stmt->close();

    // Fetch attendance details
    $tableName = "allocation_" . $allocationID;
    $attendanceQuery = "SELECT * FROM `$tableName` WHERE RegNo = ?";

    $stmt = $conn->prepare($attendanceQuery);
    $stmt->bind_param("s", $regNo);
    $stmt->execute();
    $result = $stmt->get_result();
    $attendanceDetails = $result->fetch_assoc();
    $stmt->close();

    // Check if $attendanceDetails is populated
    if (!$attendanceDetails) {
        die("No attendance records found for the given registration number.");
    }

    // Filter out non-ScheduleID keys
    $scheduleIDs = array_filter(array_keys($attendanceDetails), function($key) {
        return strpos($key, 'Column_') === 0;
    });
    $scheduleIDs = array_map(function($key) {
        return substr($key, 7); // Remove 'Column_' prefix to get ScheduleID
    }, $scheduleIDs);

    if (empty($scheduleIDs)) {
        die("No valid schedule IDs found.");
    }

    $scheduleQuery = "
        SELECT ScheduleID, Date, StartTime, EndTime
        FROM TimeSchedule
        WHERE ScheduleID IN (" . implode(',', array_map('intval', $scheduleIDs)) . ")
    ";

    $scheduleResult = $conn->query($scheduleQuery);
    $schedules = [];
    while ($row = $scheduleResult->fetch_assoc()) {
        $schedules[$row['ScheduleID']] = $row;
    }

    // Calculate attendance percentage
    $totalClasses = count($scheduleIDs);
    $presentClasses = 0;
    foreach ($scheduleIDs as $scheduleID) {
        if ($attendanceDetails['Column_' . $scheduleID] == 'Present') {
            $presentClasses++;
        }
    }
    $attendancePercentage = round(($presentClasses / $totalClasses) * 100, 2);

    // Generate PDF
    class PDF extends FPDF {
        // Page header
        function Header() {
            {
                // Centering the watermark image
                $watermark = '1.png';
                list($width, $height) = getimagesize($watermark);
                $x = ($this->GetPageWidth() - $width / 4) / 2;
                $y = ($this->GetPageHeight() - $height / 4) / 2;
                $this->Image($watermark, $x, $y, $width / 4, $height / 4, 'PNG');
               
               // Add header background color
               $this->SetFillColor(220, 220, 220); // Light gray color
               $this->SetFont('helvetica', 'B', 15);
               $this->Cell(0, 10, 'Attendance Report', 0, 1, 'C', true);
               $this->Ln(5);
       
               // Add underline
               $this->Cell(0, 0, '', 'T', 1, 'C');
               $this->Ln(10);
            }
        }
        // Page footer
        function Footer() {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
        }
        function AddPageBorder() {
            $this->SetLineWidth(0.5);
            $this->Rect(5, 5, 200, 287);
        }
    }

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    $pdf->Cell(0, 10, "Student Name: $studentName", 0, 1);
    $pdf->Cell(0, 10, "Registration Number: $regNo", 0, 1);
    $pdf->Cell(0, 10, "Course Name: $courseName", 0, 1);
    $pdf->Cell(0, 10, "Course Code: $courseCode", 0, 1);
    $pdf->Cell(0, 10, "Lecturer Name: $lecturerName", 0, 1);
    $pdf->Cell(0, 10, "Attendance Percentage: $attendancePercentage%", 0, 1);
    $pdf->Ln(10);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(40, 10, 'Date', 1);
    $pdf->Cell(40, 10, 'Start Time', 1);
    $pdf->Cell(40, 10, 'End Time', 1);
    $pdf->Cell(40, 10, 'Attendance', 1);
    $pdf->Ln();

    $pdf->SetFont('times', '', 10);
    foreach ($schedules as $scheduleID => $schedule) {
        $attendanceStatus = $attendanceDetails['Column_' . $scheduleID];
        $pdf->Cell(40, 10, $schedule['Date'], 1);
        $pdf->Cell(40, 10, $schedule['StartTime'], 1);
        $pdf->Cell(40, 10, $schedule['EndTime'], 1);
        $pdf->Cell(40, 10, $attendanceStatus, 1);
        $pdf->Ln();
        }
        $pdf->AddPageBorder();

        $pdf->Output();
        }
        ?>