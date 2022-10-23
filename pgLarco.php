<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<link rel="stylesheet" type="text/css" href="css/atracciones.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Pacifico&family=Playball&family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Pacifico&family=Playball&display=swap" rel="stylesheet">
	<script type="text/javaScript" src="js/atracciones.js"></script>
</head>
<body>
	<!-- CABECERA -->
	<?php
	include "Intro/cabecera.php"
	?>
	<!-- FIN CABECERA    -->
	<div class="enlaces">
		<p><a href="atracciones.html">Atracciones Turísticas</a> >&nbsp;&nbsp;MUSEO LARCO</p>
	</div>
	<br><br>
	<div class="titulos-pg">
		<h1>Museo Larco</h1>
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
            <img src="imagenes/slider/museo/img-1.jpg" alt="">
        </div>
        <div class="image">
            <img src="imagenes/slider/museo/img-2.jpg" alt="">
        </div>
        <div class="image">
            <img src="imagenes/slider/museo/img-3.jpg" alt="">
        </div>
        <div class="image">
            <img src="imagenes/slider/museo/img-4.jpg" alt="">
        </div>
        <div class="image">
            <img src="imagenes/slider/museo/img-5.jpg" alt="">
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

	<!-- PIE DE PAGINA -->
	<?php
	include "Intro/piepagina.php"
	?>
	<!-- FIN: PIE DE PAGINA -->

</body>
</html>