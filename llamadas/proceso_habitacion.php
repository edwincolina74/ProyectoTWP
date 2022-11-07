<?php

	// tambien se puede poner: include_once '../controlador/conexion.php';
	require '../controlador/conexion.php';
	$conn = conectar();

	$action = $_REQUEST['accion'];


    if ($action === 'Aceptar') {
		$cod = $_REQUEST['codigo'];
		$est = $_REQUEST['estado'];
		$fechaO = $_REQUEST['fechaOcupacion'];
		$fechaD = $_REQUEST['fechaDesalojo'];
		$codusuario = $_REQUEST['codigoUsuario'];
		$codtiphab = $_REQUEST['codigoTipoHabitacion'];

		

		agregarHabitacion($cod,$est,$fechaO,$fechaD,$codusuario,$codtiphab,$conn);
	}
	
	if ($action === 'eliminar') {
		$cod = $_REQUEST['codigo'];
		eliminarHabitacion($cod,$conn);
	}

	if ($action === 'Actualizar') {
        
        $cod = $_REQUEST['codigo'];
		$est = $_REQUEST['estado'];
		$fechaO = $_REQUEST['fechaOcupacion'];
		$fechaD = $_REQUEST['fechaDesalojo'];
		$codusuario = $_REQUEST['codigoUsuario'];
		//$codtip = $_REQUEST['codigoTipoHabitacion'];
		
		//actualizarHabitacion($cod,$est,$fechaO,$fechaD,$codusuario,$codtiphab,$conn);
		actualizarHabitacion($cod,$est,$fechaO,$fechaD,$codusuario,$conn);
	
	}

	header('location:../paginas/habitacion/listar.php');



?>
