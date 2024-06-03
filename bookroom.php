<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/user_accommodation.css" rel="stylesheet">
	</head>
	<body>
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
			<h2>Especificaciones de la Habitación</h2>
			<table>
				<tr>
					<th>Modelo de Habitación</th>
					<th style="text-align: center;">Núm. Huéspedes</th>
					<th style="text-align: center;">Importe</th>
				</tr>
				<tr>
					<td>Habitación Estándar</td>
					<td style="text-align: center;">2</td>
					<td style="text-align: center;">$6,000 MXN.</td>
				</tr>
				<tr>
					<td>Suite Ejecutiva</td>
					<td style="text-align: center;">2</td>
					<td style="text-align: center;">$12,000 MXN.</td>
				</tr>
				<tr>
					<td>Suite de Presidencial</td>
					<td style="text-align: center;">4</td>
					<td style="text-align: center;">$18,000 MXN.</td>
				</tr>
			</table>
			<table>
				<tr>
					<th>Servicios Adicionales</th>
					<th style="text-align: center;">Importe</th>
				</tr>
				<tr>
					<td>Spa y servicios de masajes</td>
					<td style="text-align: center;">$1,500 MXN.</td>
				</tr>
				<tr>
					<td>Lounge exclusivo</td>
					<td style="text-align: center;">$300 MXN.</td>
				</tr>
				<tr>
					<td>Gimnasio equipado</td>
					<td style="text-align: center;">$500 MXN.</td>
				</tr>
				<tr>
					<td>Servicio a la habitación</td>
					<td style="text-align: center;">$250 MXN.</td>
				</tr>
				<tr>
					<td>Transporte al aeropuerto</td>
					<td style="text-align: center;">$1,150 MXN.</td>
				</tr>
				<tr>
					<td>Servicio de lavandería</td>
					<td style="text-align: center;">$200 MXN.</td>
				</tr>
			</table>
		</div>
		<div class="container">
			<div>
				<h2>Reservar Alojamiento</h2>
				<form action="bookroom1.php" method="post">
					<label for="rooms">Selecciona tu preferencia de alojamiento:</label>
					<select name="rooms" id="rooms" required>
						<option value="">Habitación</option>
						<option value="Habitacion Estandar">Habitación Estándar</option>
						<option value="Suite Ejecutiva">Suite Ejecutiva</option>
						<option value="Suite Presidencial">Suite Presidencial</option>
					</select>
					<br><br>
					<label for="checkin">Indica la fecha de inicio:</label>
					<input type="date" name="checkin" value="2021-02-01" id="checkin" required>
					<br><br>
					<label for="checkout">Indica la fecha de termino:</label>
					<input type="date" name="checkout" value="2021-03-01" id="checkout" required>
					<p style="color: #e4e5f0;"><Strong>Extras y amenidades del hotel:</Strong></p>
					<br>
					<input type="checkbox" name="spa" id="spa" value="on">
					<label for="spa" style="display: inline-block; vertical-align: middle;">Spa y servicios de masajes.</label>
					<br><br>
					<input type="checkbox" name="bar" id="bar" value="on">
					<label for="bar" style="display: inline-block; vertical-align: middle;">Bar o lounge exclusivo.</label>
					<br><br>
					<input type="checkbox" name="gym" id="gym" value="on">
					<label for="gym" style="display: inline-block; vertical-align: middle;">Gimnasio completamente equipado.</label>
					<br><br>
					<input type="checkbox" name="service" id="service" value="on">
					<label for="service" style="display: inline-block; vertical-align: middle;">Servicio a la habitación las 24 horas.</label>
					<br><br>
					<input type="checkbox" name="transport" id="transport" value="on">
					<label for="transport" style="display: inline-block; vertical-align: middle;">Servicio de transporte al aeropuerto.</label>
					<br><br>
					<input type="checkbox" name="laundry" id="laundry" value="on">
					<label for="laundry" style="display: inline-block; vertical-align: middle;">Servicio de lavandería y limpieza en seco.</label>
					<br><br>
					<input type="submit" value="Realizar reservación">
				</form>
			</div>
		</div>
		<div class="footer">
			<h2>Descubre más sobre nuestro servicio</h2>
			<h3>&copy; Derechos de Autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>