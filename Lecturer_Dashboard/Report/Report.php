<?php
session_start();

include("../connect.php");

if (isset($_SESSION["Email"])) {
    $LecturerEmail = $_SESSION["Email"];
} else {
    header("Location: ../../Login_button/login.php");
    exit();
}
$lecturer = "SELECT `Lecture-ID` FROM lecturer WHERE Email = ?";

$stmt = $conn->prepare($lecturer);
$stmt->bind_param("s", $LecturerEmail);
$stmt->execute();
$result = $stmt->get_result();

// Check if a record was found
if ($result->num_rows > 0) {
    // Fetch the Lecture-ID
    $row = $result->fetch_assoc();
    $LectureID = $row['Lecture-ID'];
} else {
    echo "No lecturer found with the provided email.";
}
// Fetch distinct CourseNames, Batches, and LecturerNames for the filter options
$courseNames = $conn->query("SELECT DISTINCT c.CourseName, ca.CourseCode FROM CourseAllocation ca
                                JOIN Course c ON c.CourseCode = ca.CourseCode
                                WHERE ca.`Lecture-ID` = '$LectureID'");
$batches = $conn->query("SELECT DISTINCT Batch FROM CourseAllocation WHERE `Lecture-ID`='$LectureID'");

$allocationID = "";
if (isset($_GET['AllocationID'])) {
    $allocationID = $_GET['AllocationID'];
}

$filterCourseName = $filterBatch = "";
$students = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filterCourseName = $_POST['CourseName'];
    $filterBatch = $_POST['Batch'];

    // Query to fetch AllocationID based on filters
    $allocationQuery = "
        SELECT a.AllocationID
        FROM CourseAllocation a
        JOIN Course c ON a.CourseCode = c.CourseCode
        WHERE c.CourseName = ? AND a.Batch = ? AND a.`Lecture-ID` = '$LectureID'";

    $stmt = $conn->prepare($allocationQuery);
    $stmt->bind_param("ss", $filterCourseName, $filterBatch);
    $stmt->execute();
    $stmt->bind_result($allocationID);
    $stmt->fetch();
    $stmt->close();

    // Fetch student attendance details if allocation ID is found
    if ($allocationID) {
        // Table name is dynamic based on allocation ID
        $tableName = "allocation_" . $allocationID;

        // Query to fetch column names dynamically
        $columnQuery = "SHOW COLUMNS FROM $tableName";
        $columnResult = $conn->query($columnQuery);
        $columns = [];
        $scheduleIDs = [];
        
        if ($columnResult->num_rows > 0) {
            while ($column = $columnResult->fetch_assoc()) {
                if (strpos($column['Field'], 'Column_') === 0) {
                    $columns[] = $column['Field'];
                    $scheduleID = str_replace('Column_', '', $column['Field']);
                    $scheduleIDs[$column['Field']] = $scheduleID;
                }
            }
        }

        // Query to fetch schedule details
        $scheduleQuery = "
            SELECT ScheduleID, Date, StartTime, EndTime
            FROM TimeSchedule
            WHERE ScheduleID IN (" . implode(',', array_values($scheduleIDs)) . ")
        ";
        $scheduleResult = $conn->query($scheduleQuery);
        $scheduleDetails = [];
        
        if ($scheduleResult->num_rows > 0) {
            while ($schedule = $scheduleResult->fetch_assoc()) {
                $scheduleDetails[$schedule['ScheduleID']] = $schedule;
            }
        }

        // Query to fetch attendance details
        $selectFields = "s.RegNo, CONCAT(s.FirstName, ' ', s.MidName, ' ', s.LastName) as StudentName";
        foreach ($columns as $column) {
            $selectFields .= ", $column";
        }

        $attendanceQuery = "
            SELECT $selectFields
            FROM $tableName a
            JOIN Student s ON a.RegNo = s.RegNo
            ORDER BY s.RegNo
        ";

        $result = $conn->query($attendanceQuery);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Calculate attendance percentage
                $totalClasses = count($columns);
                $presentClasses = 0;
                foreach ($columns as $column) {
                    if ($row[$column] == 'Present') {
                        $presentClasses++;
                    }
                }
                $row['AttendancePercentage'] = round(($presentClasses / $totalClasses) * 100, 2) . '%';
                $students[] = $row;
            }
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
    .content_A {
            margin-top: 65px; /* Height of navbar */
            margin-left: 100px; /* Width of sidebar */
            width: calc(100% - 175px); /* Adjusts the width to the remaining screen width */
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
            <a class="nav-link " href="../Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Time_Schedule/Time_Schedule.php">Time Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" href="../Report/Report.php">Report</a>
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
<div class="content_A">
      <div class="card head-card p-3 my-2">
        <div class="card-body">
          <h1 class="text-white text-center my-3"><i class="bi bi-clipboard2-check"></i> Attendance Report</h1>
          <br>
          <br>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row mb-4">
              <div class="col-md-4">
                <label for="CourseName" class="form-label"><i class="bi bi-book"></i> Course:</label>
                <select name="CourseName" id="CourseName" class="form-select">
                  <option value="">Select Course </option>                  
                  <?php while($row = $courseNames->fetch_assoc()): ?>
                      <option value="<?php echo $row['CourseName']; ?>">
                        <?php echo $row['CourseName'] . " (" . $row['CourseCode'] . ")"; ?>
                      </option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="col-md-4">
                <label for="Batch" class="form-label"><i class="bi bi-people"></i> Batch:</label>
                <select name="Batch" id="Batch" class="form-select">
                  <option value="">Select the Batch</option>
                  <?php while($row = $batches->fetch_assoc()): ?>
                      <option value="<?php echo $row['Batch']; ?>"><?php echo $row['Batch']; ?></option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="col-md-2 my-2">
                <br>
                <button type="submit" class="btn btn-primary"><i class="bi bi-funnel"></i> Filter</button>
                <a href="Report.php" class="btn btn-danger"><i class="bi bi-x-octagon"></i> Reset</a>
              </div>
            </div>
          </form>

          <?php if (!empty($students)): ?>
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
              <thead class="table-dark text-center">
                <tr>
                  <th>Registration Number</th>
                  <th>Student Name</th>
                  <?php foreach ($columns as $column): ?>
                    <?php $scheduleID = $scheduleIDs[$column]; ?>
                    <th><?php echo $scheduleDetails[$scheduleID]['Date'] . '<br>' . $scheduleDetails[$scheduleID]['StartTime'] . ' - ' . $scheduleDetails[$scheduleID]['EndTime']; ?></th>
                  <?php endforeach; ?>
                  <th>Attendance Percentage</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($students as $student): ?>
                  <tr>
                    <td><?php echo $student['RegNo']; ?></td>
                    <td><?php echo $student['StudentName']; ?></td>
                    <?php foreach ($columns as $column): ?>
                        <td>
                            <?php if ($student[$column] === 'Present'): ?>
                                <span class="badge badge-success"><i class="bi bi-check2-circle"></i> <?php echo $student[$column]; ?></span>
                            <?php elseif ($student[$column] === 'Absent'): ?>
                                <span class="badge badge-danger"><i class="bi bi-x-circle"></i> <?php echo $student[$column]; ?></span>
                            <?php else: ?>
                                <?php echo $student[$column]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                    <td style="position: relative;">
                        <?php echo $student['AttendancePercentage']; ?>                     
                        <form method="post" action="downloadPDF.php" target="_blank" style="display:inline;">
                            <input type="hidden" name="regNo" value="<?php echo $student['RegNo']; ?>">
                            <input type="hidden" name="allocationID" value="<?php echo $allocationID; ?>">
                            <button type="submit" class="btn btn-primary" style="position: absolute; top: 50%; transform: translateY(-50%); right: 20px; padding: 5px 10px; font-size: 12px;">
                                <i class="bi bi-download" style="font-size: 12px;"></i> PDF
                            </button>
                        </form>
                    </td>                   
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
          <div class="alert alert-warning" role="alert">
            No attendance records found for the selected criteria.
          <img src="../../icons/not-found/no-report.png" class="img-take-attendance" alt="Image">
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>


  <!-- Bootstrap JS Bundle with Popper -->
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
