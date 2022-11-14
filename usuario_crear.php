<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Nuevo usuario';
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

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--  -->
                                <div class="col-md-6">
                                    <div class="card card-body">
                                        <h3 class="box-title m-b-0">Regístrate</h3>
                                        <p class="text-muted m-b-30 font-13"> Se parte de la mejor comunidad de eventos</p>
                                        <form class="form-horizontal p-t-20" action="usuario_insert.php" method="POST">
                                            <div class="form-group row">
                                                <label for="exampleInputuname3" class="col-sm-3 control-label">Nombre*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                                        <input type="text" class="form-control" id="exampleInputuname3" placeholder="Primer nombre" name="nombre">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputuname3" class="col-sm-3 control-label">Apellido*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                                        <input type="text" class="form-control" id="exampleInputuname3" placeholder="Apellido" name="apellido">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputEmail3" class="col-sm-3 control-label">Email*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Ingresa tu email" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword4" class="col-sm-3 control-label">Contraseña*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-lock"></i></span></div>
                                                        <input type="password" class="form-control" id="exampleInputpwd4" placeholder="Ingresa tu contraseña" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword4" class="col-sm-3 control-label">Tipo de usuario*</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="ti-crown"></i></span></div>                                                        
                                                                <select class="form-control" id="exampleInputuname4" name="nivel">
                                                                    <option disabled selected value="">Selecciona una opción</option>
                                                                    <option value="1">Organziador</option>
                                                                    <option value="2">Asistente</option>
                                                                </select>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row m-b-0">
                                                <div class="offset-sm-3 col-sm-9">
                                                    <button type="reset" class="btn btn-primary waves-effect waves-light">Cancelar</button>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">Registrarme</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row m-b-0">
                                                <div class="offset-sm-3 col-sm-9">
                                                    <p class="text-muted m-b-30 font-13"> Si ya tienes una cuenta <a href="login.php"><strong>inicia sesión</strong> </a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- -->
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