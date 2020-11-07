<?php

session_start();
$username=$_SESSION["uname"];

if($username=="admin")
	header("location:feedback_admin.php");
else
	header("location:feedback_user.php");


?>