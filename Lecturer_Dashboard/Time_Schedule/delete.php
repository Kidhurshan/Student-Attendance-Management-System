<?php
    if(isset($_GET["ScheduleID"])){
        $ScheduleID = $_GET["ScheduleID"];
        include("../connect.php");
        $sql ="DELETE FROM timeschedule WHERE ScheduleID='$ScheduleID'";
        if(mysqli_query($conn, $sql)){
            session_start();
            $_SESSION["delete"] = "Time Schedule info Deleted";
            header("Location:Time_Schedule.php");
        }
    }
?>