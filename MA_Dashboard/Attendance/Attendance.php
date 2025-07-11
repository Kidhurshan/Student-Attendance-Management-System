<?php
session_start();
if (!isset($_SESSION["Email"])){
    header("Location:../../Login_button/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance</title>
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
            <a class="nav-link  " aria-current="page" href="../MA_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Course_List/Course_List.php">Course List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Student_List/Student_List.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Lecture_List/Lecture_List.php">Lecturer List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Attendance/Attendance.php">Attendance</a>
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
<div class="content">
  <div class="card head-card p-3 mt-2">
    <div class="card-body">
      <?php
          if(isset($_SESSION["create"])){
              ?>
              <div class='alert alert-success alert-dismissible fade show my-3'>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong>Info!</strong>
              <?php
              echo $_SESSION["create"];
              unset($_SESSION["create"]);
              ?>
              </div>
              <?php
          }
          ?>
      <div class ="container">
          <h1 class="text-center my-3"><i class="bi bi-clipboard2-check"></i> Attendance Table</h1>
          <br>
          <table class="table table-hover table-bordered text-center">
              <thead class="table-dark text-center">
                  <tr>
                      <th>Course</th>
                      <th>Course Code</th>
                      <th>Lecturer ID</th>
                      <th>Lecturer</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      include("../connect.php");
                      $sql ="SELECT * FROM TimeSchedule t
                              JOIN CourseAllocation ca ON t.AllocationID = ca.AllocationID 
                              JOIN course c ON ca.CourseCode = c.CourseCode
                              JOIN lecturer l ON ca.`Lecture-ID` = l.`Lecture-ID`
                              WHERE t.`MA-Action` = 'Not' 
                              ORDER BY t.Date DESC";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["CourseName"]; ?></td>
                                <td><?php echo $row["CourseCode"]; ?></td>
                                <td><?php echo $row["Lecture-ID"]; ?></td>
                                <td><?php echo $row["LastName"]; ?></td>
                                <td><?php echo $row["Date"]; ?></td>
                                <td><?php echo $row["StartTime"]; ?></td>
                                <td>
                                    <a href="AttendanceTake.php?AllocationID=<?php echo $row['AllocationID']; ?>&ScheduleID=<?php echo $row['ScheduleID']; ?>" class="btn btn-primary btn-sm">
                                    <i class="bi bi-hand-index"></i> Take Attendance
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            
            <?php
            if (mysqli_num_rows($result) == 0) {
                echo '<img src="../../icons/not-found/table-b.png" class="img-take-attendance" alt="Image">';
            }
            ?>
      </div>
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