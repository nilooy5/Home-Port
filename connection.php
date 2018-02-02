<?php

	$host='localhost';
	$user='id1370950_niloooy';
	$pass='alohamorah7';
	$db='id1370950_demo_cse311';

	$con=mysqli_connect($host,$user,$pass,$db);
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " .mysqli_connect_error();
	}

?>