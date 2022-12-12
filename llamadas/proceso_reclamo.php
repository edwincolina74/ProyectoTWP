<?php
	require('../controlador/conexionreclamo.php');
	$conn = conectar();

	$action= $_REQUEST['accion'];
	if($action=="agregar"){
		$CODIGO= $_REQUEST['COD'];
		$name = $_REQUEST['nombre'];
		$tdoc = $_REQUEST['tipoDoc'];
		$dis= $_REQUEST['dist']; 
		$dni= $_REQUEST['DNI'];
		$dir= $_REQUEST['direc'];
		$tel= $_REQUEST['fono'];
		$correo= $_REQUEST['email'];
		$ta=$_REQUEST['tipoA'];
		$tp=$_REQUEST['tipo'];
		$mount=$_REQUEST['monto'];
		$msg=$_REQUEST['mensaje'];
		agregarReclamo($consu,$cp,$tb,$tp,$mount,$msg,$conn);
	}
	header('location:../paginas/reclamo/listar.php');

?>