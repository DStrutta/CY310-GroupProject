<?php
    include "connect.php";
    
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    $uname = mysqli_real_escape_string($conn, $_POST["login_uname"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["login_psw"]);

    $sql0 =  "SELECT * FROM `teacher_login` WHERE `t_username`='".$uname."' AND 't_password= '".$pwd."'";
    $result = $conn->query($sql0);
    $row = $result->fetch_assoc();

    if (($result->num_rows) > 0) {
        $_SESSION['loggedIn_teacher_id'] = $row["t_username"];
        $_SESSION['isTeacherValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:teacher_home.php");
    }
    else {
        session_destroy();
        die(header("location:teacher_login.php?loginFailed=true"));
    }
?>