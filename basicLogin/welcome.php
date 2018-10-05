<?php

    session_start();

    if(isset($_SESSION['username']))
    {
        echo "Welcome " . $_SESSION['username'];
        echo "<br><a href='change_password.php' > Change Password </a><br>";
        echo "<a href='logout.php' > Log Out </a>";
    }
    else
    {
        header("Location:login.php");
    }
?>