<?php 
function generar_codigo()
{
  global $con;
  $tipo_txt="";
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
?>