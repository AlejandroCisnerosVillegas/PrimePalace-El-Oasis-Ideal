<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión Fallida: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$pwd = $_POST["password"];
	$sql = "SELECT * from project_06_user_login";
	if ($result=mysqli_query($conn,$sql))
	{
		$found = false;
		while ($row=mysqli_fetch_row($result))
		{
			if($phone==$row[0] && $pwd==$row[1])
			{
				$found = true;
				$sql = "DELETE from project_06_temp_session";
				mysqli_query($conn, $sql);
				$sql1 = "INSERT INTO project_06_temp_session VALUES('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]')";
				mysqli_query($conn, $sql1);
				header("Location: user_view.php");
				break;
			}
		}
		mysqli_free_result($result);
		if (!$found) {
			header("Location: user_not_found.php");
		}
	}
?>