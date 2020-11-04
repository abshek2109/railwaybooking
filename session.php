<?php
 include('connection.php');
 error_reporting(0);
 session_start();
 if(!isset($_SESSION['login_user'])){
 	header("location:log.php");
 	 }
?>