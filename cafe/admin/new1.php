<?php
	require('db.php');
	include("auth_session.php");


$username = stripslashes($_REQUEST['a']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['b']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['c']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        header("location:login.php");
?>