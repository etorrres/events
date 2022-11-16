<?php 

function generar_codigo()
{
  global $con;
  $year=date('Y');

  $query = mysqli_query($con,"SELECT COUNT(id_codigo_evento)+1 FROM evento");
  $row = mysqli_fetch_array($query);
  $valor = $row['0'];
  
  if ($valor<=9) {
    $valAuto='000'.$valor;
  }elseif ($valor>9 AND $valor<99) {
    $valAuto='00'.$valor;
  }elseif ($valor>99 AND $valor<999) {
    $valAuto='0'.$valor;
  }elseif ($valor>999 AND $valor<9999) {
    $valAuto=$valor;
  }elseif ($valor>9999) {
    echo "ERROR VALOR NO SOPORTADO";
    exit();
  }
  $codigo="EVT-".$year."-".$valAuto;
  return $codigo;
}

function contar_asistencia($id_evt)
{
  global $con;
  
  $query = mysqli_query($con,"SELECT COUNT(id_asc) FROM asistencia WHERE id_codigo_evento='$id_evt'");
  $row = mysqli_fetch_array($query);
  $valor = $row['0'];

  return $valor;
}

function validar_inscripcion($id_evt, $id_usr)
{
  global $con;

  $query = mysqli_query($con,"SELECT * FROM asistencia WHERE id_usuario='$id_usr' AND id_codigo_evento = '$id_evt'");
  $row = mysqli_fetch_array($query);
  if($row){
    return true;
  }else{
    return false;
  }

}

function fullnameUser($id_usr)
{
  global $con;
  $sUser = "SELECT * FROM event_app.user WHERE id_usr='$id_usr'";
  $qUser = mysqli_query($con,$sUser);
  $rUser = mysqli_fetch_array($qUser);

  return $rUser['nombre_usr']." ".$rUser['apellido_usr'];

}

function enviar_notificacion ($id_evt, $tipo)
{
  global $con;

  $sqlE = "SELECT * FROM event_app.evento, event_app.asistencia WHERE evento.id_codigo_evento='$id_evt'";
  $query = mysqli_query($con,$sqlE);
  $data = mysqli_fetch_array($query);

  $evento_name = $data['nombre_evt'];
  if($tipo==1){
    exit();
    return true;
  }elseif($tipo==2){
    $mensaje="El Evento ".$evento_name." Esta por Comenzar.";
  }elseif($tipo==3){
    $mensaje="El Evento ".$evento_name." Ha comenzado.";
  }elseif($tipo==4){
    $mensaje="Ya puedes realizar tu preguntas en el evento ".$evento_name;
  }elseif($tipo==5){
    $mensaje="El evento ".$evento_name." ha finalizado, nos gustarias saber tu opinion en la siguiente encuesta";
  }

  $sEmail = "SELECT * FROM event_app.user, event_app.asistencia WHERE asistencia.id_codigo_evento = '$id_evt' AND asistencia.id_usuario = user.id_usr";
  $qEmail = mysqli_query($con,$sEmail);

  $de="notificacion@eventApp.com";
  $encabezado="Enviado automaticamente desde Event App";
  $asunto="Notificacion Event App";

  while ($rEmail=mysqli_fetch_array($qEmail)){
    $para = $rEmail['email_user'];

    mail($para,$asunto,$mensaje,$encabezado);

  }
  
return true;

}
?>