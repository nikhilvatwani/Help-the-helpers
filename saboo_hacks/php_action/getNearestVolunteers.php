<?php
	include "conn.php";
	$lat_low_range = $_GET["lat"]-0.10000000;
	$lat_upper_range = $_GET["lat"]+0.10000000;
	$long_low_range = $_GET["long"]-0.00010000;
	$long_upper_range = $_GET["long"]+0.00010000;
	$sql = "SELECT * FROM `location` WHERE lat BETWEEN ".$lat_low_range." AND ".$lat_upper_range;
	//echo $sql;
	$query = mysqli_query($conn,$sql);
	$latitudes = [];
	$longitudes = [];
	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_assoc($query)){
			array_push($latitudes, $row["lat"]);
			array_push($longitudes, $row["longitude"]);
		}
	}

	echo json_encode(array("lats"=>$latitudes,"longs"=>$longitudes));
	//echo '{"lats":["19.22151115","19.22951115"],"longs":["73.16446280000002","73.16446280100000"]}';
?>