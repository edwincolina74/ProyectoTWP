<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		$cod = $_REQUEST['codigo'];
		require '../../controlador/conexion.php';
		$conn =	conectar();
		$datos = buscarTipoHab($cod,$conn);

	?>
		<form action="../../llamadas/proceso_tipohab.php" method="post">

			<input type="hidden" name="codigo" value="<?=$cod?>"><br>
			<label>Nombre de Tipo de Habitación</label>
			<input type="text" name="nombre" value="<?=$datos[0]?>"><br>
			<label>Precio de Tipo de Habitación</label>
			<input type="text" name="precio" value="<?=$datos[1]?>"><br>
			<label>Precio por ser Miembro preferente</label>
			<input type="text" name="preciop" value="<?=$datos[2]?>"><br>
			<label>Descripcion de Tipo de Habitacion</label>
			<input type="text" name="descripcion" value="<?=$datos[3]?>"><br>
			<label>Cantidad por Tipo de Habitaciones Disponibles</label>
			<input type="text" name="cantidad" value="<?=$datos[4]?>"><br>

			<input type="submit" name="accion" value="Actualizar">
		</form>




</body>
</html>