<?php

	$servername = "remotemysql.com";
	$username = "cFubYQESq3";
	$password = "l0v5IBct8b";
	$dbname = "cFubYQESq3";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
	
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>