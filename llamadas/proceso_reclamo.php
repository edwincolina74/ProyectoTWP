<?php
	require('../controlador/conexionreclamo.php');
	$conn = conectar();

	$action= $_REQUEST['accion'];
	if($action=="agregar"){
		$name = $_REQUEST['nombre'];
		$tdoc = $_REQUEST['tipoDoc'];
		$dis= $_REQUEST['dist']; 
		$dni= $_REQUEST['DNI'];
		$dir= $_REQUEST['direc'];
		$tel= $_REQUEST['fono'];
		$correo= $_REQUEST['email'];

		agregarDatos($name,$ape,$tdoc,$dis,$dni,$dir,$tel,$correo, $conn);
		$codre = $dni;

		$npersonas=$_REQUEST['ngente'];
		$ta=$_REQUEST['tipoA'];
		$tp=$_REQUEST['tipo'];
		$mount=$_REQUEST['monto'];
		$msg=$_REQUEST['desc'];
		agregarReclamo($codre,$npersonas,$tb,$tp,$mount,$msg,$conn);
	}
	header('location:../paginas/reclamo/listar.php');

?>