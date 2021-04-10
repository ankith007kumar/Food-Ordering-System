<?php
$Name = $_POST['name']; //storing the input data from signup.php to some variables
$Email = $_POST['email'];
$Username = $_POST['uname'];
$Pass = $_POST['passw'];
$Addr = $_POST['addr'];
$Phno = $_POST['phno'];


$con=mysqli_connect("localhost","root","","foodie");    //connecting to the database
if(!$con)												//checking whether connection is successful or failed
{
	echo 'connection failed';
}


$chc="SELECT * FROM signup WHERE username='$Username'";	 
$chk="SELECT * FROM signup WHERE phno='$Phno'";   //checking whether a username already exists  

$n= mysqli_query($con,$chc);
$m= mysqli_query($con,$chk);						//executing the above query 

$row=mysqli_num_rows($n);
$row2=mysqli_num_rows($m);									//taking the no of rows

if($row>0)													//checking whether row is > 0
{
	$msg1="USERNAME ALREADY EXISTS";
	 echo "<script type='text/javascript'>alert('$msg1');window.location.href='signup.php';</script>";
}

if($row2>0)													//checking whether row is > 0
{
	$msg1="PHONE NUMBER ALREADY EXISTS";
	 echo "<script type='text/javascript'>alert('$msg1');window.location.href='signup.php';</script>";
}


else
{
$sql="INSERT INTO `foodie`.`signup`(name,email,username,password,address,phno) VALUES ('$Name','$Email','$Username','$Pass','$Addr','$Phno')";
$New=mysqli_query($con,$sql);
$msg1="USER REGISTERED SUCCESSFULLY";
	 echo "<script type='text/javascript'>alert('$msg1');window.location.href='login.php';</script>";


}
?>