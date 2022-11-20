<?php
    include "validate_student.php";
    include "header.php";
    include "student_navbar.php";
    include "student_sidebar.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_student_id'];

    $sql0 = "SELECT * FROM grades WHERE sid=".$id;
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
                Welcome, <?php echo $row0["Name"] ?>&nbsp!
                <br>math grade: <?php echo $row0["math_letter"]; ?>
            </h1>
            
        </div>
    </div>

</body>
</html>