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
		$lista = listarHabitacion($conn)
	?>

	<table>
		<tr>
			<th>Código de Habitación</th>
			<th>Estado de Habitación</th>
			<th>Fecha Ocupacion</th>
			<th>Fecha Desalojo</th>
			<th>Código de Usuario</th>
			<th>Codigo de Tipo de Habitación</th>
			<th colspan="2">Acciones</th>
			
			

		</tr>


		<?php
			foreach (listarHabitacion($conn) as $key => $value) {
		?>
			<tr>
				<td><?= $value[0]?></td>
				<td><?= $value[1]?></td>
				<td><?= $value[2]?></td>
				<td><?= $value[3]?></td>
				<td><?= $value[4]?></td>
				<td><?= $value[5]?></td>
				
				<td>
					<a href="../../llamadas/proceso_habitacion.php?accion=eliminar&codigo=<?= $value[0] ?>">Eliminar</a>
				</td>
				<td>
					<a href="editar.php?codigo=<?=$value[0]?>">Modificar</a>
				</td>
				
			</tr>


		<?php 
		}
		?>
	</table>




</body>
</html>