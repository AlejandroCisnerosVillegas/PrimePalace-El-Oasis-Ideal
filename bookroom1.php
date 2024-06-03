<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión fallida: ".$conn->connect_error);
	}
	$room = $_POST["rooms"];
	$checkin = $_POST["checkin"];
	$checkout = $_POST["checkout"];
	$spa = isset($_POST["spa"]) ? "true":"false";
	$bar = isset($_POST["bar"]) ? "true":"false";
	$gym = isset($_POST["gym"]) ? "true":"false";
	$service = isset($_POST["service"]) ? "true":"false";
	$transport = isset($_POST["transport"]) ? "true":"false";
	$laundry = isset($_POST["laundry"]) ? "true":"false";
	$in = strtotime($checkin);
	$out = strtotime($checkout);
	$diff = abs($out - $in); 
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$sql = "SELECT * FROM project_06_temp_session";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
	$phone = $row[0];
	$name = $row[2];
	$id = $row[4];
	$status = "Pendiente";
	$price = 0;
	if(strcmp($room, "Habitacion Estandar")==0)
	{
		$price = 6000;
	}
	else if(strcmp($room, "Suite Ejecutiva")==0)
	{
		$price = 12000;
	}
	else if(strcmp($room, "Suite Presidencial")==0)
	{
		$price = 18000;
	}
	$price = $price*$days;
	$additional = 0;
	if(strcmp($spa, "true")==0)
	{
		$additional = $additional + 1500;
	}
	if(strcmp($bar, "true")==0)
	{
		$additional = $additional + 300;
	}
	if(strcmp($gym, "true")==0)
	{
		$additional = $additional + 500;
	}
	if(strcmp($service, "true")==0)
	{
		$additional = $additional + 250;
	}
	if(strcmp($transport, "true")==0)
	{
		$additional = $additional + 1150;
	}
	if(strcmp($laundry, "true")==0)
	{
		$additional = $additional + 200;
	}
	$sqlt = "SELECT * from project_06_book_id";
	$result=mysqli_query($conn,$sqlt);
	$row=mysqli_fetch_row($result);
	$t = $row[0];
	$price = $price + $days*$additional;
	$sql = "INSERT INTO project_06_user_room VALUES ('$phone', '$name', '$id', '$room', '$checkin', '$checkout', '$days', '$spa', '$bar', '$gym', '$service', '$transport', '$laundry', '$status', '$price', '$t')";
	mysqli_query($conn, $sql);
	$t = $t + 1;
	$sqlt = "DELETE from project_06_book_id";
	mysqli_query($conn,$sqlt);
	$sqlt = "INSERT INTO project_06_book_id VALUES ('$t')";
	mysqli_query($conn,$sqlt);
	header("Location: bookroom2.php");
?>