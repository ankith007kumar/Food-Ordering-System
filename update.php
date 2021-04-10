<?php
session_start();
$con=mysqli_connect("localhost","root","","foodie");

$uname=$_SESSION['username'];

$a=$_POST['email'];
$b=$_POST['addr'];
$c=$_POST['phno'];

$s="UPDATE signup SET email='$a',address='$b',phno='$c' WHERE username='$uname'";
mysqli_query($con,$s);

$r="UPDATE users SET address='$b',phno='$c' WHERE user_id='$uname'";
mysqli_query($con,$r);

echo "<script>alert('UPDATE SUCCESSFUL');window.location.href='index.php';</script>";
?>