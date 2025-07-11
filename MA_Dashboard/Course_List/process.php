<?php

    if(isset($_POST["edit"])){
        include("../connect.php");
        $CourseCode = mysqli_real_escape_string($conn,$_POST["CourseCode"]);
        $CourseName = mysqli_real_escape_string($conn,$_POST["CourseName"]);
        $Semester  = mysqli_real_escape_string($conn,$_POST["Semester"]);
        $Credit = mysqli_real_escape_string($conn,$_POST["Credit"]);
        $LecHour = mysqli_real_escape_string($conn,$_POST["LecHour"]);

        $sql="UPDATE course SET CourseName='$CourseName', Semester ='$Semester', Credit='$Credit', LecHour='$LecHour' WHERE CourseCode='$CourseCode'";
        $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["update"] = "Course Details are Updated";
            header("Location:Course_List.php");
        }else{
            die("Not inserted !");
        }
    }

?>
