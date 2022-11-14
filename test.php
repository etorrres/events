<?php 
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/funciones.php';


if(validar_inscripcion('EVT-2022-0002','1')==true){
    echo "INSCRIPTO";
}else{
    echo "SIN INSCRIPBIR";
}

?>