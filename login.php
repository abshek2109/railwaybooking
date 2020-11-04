<?php
    ini_set('display_errors', 1);
	include("conn.php");
	error_reporting(0);
	session_start();


	if($_SERVER["REQUEST_METHOD"]=="POST") {

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	$sql = "SELECT * FROM login WHERE username = '$username' and password = '$password' ";
	$result = mysqli_query($conn,$sql);


	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['username'];

	$count = mysqli_num_rows($result);

	if($count>0)  {

		$_SESSION['login_user'] = $username;
		header("location : booking.html");
		      
		      }	
	
	else  {
		echo"Enter the valid Username or Password";

	       }
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet"type="text/css"href="login.css">
</head>
<body>
	<div class="loginbox">
		<img src="img.jpg" class="img">
		<h1>Login Here</h1>
		<form action="" method="POST">
			<p>User Name</p>
			<input type="text"name="username" placeholder="Enter UserName" required>
			<p>password</p>
			<input type="password" name="password" placeholder="enter password" required>
            <input type="submit" name="submit" value="login"><br> 
		    <a href="registration2.html">Dont have an account?Sign Up</a>
		</form>		
	</div>
</body>
</html>