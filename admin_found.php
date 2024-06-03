<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/forms.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1 style="font-size: 36px;">PrimePalace <span style="color: #0FE4F1;">| </span><span>El Oasis Ideal</span></h1>
		</header>
		<nav>
			<a href="index.php">Inicio</a>
			<a href="admin_login.php">Panel de Control</a>
			<a href="user_login.php">Inicio de Sesión</a>
			<a href="index.php#r_room">Habitaciones</a>
			<a href="image_gallery.php">Galería</a>
			<a href="../../index.html">Contacto</a>
		</nav>
		<div class="container">
			<h2 style="color: #fff;">Registro de la Base de Datos</h2>
			<div style="background-color: #222; border-radius: 10px; padding: 20px; margin-top: 20px;">
			<p style="color: #fff; font-size: 18px;">
				<?php
				$conn = new mysqli("localhost","root","", "general");
				if($conn->connect_error)
				{
					die("Conexión Fallida: ".$conn->connect_error);
				}
				$sql = "SELECT * from project_06_temp";
				$result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_row($result);
				$sql = "DELETE from project_06_temp";
				mysqli_query($conn, $sql);
				echo "Tu clave de acceso es: ".$row[0];
				?>
				</p>
				<a href="user_login.php" style="color: #0FE4F1; text-decoration: none; font-size: 16px;">Iniciar sesión en mi cuenta</a>
			</div>
		</div><br><br>
		<div class="footer">
			<h2>Conoce más de nuestro servicio</h2>
			<h3>&copy; Derechos de autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>