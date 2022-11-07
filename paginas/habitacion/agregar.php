<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
 

    <?php 
		require '../../controlador/conexion.php';
		$conn =	conectar();
		
	?>

		<form action="../../llamadas/proceso_habitacion.php" method="post" enctype="multipart/form-data">

			<label>Código de Habitación :</label>
			<input type="text" name="codigo"><br>

			<label>Estado de la Habitación :</label>
			<input type="text" name="estado"><br>

			<label>Fecha de ocupacion de la Habitación :</label>
			<input type="text" name="fechaOcupacion"><br>

			<label>Fecha de desalojo de la Habitación:</label>
			<input type="text" name="fechaDesalojo"><br>

			<label>Codigo de usuario :</label>
			<input type="text" name="codigoUsuario"><br>

			<label>Codigo de Tipo de Habitaciones :</label>
			<input type="text" name="codigoTipoHabitacion"><br>
			
			<input type="submit" name="accion" value="Aceptar">
		</form>



</body>
</html>