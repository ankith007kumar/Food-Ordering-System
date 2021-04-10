<?php
session_start();

$Id=$_POST['id'];
$Password=$_POST['passw'];


$con=mysqli_connect("localhost","root","","foodie");

$chc="SELECT id,password FROM admin WHERE id='$Id' AND password='$Password'";

$chc1=mysqli_query($con,$chc);

$row=mysqli_num_rows($chc1);


if($row == 1)
{
	$_SESSION['admin_id']=$Id;
	header('location:admin2.php');									//Moving to the orders if admin is verified
}

else
{  
	$msg="USERNAME OR PASSWORD INCORRECT";
	echo "<script type='text/javascript'>alert('$msg');window.location.href='admin.php';</script>";  //Generating alert if username or password is incorrect
}

?>