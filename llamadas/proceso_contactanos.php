<?php

include_once '../controlador/conexion_contact.php';
$conn = conectar();

$nomb = $_REQUEST['nomb'];
$apell = $_REQUEST['apell'];
$telef = $_REQUEST['telef'];
$email = $_REQUEST['email'];
$comentario = $_REQUEST["comentario"];

agregarcontactanos($nomb,$apell,$telef,$email,$comentario,$conn);

?>