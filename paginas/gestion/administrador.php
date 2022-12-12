<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/administrador.css">
	<link rel="stylesheet" href="../../css/style.css"> 
	<link rel="stylesheet" type="text/css" href="../../css/estilos1.css">
	<link rel="stylesheet" type="text/css" href="../../css/entrega4.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">




</head>
<body>

<?php
	include "../../Intro/cabecera.php"
?>

	<div class="principal letrasadm ">
		<h1 style="color: #9F6B3D;">MENU DE GESTION</h1>

		<h1 class="tamanoadm">Libro de Reclamaciones</h1>		
		<a href="../datosreclamos/listar.php">Mostrar personas que reclamaron</a><br><br>
		<a href="../reclamo/listar.php">Mostrar detalles de reclamos</a><br><br>

		<h1 class="tamanoadm">Tipo de Habitaciones</h1>
			<a href="../thabitacion/agregar.php">Agregar tipo de habitación</a><br>
			<a href="../thabitacion/listar.php">Listar Tipos de habitación</a><br>


		<h1 class="tamanoadm">Habitaciones</h1>
		<a href="../habitacion/agregar.php">Agregar habitación</a><br>
		<a href="../habitacion/listar.php">Listar habitación</a><br>


		<h1 class="tamanoadm">Contactanos</h1>
		<a href="../contactanos/agregarc.php">Agregar contáctanos</a><br>
		<a href="../contactanos/listarc.php">Listar contáctanos</a><br>

		<h1 class="tamanoadm">Planificacion</h1>
		<a href="../planificacion/formulario.php">Agregar Planificacion</a><br>
		<a href="../planificacion/listar.php">Listar Planificacion</a><br>




<!--
		<h1 class="tamanoadm">Libro de reclamaciones</h1>
		<a href="paginas/producto/agregar.php">Agregar Producto</a><br>
		<a href="paginas/producto/listar.php">Listar Producto</a><br>

		<h1 class="tamanoadm">Planificacion</h1>
		<a href="paginas/producto/agregar.php">Agregar Producto</a><br>
		<a href="paginas/producto/listar.php">Listar Producto</a><br>

		<h1 class="tamanoadm">Miembros Preferentes</h1>
		<a href="paginas/producto/agregar.php">Agregar Producto</a><br>
		<a href="paginas/producto/listar.php">Listar Producto</a><br>

		<h1 class="tamanoadm">Reservaciones</h1>
		<a href="paginas/producto/agregar.php">Agregar Producto</a><br>
		<a href="paginas/producto/listar.php">Listar Producto</a><br> 
	-->
	
	</div>

<br><br><br><br>

<?php
	include "../../Intro/piepagina.php"
?>

</body>
</html>