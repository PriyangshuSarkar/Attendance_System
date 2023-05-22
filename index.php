<?php
    $con = mysqli_connect("localhost","root","", "attendance_system");
    $query = "select * from at";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance System</title>
    <link rel="stylesheet" href="index.css">
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
        <p>This is an Attendance System that is created as a project but Group D, whose members are:
        </p>
        <!-- Rest of the content goes here -->
        <tr>
                    <?php

                    while($rew = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <td>•<?php echo $rew['Roll_No.'];?></td>
                        <td><?php echo $rew['Name'];?></td><br>
                    </tr>
                    <?php
                    }
                    ?>
    </div>
</body>
</html>
