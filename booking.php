<?php
	include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
	<link rel="stylesheet"type="text/css"href="book.css">
</head>
<body>
	
	<div class="loginbox">
		<img src="blueavatar.jpg" class="img">
		
		<h1>Book your Ticket</h1>
		<form action="display.php" method="post">
			<p>From</p>
			<select name="from">
                  <option selected disabled>From</option>
                  <option value="Bengaluru">Bengaluru</option>
                  <option value="Davangere">Davangere</option>
                  <option value="Mysuru">Mysuru</option>
	        </select><br><br><br>

		  <p>When do you want to Go?</p>
                  <input type="date" name="journey" placeholder="Date of Journey" required><br><br><br>

			<p>To</p>
			<select name="to">
                  <option selected disabled>To</option>
                  <option value="Bengaluru">Bengaluru</option>
                  <option value="Davangere">Davangere</option>
                  <option value="Mysuru">Mysuru</option>
            </select><br><br><br> 
			<input type="submit" name="submit1" value= "Search" ><br>
		</form>
	</div>
</body>
</html>