<?php 

require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$id_evt=$_POST['id'];
$opcion = 0;
$nombre_evt=$_POST['nombre'];
$lugar_evt=$_POST['lugar'];
$fecha_evt=$_POST['fecha'];
$hora_evt=$_POST['hora'];
$cupo_evt=$_POST['cupo'];
$estatus_evt=1;
//Carga de archivos
$archivo1=$_FILES['file1']['tmp_name'];
$ext1 = strtolower(pathinfo($_FILES['file1']['name'], PATHINFO_EXTENSION));
$foto_evt="recursos/imagenes/eventos/MINIATURA-".$id_evt.".".$ext1;
$destino1="../".$foto_evt;

$archivo2=$_FILES['poster']['tmp_name'];
$ext2 = strtolower(pathinfo($_FILES['poster']['name'], PATHINFO_EXTENSION));
$poster_evt="recursos/imagenes/eventos/POSTER-".$id_evt.".".$ext2;
$destino2="../".$poster_evt;

$link_evt=$_POST['link'];
$descripcion_evt=$_POST['descripcion'];

if($_FILES['file1']['name']!=""){
    $sqlFile1 = "UPDATE event_app.evento SET foto_evt='$foto_evt' WHERE id_codigo_evento = '$id_evt'";
    $queryFile1 = mysqli_query($con,$sqlFile1);
    copy($archivo1,$destino1);
}elseif($_FILES['poster']['name']!=""){
    $sqlFile2 = "UPDATE event_app.evento SET poster_evt='$poster_evt' WHERE id_codigo_evento = '$id_evt'";
    $queryFile2 = mysqli_query($con,$sqlFile2);
    copy($archivo2,$destino2);
}

$sql = "UPDATE event_app.evento SET nombre_evt='$nombre_evt', lugar_evt='$lugar_evt', fecha_evt='$fecha_evt', hora_evt='$hora_evt', cupo_evt='$cupo_evt', link_evt='$link_evt', descripcion_evt='$descripcion_evt' WHERE id_codigo_evento='$id_evt'";
$insert = mysqli_query($con, $sql);

if ($insert) {
    echo '<script type="text/javascript">;
    alert("Evento Editado Correctamente...");
    window.location.href="../evento_editar.php?id='.$id_evt.'";</script>';
}else {
    echo '<script type="text/javascript">;
    alert("Error! Al Editar el Evento...'.mysqli_error($con).'");
    window.location.href="../evento_editar.php?id='.$id_evt.'";</script>';
}

?>