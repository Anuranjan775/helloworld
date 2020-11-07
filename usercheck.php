<?php

$username=$_POST["uname"];

$password=$_POST["pwd"];

//connect dbms use bankdb select table

$con = mysqli_connect("localhost","root","bose123$","bankdb");

$query="select * from banktable where username='$username' and password='$password'";

$result=mysqli_query($con,$query);

$num=mysqli_num_rows($result);

if($num>0)
{
	//echo "Hello $username You are logged in";
	session_start();
	$_SESSION["uname"]=$username;
	header("location:profile.php");
}
	
else
	echo "You are not $username"

?>