<?php

include("connection.php");
	error_reporting(0);

if (isset($_POST['submit1'])) 
{

	$frm = $_POST['from'];
	$t = $_POST['to'];
	$doj = $_POST['journey'];

	if(($frm=="Davangere") && ($t=="Bengaluru"))
	{
							
		header('location:dvgsbc.html');
			
		 
	}

	elseif(($frm=="Davangere") && ($t=="Mysuru"))
	{
		header('location:train list1.html');
	}


	elseif(($frm=="Bengaluru") && ($t=="Davangere"))
	{
		header('location:sbcdvg.html');
	}

    elseif(($frm=="Bengaluru") && ($t=="Mysuru"))
	{
		header('location:sbcmys.html');
	}

	elseif(($frm=="Mysuru") && ($t=="Bengaluru"))
	{
		header('location:myssbc.html');
	}

	elseif(($frm=="Mysuru") && ($t=="Davangere"))
	{
		header('location:mysdvg.html');
	}

	else 
		echo"From Station and To Station cannot be same";

}
?>
