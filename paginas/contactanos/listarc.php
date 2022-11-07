<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		include_once '../../controlador/conexion_contact.php';
		$conn =	conectar();
		$lista = listarContactanos($conn)
	?>

	<table>
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>Comentario</th>
			<th colspan="2">Acciones</th>
		</tr>
		
		<?php 
		foreach (listarContactanos($conn) as $key => $value) {
		?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td><?=$value[2]?></td>
				<td><?=$value[3]?></td>
				<td><?=$value[4]?></td>
				<td><?=$value[5]?></td>
				<td>
					<a href="../../llamadas/proceso_contactanos.php?accion=eliminar&cod=<?= $value[0] ?>">Eliminar</a>
				</td>
				<td>
					<a href="editarc.php?cod=<?=$value[0]?>">Modificar</a>
				</td>

			</tr>

		<?php 
		}
		?>
	</table>

</body>
</html>