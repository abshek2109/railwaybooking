<?php
    
  include("connection.php");
  include("session.php");
  error_reporting(0);
  $s = $_GET[t];

if(isset($_POST['submit']))
{
  $cname = $_POST['cname'];
  $cnumber = $_POST['cnumber'];
  $tnumber = $s;
  $emonth = $_POST['expmonth'];
  $eyear = $_POST['expyear'];
  $cvv = $_POST['cvv'];

  $sql = $mysqli->query("INSERT INTO `payment` VALUES ('$tnumber','$cname','$cnumber','$emonth','$eyear','$cvv')");

  

  header("Location:print.php?t=$tnumber");


}
  ?>
