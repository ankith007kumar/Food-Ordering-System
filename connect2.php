<?php
session_start();
$name=$_POST['uname'];
$pass=$_POST['passw'];


$con=mysqli_connect("localhost","root","","foodie");

$chc="SELECT username,password FROM signup WHERE username='$name' AND password='$pass'";

$chc1=mysqli_query($con,$chc);

$row=mysqli_num_rows($chc1);


if($row == 1)
{
	$_SESSION['username']=$name;
	$_SESSION['last_time']=time();
	$_life = time() - $_SESSION['last_time'];
	echo "<script>alert('LOGIN SUCCESSFUL');window.location.href='index.php';</script>";	//Moving to the index page if the if login is sucessfull
}

else
{  
	$msg="EMAIL OR PASSWORD INCORRECT";
	echo "<script type='text/javascript'>alert('$msg');window.location.href='login.php';</script>";  //Generating alert if username or password is incorrect
}

?>