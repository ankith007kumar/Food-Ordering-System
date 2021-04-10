<?php
session_start();
?>
<html>
<style>

body{
	margin-top: 7px;
	background-image: url(bgg4.jpg);
	background-repeat: no-repeat;
	background-size: 100% 130%;
	font-family:cursive;
}
table{
	text-align: center;
	background-color:#FFF5EE;
	border-radius: 9px;
  padding: 20px; 
  border-color:;
}
 
 h1{
 	margin-top: 100px;
 	font-size: 50px;
 	color: yellow;
	 text-shadow:2px 2px black;
 	font-weight: bolder;
 }

th{
	font-size: 25px;
	height: 50px;
	background-color: #FFA500;
	border-radius: 10px;
}

tr{
	font-size: 22px;
	font-weight: bold;
}

</style>
<body>
	<center>
		<h1 align="center">USERS(CUSTOMERS)</h1>
	<table  width="60%">
		
		<th><font color="red">NAME</th><th><font color="red">USER_ID</th><th><font color="red">PHONE NO</th>


	<?php

$con = mysqli_connect("localhost","root","","foodie");

$q1="SELECT * FROM users;";

$exc=mysqli_query($con,$q1);

while($adm=mysqli_fetch_assoc($exc))
{
	$a=$adm['name'];
	$b=$adm['user_id'];
	$c=$adm['phno'];

?>

<tr><td align="center"><font color="blue"><?php echo $a; ?></td><td align="center"><font color="blue"><?php echo $b;?></td><td align="center"><font color="blue"><?php echo $c;?></td></tr>
<?php
}
?>

</table>
</center>
</body>
</html>