<?php
include 'session.php';

$trai=$_GET[t];

$e = "SELECT * FROM passenger where train_no='$trai'";
$d5 = mysqli_query($mysqli,$e);
$r2= $d5->fetch_assoc();





$a = "SELECT * FROM train where train_no='$trai'";
$d1 = mysqli_query($mysqli,$a);
$r3= $d1->fetch_assoc();







?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	table{

		margin-top: 60px;
	}

	.home{

		width: 100%;
		height: 30px;
		padding-top: 5px;
		border:none;
		padding: 5px;
		

		text-align: center;
		background-color: red;
	}

	a{
		margin-top: 20PX;
		text-decoration: none;

		padding: 30px;
	}

	@media print{
		.pb{

		display:none;
	}
	}

	@media print{
		.home{

		display:none;
	}
	}

	
	</style>
</head>
<body>

	<div class="home"><a href="homepage.php">HOME</a>
    <a href="logout.php">LOGOUT</a></div>

	<form action="" onsubmit="window.print()">
<table border="3" cellspacing="0" cellpadding="5" align="center">

	<tr><th colspan="2" height="60px"><h1>TICKET DETAILS</h1></th></tr>


	<tr>

		<th>TRAIN NUMBER:</th>
		<td><?php echo "$r3[train_no]"; ?></td>

	</tr>
		
	<tr>
		<th>TRAIN NAME:</th>
		<td><?php echo "$r3[train_name]"; ?></td>
	</tr>
		

	<tr>
		<th>NAME:</th>
		<td><?php echo "$r2[name]"; ?></td>
	</tr>

	<tr>
		<th>GENDER:</th>
		<td><?php echo "$r2[gender]"; ?></td>
	</tr>


	<tr>
		<th>AGE:</th>
		<td><?php echo "$r2[age]"; ?></td>
	</tr>




	<tr>
		<th>FROM:</th>
		<td><?php echo "$r3[from1]"; ?></td>
	</tr>

	<tr>
		<th>TO:</th>
		<td><?php echo "$r3[to1]"; ?></td>
	</tr>

	<tr>
		<th>DEPARTURE:</th>
		<td><?php echo "$r3[dep_time]"; ?></td>
	</tr>

	<tr>
		<th>ARRIVAL:</th>
		<td><?php echo "$r3[arrv_time]"; ?></td>
	</tr>

	<tr>
		<th>FARE:</th>
		<td><?php echo "$r3[fare]"; ?></td>
	</tr>

	
	<tr align="center"><td colspan="2" height="20px"><input type="submit" class="pb" name="print" value="print"></td></tr>
		 	
</table>

</body>
</html>