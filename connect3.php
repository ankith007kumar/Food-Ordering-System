<?php
session_start();
if(isset($_POST['order']))
{
	if(isset($_SESSION['username']))
	{

		if($_POST["name1"] >0 || $_POST["name2"] >0 || $_POST["name3"] >0 || $_POST["name4"] >0 || $_POST["name5"] >0 || $_POST["name6"] >0 )
		{
			echo "<script type='text/javascript'>alert('Order Placed Successfully');window.location.href='new.php';</script>";

		}	
		else 
		{
			echo "<script type='text/javascript'>alert('Select Atleast One Item ');window.location.href='menu.php';</script>";
			exit();
		}
	}


	elseif (isset($_SESSION['username'])==NULL)
	{
		echo "<script>alert('TO PLACE ORDER, PLEASE LOGIN OR SIGNUP');window.location.href='index.php';</script>";
	}

$username=$_SESSION['username'];

$qty1 = $_POST['name1'];
$qty2 = $_POST['name2'];
$qty3 = $_POST['name3'];
$qty4 = $_POST['name4'];
$qty5 = $_POST['name5'];
$qty6 = $_POST['name6'];

$con = mysqli_connect("localhost","root","","foodie");

if(!$con)
{
	echo "Connection Failed";
}

$a="UPDATE menu SET fqty='$qty1' WHERE fid='101'";
$m=mysqli_multi_query($con,$a);
$b="UPDATE menu SET fqty='$qty2' WHERE fid='102'";
$n=mysqli_multi_query($con,$b);
$c="UPDATE menu SET fqty='$qty3' WHERE fid='103'";
$o=mysqli_multi_query($con,$c);
$d="UPDATE menu SET fqty='$qty4' WHERE fid='104'";
$p=mysqli_multi_query($con,$d);
$e="UPDATE menu SET fqty='$qty5' WHERE fid='105'";
$q=mysqli_multi_query($con,$e);
$f="UPDATE menu SET fqty='$qty6' WHERE fid='106'";
$r=mysqli_multi_query($con,$f);

}
?>