<?php
session_start();
if (!isset($_SESSION["Email"])) {
    header("Location: ../../Login_button/login.php");
    exit();
    echo "hello";
}
?>
<?php
    if(isset($_POST["enter"])){
        // No need to start session again here, it was already started at the beginning of the script

        $id = $_POST["Lecture-ID"];
        $fname = $_POST["FirstName"];
        $mname = $_POST["MidName"];
        $lname = $_POST["LastName"];
        $profession = $_POST["Profession"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if(strlen($password) < 8){
            array_push($errors, "Password must be at least 8 characters long");
        }
        if($password !== $passwordRepeat){
            array_push($errors, "Password does not match");
        }

        require_once "../connect.php";
        $sql = "SELECT * FROM lecturer WHERE Email='$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0){
            array_push($errors, "Email is invalid or already registered!");
        }

        if(count($errors) > 0){
            foreach($errors as $error){
                echo "<div class ='alert alert-danger'>$error</div> ";
            }
        } else {
            $sqlLecturer = "INSERT INTO lecturer (`Lecture-ID`, Email, Password, FirstName, MidName, LastName, Profession) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $sqlUser = "INSERT INTO user (Email, UserType) VALUES (?, ?)";
            $stmtLecturer = mysqli_stmt_init($conn);
            $stmtUser = mysqli_stmt_init($conn);

            $prepareStmtLecturer = mysqli_stmt_prepare($stmtLecturer, $sqlLecturer);
            $prepareStmtUser = mysqli_stmt_prepare($stmtUser, $sqlUser);

            if ($prepareStmtLecturer && $prepareStmtUser) {
                mysqli_stmt_bind_param($stmtLecturer, "sssssss", $id, $email, $passwordHash, $fname, $mname, $lname, $profession);
                mysqli_stmt_bind_param($stmtUser, "ss", $email, $userType);

                $userType = "Lecturer"; // Set UserType for the user table

                mysqli_stmt_execute($stmtLecturer);
                mysqli_stmt_execute($stmtUser);
                $_SESSION["create"] = "Lecturer is Added";
                header("Location: Lecture_List.php");
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
  <title>Bootstrap Sidebar and Navbar</title>
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
            <a class="nav-link" href="../Student_List/Student_List.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Lecture_List/Lecture_List.php">Lecturer List</a>
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
      <header class="d-flex justify-content-between my-3">
              <h1><i class="bi bi-bookmark-plus"></i> Add Lecturer</h1>
              <div>
                  <a href="Lecture_List.php" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
              </div>
      </header>
          <div class="row">   
                  <div class="col-md-2">
                      <img src="../../icons/anim-b/add.gif" class="img-fluid rounded" alt="Image">
                  </div>
            <div class="col-md-8">
              <form action="create.php" method="post">
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Lecture-ID</span>
                      <input type="text" class="form-control" name="Lecture-ID" placeholder="LecXXXX">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">First Name</span>
                      <input type="text" class="form-control" name="FirstName" placeholder="XXXXX">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Middle Name</span>
                      <input type="text" class="form-control" name="MidName" placeholder="XXXXX">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Last Name</span>
                      <input type="text" class="form-control" name="LastName" placeholder="XXXXX">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Profession</span>
                      <input type="text" class="form-control" name="Profession" placeholder="XXXXX">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Email</span>
                      <input type="email" class="form-control" name="Email" placeholder="XXXX@eng.jfn.ac.lk">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Password</span>
                      <input type="password" class="form-control" name="Password" placeholder="******">
                  </div>
                  <div class="input-group input-group-md mb-3">
                      <span class="input-group-text">Repeat Password</span>
                      <input type="password" class="form-control" name="repeat_password" placeholder="******">
                  </div>
                  <div class="input-group my-3">
                      <input type="submit" class="btn btn-success btn-md" name="enter" value="Submit">
                  </div>
              </form>
            </div>
          </div>
    </div>
  </div>
</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <!-- Initialize tooltips -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
  </script>
</body>
</html>
