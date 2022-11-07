<?php

require '../controlador/conexion_contact.php';
$conn = conectar();

$action = $_REQUEST['accion'];

if($action === 'Aceptar'){
	$cod = $_REQUEST['cod'];
	$nomb = $_REQUEST['nomb'];
	$apell = $_REQUEST['apell'];
	$telef = $_REQUEST['telef'];
	$email = $_REQUEST['email'];
	$comentario = $_REQUEST["comentario"];

	agregarcontactanos($cod,$nomb,$apell,$telef,$email,$comentario,$conn);
}

if ($action === 'Eliminar'){
	$cod = $_REQUEST['cod'];
	eliminarcontactanos($cod,$conn);
}


if ($action === 'Actualizar') {
        
        $cod = $_REQUEST['cod'];
	$nomb = $_REQUEST['nomb'];
	$apell = $_REQUEST['apell'];
	$telef = $_REQUEST['telef'];
	$email = $_REQUEST['email'];
	$comentario = $_REQUEST['comentario'];
		
	actualizarContactanos($cod,$nomb,$apell,$telef,$email,$comentario,$conn);
}

header('location:../paginas/contactanos/listarc.php');

?>