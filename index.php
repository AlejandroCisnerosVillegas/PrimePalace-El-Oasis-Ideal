<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/homepage.css" rel="stylesheet">
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
			<a href="../../index.html" target="_blank">Contacto</a>
		</nav>
		<div class="slideshow-container">
			<img src="Images/home_1.png" class="mySlides fade" />
			<img src="Images/home_2.png" class="mySlides fade" />
			<img src="Images/home_3.png" class="mySlides fade" />
			<div class="text">Disfruta de una experiencia de ensueño</div>
		</div>
		<a href="user_login.php" class="reserve-room">Reservar Alojamiento</a>
		<div class="welcome-text">
			<p>Vive una Experiencia Inolvidable con Ofertas Exclusivas</p>
			<p>Explora nuestra área de bienvenida, siempre lista para recibirte.</p>
		</div>
		<h2 class="r_room">Opciones de Hospedaje</h2>
		<div id="r_room" class="rooms-container">
			<div class="room">
				<img src="images/room_1.png" alt="Suite Presidencial" />
				<h3>Suite Presidencial</h3>
			</div>
			<div class="room">
				<img src="images/room_2.png" alt="Suite Ejecutiva" />
				<h3>Suite Ejecutiva</h3>
			</div>
			<div class="room">
				<img src="images/room_3.png" alt="Habitación Estándar" />
				<h3>Habitación Estándar</h3>
			</div>
		</div>
		<div class="footer">
			<h2>Conoce más de nuestro servicio</h2>
			<h3>&copy; Copyright <strong><span>2024</span></strong> Alejandro Cisneros Villegas v2.0.1</h3>
		</div>
		<script>
			var slideIndex = 0;
			showSlides();
			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				slides[slideIndex-1].style.display = "block";  
				setTimeout(showSlides, 4500);
			}
		</script>
	</body>
</html>