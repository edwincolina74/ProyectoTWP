<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/tablasbd.css">
</head>
<body>
	<?php
	include "../../Intro/cabecera.php"
	require('../../controlador/conexionreclamo.php');
		$conn = conectar();
	?>
	<h2>Listar Reclamos</h2>

<div class="contenedor-novedad">
	<table>
		<tr class="tabehead">
			<th>Codigo</th>
			<th>Nombre</th>
            <th>Tipo documento</th>
            <th>Distrito</th>
            <th>Numero documento</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
		</tr>
			<?php
				foreach (ListarDatos($conn) as $key => $value) {
			?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td><?=$value[2]?></td>
                <td><?=$value[3]?></td>
                <td><?=$value[4]?></td>
                <td><?=$value[5]?></td>
                <td><?=$value[6]?></td>
                <td><?=$value[7]?></td>
			</tr>
			<?php
				}
				?>
		</table>		
</div>
</body>
</html>