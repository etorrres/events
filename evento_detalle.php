<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Detalle del Evento'; 
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

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 m-b-20">
                                        <img class="img-responsive" src="images/eventos/poster/idevento.jpg" alt="posterEvento">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 border-right"> <strong>Nombre</strong>
                                        <br>
                                        <p class="text-muted"></p>
                                    </div>
                                    <div class="col-md-3 border-right"> <strong>Organizador</strong>
                                        <br>
                                        <p class="text-muted"> </p>
                                    </div>
                                    <div class="col-md-3 border-right"> <strong>Fecha</strong>
                                        <br>
                                        <p class="text-muted"> </p>
                                    </div>
                                    <div class="col-md-3"> <strong>Duracion</strong>
                                        <br>
                                        <p class="text-muted"> </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Resumen breve del curso...</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row p-b-15">
                                    <div class="col-md-4">
                                        <ul class="list-icons">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Maecenas sed diam eget</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> List group item heading</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Donec id elit non mi porta gravida </a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Maecenas sed diam eget </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="row text-center p-10">
                                    <a href="evento_inscripbiri.php"><button class="btn btn-success btn-lg">Inscribirse</button></a>
                                </div>
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