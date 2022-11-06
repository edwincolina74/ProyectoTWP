<?php

	// tambien se puede poner: include_once '../controlador/conexion.php';
	require '../controlador/conexion.php';
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if ($action === 'Aceptar') {
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		$pre = $_REQUEST['precio'];
		$prep = $_REQUEST['preciop'];
		$des = $_REQUEST['descripcion'];
		$can = $_REQUEST['cantidad'];

		agregarTipoHab($cod,$nom,$pre,$prep,$des,$can,$conn);
	}


	if ($action === 'eliminar') {
		$cod = $_REQUEST['codigo'];
		eliminarTipoHab($cod,$conn);
	}


	if ($action === 'Actualizar') {
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		$pre = $_REQUEST['precio'];
		$prep = $_REQUEST['preciop'];
		$des = $_REQUEST['descripcion'];
		$can = $_REQUEST['cantidad'];
		actualizarTipoHab($cod,$nom,$pre,$prep,$des,$can,$conn);
	}

	header('location:../paginas/thabitacion/listar.php');



?>