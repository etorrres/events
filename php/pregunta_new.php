<?php 
date_default_timezone_set('America/Guatemala');
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$id_evento = $_POST['id_evento'];
$id_user = $_POST['id_user'];
$pregunta = $_POST['pregunta'];

$sql = "INSERT INTO event_app.pregunta (id_codigo_evento,id_usr,pregunta_pre,estado_pre) VALUES ('$id_evento',$id_user,'$pregunta',0)";
$query = mysqli_query($con,$sql);

if($query){
    echo '<script type="text/javascript">;
    alert("Pregunta Enviada...");
    window.location.href="../evento_sala.php?id='.$id_evento.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Enviar la Pregunta...'.mysqli_error($con).'");
    window.location.href="../evento_sala.php?id='.$id_evento.'";</script>';
}

?>