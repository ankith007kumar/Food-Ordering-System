<html>
<head>
<title>Update</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body{
	margin: 0;
	padding: 0;
     background-image:url(bg6.jpg);
     background-repeat:no-repeat;
     background-size:cover;
	 font-family:cursive;
     }

.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 30px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 2px solid black;
}
.textbox input{
	font-family:cursive;
	font-weight:800;
	border:none;
	outline:none;
	background: none;

}

.updt-box{
	width:300px;
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: black;
}

.updt-box h1{
	float: left;
	font-size: 50px;
	border-bottom: 8px solid yellow;
	margin-bottom: 40px;
	padding: 6px 0;
}

.button{
	width: 100%;
	font-family:cursive;
	border:2px solid red;
	font-size: 18px;
	font-weight:800;
	padding: 5px;
	background: none;
	cursor: pointer;
}

</style>

<body>
<a href="index.php"><font color="white"><b><--BACK</b></font></a> 
	<form method="POST" action="update.php">
	<div class="updt-box">
		<h1>UPDATE PROFILE</h1>
		<div class="textbox">
			<input type="email" placeholder="Enter New Email" name="email" autocomplete="off" required>
		</div>

		<div class="textbox">
			<input type="text" placeholder="Enter New Address"name="addr" autocomplete="off" required>
			
		</div>

		<div class="textbox">
			<input type="text" placeholder="Enter New Phone Number" name="phno" autocomplete="off" required>
		</div>

		<div>
		<input class="button" type="submit" name="update" value="Update">
	</div>

</form>
</body>
</html>