<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<link rel="stylesheet" type="text/css" href="../../../css/atracciones.css">
	<link rel="stylesheet" type="text/css" href="../../../css/estilos1.css">
	<link rel="stylesheet" href="../../../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Pacifico&family=Playball&family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Pacifico&family=Playball&display=swap" rel="stylesheet">
	<script type="text/javaScript" src="../../../js/atracciones.js"></script>
</head>
<body>
	<!-- CABECERA! -->
	<header class="cabecera">
		<div><a href="index.php"><img src="../../../Imagenes/inicio/logohotel.png"></a> </div>
		<div class="cabeceracolorletra"><a href="../../../index.php">HOTEL IMPERIAL</a> </div>
		<div class="cabeceracolorletra"> <a href="../habitaciones.php" >Habitaciones</a> </div>
		<div class="cabeceracolorletra"><a href="../ofertas.php">Paquetes y Ofertas</a> </div>
		<div class="cabeceracolorletra"><a href="../eventos.php">Eventos</a></div>	
		<div class="cabeceracolorletra"><a href="../bodas.php">Bodas</a> </div>
		<div class="cabeceracolorletra"><a href="../servicios.php">Servicios</a></div>
		<div class="cabeceracolorletra"><a href="../atracciones.php">Atracciones locales</a></div>
		<div class="cabeceracolorletra"><a href="../contactoyubicacion.php">Contactanos</a></div> 
		<div class="cabeceracolorletra"><a href="../bak/administrador.php" target="contenido">ADMINISTRADOR</a></div> 
		<div><a href="index.php"><img src="../../../Imagenes/inicio/logohotel.png"></a> </div>
	</header>
	<!-- FIN CABECERA -->
	<div class="enlaces">
		<p><a href="../atracciones.php">Atracciones Turísticas</a> >&nbsp;&nbsp;EL TEMPLO DE PACHACAMAC</p>
	</div>
	<br><br>
	<div class="titulos-pg">
		<h1>El Templo de Pachacamac</h1>
		<div class="info">
		<p>Seguramente escondida en una calle lateral está la Casa Aliaga, una de las menos conocidas atracciones turísticas de Lima. 
			Tan antigua como la propia Lima, la casa se encuentra en la tierra dada en 1535 a Jerónimo de Aliaga, uno de los seguidores de Pizarro, y que ha sido ocupada por 18 generaciones de sus descendientes. 
			Basándose en sus excavaciones, los arqueólogos creen que Huaca Pucllana fue el centro ceremonial y administrativo de la cultura de la Lima temprana. 
			Muchos artefactos, incluyendo textiles, cerámicas y restos de animales se han encontrado aquí para apoyar esta teoría. 
			En algún tiempo, los sacrificios humanos tuvieron lugar aquí. 
			El complejo incluye la pirámide y un pequeño museo lleno de artefactos interesantes. Imposible perderse este sitio, una de las más interesantes atracciones turísticas de Lima.</p>
	
		</div>
	</div>

	<div class="container">
        <div class="image">
            <img src="../../../imagenes/slider/templo/img-1.jpg" alt="">
        </div>
        <div class="image">
            <img src="../../../imagenes/slider/templo/img-2.jpg" alt="">
        </div>
        <div class="image">
            <img src="../../../imagenes/slider/templo/img-3.jpg" alt="">
        </div>
        <div class="image">
            <img src="../../../imagenes/slider/templo/img-4.jpg" alt="">
        </div>
        <div class="image">
            <img src="../../../imagenes/slider/templo/img-5.jpg" alt="">
        </div>

        <div class="button">
            <a onclick="nextimg(-1)" class="prex">&#10094;</a>
            <a onclick="nextimg(1)" class="next">&#10095;</a>
        </div>

        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>

	<br><br>

	<!--PIE DE PAGINA-->

	<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col">
						<h4>HOTEL IMPERIAL</h4>
						<ul>
							<li> <p>Calle los claveles 155, Lima, Perú </p>	</li>
							<li><p>(511) 285-3015</p></li>
							<li> <p>consulta@hotelimperial.com.pe</p></li>

						</ul>
					</div>
					<div class="footer-col">
						<h4>INFORMACION</h4>
						<ul>
							<li><a href="../contactoyubicacion.php">Contacto y ubicación</a></li>
							<li><a href="../libro.php">libro de reclamaciones</a></li>

						</ul>    
					</div>
					<div class="footer-col">
						<h4>REGISTRATE</h4>
						<ul>
							<li><a href="../miembrospreferentes.php">miembros preferentes</a></li>
							
								<form class="pie-subscribete">
									<label>SUBSCRIBETE</label>
									<input type="email" name="nombre" placeholder="Ingresar correo electrónico">
									<input type="submit" name="aceptar" value="REGISTRATE">
								</form>
						</ul> 
					</div>
					<div class="footer-col">
						<h4>SIGUENOS</h4>
						<div class="social-links iconos-tamano">

						<a href="https://web.facebook.com/Hoteles.com/about/?ref=page_internal&_rdc=1&_rdr"> <img src="../../../imagenes/inicio/facebook.png"></a>
						<a href="https://twitter.com/riuhoteles" ><img src="../../../imagenes/inicio/twitter.png"></a>
							<a href="https://www.instagram.com/hotelsdotcom/"><img src="../../../imagenes/inicio/instagram.png"></a>
							<a href="https://www.youtube.com/channel/UCrpymEUtWUYzLoK-fGG8uXA"><img src="../../../imagenes/inicio/youtube.png"></a>

						</div>
					</div>
				</div>
			</div>
		</footer>

</body>
</html>