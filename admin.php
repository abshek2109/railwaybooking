
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet"type="text/css"href="login.css">
</head>
<body>
	<div class="loginbox">
		<img src="img.jpg" class="img">
		<h1>Admin Login Here</h1>
		<form action="admin1.php" method="POST">
			<p>Admin Name</p>
			<input type="text"name="username" placeholder="Enter Admin Name" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="login"><br>
            <a href="log.php">User Login Here</a>
          
		    
		</form>
		
	</div>

</body>
</html>
