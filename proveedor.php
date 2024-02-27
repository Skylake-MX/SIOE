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
                    Guarda los datos del proveedor, no podrás crear registros identicos.
                    Puedes actualizar la información ó eliminar el registro.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li ><a href="listaproveedor.php">Lista de proveedores</a></li>
                      <li class="active">Nuevo proveedor</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar nuevo proveedor</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-truck"></i> &nbsp; Datos del Proveedor</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Código identificador" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Proveedor</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre del proveedor" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\-  ]{5,100}" maxlength="100" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del proveedor>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre  de la empresa</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Dirección del proveedor "required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\-,.  ]{20,200}" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccíon completa del proveedor">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Direccion</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Año de integración a GSI" required="" pattern="[0-9]{4,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solo números, 4 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Año de Integracion</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                            <input type="text" class="material-control tooltips-general" placeholder="Nombre del contacto comercial" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{10,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del contacto comercial; Nombre Apellido P Apellido M">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de contacto comercial</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" placeholder="10 digitos" required="" pattern="[0-9]{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono de contacto comercial</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre del contacto operativo" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{10,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del contacto operativo; Nombre Apellido P Apellido M">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de contacto operativo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" placeholder="10 digitos" required="" pattern="[0-9]{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono de contacto operativo</label>
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>