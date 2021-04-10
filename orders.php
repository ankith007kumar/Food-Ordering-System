<?php
session_start();

if(($_SESSION['username']) != true)
{
	echo "<script type='text/javascript'>alert('LOGIN TO VIEW YOUR ORDERS');window.location.href='login.php';</script>";
	exit();
}

else{
?>
<html>
<style type="text/css">
	body{
	margin-top: 7px;
	background-image: url(bgg3.jpg);
	background-repeat: no-repeat;
	background-size: 100% 130%;
	font-family:cursive;
}
table{
	text-align: center;
	background-color:rgb(255,255,255,0.6);
	border-radius: 10px;
  padding: 20px; 
  box-shadow: 20px 20px 20px black;
}
 
 h1{
 	margin-top: 150px;
 	font-size: 62px;
 	color: gold;
 	font-weight: 800;
	text-shadow:2px 2px black;
 }

th{
	font-size: 25px;
	height: 50px;
	background-color: yellow;
	border-radius: 10px;
}

tr{
	font-size: 22px;
	font-weight: 800;
	box-shadow:5px 5px 5px black;
	border-radius: 10px;

}

</style>

<body>
		<h1 align="center">ORDERS</h1>
<center>
<table  width="60%" border="2g">

	<th style="width: 300px">NAME</th><th>QUANTITY</th><th>TOTAL</th>

<?php

$name=$_SESSION['username'];

$con = mysqli_connect("localhost","root","","foodie");

$q1="SELECT m.fname,s.qty,s.total FROM sales s,menu m WHERE s.username='$name' AND s.fid=m.fid AND s.qty>0;";

$exc=mysqli_query($con,$q1);

while($adm=mysqli_fetch_assoc($exc)){
	$a=$adm['fname'];
	$b=$adm['qty'];
	$c=$adm['total'];

		?>

<tr><td><?php echo $a; ?></td><td><?php echo $b;?></td><td><?php echo "$c Rs";?></td></tr>

<?php

}

?>
</table>
</center>
</body>
</html>
<?php
}
?>
