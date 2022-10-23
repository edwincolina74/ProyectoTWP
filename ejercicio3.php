<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="ejercicio3/validacionEjercicio3.js"></script>
	<link rel="stylesheet" type="text/css" href="ejercicio3/ejercicio3.css">

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




	<div class="formulario colorbackn">
		<h4>EJERCICIO N°3</h4>
		<form method="GET" name="ejercicio3" action="salidaEjercicio3.php">
	
					<label class="controls">Nombre del cliente :</label><input class="controls" type="text" name="nCliente"><br>
					<label class="controls">Dirección del cliente:</label><input class="controls" type="text" name="dCliente"><br>
					<label class="controls">Nombre del producto:</label><input class="controls" type="text" name="nProducto"><br>
					<label>Tipo de Producto :</label>
					<select class="cont" name="tProducto">
						<option >Abarrotes</option>
						<option >Limpieza</option>
						<option >Juguetes</option>
						<option >Otros</option>
					</select> <br>

					<label class="controls">Precio unitario     :</label><br><input class="controls" type="text" name="pUnitario"><br>
					<label class="controls">Cantidad            :</label><br><input class="controls" type="text" name="cantidad" value=1><br><br>

					<input class="boton" type="button" name="" onclick="validarDatos()" value="CALCULAR PAGO FINAL"><br><br>
		</form>

	</div>

<br><br>


<?php
	include "Intro/piepagina.php"
?>


</body>
</html>