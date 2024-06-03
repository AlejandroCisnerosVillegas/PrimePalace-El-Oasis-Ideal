<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión fallida: ".$conn->connect_error);
	}
	$bid = $_POST["book_id"];
	$sql = "SELECT * FROM project_06_user_room WHERE book_id = '$bid'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_row($result);
		$room = $row[3];
		$sql1 = "SELECT * FROM project_06_rooms_count WHERE room_type='$room'";
		$result1 = mysqli_query($conn, $sql1);
		$r = mysqli_fetch_row($result1);
		if($r[1] > 0)
		{
			$r[1] = $r[1] - 1;
			$sql2 = "UPDATE project_06_rooms_count SET available_rooms='$r[1]' WHERE room_type='$room'";
			mysqli_query($conn, $sql2);
			$r[2] = $r[2] + 1;
			$sql2 = "UPDATE project_06_rooms_count SET occupied_rooms='$r[2]' WHERE room_type='$room'";
			mysqli_query($conn, $sql2);
			$sql2 = "UPDATE project_06_user_room SET status='Confirmed' WHERE book_id='$bid'";
			mysqli_query($conn, $sql2);
			$sql2 = "INSERT INTO project_06_confirmed_booking VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[14]','$row[15]')";
			mysqli_query($conn, $sql2);
			$sql2 = "DELETE FROM project_06_user_room WHERE book_id='$bid'";
			mysqli_query($conn, $sql2);
			header("Location: confirm_room1.php");
		}
		else
		{
			header("Location: confirm_room2.php");
		}
	}
	else {
		header("Location: admin_failure.php");
	}
?>