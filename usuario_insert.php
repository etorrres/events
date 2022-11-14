<?php
require('config/conexion.php');

//Campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$passw = $_POST['password'];
$nivel = $_POST['nivel'];
$estatus = true;
$encry_passw = password_hash($passw,PASSWORD_DEFAULT);

if($con -> connect_error){
    die("Conección falló: " . $con->connect_error);
}
else {
    $sql_query="INSERT INTO user (nombre_usr,apellido_usr,email_usr,nivel_usr,password_usr,estado_usr)
                        VALUES ('$nombre','$apellido','$email','$nivel','$encry_passw','$estatus')";
    if($con->query($sql_query) === TRUE){
        echo "Usuario registrado exitosamente";
        echo "<meta http-equiv='refresh' content='3;url=usuario_crear.php'>";
    }
    else{
        echo "Error al intentar registrar el usuario";
    }
}

?>