<?php
if(isset($_POST["enter"])){
        $Date = $_POST["Date"];
        $StartTime = $_POST["StartTime"];
        $EndTime = $_POST["EndTime"];
        $Chapter = $_POST["Chapter"];
        $AllocationID = $_POST["AllocationID"];

        include("../connect.php");

        $sql = "INSERT INTO timeschedule (AllocationID, Date, StartTime, EndTime, Chapter, `MA-Action`) VALUES (?, ?, ?, ?, ?, 'Not')";
        $stmt = mysqli_stmt_init($conn);
        
        if($stmt && mysqli_stmt_prepare($stmt, $sql)){
            mysqli_stmt_bind_param($stmt, "issss", $AllocationID, $Date, $StartTime, $EndTime, $Chapter);
            mysqli_stmt_execute($stmt);
            $_SESSION["create"] = "New Time Schedule is Added";
            header("Location: Time_Schedule.php");
            exit();
        } else {
            $_SESSION["error"] = "Query invalid";
            header("Location: Time_Schedule.php");
            exit();
        }
    }
?>