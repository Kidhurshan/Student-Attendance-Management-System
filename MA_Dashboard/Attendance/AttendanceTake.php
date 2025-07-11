<?php
session_start();
if (!isset($_SESSION["Email"])){
    header("Location:../../Login_button/login.php");
}

if (isset($_GET['AllocationID']) && isset($_GET['ScheduleID']) && !empty($_GET['AllocationID']) && !empty($_GET['ScheduleID'])) {

    $allocationID = trim($_GET['AllocationID']);
    $scheduleID = trim($_GET['ScheduleID']);
} else {
    echo "AllocationID or ScheduleID not provided in the URL or are empty.";
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance taken</title>
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
    .glass-effect {
        background: rgba(0, 0, 0, 0.32); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        margin-top:20px;
        border-radius: 20px;
        border: 1px solid rgba(0, 0, 0, 0.53);
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
    <div class="card head-card p-3 my-2">
        <div class="card-body">
            <h1 class="text-white text-center my-3"><i class="bi bi-clipboard2-check"></i> Take Attendance</h1>
            <br>    
            <?php
            include("../connect.php");
            
            $query = "SELECT ca.AcademicYear, c.Semester, c.CourseCode, c.CourseName, t.Date, t.StartTime, t.EndTime, ca.`Lecture-ID`, l.LastName
                    FROM timeschedule t
                    JOIN courseAllocation ca ON t.AllocationID = ca.AllocationID
                    JOIN course c ON c.CourseCode = ca.CourseCode
                    JOIN lecturer l ON l.`Lecture-ID` = ca.`Lecture-ID`
                    WHERE ca.AllocationID = $allocationID AND t.ScheduleID = $scheduleID";
            
            $result = mysqli_query($conn, $query);
            $row_detail = mysqli_fetch_array($result);
            ?>
            
            <div class=" card head-card glass-effect">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-calendar4-event"></i> AcademicYear</label>
                                        <select name="AcademicYear" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["AcademicYear"];?>"><?php echo $row_detail["AcademicYear"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-journals"></i> Semester</label>
                                        <select name="Semester" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["Semester"];?>"><?php echo $row_detail["Semester"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-book"></i> Course</label>
                                        <select name="CourseName" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["CourseName"];?>"><?php echo $row_detail["CourseName"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-bookmark-star"></i> Course Code</label>
                                        <select name="CourseCode" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["CourseCode"];?>"><?php echo $row_detail["CourseCode"];?></option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-mortarboard"></i> Lecturer</label>
                                        <select name="LastName" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["LastName"];?>"><?php echo $row_detail["LastName"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-bookmarks"></i> Lecturer ID</label>
                                        <select name="Lecture-ID" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["Lecture-ID"];?>"><?php echo $row_detail["Lecture-ID"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-calendar-check"></i> Date</label>
                                        <select name="Date" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["Date"];?>"><?php echo $row_detail["Date"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label text-center fw-bold"><i class="bi bi-alarm"></i> Start Time</label>
                                        <select name="StartTime" required class="form-select form-select-sm fw-bold">
                                            <option value="<?php echo $row_detail["StartTime"];?>"><?php echo $row_detail["StartTime"];?></option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <form action="process.php" method="POST" id="attendanceForm">
                <input type="hidden" name="AllocationID" value="<?php echo $allocationID; ?>">
                <input type="hidden" name="ScheduleID" value="<?php echo $scheduleID; ?>">
            
                <table class="table table-hover table-bordered text-center">
                    <thead class="table-dark ">
                        <tr>
                            <th class="text-center my-5">Name</th>
                            <th class="text-center my-5">Registration No</th>
                            <th>Attendance<hr>
                            <div class="btn-selection" role="group" aria-label="All Attendance">
                                <button type="button" class="btn btn_Present mx-3" id="allPresentBtn">All Present</button>
                                <button type="button" class="btn btn_Absent mx-3" id="allAbsentBtn">All Absent</button>
                            </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../connect.php");
                        $sql ="SELECT s.* FROM student s, courseallocation ca 
                                WHERE s.Batch = ca.Batch AND ca.AllocationID = $allocationID";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["FirstName"] . ' ' . $row["MidName"] . ' ' . $row["LastName"]; ?></td>
                                <td><?php echo $row["RegNo"];?></td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input student-attendance" type="radio" id="present_<?php echo $row['RegNo'];?>" name="attendance[<?php echo $row['RegNo'];?>]" value="Present">
                                        <label class="form-check-label mx-3" for="present_<?php echo $row['RegNo'];?>">Present</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input student-attendance" type="radio" id="absent_<?php echo $row['RegNo'];?>" name="attendance[<?php echo $row['RegNo'];?>]" value="Absent">
                                        <label class="form-check-label mx-3" for="absent_<?php echo $row['RegNo'];?>">Absent</label>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                
                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>

            <script>
                // JavaScript to handle "All Present" and "All Absent" buttons
                document.getElementById('allPresentBtn').addEventListener('click', function() {
                    var radioButtons = document.querySelectorAll('.student-attendance[value="Present"]');
                    radioButtons.forEach(function(button) {
                        button.checked = true;
                    });
                });

                document.getElementById('allAbsentBtn').addEventListener('click', function() {
                    var radioButtons = document.querySelectorAll('.student-attendance[value="Absent"]');
                    radioButtons.forEach(function(button) {
                        button.checked = true;
                    });
                });
            </script>
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