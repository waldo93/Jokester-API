<?php

function connectToDatabase()
{
	$mysql_host = "jokester.zzl.org";
	$mysql_database = "jokester_zzl_jokester";
	$mysql_user = "866432_james";
	$mysql_password = "nonsense";
	
	// Create connection
	$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
	
	// Check connection
	if (mysqli_connect_errno($con))
	{
		exit("Failed to connect to MySQL: " . mysqli_connect_error());
	}
}

?>