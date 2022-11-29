<?php
    include "validate_teacher.php";
    include "header.php";
    include "home_navbar.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_teacher_id'];

    $subject;

    $sql0 = "SELECT * FROM `teacher` WHERE `TID` = '".$id."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $subject = $row0["subject"];

    $sql1 = "SELECT * FROM `".$subject."` WHERE TID = '".$id."'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="student">
                Welcome, <?php echo $row0["name"]?>&nbsp!
                <br>Subject: <?php echo $row0["subject"]?>
                <table style="width:110%">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Letter Grade</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Use a while loop to make a table row for every DB row-->
                        <?php while( $row = $result1->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $row["SID"]?></td>
                            <td><?php echo $row["{$subject}_letter"]?></td>
                            <td><?php echo $row["{$subject}_perc"]?></td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </h1>
            
        </div>
    </div>

</body>
</html>