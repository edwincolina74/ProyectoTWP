<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos1.css">
    <link rel="stylesheet" href="../../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/reserv.css">
    <script type="text/javascript" src="js/reservas.js"></script>
</head>
<body>

<?php
    include "../../Intro/cabecera.php"
?>


    <?php 
        require '../../controlador/conexion.php';
        $conn = conectar();
        $lista = listarTipoHab($conn);
    ?>


<br>
    <div > 
        
        <form  class="contenedorHIS" method="post">
            <div>  
                    <h1>RESERVAS</h1>
                    <label>SELECCIONE TIPO DE HABITACION </label>

                <select name="tHabitacion" onchange="this.form.submit()">
                        <option>-- Seleccionar-- </option>  
                    <option value="todos">-- Todos--</option>
                    <?php
                        foreach (listarTipoHab($conn) as $key => $value) {
                    ?>
                        <tr> <option value=<?= $value[0]?> ><?= $value[1]?></option> </tr>
                    <?php 
                        }
                    ?>
                </select>

                    <br><br><br>
   <!--                 <input type="submit" name="enviar" value="Buscar"> -->
            </div>
        </form>


</div>

                 <?php

                    $cthab = "todos";
                    if(isset($_REQUEST['tHabitacion'])){
                        $cthab= $_REQUEST['tHabitacion'];
 
                    }
                    if ($cthab=="todos") 
                        $vector = listarTipoHab($conn);
                    else
                        $vector = buscarTipoHab($cthab,$conn);
                        
                ?>

        <?php
            foreach ($vector as $key => $value) {
        ?>
            <div class="contenedor-thab">
                <p class="negrita">Tipo de Habitacion:</p>
                <p><?= $value[1]?></p> 
                <p class="negrita">Precio de Tipo de Habitacion:</p>
                <p><?= $value[2]?></p>
                <p class="negrita">Descripcion de la Habitacion:</p>
                <p><?= $value[4]?></p>
                <p><img src="../<?= $value[6]?>" width="100" height="100"></p>
 
                <p>Acciones: <a href="">ELEGIR</a>
                </p>
            </div>

        <?php 
        }
        ?>


<?php
    include "../../Intro/piepagina.php"
?>

          
</body>
</html>


