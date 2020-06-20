<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    	<meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
    	<title>L0G1N</title>
	<link rel="stylesheet" href="bootstrap.css" media="screen">
	<style>
		.cssButton{
			background-color:#9cd4ff;
        		color: black;
			border: 4px solid #9cd4ff;
			padding: 10px 24px;
			border-radius: 4px;
        	}
	</style>
</head>
<body style="padding: 50px">
	<center>
	<div class="jumbotron">
	<h1>Admin Login</h1><br>
	<form method="get" style="width: 250px">
	<input type="password" placeholder="password..." name="pass" class="form-control"><br><br>
	<input type="submit" class="cssButton" value="submit" accesskey="enter">
	</form><br>
	</center>
	</div>
<?php
	include("secret.php");
	// get user input
	$pass = $_GET['pass'];
	//if user's input match the secret, it will print the flag!
	if( strcmp($pass, $secret) == 0 )
     		echo $flag;
?>
</body>
</html>
