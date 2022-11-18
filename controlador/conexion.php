<?php
 //variable conexion
//Cambie bd_hotel

function conectar() {
    $conn= mysqli_connect ("localhost:3308","root","","bd_hotel"); 
  /*  
    if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    else{
        echo "Conexión satisfactoria";
    } */
    
    return $conn;  
}

//método para agregar planificacion
function agregarPlanificacion($nom,$email,$cel,$inicio,$final,$com,$conn){
    $sql="insert into planificacion values('$nom','$email','$cel','$inicio','$final','$com')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}

//método para actualizar todos los campos de la tabla planificacion
function actualizarPLanificacion($nom,$email,$inicio,$final,$com,$conn){
    $sql="update planificacion set nombre='$nom', correo='$email', fechainicio='$inicio', fechafinal='$final', comentario='$com' where telefono='$cel'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function listarPlanificacion($conn){
    $sql="select nombre, correo, telefono, fechainicio, fechafinal, comentario from planificacion"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

 //método para eliminar planificacion
 function eliminarPlanificacion($cel,$conn){
    $sql="delete from planificacion where telefono='$cel'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para buscar registro *LISTO*
function buscarPlanificacion($cel,$conn){
    $sql="select nombre, correo, fechainicio, fechafinal, comentario from planificacion where telefono='$cel'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}




//método para agregar registros
function agregarHabitacion($cod,$est,$fechaO,$fechaD,$codusuario,$codtip,$conn){
    $sql="insert into habitacion values('$cod','$est','$fechaO','$fechaD','$codusuario','$codtip')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}



function eliminarHabitacion($cod,$conn){
    $sql="delete from habitacion where codhab='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTodoHabitacion($cod,$est,$fechaO,$fechaD,$codusuario,$codtip,$conn){
    $sql="update habitacion set esthab='$est', fechaOhab='$fechaO', fechaDhab='$fechaD', codusuario='$codusuario',codtiphab='$codtip' where codhab='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarHabitacion($cod,$est,$fechaO,$fechaD,$codusuario,$conn){
    $sql="update habitacion set esthab='$est', fechaOhab='$fechaO', fechaDhab='$fechaD', codusuario='$codusuario' where codhab='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}






function buscarHabitacion($cod,$conn){
    $sql="select esthab, fechaOhab, fechaDhab, codusuario, codtiphab from habitacion where codhab='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

function listarHabitacion($conn){
    $sql="select codhab, esthab, fechaOhab, fechaDhab, codusuario, codtiphab from habitacion"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//Tabla tipo *LISTO *
//método para agregar registros
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
