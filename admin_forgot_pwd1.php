<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión fallida: ".$conn->connect_error);
	}
	$user = $_POST["adminid"];
	$pwd = $_POST["empid"];
	$sql = "SELECT * from project_06_admin";
	$k = 0;
	if ($result=mysqli_query($conn,$sql))
	{
		while ($row=mysqli_fetch_row($result))
		{
			if($user==$row[0] && $pwd==$row[2])
			{
				$sql1 = "INSERT INTO project_06_temp (pwd) VALUES('$row[1]')";
				mysqli_query($conn, $sql1);
				header("Location: admin_found.php");
				$k = 1;
				break;
			}
		}
		mysqli_free_result($result);
	}
	if($k==0)
	{
		header("Location: admin_not_found.php");
	}
?>