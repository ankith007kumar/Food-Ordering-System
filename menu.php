
<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<style type="text/css">
body{
	margin:0;padding:0;
	background-image: url(menu2.jpg);
	background-repeat: no-repeat;
	background-size: 100% 130%;
	font-family:cursive;
}
table{
	border:1px solid black;
	background-color:rgb(255,255,255,0.7);
	border-radius: 50px;
  padding: 20px; 
  box-shadow:20px 20px 20px white;

}

button {
	border-radius: 20px;
  background-color: yellow;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

 
 h1{
 	font-size: 62px;
 	color: yellow;
 	font-weight:800;
	 text-shadow:4px 4px black;
	margin-top:0.5em;
	box-shadow:10px 10px 10px 10px black;
 }

th{
	font-size: 28px;
	height: 60px;
	background-color: #FF4500;
	border-radius: 18px;
}

tr{
	font-size: 22px;
	font-weight: bold;
}

img{
	width: 60px;
	height: 55px;
}

.date{
	font-size: 30px;
	text-align: right;
	margin-right: 50px;
	color: yellow;
	font-weight: bolder;
	}

	input{
		background-color:yellow;
		font-family:cursive;
		text-align:center;
		width:7em;
	}

	.btn button{
		width:7em;
		color:white;
		background-color:green;
		float:left;
		margin-top:0;
	}
	</style> 
</head>

<body>
<div class="btn">
<a href="index.php"><button>Back</button></a></div>


<div class="date">
<?php
$date = date('d-m-Y');
echo "$date";
?>

</div>

<h1 align="center">MENU</h1>

<form method="POST" action="connect3.php">
	<center>
		<table width="80%">
			<tr><th style="width: 450px">Name</th>
				<th style="width: 300px">Price</th>
				<th>Quantity</th>
			</tr>

			<tr>
				<td>&nbsp;&nbsp;&nbsp;<img src='vb.jpeg'>&nbsp;&nbsp;&nbsp;<b>Veg Burger</td><td align="center">50Rs</td><td align="center"><input type="number" name="name1" value="0" autocomplete="off" style="font-size:13pt;"></td>
			</tr>

			<tr>
				<td>&nbsp;&nbsp;&nbsp;<img src='piz.jpeg'>&nbsp;&nbsp;&nbsp;<b>Pizza</td><td align="center">150Rs</td><td align="center"><input type="number" name="name2" value="0" autocomplete="off" style="font-size:13pt;"></td>
			</tr>

			<tr>
				<td>&nbsp;&nbsp;&nbsp;<img src='pm.jpeg'>&nbsp;&nbsp;&nbsp;<b>Paneer Manchurian</td><td align="center">100Rs</td><td align="center"><input type="number" name="name3" value="0" autocomplete="off" style="font-size:13pt;"></td>
			</tr>

			<tr>
				<td>&nbsp;&nbsp;&nbsp;<img src='gb.jpeg'>&nbsp;&nbsp;&nbsp;<b>Gobi Manchurian</td><td align="center">50Rs</td><td align="center"><input type="number" name="name4" value="0" autocomplete="off" style="font-size:13pt;"></td>
			</tr>

			<tr>
				<td>&nbsp;&nbsp;&nbsp;<img src='bir.jpeg'>&nbsp;&nbsp;&nbsp;<b>Veg Biriyani</td><td align="center">110Rs</td><td align="center"><input type="number" name="name5" value ="0" autocomplete="off" style="font-size:13pt;"></td>
			</tr>
	
			<tr>
				<td>&nbsp;&nbsp;&nbsp;<img src='nood.jpeg'>&nbsp;&nbsp;&nbsp;<b>Noodles</td><td align="center">60Rs</td><td align="center"><input type="number" name="name6" value="0" autocomplete="off" style="font-size:13pt;"></td>
			</tr>

		</table>

<button type="submit" name="order"><b>ORDER</b></button>

  </center>

</form>
</body>
</html>