<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$id_evento=$_GET['id'];
$estado=$_GET['st'];

$sql = "UPDATE event_app.evento SET estatus_evt=$estado WHERE id_codigo_evento='$id_evento'";
$query = mysqli_query($con,$sql);

if($query){
    echo '<script type="text/javascript">;
    alert("Estado del Evento actualizado Correctamente...");
    window.location.href="../evento_sala.php?id='.$id_evento.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al actualizar el Estado del Evento...");
    window.location.href="../evento_sala.php?id='.$id_evento.'";</script>';
}
?>