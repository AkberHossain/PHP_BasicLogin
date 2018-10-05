<?php

    session_start();

    if(isset($_POST['login']))
    {

        $name = $_POST['name'];
        $password = $_POST['password'];

        $error = 1 ;

        //validation

        if($error)
        {
            $conn = mysqli_connect("localhost","root","","user");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "select * from user where name = '".$name."' and password = '".$password."'" ;

            $result = mysqli_query($conn , $sql);

            $user = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result))
            {
                $_SESSION['username'] = $name;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $user['id'];
            }

            if(mysqli_num_rows($result))
            {
                header("Location:welcome.php");
            }
            else
            {
                header("Location:login.php");
            }
        }

    }

?>