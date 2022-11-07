<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("localhost","root","","bd_contactanos"); 
    if(!$conn){
        die('No puede conectarse'.mysqli_error());
    }
    else{
        echo "Conexión satisfactoria";
    }
    return $conn;
}

//método para agregar registros
function agregarcontactanos($nomb,$apell,$telef,$email,$comentario,$conn){
    $sql="insert into contactanos values('$nomb','$apell','$telef','$email','$comentario')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para listar registros
function listarContactanos($conn){
    $sql="select nomb, apell, telef, email, comentario from contactanos"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

?>