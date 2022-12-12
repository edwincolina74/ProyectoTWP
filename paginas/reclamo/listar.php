<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link rel="stylesheet" type="text/css" href="../../css/estilos1.css">
    <link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/tablasbd.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	include "../../Intro/cabecera.php"
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
	include "../../Intro/piepagina.php"
	?>

	<!-- FIN: PIE DE PAGINA -->
</body>
=======
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/tablasbd.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilos1.css">
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
	<?php
	include "../../Intro/cabecera.php";
	require('../../controlador/conexionreclamo.php');
		$conn = conectar();
	?>
		<h2>Listar Reclamos</h2>

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
	

	<!-- FIN: PIE DE PAGINA -->
</body>
>>>>>>> 0b7a7e129bd636fc28402437e72afd959e0003ea
</html>