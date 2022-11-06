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
		$lista = listarTipoHab($conn)
	?>

	<table>
		<tr>
			<th>Código de Tipo Habitación</th>
			<th>Nombre de Tipo de Habitación</th>
			<th>Precio de Tipo de Habitación</th>
			<th>Precio por ser Miembro preferente</th>
			<th>Descripcion de Tipo de Habitacion</th>
			<th>Cantidad por Tipo de Habitaciones Disponibles</th>
			<th colspan="2">Acciones</th>

		</tr>

		<!--listartipohab($conn: va retornar un vector. $key: es el indice del vector y $value es el valor -->

		<?php
			foreach (listarTipoHab($conn) as $key => $value) {
		?>
			<tr>
				<td><?= $value[0]?></td>
				<td><?= $value[1]?></td>
				<td><?= $value[2]?></td>
				<td><?= $value[3]?></td>
				<td><?= $value[4]?></td>
				<td><?= $value[5]?></td>

				<td>
					<a href="../../llamadas/proceso_tipohab.php?accion=eliminar&codigo=<?= $value[0] ?>">Eliminar</a>
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