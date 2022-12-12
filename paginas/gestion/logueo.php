<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" type="text/css" href="../../css/estilos1.css">
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
	<!-- CABECERA -->
	<?php
		include "../../Intro/cabecera.php"
	?>
	<!-- FIN CABECERA    -->

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		<form id = "p1" action="../../llamadas/proceso_logueo.php" method="post">
			<label>Usuario</label>
			<input type="text" name="usuario"><br>
			<label>Contraseña</label>
			<input type="contraseña" name="cont"><br>
			<input type="submit" name="aceptar" value="Aceptar">
		</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<!-- PIE DE PAGINA -->

		<?php
	         include "../../Intro/piepagina.php"
        ?>

		<!-- FIN: PIE DE PAGINA -->



</body>
</html>
