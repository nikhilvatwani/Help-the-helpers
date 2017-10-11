<?php
	// echo "string";
	// echo $_POST["e_name"];
	
	//variables
	$name = $_POST["e_name"];
	$desc = $_POST["e_desc"];
	$city = $_POST["e_city"];
	$state = $_POST["e_state"];
	$country = $_POST['e_country'];
	$nov = $_POST["e_nov"];
	$fund = $_POST["e_fund"];
	$date = $_POST["e_date"];
	$time = $_POST["e_time"];

	include 'dbConnect.php';

	$sql = "INSERT INTO event (name, description, city, state, country, date, time, number_of_volunteers, fund_req) VALUES ('$name', '$desc', '$city', '$state', '$country', '$date','$time', '$nov', '$fund' )";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	$newURL = '../../index.php';
	header('Location: '.$newURL);
	die();
?>