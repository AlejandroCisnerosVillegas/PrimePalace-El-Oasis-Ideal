<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión Fallida: ".$conn->connect_error);
	}
	$email = $_POST["email"];
	$dob = $_POST["dob"];
	$sql = "SELECT * FROM project_06_user_login";
	$k = 0;
	if ($result=mysqli_query($conn,$sql))
	{
		while ($row=mysqli_fetch_row($result))
		{
			if($email==$row[3] && $dob==$row[5])
			{
				$sql1 = "INSERT INTO project_06_temp(pwd) VALUES('$row[1]')";
				mysqli_query($conn, $sql1);
				header("Location: user_found.php");
				$k = 1;
			}
		}
		mysqli_free_result($result);
	}
	if($k==0)
	{
		header("Location: user_not_found.php");
	}
?>