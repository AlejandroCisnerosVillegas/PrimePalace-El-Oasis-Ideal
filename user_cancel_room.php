<?php
	$conn = new mysqli("localhost", "root", "", "general");
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}
	$bid = $_POST["book_id"];
	$sql = "SELECT * FROM project_06_user_room";
	$result = mysqli_query($conn, $sql);
	$found = false;
	while ($row = mysqli_fetch_row($result)) {
		if ($bid == $row[15]) {
			$found = true;
			$sql1 = "DELETE FROM project_06_user_room WHERE book_id='$bid'";
			mysqli_query($conn, $sql1);
			header("Location: user_cancel_room1.php");
			break;
		}
	}
	if (!$found) {
		header("Location: user_failure.php");
	}
?>