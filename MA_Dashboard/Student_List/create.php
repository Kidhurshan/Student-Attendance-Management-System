<?php
session_start();
if (isset($_POST["enter"])) {
    $RegNo = $_POST["RegNo"];
    $Email = $_POST["Email"];
    $FirstName = $_POST["FirstName"];
    $MidName = $_POST["MidName"];
    $LastName = $_POST["LastName"];
    $Batch = $_POST["Batch"];

    require_once "../connect.php";
    $sql = "SELECT * FROM student WHERE RegNo='$RegNo'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
        $_SESSION["error"] = "Student is already registered";
        header("Location: Student_List.php");
        exit();
    } else {
        $sqlStudent = "INSERT INTO student (RegNo, Email, FirstName, MidName, LastName, Batch, `MA-Approval`) VALUES (?, ?, ?, ?, ?, ?, 'Not')";
        $sqlUser = "INSERT INTO user (Email, UserType) VALUES (?, ?)";
        $stmtStudent = mysqli_stmt_init($conn);
        $stmtUser = mysqli_stmt_init($conn);

        $prepareStmtStudent = mysqli_stmt_prepare($stmtStudent, $sqlStudent);
        $prepareStmtUser = mysqli_stmt_prepare($stmtUser, $sqlUser);

        if ($prepareStmtStudent && $prepareStmtUser) {
            mysqli_stmt_bind_param($stmtStudent, "ssssss", $RegNo, $Email, $FirstName, $MidName, $LastName, $Batch);
            mysqli_stmt_bind_param($stmtUser, "ss", $Email, $userType);

            $userType = "Student"; // Set UserType for the user table

            mysqli_stmt_execute($stmtStudent);
            mysqli_stmt_execute($stmtUser);

            $_SESSION["create"] = "Student is added";
            header("Location: Student_List.php");
            exit();
        } else {
            die("Something went wrong");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add new student</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
  <style>
    .head-card img{
        max-height: 600px;
    }
    .head-card{
        background: rgba(57, 57, 57, 0.5); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.9); /* Adjust the shadow values as needed */
    }
    </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link" href="../MA_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Course_List/Course_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course List">
            <i class="bi bi-book"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Student_List/Student_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Student List">
            <i class="bi bi-person"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Lecture_List/Lecture_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Lecturer List">
            <i class="bi bi-people"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Course_Allocation/Course_Allocation.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Allocation">
            <i class="bi bi-grid-3x3-gap"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Report/Report.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Report">
            <i class="bi bi-file-earmark-bar-graph"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../Login_Lecturer/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
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
            <a class="nav-link" aria-current="page" href="../MA_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Course_List/Course_List.php">Course List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Student_List/Student_List.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Lecture_List/Lecture_List.php">Lecturer List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Report/Report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../../Login_Lecturer/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="content">
    <div class="card head-card p-3 mt-2">
        <div class="card-body">
          <div class="container my-4">
              <header class="d-flex justify-content-between my-3">
                  <h1><i class="bi bi-person-add"></i> Add Student Detail</h1>
                  <div>
                      <a href="Student_List.php" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
                  </div>
              </header>
              <div class="row">   
                  <div class="col-md-2">
                      <img src="../../icons/anim-b/add.gif" class="img-fluid rounded" alt="Image">
                  </div>
                  <div class="col-md-8">
                  <form action="create.php" method="post">
                      <div class="input-group my-3">
                          <span class="input-group-text">First Name</span>
                          <input type="text" class="form-control" name="FirstName" placeholder="XXXXXX">
                      </div>
                      <div class="input-group my-3">
                          <span class="input-group-text">Middle Name</span>
                          <input type="text" class="form-control" name="MidName" placeholder="XXXXXX">
                      </div>
                      <div class="input-group my-3">
                          <span class="input-group-text">Last Name</span>
                          <input type="text" class="form-control" name="LastName" placeholder="XXXXXX">
                      </div>
                      <div class="input-group my-3">
                          <span class="input-group-text">Registration No</span>
                          <input type="text" class="form-control" name="RegNo" placeholder="stdXXXX">
                      </div>
                      <div class="input-group my-3">
                          <span class="input-group-text">Email</span>
                          <input type="text" class="form-control" name="Email" placeholder="XXXX@eng.jfn.ac.lk">
                      </div>
                      <div class="input-group my-3">
                          <span class="input-group-text">Batch</span>
                          <input type="text" class="form-control" name="Batch" placeholder="EXX">
                      </div>
                      <div class="form-btn my-2">
                          <input type="submit" class="btn btn-primary" name="enter" value="Register">
                      </div>
                  </form>

              </div>
          </div>
        </div>
    </div>
  </div>

    <!-- Bootstrap JS and Tooltip -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>
