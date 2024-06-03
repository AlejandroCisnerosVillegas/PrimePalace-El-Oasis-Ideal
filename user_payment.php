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
			<h2>Realizar Transacción</h2>
			<table class="basic_box">
				<tr>
					<th style="text-align: center;">Núm. Código</th>
					<th style="text-align: center;">Ocupante</th>
					<th style="text-align: center;">Habitación</th>
					<th style="text-align: center;">Inicio</th>
					<th style="text-align: center;">Termino</th>
					<th style="text-align: center;">Importe</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "general");
					if($conn->connect_error)
					{
						die("Conexión fallida: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from project_06_confirmed_booking	";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		?>
				    		<td style="text-align: center;"><?php echo $row[14]; ?></td>
				   			<td style="text-align: center;"><?php echo $row[1]; ?></td>
				   			<td style="text-align: center;"><?php echo $row[3]; ?></td>
				   			<td style="text-align: center;"><?php echo $row[4]; ?></td>
				    		<td style="text-align: center;"><?php echo $row[5]; ?></td>
				    		<td style="text-align: center;">$<?php echo $row[13]; ?> MXN.</td>
				</tr>
					<?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table>
		</div>
		<div class="container">
			<div>
				<h2>Efectuar Pago</h2>
				<table class="basic_box">
					<tr>
						<td></td>
						<td colspan="1">Núm. Código de Pago:</td>
						<td colspan="2">
						<form action="payment.php" method="post" style="display: flex; align-items: center;">
							<input type="number" name="book_id" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-right: 10px;">
							<button type="submit" style="background-color: #358fc4; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 18px; cursor: pointer; transition: background-color 0.3s;">Liquidar Importe</button>
						</form>
					</tr>
				</table>
			</div>
		</div>
		<div class="footer">
			<h2>Descubre más sobre nuestro servicio</h2>
			<h3>&copy; Derechos de Autor <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>