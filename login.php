<?php
session_start();
?>
<html>
<head>
<title>Login</title>
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
	width: 100%;
	font-family: cursive;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 3px solid black;
}
.textbox input{
	font-weight:600;
	font-size:17px;
	font-family: cursive;
	border:none;
	outline:none;
	background: none;

}

.login-box{
	width:300px;
	font-family: cursive;
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: black;
}

.login-box h1{
	float: left;
	font-family: cursive;
	font-size: 50px;
	border-bottom: 8px solid red;
	margin-bottom: 40px;
	padding: 6px 0;
}

.button{
	width: 100%;
	font-family: cursive;
	border:2px solid yellow;
	font-size: 18px;
	padding: 5px;
	background: none;
	cursor: pointer;
}

</style>

<body>
<a href="index.php"><font color="white"><b><--BACK</b></font></a> 
	<form method="POST" action="connect2.php">
	<div class="login-box">
		<h1>LOGIN</h1>
		<div class="textbox">
			<input type="text" placeholder="Username" name="uname" autocomplete="off" required>
		</div>

		<div class="textbox">
			<input type="password" placeholder="password"name="passw" autocomplete="off" required>
			
		</div>
		<input class="button" type="submit" name="login" value="Login">
	</div>
</body>
	
</form>

</html>
