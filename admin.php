<?php
session_start();
?>
<html>
<head>
<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body{
	margin: 0;
	padding: 0;
	font-family: cursive;
     background-image:url(bg6.jpg);
     background-repeat:no-repeat;
     background-size:cover;
     }

.textbox{
	font-family: cursive;
	width: 100%;
	font-size: 30px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 2px solid white;
}
.textbox input{
	font-family: cursive;
	color:black;
	font-weight:bold;
	border:none;
	outline:none;
	background: none;

}

.login-box{
	font-family: cursive;
	width:300px;
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: black;
}

.login-box h1{
	font-family: cursive;
	color: blue;
	float: left;
	font-size: 45px;
	border-bottom: 8px solid #4caf50;
	margin-bottom: 40px;
	padding: 6px 0;
}

.button{
	font-family: cursive;
	width: 100%;
	border:2px solid yellow;
	font-size: 18px;
	padding: 5px;
	background: none;
	cursor: pointer;
}

</style>

<body>
	
<a href="index.php"><font color="white"><b><--BACK</b></font></a> 
	<form method="POST" action="connect4.php">
	<div class="login-box">
		<h1>&nbsp;&nbsp;&nbsp;ADMIN &nbsp;&nbsp;&nbsp;LOGIN</h1>
		<div class="textbox">
			<input type="text" placeholder="Admin Id" name="id" autocomplete="off" required>
		</div>

		<div class="textbox">
			<input type="password" placeholder="Password"name="passw" autocomplete="off" required>
			
		</div>
		<input class="button" type="submit" value="Login">
	</div>
</body>
	
</form>
</html>