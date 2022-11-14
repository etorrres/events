<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Editar usuario';
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
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $titulo; ?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-body">
                        <h3 class="box-title m-b-0">Actualizar la información de usuario</h3>
                        <p class="text-muted m-b-30 font-13"></p>
                        <form class="form-horizontal">

                            <?php
                                include('config/conexion.php');
                                $sql = "SELECT * FROM user WHERE id_usr =".$_REQUEST['id_usr'];
                                $resultado = $con->query($sql);
                                $row = $resultado->fetch_assoc();
                            ?>
                            <!-- Datos de Nivel -->
                            <?php
                                include('config/conexion.php');
                                $sql = "SELECT * FROM user WHERE id_usr =".$_REQUEST['id_usr'];
                                $resultado = $con->query($sql);
                                $row = $resultado->fetch_assoc();
                            ?>


                            <!-- Fin -->

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row['nombre_usr']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Apellido</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row['apellido_usr']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row['email_usr']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nivel</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleInputuname4" name="nivel">
                                        <option disabled selected value="">Selecciona una opción</option>
                                        <option value="1">Organziador</option>
                                        <option value="2">Asistente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="" value="<?php echo $row['password_usr']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword4" class="col-sm-3 text-right control-label col-form-label">Estado</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleInputuname4" name="nivel">
                                        <option disabled selected value="">Selecciona una opción</option>
                                        <option value="0">Inhabilitado</option>
                                        <option value="1">Habilitado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Actualizar</button>
                                    <a href="usuario_mostrar.php" class="btn btn-secondary waves-effect waves-light m-t-10">Regreasar</a>
                                </div>
                            </div>
                        </form>
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