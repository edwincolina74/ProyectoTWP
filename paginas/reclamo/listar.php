<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/tablasbd.css">
</head>
<body>
	<?php
	include "../Intro/cabecera.php"
	?>
		<h2>Listar reclamos</h2>

<div>
	<table>
		<tr class="tabehead">
			<th>Codigo</th>
			<th>Numero de Personas</th>
			<th>Tipo de bien</th>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Mensaje</th>
		</tr>
			<?php
				foreach (listarReclamo($conn) as $key => $value) {
			?>
			<tr>
				<td><?=$value[0]?></td>
				<td><?=$value[1]?></td>
				<td><?=$value[2]?></td>
                <td><?=$value[3]?></td>
                <td><?=$value[4]?></td>
                <td><?=$value[5]?></td>
			</tr>
			<?php
				}
				?>
		</table>		
</div>

	<!-- PIE DE PAGINA -->
	<?php
	include "../Intro/piepagina.php"
	?>

	<!-- FIN: PIE DE PAGINA -->
</body>
</html>