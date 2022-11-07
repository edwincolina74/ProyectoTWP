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
function agregarcontactanos($cod,$nomb,$apell,$telef,$email,$comentario,$conn){
    $sql="insert into contactanos values('$cod','$nomb','$apell','$telef','$email','$comentario')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para listar registros
function listarContactanos($conn){
    $sql="select cod, nomb, apell, telef, email, comentario from contactanos"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//método para eliminar registros
function eliminarContactanos($cod,$conn){
    $sql="delete from contactanos where cod='$cod'";    
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}

 //método para buscar registro
function buscarContactanos($cod,$conn){
    $sql="select cod, nomb, apell, telef, email, comentario from contactanos where cod='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

//método para actualizar registros
function actualizarContactanos($cod,$nomb,$apell,$telef,$email,$comentario,$conn){
    $sql="update tipo set nomb='$nomb', apell='$apell', telef='$telef', email='$email', comentario='$comentario' where contactanos='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}


?>