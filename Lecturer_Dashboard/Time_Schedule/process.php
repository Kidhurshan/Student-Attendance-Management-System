<?php

    if(isset($_POST["edit"])){
        include("../connect.php");
        $Date = mysqli_real_escape_string($conn,$_POST["Date"]);
        $StartTime = mysqli_real_escape_string($conn,$_POST["StartTime"]);
        $EndTime  = mysqli_real_escape_string($conn,$_POST["EndTime"]);
        $Chapter = mysqli_real_escape_string($conn,$_POST["Chapter"]);
        $ScheduleID = mysqli_real_escape_string($conn,$_POST["ScheduleID"]);

        $sql="UPDATE timeschedule SET Date ='$Date', StartTime ='$StartTime', EndTime='$EndTime', Chapter='$Chapter' WHERE ScheduleID='$ScheduleID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["update"] = "Time Schedule are Updated";
            header("Location:Time_Schedule.php");
        }else{
            die("Not inserted !");
        }
    }

?>
