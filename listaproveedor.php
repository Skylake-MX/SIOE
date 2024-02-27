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

//<!-- AQUI EMPIEZA EL NAV LATERAL -->
require_once 'app/views/inc/navlateral.php';
//<!-- AQUI TERMINA EL NAV LATERAL -->

// AQUI EMPIEZA EL NAV
require_once 'app/views/inc/nav.php';
// AQUI TERMINA EL NAV

?>

        <div class="container-fluid">
            <div class="page-header">
              <h1 class="all-tittles"><small>Administración</small></h1>
            </div>
            </div>
            <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"><a href="listabancos.php">Bancos</a></li>
              <li role="presentation""><a href="listatraslado.php">Empresa de Traslado</a></li>
              <li role="presentation"><a href="listacategoria.php">Segmento</a></li>
              <li role="presentation"  class="active"><a href="listaproveedor.php">Proveedor</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/institution.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Listado de proveedores, puedes actualizar ó eliminar el registro.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Lista de proveedores</li>
                      <li><a href="proveedor.php">Nuevo proveedor</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar proveedor" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el proveedor GSI que deseas buscar.">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            <h2 class="text-center all-tittles">Lista de proveedores</h2>
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