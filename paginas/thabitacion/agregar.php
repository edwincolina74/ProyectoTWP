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
		/*$lista = listarTipoHab($conn)*/
	?>

		<form action="../../llamadas/proceso_tipohab.php" method="post" enctype="multipart/form-data">

			<label>Código de Tipo Habitación :</label>
			<input type="text" name="codigo"><br>
			<label>Nombre de Tipo de Habitación :</label>
			<input type="text" name="nombre"><br>

<!--			<select>
				<?php
					foreach (listarTipoHab($conn) as $key => $value) {
				?>
					<option value="<?=$value[1]?>"><?=$value[1]?></option>
				<?php
				 }
				?>						
			</select> -->
			

			<label>Precio de Tipo de Habitación :</label>
			<input type="text" name="precio"><br>
			<label>Precio por ser Miembro preferente :</label>
			<input type="text" name="preciop"><br>
			<label>Descripcion de Tipo de Habitacion :</label>
			<input type="text" name="descripcion"><br>
			<label>Cantidad por Tipo de Habitaciones :</label>
			<input type="text" name="cantidad"><br>
			<label>Foto de las habitacion:</label>
			<input type="file" name="foto"><br>
			
			<input type="submit" name="accion" value="Aceptar">
		</form>

</body>
</html>