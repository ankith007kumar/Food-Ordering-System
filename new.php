<?php
session_start();
$username=$_SESSION['username'];
$con = mysqli_connect("localhost","root","","foodie");
if(!$con)
{
	echo "Connection Failed";
}

$n="SELECT * FROM menu WHERE fqty>0";
$q=mysqli_query($con,$n);
while($r=mysqli_fetch_assoc($q)) 
{
    $d=date('y-m-d');
	$fid=$r['fid'];
	$qty=$r['fqty'];
    $price=$r['fprice'];
    $total=$qty*$price;
    $n1="INSERT INTO `foodie`.`sales`(username,fid,qty,total,date) VALUES ('$username','$fid','$qty','$total','$d')";
mysqli_query($con,$n1);
header('location:orders.php');
}
?>