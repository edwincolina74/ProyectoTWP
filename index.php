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
	include "Intro/header.php"
?>


	<img id="imagen-portada" src="imagenes/inicio/portada10.jpg">
	<h1 class="centrado titulo-color">BIENVENIDO AL HOTEL IMPERIAL Y CENTRO DE CONVENCIONES</h1>	

	<!-- PORTADA     -->
	<section>
		
		<div class="texto-portada">
			<h3 class="centrado"> Hotel y centro de convenciones en Miraflores</h3>
			<p class="centrado">Somos un hotel de larga tradición, de carácter multimarca e internacional, que se caracteriza por ser una empresa seria, solvente, simpática e innovadora, que aporta confianza y credibilidad. Nuestra pasión e ilusión es crear experiencias únicas avanzando con el máximo compromiso social.
			Queremos se la empresa mejor valorada tanto por nuestros Huéspedes como por nuestro Colaboradores. Formamos un gran equipo comprometido en fidelizar a nuestros Huéspedes y trabajamos para ser líderes en nuestro sector.</p>
		</div>

	</section>
	<!--FIN PORTADA    -->
	<hr>

	<!-- MAIN -->

	<main class="centrado">

		<!-- HABITACIONES   -->
		<h1 class="titulo-color">HABITACIONES</h1>	
		<div class="habitaciones">
			<div class="foto-habitaciones item-habitaciones">
				<img src="imagenes/inicio/superior.jpg">
				<p>Las habitaciones están situadas entre los pisos 2 y 7 y cuentan con una cama tamaño king o dos camas dobles, internet WiFi, Smart TV curvo de 49" con señal digital, dos líneas de teléfono con buzón de voz, reloj despertador, caja fuerte, cafetera y un minibar. </p>

				<div class="resev">
					<a  href="paginas/gestion/reservarahora.php" target="blank">RESERVAR AHORA</a>
				</div>
			</div>

			<div class="foto-habitaciones item-habitaciones">
				<img src="imagenes/inicio/plus.jpg">
				<p>Las habitaciones están ubicadas en los pisos del 8 al 11. Cuentan con una cama King o dos camas dobles, internet WiFi, Smart TV curvo de 49" con señal digital, carta de almohadas, máquina de café ILLY, despertador con puerto para iPod, caja de seguridad digital.</p>
				<div class="resev">
					<a  href="paginas/gestion/reservarahora.php" target="blank">RESERVAR AHORA</a>
				</div>
			</div>

			<div class="foto-habitaciones item-habitaciones">
				<img src="imagenes/inicio/lujo.jpg">
				<p>Se encuentra desde los pisos 12 al 14 en una ubicación privilegiada para brindarle una vista espectacular de una de las áreas verdes más grandes de la ciudad, carta de almohadas, máquina de café ILLY, cuentan con una cama tamaño king o dos camas dobles</p>
				<div class="resev">
					<a  href="paginas/gestion/reservarahora.php" target="blank">RESERVAR AHORA</a>
				</div>
			</div>
		</div>

		<!--   -->


		<hr>
		<!-- RESTAURANTES Y BARES    -->

		<h1 class="titulo-color">RESTAURANTES Y BARES</h1>
		<div class="restaurantes  videos-restaurantes ">
			<video src="video\Restaurante.mp4"controls preload="auto"></video>	
			<p>Con distintivos restaurantes gourmet y lounges que han recibido premios y críticas muy favorables, Hotel Imperial y Centro de Convenciones ofrece a sus huéspedes una elegante variedad de experiencias gastronómicas durante todo el día.Con distintivos restaurantes gourmet y lounges que han recibido premios y críticas muy favorables, Hotel Imperial y Centro de Convenciones ofrece a sus huéspedes una elegante variedad de experiencias gastronómicas durante todo el día. </p>
		</div>
		<div>

		</main>

		<!-- FIN MAIN -->
		<br>
		<br>


<?php
	include "Intro/footer.php"
?>


</body>
</html>

