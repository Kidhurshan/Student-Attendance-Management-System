<?php
if (isset($_GET['AllocationID'])){
    $allocationID = $_GET['AllocationID'];
    include("../connect.php");
    
    // Delete record from CourseAllocation table
    $deleteSql = "DELETE FROM CourseAllocation WHERE AllocationID = '$allocationID'";
    if (mysqli_query($conn, $deleteSql)) {
        // Delete from TimeSchedule table
        $deleteTimeScheduleSql = "DELETE FROM TimeSchedule WHERE AllocationID = '$allocationID'";
        if (mysqli_query($conn, $deleteTimeScheduleSql)) {
            // Drop the corresponding table
            $tableName = "allocation_" . $allocationID;
            $dropSql = "DROP TABLE IF EXISTS $tableName";
            if (mysqli_query($conn, $dropSql)) {
                session_start();
                $_SESSION["delete"] = "Course Allocation info Deleted!";
                header("Location: Course_Allocation.php");
                exit; // Exit to prevent further execution
            } else {
                die("Error dropping table: " . mysqli_error($conn));
            }
        } else {
            die("Error deleting from TimeSchedule table: " . mysqli_error($conn));
        }
    } else {
        die("Error deleting record from CourseAllocation table: " . mysqli_error($conn));
    }

}
?>
