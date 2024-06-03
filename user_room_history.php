<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/user_record.css" rel="stylesheet">
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
			<h2>Registro de Alojamiento</h2>
			<?php
				$conn = new mysqli("localhost","root","", "general");
				if($conn->connect_error)
				{
					die("Conexión fallida: ".$conn->connect_error);
				}
				$bid = $_POST["book_id"];
				$sql = "SELECT * FROM project_06_booked_hist WHERE book_id='$bid'";
				$result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_row($result);
			?>
			<table class="basic_box">
				<tr>
					<td style="text-align: center;"><strong>Núm. Código: </strong></td>
					<td style="text-align: center;""><?php echo $row[14]; ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Ocupante: </strong></td>
					<td style="text-align: center;"><?php echo $row[1]; ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Habitación: </strong></td>
					<td style="text-align: center;"><?php echo $row[3]; ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Fecha de Inicio: </strong></td>
					<td style="text-align: center;"><?php echo $row[4]; ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Fecha de Termino: </strong></td>
					<td style="text-align: center;"><?php echo $row[5]; ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Total Facturado: </strong></td>
					<td style="text-align: center;">$<?php echo $row[13]; ?> MXN.</td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Servicio de Masaje: </strong></td>
					<td style="text-align: center;"><?php if(strcmp($row[7], "true")==0)
					{
						echo "El servicio ha sido efectuado.";
					}
					else
					{
						echo "El servicio NO ha sido efectuado.";
					} ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Bar o Lounge Exclusivo: </strong></td>
					<td style="text-align: center;"><?php if(strcmp($row[8], "true")==0)
					{
						echo "El servicio ha sido efectuado.";
					}
					else
					{
						echo "El servicio NO ha sido efectuado.";
					} ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Servicio de Gimnasio: </strong></td>
					<td style="text-align: center;"><?php if(strcmp($row[9], "true")==0)
					{
						echo "El servicio ha sido efectuado.";
					}
					else
					{
						echo "El servicio NO ha sido efectuado.";
					} ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Servicio a la habitación las 24 horas: </strong></td>
					<td style="text-align: center;"><?php if(strcmp($row[10], "true")==0)
					{
						echo "El servicio ha sido efectuado.";
					}
					else
					{
						echo "El servicio NO ha sido efectuado.";
					} ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Servicio de transporte al aeropuerto: </strong></td>
					<td style="text-align: center;"><?php if(strcmp($row[11], "true")==0)
					{
						echo "El servicio ha sido efectuado.";
					}
					else
					{
						echo "El servicio NO ha sido efectuado.";
					} ?></td>	
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Servicio de lavandería y limpieza en seco: </strong></td>
					<td style="text-align: center;"><?php if(strcmp($row[12], "true")==0)
					{
						echo "El servicio ha sido efectuado.";
					}
					else
					{
						echo "El servicio NO ha sido efectuado.";
					} ?></td>	
				</tr>
			</table>
		</div>
		<div class="footer">
			<h2>Descubre más sobre nuestro servicio</h2>
			<h3>&copy; Derechos de Autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>