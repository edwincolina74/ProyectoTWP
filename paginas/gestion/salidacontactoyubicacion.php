<?php 
	$correo = $_POST["correo"];

	if($correo == true){
		$contactame="correo";
	}else{
		$contactame="telefono";
	}

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$comentario = $_POST["comentario"];

	echo "Contactame por: ".$contactame."<br>";
	echo "Nombre: ".$nombre."<br>";
	echo "Apellido: ".$apellido."<br>";
	echo "Telefono: ".$telefono."<br>";
	echo "Correo: ".$correo."<br>";
	echo "Comentario: ".$comentario."<br>";
 ?>