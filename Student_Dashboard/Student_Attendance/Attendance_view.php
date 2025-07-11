<?php
// Ensure session is started
session_start();
if (!isset($_SESSION["Email"])) {
    header("Location: ../../Login_button/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js for pie chart -->
    <style>
        .small-chart {
            width: 475px; /* Adjust the width as needed */
            height: 475px; /* Adjust the height as needed */
            margin: 0 auto; /* Center the chart */
        }
        .content_A {
            margin-top: 65px; /* Height of navbar */
            margin-left: 100px; /* Width of sidebar */
            width: calc(100% - 200px); /* Adjusts the width to the remaining screen width */
        }
        .img-take-attendance {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
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
                        <a class="nav-link " aria-current="page" href="../Student_index.php">Home</a>
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
    <div class="content_A">
        <div class="card head-card glass-effect p-3">
            <div class="card-body">
                <div class="container text-center">
                    <h1 class="text-white text-center">Courses</h1>
                    <br>
                    <?php
                    if (isset($_SESSION["Email"])) {
                        $email = $_SESSION["Email"];
                        include("../connect.php"); // Include your database connection file

                        $sql = "SELECT DISTINCT Semester FROM course c
                        JOIN courseallocation ca ON ca.CourseCode = c.CourseCode
                        JOIN student s ON s.Batch = ca.Batch
                        WHERE s.Email = '$email'
                        ORDER BY Semester ASC";
                        $result = mysqli_query($conn, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row_semester = mysqli_fetch_assoc($result)) {
                    ?>
                                <a href="Attendance_view.php?Semester=<?= $row_semester['Semester']; ?>" class="btn btn-danger btn-lg my-2">Semester <?= $row_semester['Semester']; ?></a>
                    <?php
                            }
                        }
                    }
                    ?>
                    <br>
                    <br>
                    <?php
                    if (isset($_GET['Semester']) && isset($_GET['Code']) && isset($_GET['ID']) && isset($_GET['regno']) && isset($_GET['name'])) {
                        $semester = $_GET['Semester'];
                        $courseCode = $_GET['Code'];
                        $allocationID = $_GET['ID'];
                        $regno = $_GET['regno'];
                        $coursename = $_GET['name'];
                        include("../connect.php");
                        $query = "SELECT DISTINCT c.*, ca.*,s.* FROM course c
                                    JOIN courseallocation ca ON ca.CourseCode = c.CourseCode
                                    JOIN student s ON s.Batch = ca.Batch
                                    WHERE s.Email = '$email' AND c.Semester = '$semester'";
                        $result_course = mysqli_query($conn, $query);
                        while ($row_course = mysqli_fetch_assoc($result_course)) {
                    ?>
                            <a href="Attendance_view.php?Semester=<?= $semester; ?>&Code=<?= $row_course['CourseCode']; ?>&ID=<?= $row_course['AllocationID']; ?>&regno=<?= $row_course['RegNo']; ?>&name=<?= $row_course['CourseName']; ?>" class="btn btn-primary btn-lg my-2"><?= $row_course['CourseName']; ?> <?= $row_course['CourseCode']; ?></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
            
        </div>

        <div class="card head-card glass-effect p-3">
            <div class="card-body">
                <h2 class="text-white text-center my-2">Attendance Report</h2>
                <br>
                <table class="table table-bordered my-3 table-hover text-center">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Date [Start Time - End Time]</th>
                            <th>Attendance Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../connect.php");
                        $tableName = "allocation_" . $allocationID;
                        $sql_id = "SELECT ScheduleID, Date, StartTime, EndTime FROM TimeSchedule t WHERE AllocationID = $allocationID ORDER BY t.Date DESC";
                        $result_id = mysqli_query($conn, $sql_id);
                        $totalClasses = mysqli_num_rows($result_id); // Total number of classes
                        $attendedClasses = 0; // Counter for attended classes
                        $absentClasses = 0; // Counter for absent classes
                        $pendingClasses = 0; // Counter for pending classes

                        if ($result_id && $totalClasses > 0) {
                            while ($row_id = mysqli_fetch_assoc($result_id)) {
                                $scheduleID = $row_id["ScheduleID"];
                                $sql_check_ma_action = "SELECT `MA-Action` FROM timeschedule 
                                                        WHERE ScheduleID = $scheduleID 
                                                        AND `MA-Action` = 'Not'";
                                $result_check_ma_action = mysqli_query($conn, $sql_check_ma_action);
                                if (mysqli_num_rows($result_check_ma_action) > 0) {
                                    $pendingClasses++; // Increment the counter if the class is pending
                        ?>
                                    <tr>
                                        <td><?php echo $row_id["Date"] . ' [' . $row_id["StartTime"] . ' - ' . $row_id["EndTime"] . '] '; ?></td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <?php
                                } else {
                                    $columnName = "Column_" . $row_id["ScheduleID"];
                                    $sql_attent = "SELECT $columnName FROM $tableName WHERE RegNo = '$regno'";
                                    $result_attent = mysqli_query($conn, $sql_attent);
                                    while ($row_attent = mysqli_fetch_assoc($result_attent)) {
                                        if ($row_attent[$columnName] == 'Present') {
                                            $attendedClasses++; // Increment the counter if the student was present
                                            $badgeClass = 'badge-success';
                                        } else {
                                            $absentClasses++; // Increment the counter if the student was absent
                                            $badgeClass = 'badge-danger';
                                        }
                                    ?>
                                        <tr>
                                            <td><?php echo $row_id["Date"] . ' [' . $row_id["StartTime"] . ' - ' . $row_id["EndTime"] . '] '; ?></td>
                                            <td><span class="badge <?php echo $badgeClass; ?>"><?php echo $row_attent[$columnName]; ?></span></td>
                                        </tr>
                        <?php
                                    }
                                }
                            }
                        } else {
                            echo '<tr><td colspan="2">No records found.</td></tr>';
                            echo '</tbody> </table>';
                            echo '<img src="../../icons/not-found/table.png" class="img-take-attendance" alt="Image">';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
            <?php
            if ($result_id && $totalClasses > 0) {
            ?>
            <div class="card head-card glass-effect p-3">
                <div class="card-body">
                    <h1 class="text-white text-center my-2">Chart </h1>
                    <br>
                    <div class="small-chart">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="downloadPDF.php?Semester=<?= $semester; ?>&Code=<?= $courseCode; ?>&ID=<?= $allocationID; ?>&regno=<?= $regno; ?>&name=<?= $coursename; ?>" class="btn btn-danger">Download PDF</a>
                    </div>
                </div>
            </div>
            <?php
                }  
            ?>  

        <?php
                } elseif (isset($_GET['Semester'])) {
                    $semester = $_GET['Semester'];
                    include("../connect.php");
                    $query = "SELECT DISTINCT c.*, ca.*,s.* FROM course c
                                JOIN courseallocation ca ON ca.CourseCode = c.CourseCode
                                JOIN student s ON s.Batch = ca.Batch
                                WHERE s.Email = '$email' AND c.Semester = '$semester'";
                    $result_course = mysqli_query($conn, $query);
                    while ($row_course = mysqli_fetch_assoc($result_course)) {
        ?>
                        <a href="Attendance_view.php?Semester=<?= $semester; ?>&Code=<?= $row_course['CourseCode']; ?>&ID=<?= $row_course['AllocationID']; ?>&regno=<?= $row_course['RegNo']; ?>&name=<?= $row_course['CourseName']; ?>" class="btn btn-primary btn-lg"><?= $row_course['CourseName']; ?> <?= $row_course['CourseCode']; ?></a>
                        
        <?php
                    }
                }
        ?>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        // Get the total and attended classes counts from PHP
        var totalClasses = <?php echo $totalClasses; ?>;
        var attendedClasses = <?php echo $attendedClasses; ?>;
        var absentClasses = <?php echo $absentClasses; ?>;
        var pendingClasses = <?php echo $pendingClasses; ?>;

        // Calculate the percentage of attended classes
        var attendancePercentage = (attendedClasses / totalClasses) * 100;
        var absentPercentage = (absentClasses / totalClasses) * 100;
        var pendingPercentage = (pendingClasses / totalClasses) * 100;

        // Pie Chart
        var ctxP = document.getElementById("myPieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Attended Classes", "Absent Classes", "Pending Classes"],
                datasets: [{
                    data: [attendancePercentage, absentPercentage, pendingPercentage],
                    backgroundColor: ['rgba(80, 255, 80, 0.5)', 'rgba(249, 56, 94, 0.5)', 'rgba(254, 235, 90, 0.5)'],
                    borderColor: ['rgb(28, 211, 28)', 'rgb(207, 49, 49)', 'rgb(213, 213, 51)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                    backgroundColor: ['rgba(255, 255, 255)'] // Set legend position to right
                },
                title: {
                    display: true,
                    text: 'Attendance Percentage'
                },
                plugins: {
                    datalabels: {
                        align: 'end', // Set the labels to align to the end (right) of the data point
                        formatter: (value, ctx) => {
                            let label = ctx.chart.data.labels[ctx.dataIndex];
                            return label + '\n' + value.toFixed(2) + '%';
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>
