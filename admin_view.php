<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/admin_major.css" rel="stylesheet">
	</head>
	<body>
		<header>
		<h1 style="font-size: 36px;">PrimePalace <span style="color: #0FE4F1;">| </span><span>El Oasis Ideal</span></h1>
		</header>
		<nav>
			<a href="admin_view.php">Alojamientos</a>
			<a href="add_room_admin.php">Registrar Habitación</a>
			<a href="remove_room_admin.php">Suprimir Habitación</a>
			<a href="admin_room_status.php">Reservaciones</a>
			<a href="confirmed_bookings.php">Ingresos</a>
			<a href="booking_history.php">Historial</a>
			<a href="index.php">Cerrar Sesión</a>
		</nav>
		<div class="container">
			<h2>Especificaciones de las Habitaciones</h2>
			<?php
				$conn = new mysqli("localhost","root","", "general");
				if($conn->connect_error)
				{
					die("Conexión fallida: ".$conn->connect_error);
				}
				$sql = "SELECT * from project_06_rooms_count";
				$result=mysqli_query($conn,$sql); 
			?>
			<table class="basic_box">
				<tr>
					<th style="text-align: center;">Habitación</th>
					<th style="text-align: center;">Estancias Disponibles</th>
					<th style="text-align: center;">Estancias Reservadas</th>
					<th style="text-align: center;">Importe</th>
				</tr>
				<tr>
				<?php
					while ($row=mysqli_fetch_row($result))
					{
						?>
						<td style="text-align: center;"><?php echo $row[0]; ?></td>
						<td style="text-align: center;"><?php echo $row[1]; ?></td>
						<td style="text-align: center;"><?php echo $row[2]; ?></td>
						<td style="text-align: center;">$<?php echo $row[3]; ?> MXN.</td>
			</tr>
				<?php
					}
				?>
			</table>
		</div>
		<div class="footer">
			<h2>Descubre más sobre nuestro servicio</h2>
			<h3>&copy; Derechos de Autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>