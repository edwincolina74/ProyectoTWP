<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planificacion</title>
	<link rel="stylesheet" type="text/css" href="css/ofertas.css">
	<link rel="stylesheet" type="text/css" href="css/reclamo.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<!-- CABECERA --> 
	<?php
	include "Intro/cabecera.php"
	?>
	<!-- FIN CABECERA    -->
	<form id="formula">
		<h2 class="titulo1">Datos del Contacto</h2>
		<div class="marco">
			<div class="efecto">
				<div class="contact-form">
					<div>
						<label>Nombres:</label>
						<input type="text-align" name="nombre">
						&nbsp;
						<label>Teléfono:</label>
						<input type="tel" name="telf">
						&nbsp;
						<label>Email:</label>
						<input type="Email" name="email">
						&nbsp;
						<label>Telefono 2:</label>
						<input type="tel" name="telf">
					</div>
				</div>
			</div>
		</div>
		<br><br><br><hr>
		<div class="marco">
			<div class="efecto">
				<div class="contact-form">
					<h2 class="titulo1">Datos del Evento</h2>

					<div>
						<label>Fecha de Inicio</label>
						<input type="text-align" name="inicio">
						&nbsp;
						<label>Fecha de Finalizacion</label>
						<input type="text-align" name="fin">
					</div>
					<br>
					<div>
						<label>Cantidad de Invitados</label>
						<input type="tel" name="number">
						&nbsp;
						<label>Comentario:</label>
						<textarea name="comen"></textarea>
					</div>
				</div>
			</div>
		</div>
	</form>
	<br><br>
	<!-- PIE DE PAGINA -->
	<?php
	include "Intro/piepagina.php"
	?>
	<!-- FIN: PIE DE PAGINA -->
</body>
</html>