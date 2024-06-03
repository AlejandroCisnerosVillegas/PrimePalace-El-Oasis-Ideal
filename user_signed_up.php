<?php
	$conn = new mysqli("localhost","root","", "general");
	if($conn->connect_error)
	{
		die("Conexión Fallida: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$idproof = $_POST["idproof"];
	$dob = $_POST["dob"];
	$sql = "INSERT INTO project_06_user_login(phone, password, name, email, idproof, dob) VALUES('$phone', '$password', '$name', '$email', '$idproof', '$dob')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: user_created.php");
	}
	else
	{
		header("Location: user_not_created.php");
	}
?>