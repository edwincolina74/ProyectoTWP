<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROYECTO HOTEL IMPERIAL</title>

	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	
</head>
<body>

<?php
	include "Intro/cabecera.php"
?>

<br>
<h1 class="titulo" >CONTACTO Y UBICACIÓN</h1>
<p>Con una ubicación ideal en el exclusivo distrito de Miraflores, Hotel Imperial ofrece los mejores alojamientos cinco estrellas en Lima. Ya sea que esté planeando un viaje de negocios o una escapada de fin de semana con la familia, nuestro  cordial y calificado personal se asegurará que su estadía sea lo más cómoda y memorable posible.</p>
<br>

<section id=contacto>
	<h2 class="titulo1">CONTÁCTENOS</h2>

	<p>Contáctame por *</p>

	<form id="forma" method ="post" action="salidacontactoyubicacion.php">
		<div class="form2">
			<input type="radio" id="correo" name="contactame">Correo
			<input type="radio" id="telefono" name="contactame">Teléfono
		</div>
		<div class="form2">
			<label>Nombre:</label>
			<input type="text-align" id="nombre" name="nombre" onkeypress="return soloLetras(event)" required>
		</div>
		<div class="form2">
			<label>Apellido:</label>
			<input type="text-align" id="apellido" name="apellido" onkeypress="return soloLetras(event)" required>
		</div>
		<div class="form2">
			<label>Teléfono:</label>
			<input type="tel" id="telefono" name="telefono" onkeypress="return ValidaSoloNumeros()" required>
		</div>
		<div class="form2">
			<label>Email:</label>
			<input type="email" id="correo" name="correo" required>
		</div>
		<div class="form2">
			<label>Comentario:</label>
			<textarea id="comentario" name="comentario" rows="1"></textarea>
		</div>
	</form>
<br>	

<input type="checkbox" name="inf">Acepto que este sitio web almacene la información que he enviado para que puedan responder a mi consulta.
<br>

	<div class="botonenvio">
		<div class="botonenvio1">
		<button type="button" onclick="validar();" respuesta name="enviar">
			<img src="imagenes/contactanos/enviar1.png" alt= "enviar">
		</button>
		</div>		
	</div>
</section>
<br><br>


<div class="contacto1">
	<div>
		<h3 class="titulo1" ;>HOTEL IMPERIAL</h3>
		<p>Si tiene alguna pregunta o comentario sobre nuestro hotel o le gustaría saber más sobre las atracciones del área, contáctenos y con gusto lo atenderemos.</p>
		<p>Av.Calle los claveles 55</p>
		<p>Miraflores, Perú</p>
		<p>Telef.(511) 285-3015</p>
		<p>correo:consultas@hotelimperial.com.pe</p>
	</div>	

	<div >
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31206.90499060136!2d-77.0287834!3d-12.121516399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8199ea33425%3A0xbfe3626e9c3a156a!2sMiraflores!5e0!3m2!1ses-419!2spe!4v1662352869178!5m2!1ses-419!2spe"width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
	</iframe>
	</div>
</div>

<!-- PIE DE PAGINA -->


<?php
	include "Intro/piepagina.php"
?>	


</body>
</html>	
