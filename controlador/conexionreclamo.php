<?php
 //variable conexion
//Cambie bd_hotel

function conectar() {
    $conn= mysqli_connect ("localhost","root","","bd_hotel"); 
  /*  
    if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    else{
        echo "Conexión satisfactoria";
    } */
    
    return $conn;  
}


//************************************
//AGREGAR RECLAMO
function agregarDatos($name,$tdoc,$dist,$ndoc,$dir,$telf,$correo,$conn){
    $sql="insert into datos values('','$name','$tdoc','$dist','$ndoc','$dir','$telf','$correo' )";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
}
function agregarReclamo($codrecla,$npersonas,$tipbien,$tipo,$monto,$msg,$conn){
    
    $sql="insert into reclamo values('$codrecla','$npersonas','$tipbien','$tipo','$monto','$msg' )";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
}

//LISTAR RECLAMO
function BuscarDatos($conn,$cod){
    $sql="select codrecla from datos where nroDoc='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
function ListarDatos($conn){
    $sql="select * from datos";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarReclamo($conn){
    $sql="select * from reclamo";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
//**************************
?>







