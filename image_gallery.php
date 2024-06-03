<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PrimePalace | El Oasis Ideal</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<link href="css/gallery.css" rel="stylesheet">
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
		<div class="welcome-text">
			<p><strong>Disfruta de las Mejores Vistas</strong></p>
		</div>
		<div class="gallery-container">
			<div class="gallery-item" onclick="openPopup('images/gallery_1.png')">
				<img src="images/gallery_1.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_2.png')">
				<img src="images/gallery_2.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_3.png')">
				<img src="images/gallery_3.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_4.png')">
				<img src="images/gallery_4.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_5.png')">
				<img src="images/gallery_5.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_6.png')">
				<img src="images/gallery_6.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_7.png')">
				<img src="images/gallery_7.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_8.png')">
				<img src="images/gallery_8.png" alt="Vista Exterior" />
			</div>
			<div class="gallery-item" onclick="openPopup('images/gallery_9.png')">
				<img src="images/gallery_9.png" alt="Vista Exterior" />
			</div>
		</div>
		<div class="popup-container" onclick="closePopup()">
			<img src="" class="popup-content" id="popup-image" alt="Imagen en ventana emergente">
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
			function openPopup(imageSrc) {
				var popup = document.querySelector('.popup-container');
				var popupImage = document.getElementById('popup-image');
				popupImage.src = imageSrc;
				popup.style.display = 'flex';
			}
			function closePopup() {
				var popup = document.querySelector('.popup-container');
				popup.style.display = 'none';
			}
		</script>
	</body>
</html>
