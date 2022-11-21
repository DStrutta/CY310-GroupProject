<?php
    include "validate_student.php";
    include "header.php";
    include "student_navbar.php";
    include "student_sidebar.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_student_id'];


    $session_id = strval($id);

    $sql0 = "SELECT * FROM `grades` WHERE `SID`= '".$id."'";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();
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
                Welcome, <?php echo $row0["Name"]?>&nbsp!
                <br>Grades: 
                <br>Math: <?php echo $row0["math_letter"]?> - <?php echo $row0["math_perc"] ?>
                <br>English: <?php echo $row0["english_letter"]?> - <?php echo $row0["english_perc"] ?>
                <br>Science: <?php echo $row0["science_letter"]?> - <?php echo $row0["science_perc"] ?>
                <br>History: <?php echo $row0["history_letter"]?> - <?php echo $row0["history_perc"] ?>
            </h1>
            
        </div>
    </div>

</body>
</html>