<?php
	$conn = new mysqli("localhost", "root", "", "general");
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}
	$bid = $_POST["book_id"];
	$sql = "SELECT * FROM project_06_confirmed_booking";
	$result = mysqli_query($conn, $sql);
	$found = false;
	while ($row = mysqli_fetch_row($result)) {
		if ($bid == $row[14]) {
			$found = true;
			$sql1 = "SELECT * FROM project_06_balance";
			$result1 = mysqli_query($conn, $sql1);
			$r = mysqli_fetch_row($result1);
			$r[0] = $r[0] + $row[13];
			$sql2 = "DELETE FROM project_06_balance";
			mysqli_query($conn, $sql2);
			$sql2 = "INSERT INTO project_06_balance VALUES ('$r[0]')";
			mysqli_query($conn, $sql2);
			$sql2 = "INSERT INTO project_06_booked_hist VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[13]','$row[14]')";
			mysqli_query($conn, $sql2);
			$sql2 = "DELETE FROM project_06_confirmed_booking WHERE book_id='$bid'";
			mysqli_query($conn, $sql2);
			$sql2 = "UPDATE project_06_rooms_count SET available_rooms = available_rooms+1, occupied_rooms = occupied_rooms-1 WHERE room_type='$row[3]'";
			mysqli_query($conn, $sql2);
			header("Location: payment1.php");
			break;
		}
	}
	if (!$found) {
		header("Location: user_failure.php");
	}
?>