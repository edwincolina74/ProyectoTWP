<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ejercicio4.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['calcular'])){
        $num = $_POST['cantidad'];
        }
    ?>
    <!--
    <p>Cuantos números primos quieres que se presenten en pantalla?</p>
    <form method="post">
    <input name="cantidad" type="number" value="<?php if(isset($_POST['calcular'])) echo $num ?>"  onkeyup="soloNum(event)">
    <input type="submit" name="calcular" value="calcular">
    </form><br>
    -->
    <div class="formulario">
		<h4>EJERCICIO N°4</h4>
		<form method="post" name="ejercicio">
	
			<label class="controls">Ingrese Cantidad de Números Primos:</label><br>
            <br><input class="controls" type="number" name="cantidad" value="<?php if(isset($_POST['calcular'])) echo $num ?>"><br>
			<input class="boton" type="submit" name="calcular" value="CALCULAR">
		</form>
	</div>
    <br><br><br>
    <?php
        if(isset($_POST['calcular'])){
        $contador=0;
        $k=0;
        $num = $_POST['cantidad'];
            for($i=1 ; $k<$num;$i++){
                for($j=$i;$j>0;$j--){
                    if($i%$j==0){
                        $contador++;
                    }
                }
                if($contador==2){
                    $k++;
                    echo $i. " ";

                }
                $contador=0;
            }
        }
    ?>
</body>
</html>