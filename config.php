<?php

	$servername = "remotemysql.com";
	$username = "EhKDBeTS59";
	$password = "UPTqRAl8AL";
	$dbname = "EhKDBeTS59";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>