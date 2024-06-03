<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión fallida: ".$conn->connect_error);
	}
	$num = $_POST["noofrooms"];
	$r = $_POST["rooms"];
	$sql = "UPDATE project_06_rooms_count SET available_rooms = available_rooms+$num WHERE room_type='$r'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_added1.php");
	}
?>