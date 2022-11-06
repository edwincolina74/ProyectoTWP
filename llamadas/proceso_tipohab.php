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
		$fot = $_FILES['foto']['name'];
		$ruta = $_FILES['foto']['tmp_name'];
		$miruta = '../imagenes/habitaciones/'.$fot;
		copy($ruta, $miruta);

		agregarTipoHab($cod,$nom,$pre,$prep,$des,$can,$miruta,$conn);
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

		if (!empty($_FILES['foto']['name'])) {
			$fot = $_FILES['foto']['name'];
			$ruta = $_FILES['foto']['tmp_name'];
			$miruta = '../imagenes/habitaciones/'.$fot;
			actualizarTodoTipoHab($cod,$nom,$pre,$prep,$des,$can,$miruta,$conn);
		}
		else{
		
		actualizarTipoHab($cod,$nom,$pre,$prep,$des,$can,$conn);
		}
		
	}

	header('location:../paginas/thabitacion/listar.php');



?>