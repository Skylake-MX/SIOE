<!DOCTYPE html>
<html lang="en">
<head>
<title>SIOE Operaciones Electronicas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Shortcut Icon" type="image/x-icon" href="app/views/assets/icons/Imagen1.png" />

<script src="app/views/js/sweet-alert.min.js"></script>
<link rel="stylesheet" href="app/views/css/sweet-alert.css">
<link rel="stylesheet" href="app/views/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="app/views/css/normalize.css">
<link rel="stylesheet" href="app/views/css/bootstrap.min.css">
<link rel="stylesheet" href="app/views/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="app/views/css/estilos.css">


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="app/views/js/modernizr.js"></script>
<script src="app/views/js/bootstrap.min.js"></script>
<script src="app/views/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="app/views/js/main.js"></script>
</head>
<body>

<?php

require_once 'user_session.php';
require_once 'user.php';

error_reporting(E_ALL ^ E_NOTICE); 
session_start();
$currentUser = new User();
$currentUser->setUser($_SESSION['user']);
$localidad = $currentUser->getLocalidad();
$nombre =$currentUser->getNombre();
$privilegio = $currentUser->getPrivilegio();

?>
<!-- AQUI EMPIEZA EL NAV LATERAL -->


<?php
    if ($privilegio=="administrador"){
    
    echo    
    
    '<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                <small>Sistema Integral Op. Electrónicas</small>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="app/views/assets/icons/logo.png" alt="Logo OE" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">SIOE ('.$privilegio.')</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listabancos.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Bancos</a></li>
                            <li><a href="listatraslado.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Empresa de Traslado</a></li>
                            <li><a href="listacategoria.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Segmento</a></li>
                            <li><a href="listaseccion.php"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedor</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                            <li><a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones</a></li>
                            <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Comercial</a></li>
                            <li><a href="#"><i class="zmdi zmdi-walk zmdi-hc-fw"></i>&nbsp;&nbsp;  Técnico</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="bitacora.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora general</a></li>
                            <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                            <li><a href="#"><i class="zmdi zmdi-card-alert zmdi-steam-square"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-calendar-close zmdi-assignment"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-devices-off zmdi-assignment-check"></i>&nbsp;&nbsp; Check-in<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-calendar-check"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>


                        </ul>

                    </li>
                    <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>
                    <li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuracion</a></li>
                </ul>
            </div>
        </div>
    </div>';




    }
    elseif($privilegio=="implementaciones"){

        echo    
    
    '<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                <small>Sistema Integral Op. Electrónicas</small>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="app/views/assets/icons/logo.png" alt="Logo OE" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">SIOE ('.$privilegio.')</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listacategoria.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Segmento</a></li>
                            <li><a href="listaseccion.php"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedor</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                            <li><a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones</a></li>
                            <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Comercial</a></li>
                            <li><a href="#"><i class="zmdi zmdi-walk zmdi-hc-fw"></i>&nbsp;&nbsp;  Técnico</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="bitacora.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora general</a></li>
                            <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                            <li><a href="#"><i class="zmdi zmdi-card-alert zmdi-steam-square"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-calendar-close zmdi-assignment"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-devices-off zmdi-assignment-check"></i>&nbsp;&nbsp; Check-in<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-calendar-check"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>


                        </ul>

                    </li>
                    <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>
                </ul>
            </div>
        </div>
    </div>';



    }elseif($privilegio=="comercial"){
        echo    
    
        '<div class="navbar-lateral full-reset">
            <div class="visible-xs font-movile-menu mobile-menu-button"></div>
            <div class="full-reset container-menu-movile nav-lateral-scroll">
                <div class="logo full-reset all-tittles">
                    <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                    <small>Sistema Integral Op. Electrónicas</small>
                </div>
                <div class="nav-lateral-divider full-reset"></div>
                <div class="full-reset" style="padding: 10px 0; color:#fff;">
                    <figure>
                        <img src="app/views/assets/icons/logo.png" alt="Logo OE" class="img-responsive center-box" style="width:55%;">
                    </figure>
                    <p class="text-center" style="padding-top: 15px;">SIOE ('.$privilegio.')</p>
                </div>
                <div class="nav-lateral-divider full-reset"></div>
                <div class="full-reset nav-lateral-list-menu">
                    <ul class="list-unstyled">
                        <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="listabancos.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Bancos</a></li>
                                <li><a href="listatraslado.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Empresa de Traslado</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                                <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Comercial</a></li>

                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="bitacora.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora general</a></li>
                                <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                                <li><a href="#"><i class="zmdi zmdi-card-alert zmdi-steam-square"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                                <li><a href="#"><i class="zmdi zmdi-calendar-close zmdi-assignment"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-devices-off zmdi-assignment-check"></i>&nbsp;&nbsp; Check-in<span class="label label-danger pull-right label-mhover">7</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-calendar-check"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>
    
    
                            </ul>
    
                        </li>
                        <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>

                    </ul>
                </div>
            </div>
        </div>';
    
    

    }
?>




<!-- AQUI TERMINA EL NAV LATERAL -->

<!-- AQUI EMPIEZA EL NAV -->
<div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="app/views/assets/icons/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>

                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"> <?php echo $nombre; ?>
                    </span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="logout.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar folio">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Notificaciones">
                    <i class="zmdi zmdi-help-outline zmdi-comment"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
<!-- AQUI TERMINA EL NAV -->

        <div class="container-fluid">
            <div class="page-header">
              <h1 class="all-tittles"><small>Administración</small></h1>
            </div>
            <!-- </div> -->
            <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation" class="active"><a href="listabancos.php">Bancos</a></li>
              <li role="presentation" ><a href="listatraslado.php">Empresa de Traslado</a></li>
              <li role="presentation"><a href="listacategoria.php">Segmento</a></li>
              <li role="presentation"><a href="listaproveedor.php">Proveedor</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="app/views/assets/icons/banco.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Listado de las institutciones bancarias, puedes actualizar ó eliminar el registro.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li class="active">Lista de bancos</li>
                        <li ><a href="bancos.php">Nuevo banco</a></li> 
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar banco" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el banco que deseas buscar.">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            <h2 class="text-center all-tittles">Lista de bancos</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Año de Integracion</div>
                    <div class="div-table-cell">Nombre CC</div>
                    <div class="div-table-cell">Tel CC</div>
                    <div class="div-table-cell">Nombre CO</div>
                    <div class="div-table-cell">Tel CO</div>
                    <div class="div-table-cell">Actualizar</div>
                    <div class="div-table-cell">Borrar</div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Año de Integracion</div>
                    <div class="div-table-cell">Nombre CC</div>
                    <div class="div-table-cell">Tel CC</div>
                    <div class="div-table-cell">Nombre CO</div>
                    <div class="div-table-cell">Tel CO</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Año de Integracion</div>
                    <div class="div-table-cell">Nombre CC</div>
                    <div class="div-table-cell">Tel CC</div>
                    <div class="div-table-cell">Nombre CO</div>
                    <div class="div-table-cell">Tel CO</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Año de Integracion</div>
                    <div class="div-table-cell">Nombre CC</div>
                    <div class="div-table-cell">Tel CC</div>
                    <div class="div-table-cell">Nombre CO</div>
                    <div class="div-table-cell">Tel CO</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Año de Integracion</div>
                    <div class="div-table-cell">Nombre CC</div>
                    <div class="div-table-cell">Tel CC</div>
                    <div class="div-table-cell">Nombre CO</div>
                    <div class="div-table-cell">Tel CO</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Año de Integracion</div>
                    <div class="div-table-cell">Nombre CC</div>
                    <div class="div-table-cell">Tel CC</div>
                    <div class="div-table-cell">Nombre CO</div>
                    <div class="div-table-cell">Tel CO</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>