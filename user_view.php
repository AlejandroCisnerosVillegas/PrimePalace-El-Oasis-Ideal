<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/user_information.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$conn = new mysqli("localhost","root","", "general");
			if($conn->connect_error)
			{
				die("Conexión Fallida: ".$conn->connect_error);
			}
			$sql = "SELECT * from project_06_temp_session";
			$result=mysqli_query($conn, $sql);
			$row=mysqli_fetch_row($result); 
		?>
		<header>
			<h1 style="font-size: 36px;">PrimePalace <span style="color: #0FE4F1;">| </span><span>El Oasis Ideal</span></h1>
		</header>
		<nav>
			<a href="user_view.php">Perfil</a>
			<a href="bookroom.php">Reservar Habitación</a>
			<a href="user_room_status.php">Reserva Confirmada</a>
			<a href="user_payment.php">Método de pago</a>
			<a href="user_booking_history.php">Historial</a>
			<a href="index.php">Cerrar Sesión</a>
		</nav>
		<div class="container">
			<h2 style="font-size: 28px;">Información del Usuario</h2>
			<div class="info-item">
				<b>Nombre:</b>
				<span><?php echo $row[2] ?></span>
			</div>
			<div class="info-item">
				<b>Número Telefónico:</b>
				<span><?php echo $row[0] ?></span>
			</div>
			<div class="info-item">
				<b>Correo Electrónico:</b>
				<span><?php echo $row[3] ?></span>
			</div>
			<div class="info-item">
				<b>Fecha de Nacimiento:</b>
				<span><?php echo $row[5] ?></span>
			</div>
			<div class="info-item">
				<b>Clv. Identificación:</b>
				<span><?php echo $row[4] ?></span>
			</div>
		</div>
		<div class="footer">
			<h2 style="font-size: 20px;">Descubre más sobre nuestro servicio</h2>
			<h3 style="font-size: 16px;">&copy; Derechos de Autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>