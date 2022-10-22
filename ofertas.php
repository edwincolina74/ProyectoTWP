<!DOCTYPE html>
<html>
<head>
	<title>Ofertas</title>
	<link rel="stylesheet" type="text/css" href="css/ofertas.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/ofertas.js"></script
</head>
<body>
	<!-- CABECERA -->
	<header class="cabecera">
		<a href="index.html"><img src="imagenes/inicio/logohotel.png"></a>
		<nav class="navegacion">
			<a href="index.html">HOTEL IMPERIAL</a>
			<a href="habitaciones.html" >Habitaciones</a>
			<a href="ofertas.html">Paquetes y Ofertas</a>
			<a href="eventos.html">Eventos</a>
			<a href="bodas.html">Bodas</a>
			<a href="servicios.html">Servicios</a>
			<a href="atracciones.html">Atracciones locales</a>
			<a href="contactoyubicacion.html">Contáctanos</a> 
			<a href="ejercicios.html" target="contenido">Ejercicios</a>
		</nav>
		<a href="index.html"><img src="imagenes/inicio/logohotel.png"></a>
	</header>
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
	<nav class="navegacion2"><h3><a href="habitaciones.html">HABITACIONES</a></h3></nav>

	<!-- PIE DE PAGINA -->

	<footer >

		<div class="contenedor-pie-pagina1">

			<div class="pie-columna1">
				<a href="index.html"><h1>HOTEL IMPERIAL</h1></a> 
				<p>Calle los claveles 155, Lima, Perú</p>
				<p>(511) 285-3015</p>
				<p>consulta@hotelimperial.com.pe</p>
			</div>

			<form class="pie-subscribete">
				<label>SUBSCRIBETE</label>
				<input type="email" name="nombre" placeholder="Ingresar correo electrónico">
				<input type="submit" name="aceptar" value="REGISTRATE">
			</form>
		</div>

		<div class="contenedor-pie-pagina2" >
			<div>
				<h2><a href="contactoyubicacion.html">CONTACTO Y UBICACION </a></h2>
			</div>
			<div >
				<h2><a href="miembrospreferentes.html">MIEMBROS PREFERENTES </a></h2>
			</div>
			<div class="pie-columna2">		
				<div>		
					<h1>SIGUENOS </h1>
				</div>
				<div class="iconos-tamano">
					<p>
						<a href="https://web.facebook.com/Hoteles.com/about/?ref=page_internal&_rdc=1&_rdr"><img src="imagenes/inicio/facebook.png">
							<a href="https://twitter.com/riuhoteles" ><img src="imagenes/inicio/twitter.png">
								<a href="https://www.instagram.com/hotelsdotcom/"><img src="imagenes/inicio/instagram.png">
									<a href="https://www.youtube.com/channel/UCrpymEUtWUYzLoK-fGG8uXA"><img src="imagenes/inicio/youtube.png">
									</p>
								</div>
							</div>
							<div>
								<h2><a href="libro.html"> Libro de Reclamaciones </a></h2>
							</div>
						</div>
					</footer>
					<!-- FIN: PIE DE PAGINA -->

				</body>
				</html>

