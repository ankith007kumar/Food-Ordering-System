<html>
	<head>
		<title>sign up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>

<style>
	
	body{
		 background-image: url(bg4.jpg);
     	 background-repeat:no-repeat;
		 background-size:100% 100%;
		 font-family:cursive;
		}
h1{
	text-align:center;
	color:gold;
	font-size:5em;
}
.container{
    font-weight: 900;
    background-color:rgba(0, 0, 0, 0.855);
    width: 800px;
    position:absolute;
    margin-left: 405px;
    color: white;
    font-size: 25px;
    padding-top:1em;
    border-radius: 20px;   
}

input{
    background-color:transparent;
    height: 30px;
    font-style: italic;
    font-family:cursive;
    color: white;
    border: none;
    border-bottom: 2px solid rgb(0, 190, 255);
    font-size: 17px;
    font-weight: 400;
    padding-left: 0.7rem;
    margin-left: 2em;
    margin-right: 2em;
}

.container button{
    color: white;
    font-family:cursive;
    font-size: 20px;
    font-style: italic;
    font-weight: 700;
    background-color:transparent ;
    width: 150px;
    height: 40px;
    margin-top:0.7em;
    margin-bottom:0.7em;
    border: 1px solid white;
    border-radius: 10px;    
    cursor: pointer;
}

.container button:hover{
    box-shadow: 1.5px 1.5px 5px 4px rgb(182, 182, 182);
}

::placeholder{
    color: white;
    font-family:cursive;
    font-style: italic;
    font-weight: 500;
    text-align: center;
}
	
</style>

<body>
<a href="index.php"><font color="white"><b><--BACK</b></font></a> 
	<form align="center" method="POST" action="conect.php">
<h1>SignUp</h1>
<div class="container">

		                <input type="text" name='name' placeholder="Name" autocomplete=OFF required>
                        <input type="mail" name='mail' placeholder="Email" autocomplete=OFF  required><br> <br>  
                        <input type="text" name='uname' placeholder="Username" autocomplete=OFF  required>
                        <input type="password" name='passw' placeholder="Password" autocomplete=OFF  required><br><br>
                        <input type="text" name='addr' placeholder="Location" autocomplete=OFF required>
                        <input type="number" name='phno' placeholder="Phone" autocomplete=OFF required ><br><br>
			

 
			<button type="submit">Submit</button>
			</form> 
</div>
</body>
</html>