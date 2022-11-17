<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$pre1=$_POST['pre_1'];
$pre2=$_POST['pre_2'];
$pre3=$_POST['pre_3'];
$pre4=$_POST['pre_4'];
$pre5=$_POST['pre_5'];
$pre6=$_POST['pre_6'];
$pre7=$_POST['pre_7'];
$pre8=$_POST['pre_8'];
$pre9=$_POST['pre_9'];
$pre10=$_POST['pre_10'];
$id_usr=$_POST['id_usr'];
$id_evt=$_POST['id_evt'];

$sql = "INSERT INTO event_app.encuesta (pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,id_codigo_evento,id_usr)
                                VALUES ($pre1,$pre2,$pre3,$pre4,$pre5,$pre6,$pre7,'$pre8',$pre9,$pre10,'$id_evt',$id_usr)";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Gracias por tus comentarios...");
    window.location.href="../evento_sala.php?id='.$id_evt.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al guardar datos de encuesta...");
    window.location.href="../evento_sala.php?id='.$id_evt.'";</script>';
}

?>