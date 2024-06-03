<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión fallida: ".$conn->connect_error);
	}
	$user = $_POST["adminid"];
	$pwd = $_POST["password"];
	$empid = $_POST["empid"];
	$sql = "INSERT INTO project_06_admin(adminid, password, empid) VALUES('$user', '$pwd', '$empid')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: admin_created.php");
	}
	else
	{
		header("Location: admin_not_created.php");
	}
?>