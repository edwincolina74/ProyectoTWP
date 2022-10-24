<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 1</title>
	<link rel="stylesheet" type="text/css" href="css/reclamo.css">
	<script type="text/javascript" src="js/ejercicio 1.js"></script>
</head>
<body>
	<form  id="enviar1" action="" class="tabla">
		<br>
		<div class="marco">
				<div class="efecto">
					<div class="contact-form">
		<h3 class="fila">Ejercicio 1:</h3>
			<div class="celda">
				<label>Nombre de operación</label>
				<input type="text" id="producto" name="producto" onkeypress="return Letras(event)"><br>
			</div>
			<br>
			<div class="celda">
				<label>Meses</label>
				<input type="number" id="meses" name="meses" onkeypress="return ValidarNumeros()"><br>
			</div>
			<br>
			<div class="celda">
				<label>Monto</label>
				<input type="number" id="monto" name="monto" onkeypress="return ValidarFloat()"><br>
			</div>
			<br>
			<div class="celda">
				<label>Tipo tarjeta</label>
				<select name="tarjeta" id="tarjeta">
					<option>Visa</option>
					<option>MasterCard</option>
					<option>America Express</option>
				</select>
			</div>
			<br>
			<br>
			<div class="celda">
				<input type="submit" id="enviar1" name="enviar1" value="Calcular" onclick="validar()">
			</div>

			<div class="fila">


				<?php

				if (isset($_GET["enviar1"])) {
					$producto = $_GET['producto'];
					echo "<table border= 1 >";
					echo "<caption>Amortización: " . $producto . "</caption>";
					echo "<tr>
						 <th> Mes </th>
						 <th> Cuota mensual </th> 
						 <th> Pago del Interes </th> 
						 <th> Pago del capital </th>
						 <th> Deuda </th>
						 </tr>";

					$cantmes = $_GET['meses'];
					$monto = $_GET['monto'];
					$target = $_GET['tarjeta'];
				if ($target == 'Visa') $interes = 0.03;
					else if ($target == 'MasterCard') $interes = 0.035;
					else $interes = 0.04;
					$cuota = (($monto * $interes) / (1 - (1 + $interes) ** (-$cantmes)));
					$pagoint = 0;

					for ($i = 1; $i <= $cantmes; $i++) {

						$pagoint = $monto * $interes;
						$pagocap = $cuota - $pagoint;
						$monto -= $pagocap;
						echo "<tr>
								<td>$i</td>
								<td>" . round($cuota, 2) . "</td>
								<td>" . round($pagoint, 2) . "</td>
								<td>" . number_format($pagocap, 2) . "</td>
								<td>" . number_format($monto, 2) . "</td>
								</tr>";
					}
					echo "</table>";
				}

				?>
			</div>
			</div>
			</div>
			</div>
			<br>
	</form>
</body>
</html>
