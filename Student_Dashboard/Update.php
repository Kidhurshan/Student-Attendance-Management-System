<?php
include("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $midName = $_POST["midName"];
    $lastName = $_POST["lastName"];
    $batch = $_POST["batch"];
    $email = $_POST["email"];
    $regNo =$_POST["regNo"];

    // Perform SQL update query
    $sql = "UPDATE student SET FirstName='$firstName', MidName='$midName', LastName='$lastName',Batch='$batch' WHERE  Email='$email'";
    // Execute the SQL query
    $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["update"] = "Info Updated";
            header("Location: Student_index.php");
        }else{
            die("Not inserted !");
        }    
}
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student detail Edit</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">

        <li class="nav-item">
        <a class="nav-link" href="Student_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Student_Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Student_Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Login_Student/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
            <i class="bi bi-door-closed"></i>
        </a>
        </li>
    </ul>
  </div>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h1 class="my-10">A</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="Student_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Student_Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Student_Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../Login_Student/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page content -->
<div class="content">
  <div class="card head-card glass-effect p-5">
    <div class="card-body">
        <header class="d-flex justify-content-between my-3 mx-3">
            <h1 >Edit Student information</h1>
            <div>
                <a href="Student_index.php" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
            </div>
        </header>
        <?php
            if(isset($_GET["Email"])){
                $email = $_GET["Email"];
                include("connect.php") ;
                $sql="SELECT * FROM student WHERE Email ='$email'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
        ?>
        <!-- Form to edit student information -->
        <div class="row">   
                <div class="col-md-2">
                <img src="../icons/anim-b/edit.gif" class="img-fluid rounded" alt="Image">
                </div>
        <div class="col-md-8">
        <form method="post" action="Update.php">
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">First Name:</span>
                <input type="text" class="form-control" name="firstName" value="<?php echo $row["FirstName"]; ?>" required>
            </div>
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">Middle Name:</span>
                <input type="text" class="form-control" name="midName" value="<?php echo $row["MidName"]; ?>" required>
            </div>
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">Last Name:</span>
                <input type="text" class="form-control" name="lastName" value="<?php echo $row["LastName"]; ?>" required>
            </div>
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">Registration No:</span>
                <input type="text" class="form-control" name="regNo" value="<?php echo $row["RegNo"]; ?>" disabled>
                <input type="hidden" class="form-control" name="regNo" value="<?php echo $row["RegNo"]; ?>">
            </div>
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">Email:</span>
                <input type="email" class="form-control" name="email" value="<?php echo $row["Email"]; ?>" disabled>
                <input type="hidden" class="form-control" name="email" value="<?php echo $row["Email"]; ?>">
            </div>
            <div class="input-group input-group-lg mb-3">
                <span class="input-group-text">Batch:</span>
                <input type="text" class="form-control" name="batch" value="<?php echo $row["Batch"]; ?>" required>
                
            </div>
            <button type="submit" class="btn btn-success my-3">Update</button>
        </form>
        </div>
        <?php
        }
        ?>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS and Tooltip -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>
