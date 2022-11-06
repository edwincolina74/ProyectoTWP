<?php
 //variable conexion
//Cambie bd_hotel

function conectar() {
    $conn= mysqli_connect ("localhost","root","","bd_hotel"); 
    if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    else{
        echo "Conexión satisfactoria";
    } 
    return $conn;  
}

//método para agreegar registros
function agregarProducto($cod,$nom,$pre,$fot,$tip,$conn){
    $sql="insert into producto values('$cod','$nom','$pre','$fot','$tip')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para eliminar registros
function eliminarProducto($cod,$conn){
    $sql="delete from producto where codpro='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar todos los campos de la tabla
function actualizarTodoProducto($cod,$nom,$pre,$fot,$tip,$conn){
    $sql="update producto set nompro='$nom', prepro='$pre', fotpro='$fot', codtip='$tip' where codpro='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para actualizar registros sin foto
function actualizarProducto($cod,$nom,$pre,$tip,$conn){
    $sql="update producto set nompro='$nom', prepro='$pre', codtip='$tip' where codpro='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

 //método para buscar registro
function buscarProducto($cod,$conn){
    $sql="select nompro, prepro, fotpro, codtip from producto where codpro='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarProducto($conn){
    $sql="select codpro, nompro, prepro, fotpro, codtip from producto"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//Tabla tipo *LISTO *
//método para agreegar registros
function agregarTipoHab($cod,$nom,$pre,$prep,$des,$can,$fot,$conn){
    $sql="insert into thabitacion values('$cod','$nom','$pre','$prep','$des','$can','$fot')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para eliminar registros *LISTO*
function eliminarTipoHab($cod,$conn){
    $sql="delete from thabitacion where codtiphab='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para actualizar registros sin foto *LISTO*
function actualizarTipoHab($cod,$nom,$pre,$prep,$des,$can,$conn){
    $sql="update thabitacion set nombretiphab='$nom',preciotiphab='$pre',preciopreftiphab='$prep',destiphab='$des',canlibretiphab='$can'  where codtiphab='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//*LISTO*
function actualizarTodoTipoHab($cod,$nom,$pre,$prep,$des,$can,$fot,$conn){
    $sql="update thabitacion set nombretiphab='$nom',preciotiphab='$pre',preciopreftiphab='$prep',destiphab='$des',canlibretiphab='$can',fottiphab='$fot'  where codtiphab='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}




//método para buscar registro *LISTO*
function buscarTipoHab($cod,$conn){
    $sql="select nombretiphab,preciotiphab,preciopreftiphab,destiphab,canlibretiphab from thabitacion where codtiphab='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

//*LISTO *
//método para listar registros 
function listarTipoHab($conn){
    $sql="select codtiphab, nombretiphab,preciotiphab,preciopreftiphab,destiphab,canlibretiphab,fottiphab from thabitacion";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
?>
