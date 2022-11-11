<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Editar Evento'; 
require_once 'config/db.php';
require_once 'config/conexion.php';

include_once 'head.php';
?>
<body class="skin-blue fixed-layout">
    <?php include_once 'loader.php'; ?>
    <div id="main-wrapper">
        <?php 
        include_once 'topbar.php';
        include_once 'navbar.php';

        $sql = "SELECT * FROM event_app.evento";
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($query);
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $titulo;?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">DETALLES DEL EVENTO</h5>
                                <form class="form-material m-t-40">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Nombre</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="nombre" class="form-control" placeholder="ingrese el nombre" value="<?php echo $row['nombre'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="bdate">Fecha y Hora</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="bdate" name="fechahora" class="form-control mydatepicker" placeholder="selecciones la fecha" value="<?php echo $row['fechahora'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Lugar</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="lugar" class="form-control" placeholder="ingrese el lugar" value="<?php echo $row['lugar'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12" for="example-text">Cupos</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="number" id="example-text" name="cupos" class="form-control" placeholder="" value="<?php echo $row['cupos'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Minuatura Evento</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput">
                                                        <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                                                    </div>
                                                    <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">Elegir archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="miniatura"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Banner Evento</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput">
                                                        <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                                                    </div>
                                                    <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">Elegir archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="poster"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Descripcion</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="descripcion" rows="3" value="<?php echo $row['descripcion'];?>"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input hidden type="text" name="id_user" value="<?php echo $id_user; ?>">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Registrar</button>
                                    <button type="reset" class="btn btn-warning waves-effect waves-light">Resetear</button>
                                    <a href="eventos.php"><button class="btn btn-danger waves-effect waves-light">Cancelar</button></a>
                                </form>
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
    <script src="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
    // Date Picker
    jQuery('.mydatepicker').datepicker();
    </script>
</body>
</html>