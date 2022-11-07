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
		$datos = buscarHabitacion($cod,$conn);

	?>
		<form action="../../llamadas/proceso_habitacion.php" method="post" enctype="multipart/form-data">

			<input type="hidden" name="codigo" value="<?=$cod?>"><br>
			<label>Estado de la Habitación</label>
			<input type="text" name="estado" value="<?=$datos[1]?>"><br>
			<label>Fecha de ocupacion de la Habitación</label>
			<input type="text" name="fechaOcupacion" value="<?=$datos[2]?>"><br>
			<label>Fecha de desalojo de la Habitación</label>
			<input type="text" name="fechaDesalojo" value="<?=$datos[3]?>"><br>
			<label>Codigo de usuario</label>
			<input type="text" name="codigoUsuario" value="<?=$datos[4]?>"><br>
		<!--	<label>Codigo de Tipo de Habitaciones :</label>
			<input type="text" name="cantidad" value="<?=$datos[4]?>"><br>-->
			

			<input type="submit" name="accion" value="Actualizar">
		</form>


<!--                   ABEL   -->

</body>
</html>