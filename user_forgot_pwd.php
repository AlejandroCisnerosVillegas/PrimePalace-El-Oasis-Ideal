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
			<h2>Recuperar Contraseña</h2>
			<form action="user_forgot_pwd1.php" method="post">
				<div class="input-field">
					<input type="email" name="email" placeholder="Ingrese correo electrónico" class="input-field" required>
				</div>
				<div class="input-field">
					<p style="text-align: left;">Fecha de nacimiento:</p>
					<input type="date" name="dob" value="1996-04-22" class="input-field" required>
				</div>
				<button type="submit" class="btn">Recuperar Contraseña</button>
			</form>
		</div><br><br>
		<div class="footer">
			<h2>Conoce más de nuestro servicio</h2>
			<h3>&copy; Copyright <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
	</body>
</html>