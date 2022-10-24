<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 2</title>
	<link rel="stylesheet" type="text/css" href="css/reclamo.css">
	<script type="text/javascript" src="js/ejercicio 1.js"></script>
	<script type="text/javascript" src="js/reclamos.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<!-- CABECERA --> 
	<?php
	include "Intro/cabecera.php"
	?>

<h3 class="fila">Ejercicio 2:</h3>
		<form>
			<div >
				<label class="controls">Ingrese Cantidad de Números Aleatorios:</label><br>
            <br>
				<input Class="controls" type="number" name="cantidadnum" onkeypress="return ValidaSoloNumeros()"><br>
			</div>
			<div >
				<input class="boton" type="submit" name="cal" value="Calcular"><br>
			</div>
			<div >
				<?php
				$cant = 0;
				if (isset($_GET['cal'])) {
					$cant = $_GET['cantidadnum'];
					$numeros;
					echo "<table border='5'><tr><td>Número</td><td>Suma de dígitos</td><td>Descripcion</td></tr>";
					for ($i = 0; $i <= ($cant - 1); $i++) {
						$numeros[$i] = mt_rand(20, 100);
						echo "<tr><td>$numeros[$i]</td>";
						$sum = 0;
						while ($numeros[$i] != 0) {
							$sum = $sum + ($numeros[$i] % 10);
							$numeros[$i] = $numeros[$i] / 10;
						}
						//echo "<tr><td>".$sum."</td></tr>";
						$des = $sum;
						if ($des % 2 == 0) {
							$des = "par";
							//echo "par"."<br>";
						} else {
							$des = "impar";
							//echo "impar"."<br>";
						}
						echo "<td>$sum</td><td>$des</td></tr>";
					}
					echo "</table>";
				}
				?>
			</div>
			<br>
		</form>

</body>

</html>