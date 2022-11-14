<?php 

require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'funciones.php';

$id_evt=generar_codigo();
$id_usr=$_POST['id_user'];
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

$sql = "INSERT INTO event_app.evento (id_codigo_evento,id_usr,nombre_evt, lugar_evt, fecha_evt, hora_evt, cupo_evt, estatus_evt, foto_evt, link_evt, poster_evt, descripcion_evt)
                        VALUES ('$id_evt','$id_usr','$nombre_evt','$lugar_evt','$fecha_evt','$hora_evt','$cupo_evt','$estatus_evt','$foto_evt','$link_evt','$poster_evt','$descripcion_evt')";

$insert = mysqli_query($con, $sql);
if ($insert){
    copy($archivo1,$destino1);
    copy($archivo2,$destino2);
    $carga_archivos = true;
}else{
    $carga_archivos = false;
}


if ($carga_archivos=true) {
    echo '<script type="text/javascript">;
    alert("Evento Creado Correctamente...");
    window.location.href="../evento_detalle.php?id='.$id_evt.'";</script>';
}else {
    echo '<script type="text/javascript">;
      alert("Error! Al Crear Evento...'.mysqli_error($con).'");
      window.location.href="../evento_crear.php";</script>';
}

?>