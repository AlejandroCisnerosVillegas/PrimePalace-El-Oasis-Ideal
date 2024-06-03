<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error) {
		die("Conexión fallida: ".$conn->connect_error);
	}
	$bid = $_POST["book_id"];
	$checkout = $_POST["checkout"];
	$sql = "SELECT * FROM project_06_confirmed_booking WHERE book_id='$bid'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
		$row=mysqli_fetch_row($result);
		$checkin = $row[4];
		$in = strtotime($checkin);
		$out = strtotime($checkout);
		$diff = abs($out - $in); 
		$days = floor($diff / (60*60*24));
		$price = 0;
		if(strcmp($row[3], "Habitacion Estandar")==0) {
			$price = 6000;
		} else if(strcmp($row[3], "Suite Ejecutiva")==0) {
			$price = 12000;
		} else if(strcmp($row[3], "Suite Presidencial")==0) {
			$price = 18000;
		}
		$row[13] = $row[13] - $price*$row[6] + $price*$days;
		$sql = "UPDATE project_06_confirmed_booking SET checkout='$checkout', days='$days', price='$row[13]' WHERE book_id='$bid'";
		mysqli_query($conn,$sql);
		header("Location: admin_modify_room1.php");
	} else {
		header("Location: admin_failure.php");
	}
?>