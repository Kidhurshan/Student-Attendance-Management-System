<?php
session_start();
if (!isset($_SESSION["Email"])){
    header("Location: ../../Login_button/login.php");
}
?>
<?php
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Allocation</title>
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
        <a class="nav-link" href="../Lecturer_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Course_List/Course_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course List">
            <i class="bi bi-book"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Course_Allocation/Course_Allocation.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Allocation">
            <i class="bi bi-grid-3x3-gap"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Time_Schedule/Time_Schedule.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Time Schedule">
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
            <a class="nav-link " aria-current="page" href="../Lecturer_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Course_List/Course_List.php">Course List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="../Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Time_Schedule/Time_Schedule.php">Time Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Report/Report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../../Login_Lecturer/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page content -->
<div class="content">
    <div class="card head-card p-3 mt-2">
        <div class="card-body">
            <?php
                    include("../connect.php");

                    if (isset($_GET['AcademicYear']) && $_GET['AcademicYear'] != '' && isset($_GET['Semester']) && $_GET['Semester'] != '') {
                            $AcademicYear = validate($_GET['AcademicYear']);
                            $Semester = validate($_GET['Semester']);
                            $sql = "SELECT *
                            FROM Course c
                            JOIN CourseAllocation ca ON c.CourseCode = ca.CourseCode
                            JOIN Lecturer l ON ca.`Lecture-ID` = l.`Lecture-ID`
                            WHERE ca.AcademicYear = '$AcademicYear' AND c.Semester = '$Semester'";
                            $result = $conn->query($sql);
                    } else {
                            $sql = "SELECT *
                            FROM Course c
                            JOIN CourseAllocation ca ON c.CourseCode = ca.CourseCode
                            JOIN Lecturer l ON ca.`Lecture-ID` = l.`Lecture-ID`";
                            $result = $conn->query($sql);
                    }

                    if (!$result) {
                        die("Invalid Query: " . $conn->error);
                    }

            ?>

            <h1 class="text-center text-white"><i class="bi bi-clipboard-data"></i> Course Allocation</h1>
            <br>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-4">
                                        <select name="AcademicYear" required class="form-select">
                                            <option value="">Select Academic Year</option>
                                            <option value="2023" <?= isset($_GET['AcademicYear']) && $_GET['AcademicYear'] == '2023' ? 'selected' : '' ?>>2023</option>
                                            <option value="2024" <?= isset($_GET['AcademicYear']) && $_GET['AcademicYear'] == '2024' ? 'selected' : '' ?>>2024</option>
                                            <option value="2025" <?= isset($_GET['AcademicYear']) && $_GET['AcademicYear'] == '2025' ? 'selected' : '' ?>>2025</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="Semester" required class="form-select">
                                            <option value="">Select Semester</option>
                                            <option value="1" <?= isset($_GET['Semester']) && $_GET['Semester'] == '1' ? 'selected' : '' ?>>1</option>
                                            <option value="2" <?= isset($_GET['Semester']) && $_GET['Semester'] == '2' ? 'selected' : '' ?>>2</option>
                                            <option value="3" <?= isset($_GET['Semester']) && $_GET['Semester'] == '3' ? 'selected' : '' ?>>3</option>
                                            <option value="4" <?= isset($_GET['Semester']) && $_GET['Semester'] == '4' ? 'selected' : '' ?>>4</option>
                                            <option value="5" <?= isset($_GET['Semester']) && $_GET['Semester'] == '5' ? 'selected' : '' ?>>5</option>
                                            <option value="6" <?= isset($_GET['Semester']) && $_GET['Semester'] == '6' ? 'selected' : '' ?>>6</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-funnel"></i> Filter</button>
                                        <a href="Course_Allocation.php" class="btn btn-danger"><i class="bi bi-x-octagon-fill"></i> Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table-bordered my-3 table-hover text-center">
                <thead class="table-dark text-center">
                <tr>
                    <th>Course Name</th>
                    <th>Lecturer</th>
                    <th>Batch</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>                          
                        <td><?php echo $row['CourseName'];?></td>
                        <td><?php echo $row['FirstName'] . ' ' . $row['MidName'] . ' ' . $row['LastName'];?></td>
                        <td><?php echo $row['Batch'];?></td>
                        <td>
                            <a href="view-students.php?Batch=<?php echo $row["Batch"];?>" class="btn btn-primary"><i class="bi bi-people"></i> View Student </a>
                        </td>                     
                    </tr>
                <?php
                }
                ?>
                
                </tbody>
            </table>
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