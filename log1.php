<?php
    
	include("connection.php");
	error_reporting(0);
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM login WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);

	if($result->num_rows == 1)  {

		$_SESSION['login_user'] = $username;

	header("Location:homepage.php");
		
		      
		      }	
	
	else  {
		
	header("Location:http:log.php");
	       }
	
?>