<?php
session_start();
?>
<html>
<style>
	body{
		background-image: url(bgg5.jpg);
		background-repeat: no-repeat;
		background-size: 100% 100%;
		font-family:cursive;
	}

	table{
	text-align: center;
	background-color:white;
	border-radius: 9px;
    padding: 20px; 
    border-color:;
}
 

	h1{
		font-size: 62px;
		margin-top: 150px;
		color: white;
		text-shadow:2px 2px black;
		font-weight: bolder;
	}

	th{
	font-size: 25px;
	height: 50px;
	background-color: #FFD700;
	border-radius: 10px;
	}

	tr{
		font-size: 20px;
		background-color: #FAFAD2;
	}

</style>

	</style>
<body>
	<center>
		<h1 align="center">SALES</h1>
	<table  width="60%" border="1g">
		
			<th><font color="#0000FF">USERNAME</th><th><font color="#0000FF">FOOD_ID</th><th><font color="#0000FF">QUANTITY</th><th><font color="#0000FF">TOTAL(Rs)</th>
			<th><font color="#0000FF">DATE</th>


<?php

$con = mysqli_connect("localhost","root","","foodie");

$q1="SELECT * FROM sales";

$exc=mysqli_query($con,$q1);

while($adm=mysqli_fetch_assoc($exc))
{
	$a=$adm['username'];
	$b=$adm['fid'];
	$c=$adm['qty'];
	$d=$adm['total'];
	$e=$adm['date'];
	?>

<tr><td align="center"><font color="black"><?php echo $a; ?></td><td align="center"><font color="black"><?php echo $b;?></td><td align="center"><font color="black"><?php echo $c;?></td><td align="center"><font color="black"><?php echo $d;?></td>
</td><td align="center"><font color="black"><?php echo $e; ?></td></tr>


<?php
}
?>


</font>
</table>
</center>
</body>
</html>