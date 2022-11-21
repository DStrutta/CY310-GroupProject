<?php
    include "validate_teacher.php";
    include "header.php";
    include "home_navbar.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_teacher_id'];

    $subject;

    $sql0 = "SELECT `subject` FROM `teachers` WHERE `TID` = '".$id."'";
    $result0 = $conn->query($sql0);
    $row0 = result0->fetch_assoc();

    $subject = row0["subject"];

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
                <br>Math: <?php echo $row0["math_letter"]?> - <?php echo $row0["math_perc"] ?>
                <br>English: <?php echo $row0["english_letter"]?> - <?php echo $row0["english_perc"] ?>
                <br>Science: <?php echo $row0["science_letter"]?> - <?php echo $row0["science_perc"] ?>
                <br>History: <?php echo $row0["history_letter"]?> - <?php echo $row0["history_perc"] ?>
            </h1>
            
        </div>
    </div>

</body>
</html>