<?php
	$con = mysqli_connect('localhost','root','0000');	
	if(!$con)
	{
		die('Not Connected With Host.'.mysqli_error($con));
	}

	$db = mysqli_select_db($con,'form');
	if(!$db)
	{
		die('Not Connected with DB.'.mysqli_error($con));
	}

?>