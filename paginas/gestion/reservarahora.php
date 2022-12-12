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
        
        <form  class="contenedorHIS">
            <div>  
                    <h1>RESERVAS</h1>
                    <label>SELECCIONE TIPO DE HABITACION </label>

                <select name="tHabitacion">
                    <?php
                        foreach (listarTipoHab($conn) as $key => $value) {
                    ?>
                        <tr> <option value=<?= $value[0]?> ><?= $value[1]?></option> </tr>
                    <?php 
                        }
                    ?>
                </select>

                <?php
                    echo $value[0];
                    echo $thabitacion.value;

                ?>
                    <br><br><br>
                    <input type="button" name="" value="Buscar">
            </div>
        </form>
 
</div>
<br><br><br>


    <table>
        <tr>
           <!-- <th>Código de Habitación</th> -->
            <!-- <th>Código de Usuario</th> -->
            <th>Tipo de Habitación</th>
            <th>Precio de Tipo de Habitación</th>
            <th>Cantidad de Habitaciones disponibles</th>
            <th>Descripcion de la Habitacion</th>
            <th>Foto de Tipo de Habitación</th>
            <th colspan="2">Acciones</th>
            
            

        </tr>


        <?php
            foreach (listarTipoHab($conn) as $key => $value) {
        ?>
            <tr>
                <!-- <td><?= $value[0]?></td>-->
               <!--              <td><?= $value[3]?></td> -->
               <!-- <td><?= $value[6]?></td> -->

                <td><?= $value[1]?></td>
                <td><?= $value[2]?></td>
                <td><?= $value[5]?></td>
                <td><?= $value[4]?></td>

                <td><img src="../<?= $value[6]?>" width="100" height="100"></td>
                 
                
                <td>
                    <a href="../../llamadas/proceso_habitacion.php?accion=eliminar&codigo=<?= $value[0] ?>">ELEGIR</a>
                </td>
         <!--       <td>
                    <a href="editar.php?codigo=<?=$value[0]?>">Modificar</a>
                </td>
        -->
                
            </tr>


        <?php 
        }
        ?>
    </table>

<?php
    include "../../Intro/piepagina.php"
?>

          
</body>
</html>



              <!--  <label>Ingrese número de niños  : </label>
                <input type="text" name="nNinos" placeholder="0">-->
<!--   
        <br>
        <br>

            <h1 class="colorM">Su estadía</h1>

    <form name="formulario2">
            <div class="contenedorEstadia">
                    <div>
                        <p class="negrita"> Check-in:</p>
                        <p> Despues de 15:00 </p>
                        <textarea name="fechaI" rows="2" ></textarea>
                      
                     </div>
                    <div>
                        <p class="negrita"> Check-out: </p>
                        <p> Antes de 13:00 </p>
                        <textarea name="fechaS" rows="2" ></textarea>

                    </div>

            </div>
  
                    <hr>
                 
                    <p class="negrita colorM"> COSTO</p>   
                    <center><textarea name="costo" rows="5" ></textarea> </center>
    </form>
-->



