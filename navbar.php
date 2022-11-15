<?php 
require_once 'php/acceso.php';
?>
<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="recursos/imagenes/asistente_icon.png" alt="user-img" class="img-circle"><span class="hide-menu"><?php echo fullnameUser($id_usr);?></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="micuenta.php"><i class="ti-settings"></i> Cuenta</a></li>
                        <li><a href="login.php?logout"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li>
                    </ul>    
                </li>
                <li class="nav-small-cap">--- MENU</li>
                <?php 
                if($nivel_usr==1){
                ?>
                <li> <a class="waves-effect waves-dark" href="index.php"><i class="icon-speedometer"></i><span class="hide-menu">Panel</span></a></li>
                <li> <a class="waves-effect waves-dark" href="usuarios.php"><i class="mdi mdi-account"></i><span class="hide-menu">Mis usuarios</span></a></li>
                
                <?php
                }
                if($nivel_usr>0){
                ?>
                <li> <a class="waves-effect waves-dark" href="eventos.php"><i class="ti-calendar"></i><span class="hide-menu">Eventos</span></a></li>
                <?php
                }
                if($nivel_usr==3){
                ?>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</aside>