<html>
<style>
body{
	background:linear-gradient(to top right,orange,yellow);
}
	.box{
		font-size: 30px;
		margin-left: 300px;
		margin-right: 300px;
		color: black;
		font-family: cursive;
		text-align:center;
	}

	u{
		color: #1F45FC;
	}

	h1{
		font-family: cursive;
		color: red;
		text-shadow:2px 2px black;
		text-align: center;
		margin-top: 50px;
		font-weight: bolder;
		font-size: 58px;
	}

	a{
		font-family:cursive;
		text-shadow:2px 2px white;
		text-decoration:none;
		color:black;
		font-size:25px;
	}

</style>

<?php

session_start();
if(!($_SESSION['username']))
{
 	echo "<script>alert('PLEASE LOGIN');window.location.href='login.php';</script>";
	exit();
}

$name=$_SESSION['username'];

$con=mysqli_connect("localhost","root","","foodie");
$a=mysqli_query($con,"CALL profile('$name')");
while($res=mysqli_fetch_assoc($a)){
	$q=$res['name'];
	$r=$res['email'];
	$s=$res['username'];
	$t=$res['address'];
	$u=$res['phno']; ?>

	<body bgcolor="snow">
	
	<b><h1>PROFILE</h1>
	<div class="box">
	 NAME&nbsp;:&nbsp;<u><?php echo $q;?></u><br><br>
	EMAIL&nbsp;:&nbsp;<u><?php echo $r;?></u><br><br>
	USERNAME&nbsp;:&nbsp;<u><?php echo $s;?></u><br><br>
	ADDRESS&nbsp;:&nbsp;<u><?php echo $t;?></u><br><br>
	PHNO&nbsp;:&nbsp;<u><?php echo $u;?></u></div><br><br>
</div>
<center><a href="profup.php">UPDATE PROFILE</a></center>
</body>
	<?php
	}
	?>

</html>