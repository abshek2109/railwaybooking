<?php
    
  include("connection1.php");
  
  error_reporting(0);

 $train=$_GET['train'];
 echo $train;

 $a = "DELETE from `train` where train_no =$train";
mysqli_query($mysqli,$a);

	header("location:delete.php");

 ?>