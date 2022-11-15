<?php 
date_default_timezone_set('America/Guatemala');
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$id_pre = $_GET['id'];
$id_evento = $_GET['evt'];

$sql = "UPDATE event_app.pregunta SET estado_pre=1 WHERE id_pre='$id_pre'";
$query = mysqli_query($con,$sql);

if($query){
    echo '<script type="text/javascript">;
    alert("Pregunta Actualizada...");
    window.location.href="../evento_sala.php?id='.$id_evento.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Actualizar la Pregunta...'.mysqli_error($con).'");
    window.location.href="../evento_sala.php?id='.$id_evento.'";</script>';
}

?>