<?php
    $con = mysqli_connect("localhost","root","", "attendance_system");
    $query = "select * from at";
    $result = mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Attendance System - History</title>
    <link rel="stylesheet" href="history.css">
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
        
        <h2>Attendance History</h2>
        
        <table>
            <tr>
                <th>Roll Number</th>
                <th>Student Name</th>
                <th>Days Present</th>
            </tr>
            <tbody>
                <tr>
                    <?php

                    while($rew = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <td><?php echo $rew['Roll_No.'];?></td>
                        <td><?php echo $rew['Name'];?></td>
                        <td><?php echo $rew['Total_Attendance'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
            <!-- Add more rows for additional students' attendance history -->
        </table>
    </div>
</body>
</html>