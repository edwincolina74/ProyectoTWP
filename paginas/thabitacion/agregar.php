<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<form action="../../llamadas/proceso_tipohab.php" method="post">
			<label>Código de Tipo Habitación :</label>
			<input type="text" name="codigo"><br>
			<label>Nombre de Tipo de Habitación :</label>
			<input type="text" name="nombre"><br>
			<label>Precio de Tipo de Habitación :</label>
			<input type="text" name="precio"><br>
			<label>Precio por ser Miembro preferente :</label>
			<input type="text" name="preciop"><br>
			<label>Descripcion de Tipo de Habitacion :</label>
			<input type="text" name="descripcion"><br>
			<label>Cantidad por Tipo de Habitaciones Disponibles :</label>
			<input type="text" name="cantidad"><br>
			<input type="submit" name="accion" value="Aceptar">
		</form>

</body>
</html>