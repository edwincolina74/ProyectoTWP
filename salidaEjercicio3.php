   <!DOCTYPE html>
   <html>
   <head>
   	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" type="text/css" href="ejercicio3/ejercicio3.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">


   	<title></title>
   </head>
   <body>



<?php
	include "Intro/cabecera.php"
?>

<?php 

	$ncli= $_GET['nCliente'];
	$dcli= $_GET['dCliente'];
	$npro= $_GET['nProducto'];
	$tpro= $_GET['tProducto'];
	$puni= $_GET['pUnitario'];
	$cant= $_GET['cantidad'];


	switch ($tpro) {
		case 'Abarrotes':
			$descuento = ($cant<=6) ? $descuento=0.05 : $descuento=0.08;
			break;
		case 'Limpieza':
			$descuento = ($cant<=6) ? $descuento=0.07 : $descuento=0.10;
			break;
		case 'Juguetes':
			$descuento = ($cant<=6) ? $descuento=0.10 : $descuento=0.13;
			break;
		case 'Otros':
			$descuento = ($cant<=6) ? $descuento=0.12 : $descuento=0.15;
			break;		
	}

	$pagoFinal= ($puni-($puni*$descuento))*$cant;
	$porcentaje=($descuento*100);

?>

<table class="formulario colorbackw"border="1" >
	<tr>
		<td>Tipo</td>	
		<td>Hasta 6 Unidades</td>
		<td>De 6 a mas unidades</td>
	</tr>
	<tr>
		<td>Abarrotes</td>
		<td>5%</td>
		<td>8%</td>
	</tr>
	<tr>
		<td>Limpieza</td>
		<td>7%</td>
		<td>10%</td>
	</tr>
	<tr>
		<td>Juguetes</td>
		<td>10%</td>
		<td>13%</td>
	</tr>
	<tr>
		<td>Otros</td>
		<td>12%</td>
		<td>15%</td>
	</tr>

</table>
<br>

<table class="formulario colorbackc" border="1" >
	<tr>
		<td>DESCUENTO:</td>	
		<td>PAGO FINAL:</td>
	</tr>
	<tr>
		<td><?php echo $porcentaje."%" ?></td>
		<td><?= $pagoFinal ?></td>

	</tr>

</table>
<br><br><br>
<?php
	include "Intro/piepagina.php"
?>

</body>
</html>

