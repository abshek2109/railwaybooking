<?php
    
	include("connection.php");
	error_reporting(0);
	include("session.php");


	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);


	if($result->num_rows == 1)  {

		$_SESSION['login_user'] = $username;

	header("Location:adminhome.php");
		      }	
	
	else  {
		
header("Location:log.php");
	       }
	
?>