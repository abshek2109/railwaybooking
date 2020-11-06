<?php

	$frm = $_POST['from'];
	$t = $_POST['to'];

	if(($frm=="Davangere") && ($t=="Bengaluru"))
	{
							
		header("Location:train list.html");
			
		 
	}

	elseif(($frm=="Davangere") && ($t=="Mysuru"))
	{
		header("Location:train list1.html");
	}


	elseif(($frm=="Bengaluru") && ($t=="Davangere"))
	{
		header("Location:train list2.html");
	}

    elseif(($frm=="Bengaluru") && ($t=="Mysuru"))
	{
		header("Location:train list3.html");
	}

	elseif(($frm=="Mysuru") && ($t=="Bengaluru"))
	{
		header("Location:train list3.html");
	}

	elseif(($frm=="Mysuru") && ($t=="Davangere"))
	{
		header("Location:train list2.html");
	}

	else {
		echo"From Station and To Station cannot be same";
	}


?>
