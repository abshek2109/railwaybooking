<?php
include('connection.php');
error_reporting(0);
include('session.php');
?>
<html>
<head>
	<title>Displaying Trains</title>
		<link rel="stylesheet" type="text/css" href="new_home.css">
	<style type="text/css">
       .page{
	width: 100%;
	height:100%;
	border-style: groove;
  
}

		body {
			font-size: 15px;
			color: #34aa44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			
			margin: 0;
		}
		table {
			margin-left: 200px;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
			font-size: 15px;
		}

		table th {
			transition: all .5s;
			font-size: 20px;
		}
		
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		
		

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:nth-child(even) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		
	</style>
</head>
<body >
	
<center>
	<table class="data-table">
		<caption style="font-size: 40px;color: red">AVAILABLE TRAINS</caption>
		<thead>
			<tr>
				<th>TRAIN NO</th>
				<th>TRAIN NAME</th>
				<th>DEPARTURE TIME</th>
				<th>ARRIVAL TIME</th>
				
				<th>FARE</th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php

		$sql="SELECT *  FROM train";

		$query = mysqli_query($mysqli, $sql);

		while ($row5= mysqli_fetch_array($query))
		{

			echo '<tr>
					
					<td>'.$row5['train_no'].'</td>
					<td>'.$row5['train_name'].'</td>
					<td>'.$row5['dep-time'].'</td>
					<td>'.$row5['arrv_time'].'</td>
					<td>'.$row5['fare'].'</td>
                 	<td><a href=delete1.php?train='.$row5['train_no'].' >Delete</a></td>
 
				   </tr>';
	
		}	 
		?>
		</tbody>
		
	</table>
</center>
</body>
</html>