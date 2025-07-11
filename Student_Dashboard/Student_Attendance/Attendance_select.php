<?php
session_start();
if (!isset($_SESSION["Email"])){
    header("Location: ../../Login_button/login.php");
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atendance_select</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
  <style>
        .head-card img{
            max-height: 500px;
            margin-left: 200px;
        }
    </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">

        <li class="nav-item">
        <a class="nav-link" href="../Student_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Student_Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Student_Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../Login_Student/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
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
            <a class="nav-link  " aria-current="page" href="../Student_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Student_Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Student_Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../../Login_Student/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Page content -->
<div class="content">
  <div class="card head-card glass-effect p-3">
    <div class="card-body"> 
      <div class="container text-center">
        <h1 class="text-white text-center my-2">Courses</h1>
        <br>
          <?php
          if(isset($_SESSION["Email"])) {
              $email = $_SESSION["Email"];
              include("../connect.php"); // Include your database connection file

              $sql = "SELECT DISTINCT Semester FROM course c
                      JOIN courseallocation ca ON ca.CourseCode = c.CourseCode
                      JOIN student s ON s.Batch = ca.Batch
                      WHERE s.Email = '$email'
                      ORDER BY Semester ASC";
              $result = mysqli_query($conn, $sql);

              if($result && mysqli_num_rows($result) > 0) {
                  while ($row_semester = mysqli_fetch_assoc($result)) {     
                  ?>
                  <a href="Attendance_select.php?Semester=<?= $row_semester['Semester'];?>" class="btn btn-danger btn-lg my-2">Semester <?= $row_semester['Semester'];?></a>
                  <?php
                  }
              }
          }
          ?>
          <br>
          <br>
          <?php
              if(isset($_GET['Semester'])) {
                  $semester = $_GET['Semester'];
                  include("../connect.php");
                  $query = "SELECT DISTINCT c.*, ca.*,s.* FROM course c
                              JOIN courseallocation ca ON ca.CourseCode = c.CourseCode
                              JOIN student s ON s.Batch = ca.Batch
                              WHERE s.Email = '$email' AND c.Semester = '$semester'";
                  $result_course = mysqli_query($conn, $query); 
                  while ($row_course = mysqli_fetch_assoc($result_course)) {
                      ?>
                      <a href="Attendance_view.php?Semester=<?= $semester;?>&Code=<?= $row_course['CourseCode'];?>&ID=<?= $row_course['AllocationID'];?>&regno=<?= $row_course['RegNo'];?>&name=<?= $row_course['CourseName'];?>" class="btn btn-primary btn-lg my-2"><?= $row_course['CourseName'];?> <?= $row_course['CourseCode'];?></a>
                      <?php
                  }

              } else {

              }
          ?>
      </div>
    </div>
  </div>
  <div class="card head-card glass-effect p-3">
    <div class="card-body">
      <img src="../../icons/not-found/select-course.png" class="img-take-attendance" alt="Image">
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