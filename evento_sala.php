<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/funciones.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php
$titulo = 'Sala Evento'; 

include_once 'head.php';
?>
<body class="skin-blue fixed-layout">
    <?php include_once 'loader.php'; ?>
    <div id="main-wrapper">
        <?php 
        include_once 'topbar.php';
        include_once 'navbar.php';
        $id_evento=$_GET['id'];
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $titulo;?></h4>
                    </div>
                    <?php
                    include_once 'ventanas/hacer_pregunta.php';
                    $sql = "SELECT * FROM event_app.evento, event_app.user WHERE id_codigo_evento='$id_evento' AND evento.id_usr = user.id_usr";
                    $query = mysqli_query($con,$sql);
                    $datos = mysqli_fetch_array($query);
                    if($datos['estatus_evt']==1){
                        $modoEv="Programado";
                        $msg="";
                        $colorEv="info";
                        $valorP=100;
                    }elseif($datos['estatus_evt']==2){
                        $modoEv="Por Comenzar";
                        $msg="Dentro de Poco Empezamos";
                        $colorEv="warning";
                        $valorP=80;
                    }elseif($datos['estatus_evt']==3){
                        $modoEv="Iniciado";
                        $msg="¡Disfruta de nuestro Evento!";
                        $colorEv="success";
                        $valorP=7;
                    }elseif($datos['estatus_evt']==4){
                        $modoEv="Iniciado";
                        $msg="¡Disfruta de nuestro Evento!";
                        $colorEv="success";
                        $valorP=100;
                    }elseif($datos['estatus_evt']==5){
                        $modoEv="Finalizado";
                        $msg="¡Disfruta de nuestro Evento!";
                        $colorEv="danger";
                        $valorP=100;
                    }
                    ?>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                        <?php if($nivel_usr == 2 AND $datos['estatus_evt']<5){
                            if($datos['estatus_evt']==1){
                                $boto_txt="Alertar de Comienzo";
                                $boto_clr="info";
                                $boto_ref="php/estado_evt_update.php?id=$id_evento&st=2";
                            }elseif($datos['estatus_evt']==2){
                                $boto_txt="Empezar Evento";
                                $boto_clr="success";
                                $boto_ref="php/estado_evt_update.php?id=$id_evento&st=3";
                            }elseif($datos['estatus_evt']==3){
                                $boto_txt="Empezar Preguntas";
                                $boto_clr="primary";
                                $boto_ref="php/estado_evt_update.php?id=$id_evento&st=4";
                            }elseif($datos['estatus_evt']==4){
                                $boto_txt="Finalizar Evento";
                                $boto_clr="danger";
                                $boto_ref="php/estado_evt_update.php?id=$id_evento&st=5";
                            }
                            ?>
                            <a href="<?php echo $boto_ref ;?>"<button type="button" class="btn btn-<?php echo $boto_clr; ?> d-none d-lg-block m-l-15"><?php echo $boto_txt;?></button></a>
                        <?php }?>
                        <?php if($datos['estatus_evt']==4 && $nivel_usr ==3){?>
                            <button type="button" class="btn btn-primary d-none d-lg-block m-l-15" data-toggle="modal" data-target="#responsive-modal"><i class="fa fa-hand-o-up"></i> Nueva pregunta</button>
                        <?php }?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?php echo $datos['foto_evt'];?>" class="img-rounded" width="200" />
                                    <h4 class="card-title m-t-10"><?php echo $datos['nombre_evt'] ?></h4>
                                    <h6 class="card-subtitle"><?php echo $datos['nombre_usr']." ".$datos['apellido_usr']; ?></h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium"> <?php echo contar_asistencia($datos['id_codigo_evento']);?></font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-bubble"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Estado del Evento</h3>
                                <div class="table-responsive">
                                    <table class="table m-b-0  m-t-30 no-border">
                                        <tbody>
                                            <tr>
                                                <td style="width:200px;">
                                                    <h4 class="card-title"><?php echo $modoEv;?></h4>
                                                    <h6 class="card-subtitle"><?php echo $msg;?></h6></td>
                                                <td class="vm">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-<?php echo $colorEv;?>" role="progressbar" style="width: <?php echo $valorP; ?>%; height:7px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php 
                                            if($datos['estatus_evt']==4){
                                            ?>
                                            <tr>
                                                <td style="width:200px;">
                                                    <h4 class="card-title">Preguntas</h4>
                                                    <h6 class="card-subtitle">Ya puedes hacer tus preguntas</h6></td>
                                                <td class="vm">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 7%; height:7px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mis Preguntas</h4>
                            </div>
                            <?php 
                            $sPreguntas = "SELECT * FROM event_app.pregunta WHERE id_usr = '$id_usr' AND id_codigo_evento = '$id_evento'";
                            $qPreguntas = mysqli_query($con,$sPreguntas);
                            while($rPre=mysqli_fetch_array($qPreguntas)){
                                if($rPre['estado_pre']==true){
                                    $estado_txt="Respondida";
                                    $estado_clr="success";
                                }else{
                                    $estado_txt="Pendiente";
                                    $estado_clr="primary";
                                }
                            ?>
                            <div class="comment-widgets m-b-20">
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="recursos/imagenes/asistente_icon.png" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5><?php echo fullnameUser($id_usr);?></h5>
                                        <div class="comment-footer">
                                            <span class="label label-<?php echo $estado_clr;?>"><?php echo $estado_txt?></span> <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10"><?php echo $rPre['pregunta_pre'];?></p>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
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