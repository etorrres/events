<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Mis Preguntas';
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
                        <h4 class="text-themecolor"><?php echo $titulo; ?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#"><button type="button" class="btn btn-success d-none d-lg-block m-l-15" data-toggle="modal" data-target="#responsive-modal"><i class="fa fa-hand-o-up"></i> Nueva pregunta</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- sample modal content -->
                    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Realiza tu pregunta</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="pregunta_crear.php" method="Post">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Mi pregunta:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="recipient-question">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Enviar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once 'rightbar.php'; ?>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </div>
    <?php include_once 'scripts.php'; ?>
</body>

</html>