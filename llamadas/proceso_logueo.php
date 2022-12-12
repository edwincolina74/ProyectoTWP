<?php 
	
	session_start();
	
	require '../controlador/conexion_logueo.php';
	$conn = conectar();

	$usu = $_REQUEST['usuario'];
	$cont = $_REQUEST['cont'];
	
	$fil = validarLogueo($usu,$cont,$conn);

	if ($fil>0){
		$_SESSION['usuario'] = $usu;
		header('location:../paginas/gestion/administrador.php');

	}
	else {
		echo "<script>alert('Usuario o contraseña incorrectos'); window.history.back();</script>";
	}
 ?>