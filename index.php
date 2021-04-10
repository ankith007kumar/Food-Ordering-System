<?php
session_start();
?>

<html>
<head>
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	body{
		 background-image: url(bg1.jpg);
		 background-repeat: no-repeat;
		 background-size: 100% 100%;
		 margin: 0; padding: 0;
	    }

	h1{
        text-align: center;
		color: gold;
		font-family: cursive;
		font-size:4em;
		font-weight: 600;
		text-shadow: 2px 2px red;
	}


	.nav a{
		color: white;
		font-family:cursive;
		font-weight: 700;
		float: left;
		margin-left: 1em;
		padding: 15px;
		font-size: 27px;
		text-decoration: none;
	}

	.nav a:hover{
		background-color: rgb(255,140,0,0.7);
		color: black;
		border-radius: 2em;
	}

	.social{
		float: left;
		margin-top: 31em;
	}

	img{
		padding-left:10em;
	}

	</style>

<body>
	<h1>Welcome Restaurant</h1>
<div class="nav">
		<a href="index.php">Home</a>
		<a href="menu.php">Menu</a>
		<a href="orders.php">Orders</a>
		<?php
	    if(isset($_SESSION['username'])){
	    	echo "";
	    }
	    else{ ?>
	    <a href="signup.php">Signup</a>
	    <?php } ?>


	    <?php
	    if(isset($_SESSION['username'])){
	    	echo "";
	    }
	    else{ ?>
		<a href="login.php">Login</a>
		<?php } ?>
	
	    <?php
	    if(isset($_SESSION['username'])){ ?>
	    	<a href="profile.php">Profile</a>
	    <?php
	    }
	    else{ 
		 echo "";
	 	} ?>

		<?php
	    if(isset($_SESSION['username'])){
	    	echo "";
	    }
	    else{ ?>
			<a href="admin.php">Admin</a>
			<?php } ?>

		<a href="about.php">About Us</a>

		<?php
	    if(isset($_SESSION['username'])){?>
	    <a href="logout.php">Logout</a>
	    <?php	
	    }
	    else{ 
	    	echo "";
            }?>

	
	</div>
<br>
	<div class="social">
    <a href="http://www.facebook.com"><img src='fb.png' width="80px" height="80px" ></a>
    <a href="http://www.twitter.com"><img src='twt.png' width="80px" height="80px"></a>
    <a href="http://www.youtube.com"><img src='ytb.png' width="80px" height="80px"></a>
    <a href="http://www.instagram.com"><img src='inst.png' width="80px" height="80px"></a>
    <a href="http://www.google.com"><img src='gs.png' width="80px" height="80px"></a>
    <a href="http://www.watsapp.com"><img src='wats.png' width="80px" height="80px"></a>
	</div>
</body>
</html>
