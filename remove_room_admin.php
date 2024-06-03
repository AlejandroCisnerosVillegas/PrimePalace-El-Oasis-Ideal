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
		<div class="container">
			<h2>Suprimir Habitación</h2>
			<table class="basic_box">
				<form action="admin_room_removed.php" method="post" style="display: flex; align-items: center;">
				<tr>
					<label for="rooms" style="font-weight: bold; color: #444; margin-bottom: 10px; display: block; text-align: left; font-size: 17px;">Selecciona el Tipo de Habitación:</label>
					<select name="rooms" id="rooms" required style="padding: 12px; border-radius: 8px; border: 2px solid #ddd; background-color: #f9f9f9; color: #333; font-size: 17px; width: 100%; transition: border-color 0.3s;">
						<option value="" style="color: #999;">Selecciona una opción</option>
						<option value="Habitacion Estandar">Habitación Estándar</option>
						<option value="Suite Ejecutiva">Suite Ejecutiva</option>
						<option value="Suite Presidencial">Suite Presidencial</option>
					</select>
				</tr>
				<tr>
					<td colspan="1">Núm. de Habitaciones:</td>
					<td colspan="2">
						<input type="number" min="0" name="noofrooms" id="rooms" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-right: 10px;" required>
						<button type="submit" style="background-color: #9c0606; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer; transition: background-color 0.3s;">Eliminar</button>
				</tr>
				</form>
			</table>
		</div>
		<div class="footer">
			<h2>Descubre más sobre nuestro servicio</h2>
			<h3>&copy; Derechos de Autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>