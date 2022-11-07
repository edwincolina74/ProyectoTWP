<?php
    require '../controlador/conexion.php';
    $conn = conectar();

    $action = $_REQUEST['accion'];

    if($action === 'Enviar'){
        $nom = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $cel = $_REQUEST['telephone'];
        $inicio = $_REQUEST['inicio'];
        $final = $_REQUEST['final'];
        $com = $_REQUEST['comment'];
        agregarPlanificacion($nom,$email,$cel,$inicio,$final,$com,$conn);
    }

    if ($action === 'eliminar') {
        $cel = $_REQUEST['telephone'];
        eliminarPlanificacion($cel,$conn);
    }

    if ($action === 'Actualizar') {
        $nom = $_REQUEST['nombre'];
        $email = $_REQUEST['correo'];
        $inicio = $_REQUEST['inicio'];
        $final = $_REQUEST['final'];
        $com = $_REQUEST['comentario'];
        actualizarPLanificacion($nom,$email,$inicio,$final,$com,$conn);
    }

    header('location:../paginas/planificacion/listar.php');
?>