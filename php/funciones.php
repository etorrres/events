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

?>