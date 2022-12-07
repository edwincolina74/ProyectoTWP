<!DOCTYPE html>
<html>
<head>
	<title>Ofertas</title>
	<link rel="stylesheet" type="text/css" href="css/ofertas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/ofertas.js"></script>
</head>
<body>
	<!-- CABECERA -->
	<?php
	include "Intro/cabecera.php"
?>

	<!-- FIN CABECERA    -->
	<div><h1 class="centrar">¡Super ofertas!</h1></div>
	<div><h2 class="centrar2">Ofertas en Alojamiento</h2></div>
	<div class="parrafo">
		<p >En nuestro lujoso y comodo Hotel Imperial, usted encontrara ofertas que se ofrecen por temporadas y tambien por el tipo de paquetes que desea reservar, es por eso que le mostraremos algunas ofertas comodas,</p>
		<p>puesto que ofrecemos buena calidad de acuerdo a sus nescesidades y/o requerimientos, siempre velamos por brindar un servivio completo, que el cliente quede satisfecho y vuelva con la confianza que se brindo.</p>
	</div>
	<div align="right">
		<input type="button" onclick="cambio()" value="Conversion de moneda">
	</div>
	<div class="tabla">
		<div class="fila">
			<div class="celda">
				<h3>OFERTA ESPECIAL</h3>
			</div>
			<div class="celda">
				<h3>OFERTA DE VERANO</h3>
			</div>
			<div class="celda">
				<h3>MIEMBRO IPREFER</h3>
			</div>
		</div>

		<div class="fila">
			<div class="celda" id="ima">
				<img class="espe" src="imagenes/ofertas/especial.gif">
			</div>
			<div class="celda" id="ima">
				<img class="espe" src="imagenes/ofertas/verano.jpg">
			</div>
			<div class="celda" id="ima">
				<img class="espe" src="imagenes/ofertas/iprefer.gif">
			</div>
		</div>

		<div class="fila">
			<div class="celda">
				<p><strike id="celda0">S/200.00</strike></p>
			</div>
			<div class="celda">
				<p><strike id="celda1">S/120.45</strike></p>
			</div>
			<div class="celda">
				<p><strike id="celda2">S/1000.00</strike></p>
			</div>
		</div>

		<div class="fila">
			<div class="celda">
				<p class="precio" id="celda3">S/50.00</p>
			</div>
			<div class="celda">
				<p class="precio" id="celda4">S/78.00</p>
			</div>
			<div class="celda">
				<p class="precio" id="celda5">S/800.00</p>
			</div>
		</div>
	</div>
	<br>
	<div class="tabla">
		<div class="fila">
			<div class="celda">
				<h3>SUIT RELAJANTE</h3>
			</div>
			<div class="celda">
				<h3>SUIT ROMANTICA</h3>
			</div>
			<div class="celda">
				<h3>SUIT PARA DEPORTISTAS</h3>
			</div>
		</div>

		<div class="fila">
			<div class="celda"  id="ima">
				<img class="espe" src="imagenes/ofertas/relajante.jpg">
			</div>
			<div class="celda"  id="ima">
				<img class="espe" src="imagenes/ofertas/romantico.gif">
			</div>
			<div class="celda"  id="ima">
				<img class="espe" src="imagenes/ofertas/aventura.jpeg">
			</div>
		</div>

		<div class="fila">
			<div class="celda">
				<p><strike id="celda6">S/550.00</strike></p>
			</div>
			<div class="celda">
				<p><strike  id="celda7">S/599.00</strike></p>
			</div>
			<div class="celda">
				<p><strike  id="celda8">S/360.20</strike></p>
			</div>
		</div>

		<div class="fila">
			<div class="celda">
				<p class="precio" id="celda9">S/509.00</p>
			</div>
			<div class="celda">
				<p class="precio" id="celda10">S/529.00</p>
			</div>
			<div class="celda">
				<p class="precio" id="celda11">S/308.40</p>
			</div>
		</div>
	</div>
	<br>
	<div class="tabla">
		<div class="fila">
			<div class="celda">
				<h3>LARGA ESTADIA</h3>
			</div>
			<div class="celda">
				<h3>OFERTA BIG FAMILY</h3>
			</div>
			<div class="celda">
				<h3>RESERVA ANTICIPADA</h3>
			</div>
		</div>

		<div class="fila">
			<div class="celda" id="ima">
				<img class="espe" src="imagenes/ofertas/estadia.gif">
			</div>
			<div class="celda" id="ima">
				<img class="espe" src="imagenes/ofertas/family.jpg">
			</div>
			<div class="celda" id="ima">
				<img class="espe" src="imagenes/ofertas/anticipada.gif">
			</div>
		</div>

		<div class="fila">
			<div class="celda">
				<p><strike id="celda12">S/199.90</strike></p>
			</div>
			<div class="celda">
				<p><strike id="celda13">S/2499.00</strike></p>
			</div>
			<div class="celda">
				<p><strike id="celda14">S/300.00</strike></p>
			</div>
		</div>

		<div class="fila">
			<div class="celda">
				<p class="precio" id="celda15">S/129.45</p>
			</div>
			<div class="celda">
				<p class="precio" id="celda16">S/529.00</p>
			</div>
			<div class="celda">
				<p class="precio" id="celda17">S/150.00</p>
			</div>
		</div>
	</div>
	</main>
	<hr>
	<nav class="navegacion2"><h3><a href="habitaciones.php">HABITACIONES</a></h3></nav>

	<!-- PIE DE PAGINA -->

	<?php
	include "Intro/piepagina.php"
	?>
					<!-- FIN: PIE DE PAGINA -->

				</body>
				</html>

