<?php
    include('../../controlador/conexionPlanificacion.php');
    $con = conectar();

    $cel = $_GET['telefono'];

    $sql = "DELETE FROM planificacion WHERE telefono='$cel'";

    $query = mysqli_query($con, $sql);

    if($query){
        header('location:../../paginas/planificacion/listar.php');
    };
?>