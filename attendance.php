<?php
    $con = mysqli_connect("localhost", "root", "", "attendance_system");
    $query = "SELECT * FROM at";
    $result = mysqli_query($con, $query);

    if (isset($_POST['submit'])) {
        if (isset($_POST['rollNumber'])) {
            $rollNumbers = $_POST['rollNumber'];

            foreach ($rollNumbers as $rollNumber) {
                $incrementQuery = "UPDATE at SET Total_Attendance = Total_Attendance + 1 WHERE `Roll_No.` = '$rollNumber'";
                mysqli_query($con, $incrementQuery);
            }

            // JavaScript code to display the message
            echo '<script>
                function showAttendanceUpdatedMessage() {
                    alert("Attendance Updated");
                }
                window.onload = function() {
                    showAttendanceUpdatedMessage();
                };
            </script>';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Attendance System - Attendance</title>
    <link rel="stylesheet" href="attendance.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Attendance System</h1>
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="attendance.php">Attendance</a>
                <a href="history.php">History</a>
            </div>
        </div>
        
        <h2>Attendance</h2>
        
        <form method="post" action="">
            <table>
                <tr>
                    <th>Roll Number</th>
                    <th>Student Name</th>
                    <th>Present</th>
                </tr>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Roll_No.']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><input type="checkbox" name="rollNumber[]" value="<?php echo $row['Roll_No.']; ?>" id="checkbox_<?php echo $row['Roll_No.']; ?>"></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

            <button class="btn-submit" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
