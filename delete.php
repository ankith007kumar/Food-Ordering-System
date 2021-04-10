<?php
session_start();
$con=mysqli_connect("localhost","root","","foodie");
$name=$_SESSION['username'];

	 mysqli_query($con,"CALL del_acc('$name')");
	 	 mysqli_query($con,"CALL del_users('$name')");


	 session_destroy();
	echo "<script>alert('ACCOUNT DELETED SUCCESSFULLY');window.location.href='index.php';</script>";

?>