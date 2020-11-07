<?php

session_start();
$username=$_SESSION["uname"];
$con=mysqli_connect("localhost","root","bose123$","bankdb");

$query="select * from banktable where username='$username'";

$result=mysqli_query($con,$query);

$row=mysqli_fetch_row($result);

$acno=$row[0];

$uname=$row[1];

$balance=$row[3];

$email=$row[4];

$phone=$row[5];

$feedback=$row[6];

echo "Hello  $uname";
echo "<br><br>Your account number is:$row[0]";
echo "<br><br>Your account balance is:$balance";

echo "<br><br>Your email id  is:$email";

echo "<br><br>Your mobilenumber is:$phone";

echo "<br><br>feedback is:$feedback";

?>
<a href="feedback.php">Feedback</a>
<br><br>
<a href="signout.php">SignOut</a>