<?php
    include ('../connect.php');
    if(isset($_POST["edit"])){
        $CourseCode = mysqli_real_escape_string($conn,$_POST["CourseCode"]);
        $LecID = mysqli_real_escape_string($conn,$_POST["Lecture-ID"]);
        $Batch  = mysqli_real_escape_string($conn,$_POST["Batch"]);
        $AcademicYear  = mysqli_real_escape_string($conn,$_POST["AcademicYear"]);
        $allocationID = mysqli_real_escape_string($conn, $_POST["AllocationID"]);

        $sql = "UPDATE CourseAllocation SET CourseCode='$CourseCode', `Lecture-ID`='$LecID', Batch='$Batch', AcademicYear='$AcademicYear' WHERE AllocationID=$allocationID";
        
        $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["update"] = "Course Allocation Details are Updated";
            header("Location:Course_Allocation.php");
        }else{
            die("Not inserted !");
        }
    }

?>
