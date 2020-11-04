


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
		<form action="log1.php" method="POST">
			<p>User Name</p>
			<input type="text"name="username" placeholder="Enter UserName" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login"><br>
		    <a href="regist.php">Dont have an account? Sign Up</a><br>
		    <a href="admin.php">Adminstrator Login Here</a>
		</form>	
	</div>
</body>
</html>