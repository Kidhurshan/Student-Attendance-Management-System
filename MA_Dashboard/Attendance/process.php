<?php
include("../connect.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the hidden inputs and ScheduleID
    $allocationID = $_POST["AllocationID"];
    $scheduleID = $_POST["ScheduleID"];

    // Create table name based on AllocationID
    $tableName = "allocation_" . $allocationID;
    $columnName = "Column_" . $scheduleID;

    // Check if ScheduleID column exists, if not, create it
    $addColumnQuery = "ALTER TABLE $tableName ADD COLUMN $columnName VARCHAR(255) DEFAULT NULL";
    mysqli_query($conn, $addColumnQuery);
    
    // Loop through the attendance data
    foreach ($_POST["attendance"] as $regNo => $status) {
        // Update the table with the status based on RegNo
        $updateQuery = "UPDATE $tableName SET $columnName = '$status' WHERE RegNo = '$regNo'";
        if (mysqli_query($conn, $updateQuery)) {
            // Update MA-Action in TimeSchedule table
            $updateMAScheduleQuery = "UPDATE TimeSchedule SET `MA-Action` = 'Take' WHERE ScheduleID = $scheduleID";
            if (mysqli_query($conn, $updateMAScheduleQuery)) {
                session_start();
                $_SESSION["create"] = "Attendance Taken Successfully";
                header("Location:Attendance.php");
            } else {
                echo "Error updating MA-Action in TimeSchedule table: " . mysqli_error($conn);
            }
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    // Redirect or handle the case where the form is not submitted
}
?>



