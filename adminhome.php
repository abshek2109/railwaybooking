<?php
include 'connection1.php';
include('session.php');
?>


<!DOCTYPE html>



<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="adminhome.css">
</head>
<body>
	<header>

		<form action="adlogout.php">
		<div class="container">
			<h1>Admin Previliges</h1>
			
			<a href="insert.php">Add a New Train</a><br>
			<a href="delete.php">Delete Train</a><br>

			<input type="submit" value="Logout">
		</form>
			</div>

	</header>

</body>
</html>