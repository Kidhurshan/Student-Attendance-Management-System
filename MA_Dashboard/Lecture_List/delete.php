<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    include("../connect.php");

    // Fetch the AllocationID before deleting from the courseAllocation table
    $fetchAllocationSql = "SELECT AllocationID FROM courseAllocation WHERE `Lecture-ID`='$id'";
    $result = mysqli_query($conn, $fetchAllocationSql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $allocationID = $row['AllocationID'];

        // Delete from courseAllocation table
        $deleteCourseAllocationSql = "DELETE FROM courseAllocation WHERE `Lecture-ID`='$id'";
        if (mysqli_query($conn, $deleteCourseAllocationSql)) {
            // Delete from timeschedule table using the fetched AllocationID
            $deleteTimeScheduleSql = "DELETE FROM timeschedule WHERE AllocationID='$allocationID'";
            if (mysqli_query($conn, $deleteTimeScheduleSql)) {
                // Delete from lecturer table
                $deleteLecturerSql = "DELETE FROM lecturer WHERE `Lecture-ID`='$id'";
                if (mysqli_query($conn, $deleteLecturerSql)) {
                    session_start();
                    $_SESSION["delete"] = "Lecturer info Deleted";
                    header("Location: Lecture_List.php");
                } else {
                    die("Error deleting from lecturer table: " . mysqli_error($conn));
                }
            } else {
                $deleteLecturerSql = "DELETE FROM lecturer WHERE `Lecture-ID`='$id'";
                if (mysqli_query($conn, $deleteLecturerSql)) {
                    session_start();
                    $_SESSION["delete"] = "Lecturer info Deleted";
                    header("Location: Lecture_List.php");
                } else {
                    die("Error deleting from lecturer table: " . mysqli_error($conn));
                }
            }
        } else {
            die("Error deleting from courseAllocation table: " . mysqli_error($conn));
        }
    } else {
        $deleteLecturerSql = "DELETE FROM lecturer WHERE `Lecture-ID`='$id'";
        if (mysqli_query($conn, $deleteLecturerSql)) {
            session_start();
            $_SESSION["delete"] = "Lecturer info Deleted";
            header("Location: Lecture_List.php");
        } else {
            die("Error deleting from lecturer table: " . mysqli_error($conn));
        }
    }
}
?>
