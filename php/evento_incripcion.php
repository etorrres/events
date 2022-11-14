<?php
date_default_timezone_set('America/Guatemala');
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$id_usr=$_POST['id_usr'];
$id_evt=$_POST['id_evt'];
$fecha=date('y-m-d');
$hora=date('H:i');

if(validar_inscripcion($id_evt,$id_usr)==false){
    $sql = "INSERT INTO event_app.asistencia (fecha_asc,hora_asc,id_usuario,id_codigo_evento,status) VALUES ('$fecha','$hora',$id_usr,'$id_evt',1)";
    $query = mysqli_query($con,$sql);

    if(validar_inscripcion($id_evt,$id_usr)==true){
        echo '<script type="text/javascript">;
        alert("Inscripcion realizada correctamente...");
        window.location.href="../evento_detalle.php?id='.$id_evt.'";</script>';
    }else{
        echo '<script type="text/javascript">;
        alert("Error! Al Inscripbirse en este Evento...");
        window.location.href="../evento_detalle.php?id='.$id_evt.'";</script>';
    }

}else{
    echo '<script type="text/javascript">;
    alert("Ya se encuentra Inscripto en este Evento...");
    window.location.href="../evento_detalle.php?id='.$id_evt.'";</script>';
}

?>