<?php
    
	include("connection.php");
	error_reporting(0);


if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$gender = $_POST['Gender'];
	
	$maritial = $_POST['Maritial'];
	$country = $_POST['country[]'];
	$mobileno = $_POST['mobileno'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	if($password==$cpassword)
	{

	$sql = $mysqli->query("INSERT INTO `login`(`username`, `password`, `gender`, `maritialstatus`, `country`, `mnumber`, `address`, `pincode`, `state`) VALUES ('$username','$password','$gender','$maritial','$country','$mobileno','$address','$pincode','$state')");
	
	
	header("Location:log.php");

}
else{
	echo"password missmatch";
}
}
	?>
