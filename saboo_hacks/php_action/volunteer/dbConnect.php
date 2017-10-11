<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databse = "ngo";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $databse);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>