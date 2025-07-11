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
            <a class="nav-link  active" href="../Time_Schedule/Time_Schedule.php">Time Schedule</a>
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
                if(isset($_SESSION["update"])){
                    ?>
                    <div class='alert alert-success alert-dismissible fade show my-3 mx-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>
                    <?php
                    echo $_SESSION["update"];
                    unset($_SESSION["update"]);
                    ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if(isset($_SESSION["create"])){
                    ?>
                    <div class='alert alert-success alert-dismissible fade show my-3 mx-3'>
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
            <?php
                if(isset($_SESSION["error"])){
                    ?>
                    <div class='alert alert-danger alert-dismissible fade show my-3 mx-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>
                    <?php
                    echo $_SESSION["error"];
                    unset($_SESSION["error"]);
                    ?>
                    </div>
                    <?php
                }
                ?>
            <?php
                if(isset($_SESSION["delete"])){
                    ?>
                    <div class='alert alert-success alert-dismissible fade show my-3 mx-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>
                    <?php
                    echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);
                    ?>
                    </div>
                <?php
                }
                ?>
                <h1 class="text-center text-white my-2"><i class="bi bi-card-checklist"></i> Time Schedule</h1>

            <?php
            include("../connect.php");

            $email = $_SESSION["Email"];

            $sqlLecture = "SELECT `Lecture-ID` FROM lecturer WHERE Email = ?";
            $stmtLecture = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmtLecture, $sqlLecture)) {
                mysqli_stmt_bind_param($stmtLecture, "s", $email);
                mysqli_stmt_execute($stmtLecture);
                mysqli_stmt_bind_result($stmtLecture, $lectureID);
                mysqli_stmt_fetch($stmtLecture);
                mysqli_stmt_close($stmtLecture);
            }

            $sqlCourseCode = "SELECT DISTINCT CourseCode FROM courseallocation WHERE `Lecture-ID` = ?";
            $stmtCourseCode = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmtCourseCode, $sqlCourseCode)) {
                mysqli_stmt_bind_param($stmtCourseCode, "s", $lectureID); 
                mysqli_stmt_execute($stmtCourseCode);
                mysqli_stmt_bind_result($stmtCourseCode, $courseCode);
                
                $coursecodeOptions = '';
                while (mysqli_stmt_fetch($stmtCourseCode)) {
                    $selected = (isset($_GET['CourseCode']) && $courseCode == $_GET['CourseCode']) ? 'selected' : '';
                    $coursecodeOptions .= '<option value="' . $courseCode . '" ' . $selected . '>' . $courseCode . '</option>';
                }

                mysqli_stmt_close($stmtCourseCode);
            }

            $sqlBatch = "SELECT DISTINCT Batch FROM courseallocation WHERE `Lecture-ID` = ?";
            $stmtBatch = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmtBatch, $sqlBatch)) {
                mysqli_stmt_bind_param($stmtBatch, "s", $lectureID); 
                mysqli_stmt_execute($stmtBatch);
                mysqli_stmt_bind_result($stmtBatch, $batch);
                
                $batchOptions = '';
                while (mysqli_stmt_fetch($stmtBatch)) {
                    $selected = (isset($_GET['Batch']) && $batch == $_GET['Batch']) ? 'selected' : '';
                    $batchOptions .= '<option value="' . $batch . '" ' . $selected . '>' . $batch . '</option>';
                }

                mysqli_stmt_close($stmtBatch);
            }

            $sqlAcademicYear = "SELECT DISTINCT AcademicYear FROM courseallocation WHERE `Lecture-ID` = ?";
            $stmtAcademicYear = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmtAcademicYear, $sqlAcademicYear)) {
                mysqli_stmt_bind_param($stmtAcademicYear, "s", $lectureID); 
                mysqli_stmt_execute($stmtAcademicYear);
                mysqli_stmt_bind_result($stmtAcademicYear, $academicYear);
                
                $academicYearOptions = '';
                while (mysqli_stmt_fetch($stmtAcademicYear)) {
                    $selected = (isset($_GET['AcademicYear']) && $academicYear == $_GET['AcademicYear']) ? 'selected' : '';
                    $academicYearOptions .= '<option value="' . $academicYear . '" ' . $selected . '>' . $academicYear . '</option>';
                }

                mysqli_stmt_close($stmtAcademicYear);
            }
            ?>
            <br>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <select name="CourseCode" required class="form-select">
                                            <option value="">Select Course Code</option>
                                            <?= $coursecodeOptions ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="Batch" required class="form-select">
                                            <option value="">Select Batch</option>
                                            <?= $batchOptions ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select name="AcademicYear" required class="form-select">
                                            <option value="">Select Academic Year</option>
                                            <?= $academicYearOptions ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-funnel"></i> Filter</button>
                                        <a href="Time_Schedule.php" class="btn btn-danger"><i class="bi bi-x-octagon-fill"></i> Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


                    <?php
                        include("../connect.php");

                        if ($_SERVER["REQUEST_METHOD"] == "GET" &&
                            isset($_GET['CourseCode']) && !empty($_GET['CourseCode']) &&
                            isset($_GET['Batch']) && !empty($_GET['Batch']) &&
                            isset($_GET['AcademicYear']) && !empty($_GET['AcademicYear'])) {

                            $AcademicYear = validate($_GET['AcademicYear']); // Assuming validate() is a function to sanitize input
                            $CourseCode = validate($_GET['CourseCode']);
                            $Batch = validate($_GET['Batch']);

                            // Get the lecturer's email address from the session variable
                            $email = $_SESSION["Email"];

                            // Query to fetch Lecture-ID based on Email
                            $sqlLecture = "SELECT `Lecture-ID` FROM lecturer WHERE Email = ?";
                            $stmtLecture = mysqli_stmt_init($conn);
                            if (mysqli_stmt_prepare($stmtLecture, $sqlLecture)) {
                                mysqli_stmt_bind_param($stmtLecture, "s", $email);
                                mysqli_stmt_execute($stmtLecture);
                                mysqli_stmt_bind_result($stmtLecture, $lectureID);
                                mysqli_stmt_fetch($stmtLecture);
                                mysqli_stmt_close($stmtLecture);
                            }
                            
                            $sql = "SELECT c.AllocationID
                                    FROM CourseAllocation c 
                                    WHERE c.AcademicYear = ? AND c.CourseCode = ? AND c.Batch = ? AND c.`Lecture-ID` = ?";
                            $stmt = mysqli_stmt_init($conn);
                            if (mysqli_stmt_prepare($stmt, $sql)) {
                                mysqli_stmt_bind_param($stmt, "isss", $AcademicYear, $CourseCode, $Batch, $lectureID);
                                mysqli_stmt_execute($stmt);
                                mysqli_stmt_bind_result($stmt, $AllocationID);
                                mysqli_stmt_fetch($stmt);
                                mysqli_stmt_close($stmt);

                                if (empty($AllocationID)) {
                                    echo '<a href="create.php" class="btn btn-primary my-3"><i class="bi bi-plus-circle"></i> Add Any Time Schedule</a>';
                                } else {
                                    echo '<a href="create_selected.php?AllocationID='. $AllocationID .'" class="btn btn-success my-3"><i class="bi bi-plus-circle"></i> Add Selected Option Time Schedule</a>';
                                }
                            }

                            $sql = "SELECT *
                                    FROM TimeSchedule t 
                                    JOIN CourseAllocation c ON t.AllocationID = c.AllocationID
                                    WHERE c.AcademicYear = ? AND c.CourseCode = ? AND c.Batch = ? AND c.`Lecture-ID` = ?";
                            $stmt = mysqli_stmt_init($conn);
                            if (mysqli_stmt_prepare($stmt, $sql)) {
                                mysqli_stmt_bind_param($stmt, "isss", $AcademicYear, $CourseCode, $Batch, $lectureID);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                                // Fetch data or process results here
                            } else {
                                die("Error in preparing SQL statement: " . mysqli_error($conn));
                            }
                        } else {
                            // Default filter if parameters are not provided
                            $sql = "SELECT *
                                    FROM TimeSchedule t 
                                    JOIN CourseAllocation c ON t.AllocationID = c.AllocationID
                                    WHERE c.`Lecture-ID` = ?";
                            $stmt = mysqli_stmt_init($conn);
                            if (mysqli_stmt_prepare($stmt, $sql)) {
                                mysqli_stmt_bind_param($stmt, "s", $lectureID);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);

                                // Fetch data or process results here
                            } else {
                                die("Error in preparing SQL statement: " . mysqli_error($conn));
                            }
                            echo '<a href="create.php" class="btn btn-primary my-3"><i class="bi bi-plus-circle"></i> Add Any Time Schedule</a>';
                        }

                        // Function to sanitize input
                        function validate($data) {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }
                        ?>

                <br>
                <table class="table table-bordered my-3 table-hover text-center">
                    <thead class="table-dark text-center">
                    <tr>
                        <th>Date</th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Chapter</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>                          
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['StartTime'];?></td>
                            <td><?php echo $row['EndTime'];?></td>
                            <td><?php echo $row['Chapter'];?></td>
                            <td>
                                <a href="edit.php?ScheduleID=<?php echo $row["ScheduleID"];?>" class="btn btn-primary"><i class="bi bi-pencil"></i> edit</a>
                                <a href="delete.php?ScheduleID=<?php echo $row["ScheduleID"];?>" class="btn btn-danger"><i class="bi bi-trash"></i> delete</a>
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