<?php
	include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>insert train</title>
	<link rel="stylesheet"type="text/css"href="book.css">
</head>
<body>
	
	<div class="loginbox">
		<img src="blueavatar.jpg" class="img">
		
		<h1>ADD A NEW TRAIN</h1>
		<form action="" method="post">


			<p>From</p>
			<input type="text" name="frm"><br><br><br>


			<p>To</p>
			<input type="text" name="to"><br><br><br>

			<p>Train name</p>
			<input type="text" name="name"><br><br><br>

			<p>Train no.</p>
			<input type="number" name="no"><br><br><br>

			<p>Arrival time</p>
			<input type="time" name="atime"><br><br><br>

			<p>Departure time</p>
			<input type="time" name="dtime"><br><br><br>

			<p>Fare</p>
			<input type="number" name="fare"><br><br><br>

			<input type="submit" name="submit1" value= "Add" ><br>
		</form>
		
	</div>

</body>
</html>
		</div>
	</form>

</body>
</html>

<?php

if(isset($_POST['submit1']))

{

	$f = $_POST['frm'];
	$t = $_POST['to'];
	$nam = $_POST['name'];
	$num = $_POST['no'];
	$at = $_POST['atime'];
	$dt = $_POST['dtime'];
	$far = $_POST['fare'];

	$sql = "INSERT INTO train VALUES ('$num','$nam','$f','$t','$at','$dt','$far')";

	$b = mysqli_query($mysqli,$sql);
	 if($b)
	 {
	 	echo "success";
	 }

	 else
	 {

	 	echo "error";
	 }

	
}


?>