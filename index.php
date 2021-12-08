<?php
session_start();
$_SESSION["status"]=false
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="style.css">
    
	<link rel="stylesheet" a href="css/all.css">
	
</head>
<body>
	<div class="container">
	<img src="login.png"/>
		<form method="POST" action="log.php">
			<div class="form-input">
				<i class="fas fa-user"></i><input type="text" name="username" placeholder= "Enter the User Name" required/>
			</div>
			<div class="form-input">
				<i class="fas fa-lock"></i><input type="password" name="password" placeholder="password" required/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>