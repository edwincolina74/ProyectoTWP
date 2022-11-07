<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$cod = $_REQUEST['cod'];
		include_once '../../controlador/conexion_contact.php'
		$conn= conectar();
		$datos = buscarContactanos($cod,$conn);
	 ?>

	<form action="../../llamadas/proceso_contactanos.php" method="post">
		
		<input type="hidden" name="cod" value="<?=$cod?>"><br>
		<label>Nombre</label>
		<input type="text" name="nomb" value="<?$datos[0]?>"><br>
		<label>Apellido</label>
		<input type="text" name="apell" value="<?$datos[1]?>"><br>
		<label>Teléfono</label>
		<input type="int" name="telef" value="<?$datos[2]?>"><br>
		<label>email</label>
		<input type="text" name="email" value="<?$datos[3]?>"><br>
		<label>Comentario</label>
		<input type="text" name="comentario" value="<?$datos[4]?>"><br>
		<input type="submit" name="accion" value="Actualizar">
	</form>
</body>
</html>