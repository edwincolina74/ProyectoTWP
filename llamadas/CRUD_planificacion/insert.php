<?php
    include ('../../controlador/conexionPlanificacion.php');
    $con = conectar();


    $nom = $_REQUEST['nombre'];
    $email = $_REQUEST['correo'];
    $cel = $_REQUEST['telefono'];
    $inicio = $_REQUEST['inicio'];
    $final = $_REQUEST['final'];
    $com = $_REQUEST['comentario'];
        
        
    $sql = "INSERT INTO planificacion VALUES('$nom','$email','$cel','$inicio','$final','$com')";
    $query = mysqli_query($con, $sql);

    if($query){
        header('location:../../paginas/planificacion/listar.php');
    };
?>