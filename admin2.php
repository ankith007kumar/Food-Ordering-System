<?php
session_start();
$con = mysqli_connect("localhost","root","","foodie");
?>

<html>
<head></head>
<style>
	body{
		background-image: url(bgg.jpg);
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}

table{
  background-color:black;
  border-radius: 20px;
  border-collapse: collapse;
  padding: 20px; 
  margin-top:5em;
}

th{
  font-size: 25px;
  font-family: cursive;
  height: 50px;
  background-color: snow;
  border-radius: 12px;
}
td{
  width: 50px;
  height: 90px;
  color: white;
  font-size: 60px;
}
h1{
  margin-top: 40px;
  font-family:cursive;
  font-size: 70px;
  color:gold;
  font-weight: bold;
  margin-left:8em;
  text-shadow:3px 3px black;
}

img{
  width:100px;
  height:100px;
  background-color:rgb(255,165,0,0.7);
  border-radius:50px;
  padding:2em;
  margin-right:8em;
}

div{
  margin-left:32em;
  padding:2em;
  display:inline;
  color:black;
  text-shadow:2px 2px white;
}
 
p{
  display:inline;
  font-family:cursive;
  font-weight:800;
  font-size:30px;
  margin-right:6.8em;
}
</style>
<body>
  <h1>DASHBOARD</h1>
<div>
<a href="users.php"><img src="users.png"></a>
<a href="sales.php"><img src="sales.png"></a><br>
</div>
<div>
<p>&emsp;USERS</p><p>SALES</p>
</div><?php
$a=mysqli_query($con,"CALL sales_count()");
while($r=mysqli_fetch_assoc($a)){
  $q=$r['c']; ?>
<table width="20%" align="center"><tr><th>Total Sales</th></tr>
   <tr><td align="center"><font color="white"><?php echo $q;?></td></tr>
   </table>
   <?php
} 
?>	</body>
	</html>