<?php
    
	include("connection.php");
	error_reporting(0);


if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$gender = $_POST['gender'];
	
	$maritial = $_POST['maritial'];
	$country = $_POST['country'];
	$mobileno = $_POST['mnumber'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	if($password==$cpassword)
	{

	$sql = $mysqli->query("INSERT INTO `login`(`username`, `password`, `gender`, `maritialstatus`, `country`, `mnumber`, `address`, `pincode`, `state`) VALUES ('$username','$password','$gender','$maritial','$country','$mobileno','$address','$pincode','$state')");
	
	//echo "<script>alert('Registered Successfully')</script>";

	header("Location:http://localhost/rails/log.php");

}
else{
	echo"password missmatch";
}
}
	?>








<!DOCTYPE html>

<html>
<head>
	<title>user registration</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<div class="registerbox">
		<h1>Register</h1>
            <p>Please fill in the form to create an account</p>
		<form action="" method="POST">
			<p>User Name</p>
			<input type="text" name="username" placeholder="Enter username">
                  <p>password</p>
                  <input type="password" name="password" placeholder="password">
                  <p>confirm password</p>
                  <input type="password" name="cpassword" placeholder="confirm password">


                  <P>Gender</P>
                  <input type="radio"  value="Male" name= "gender">Male
                  <input type="radio" value="Female" name= "gender">Female<br>


                  <p>Date Of Birth:</p>
                  <input type="date" name="birth" placeholder="date of birth">


                  <p>Maritial Status:</p>
                  <input type="radio" value="Married"   name= "maritial">Married
                  <input type="radio" value="Unmarried" name= "maritial">Unmarried<br>

                  <p><b>Country:</b></p>
                  <select name="country">
                  <option selected disabled>--//--</option>
                  <option value="india">India</option>
                  <option value="aus">Australia</option>
                  <option value="usa">USA</option>
                  <option value="uk">United Kingdom</option>
                  <option value="japan">Japan</option>
                  <option value="china">China</option>
                  </select><br><br><br>

                 

                   <p>Mobile Number:</p><input type="number" name="mnumber"><br><br>
   
    
    

                 <p for="Address"><b>Address</b></p>
                 <input type="text" placeholder="Enter Address" name="address" required><br><br><br>


                 <p for="pincode"><b>Pincode</b></p>
                 <input type="number" placeholder="Enter Pincode" name="pincode" required><br><br><br>


                 <p for="state"><b>State</b></p>
                 <input type="text" placeholder="Enter State" name="state" required><br><br><br>

                  
                  <input type="checkbox" name= "checkbox" value="checkbox" required>I have read and agree with the Terms and Conditions. and also agree to receive promotional emails/SMS/offers/announcements from IRCTC & associated partners <br>
 


                   <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <input type="submit" name="submit" value="Register"><br>
          



      
                  <P>Already a member? <a href="log.php">Sign in</a></P>
            </form>
      </div>

</body>
</html>