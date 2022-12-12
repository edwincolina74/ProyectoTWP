<?php 

function conectar() {
    $conn= mysqli_connect ("localhost","root","","bd_contactanos"); 
    return $conn;  
}

function validarLogueo($usu,$cont,$conn){
    $sql = "select*from usuario where nom_usuario='$usu'and cont_usuario ='$cont'" ;
    $res= mysqli_query($conn, $sql);
    $filas = mysqli_num_rows($res);
    return $filas;
}

 ?>