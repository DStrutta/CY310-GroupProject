<?php
    include "header.php";
    include "teacher_login_navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
</head>



<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Check You Class's Grades.</h1>
            </div>
        </div>

        
        
        <div class="flex-container">
            <div class="flex-item-1">

                <form action="teacher_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="login_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="login_psw" placeholder="Enter your Password" required>
                    </div>

                    <div class="flex-item">
                        <button type="submit" name="teacher" value="teacher">Login as Teacher</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</body>
</html>