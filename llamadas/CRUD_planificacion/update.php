<?php
    include ('../../controlador/conexionPlanificacion.php');
    $con = conectar();


    $nom = $_POST['nombre'];
    $email = $_POST['correo'];
    $cel = $_POST['telefono'];
    $inicio = $_POST['inicio'];
    $final = $_POST['final'];
    $com = $_POST['comentario'];
        
        
    $sql = "UPDATE planificacion SET nombre='$nom', correo='$email', fechainicio='$inicio', fechafinal='$final', comentario='$com' WHERE telefono='$cel'";
    $query = mysqli_query($con, $sql);

    if($query){
        header('location:../../paginas/planificacion/listar.php');
    };
?>