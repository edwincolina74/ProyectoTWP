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

<br><br><br>
    <div > 
        
        <form  class="contenedorHIS" name="formulario">
            <div>  
                <h1>Huespedes</h1>
                <label>Ingrese número de adultos: </label>
                <input type="text" name="nAdultos" value="1"> <br>
                <label>Ingrese número de niños  : </label>
                <input type="text" name="nNinos" placeholder="0"> <br><br><br>
                <input type="button" name="" onclick="validarDatos()" value="Costo">
            </div>
            <div>
                <h1>Ingreso</h1>
                <label>Ingrese fecha de Ingreso: </label>
                <input type="date" name="fIngreso"> <br>

            </div>
            <div>
                <h1>Salida</h1>
                <label>Ingrese fecha de salida  : </label>
                <input type="date" name="fSalida">
            </div>

    </form>
    
        <br>
        <br>

            <h1 class="colorM">Su estadía</h1>

    <form name="formulario2">
            <div class="contenedorEstadia">
                    <div>
                        <p class="negrita"> Check-in:</p>
                        <p> Despues de 15:00 </p>
                        <textarea name="fechaI" rows="2" ></textarea>
                        <!--<div id="fechaI"></div>-->
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
</div>
<br><br><br>

<<?php
    include "../../Intro/piepagina.php"
?>

          
</body>
</html>