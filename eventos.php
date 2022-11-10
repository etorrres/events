<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Mis Eventos'; 
include_once 'head.php';
?>
<body class="skin-blue fixed-layout">
    <?php include_once 'loader.php'; ?>
    <div id="main-wrapper">
        <?php 
        include_once 'topbar.php';
        include_once 'navbar.php';
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $titulo;?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="evento_crear.php"><button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Nuevo Evento</button></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                            <img class="img-responsive" alt="miniaturaEvento" src="images/eventos/minuatura/idevento.jpg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre Evento</h5>
                                    <div class="d-flex no-block align-items-center">
                                        <span><i class="ti-alarm-clock"></i> Duracion: </span>
                                    </div>
                                    <div class="d-flex no-block align-items-center p-t-10">
                                        <span><i class="ti-pin2"></i> Creado: </span>
                                    </div>
                                    <div class="d-flex no-block align-items-center p-t-10">
                                        <span><i class="ti-calendar"></i> Fecha: </span>
                                    </div>
                                    <div class="d-flex no-block align-items-center p-t-10">
                                        <span><i class="fa fa-graduation-cap"></i> Asistencia: 0/0</span></span>
                                    </div>
                                    <a href="evento_editar.php"><button class="btn btn-warning btn-rounded waves-effect waves-light m-t-30">Editar</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php include_once 'rightbar.php';?>
            </div>
        </div>
        <?php include_once 'footer.php';?>
    </div>
    <?php include_once 'scripts.php';?>
</body>
</html>