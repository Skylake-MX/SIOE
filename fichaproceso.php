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
              <h1 class="all-tittles"><small>Implementaciones</small></h1>
            </div>
            </div>
        <div class="container-fluid">   
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="bitacora.php">Bitacora General</a></li>
                <li role="presentation" class="active"><a href="implementacion.php">Nueva solicitud</a></li>
                <li role="presentation"><a href="visitatecnica.php">Visita Técnica</a></li>
                <li role="presentation"><a href="asignacioncofre.php">Asignacion Cofre</a></li>
                <li role="presentation"><a href="checkin.php">Check-In</a></li>
                <li role="presentation"><a href="plandeimplementacion.php">Plan de Implementación</a></li>
                <li role="presentation"><a href="liberacion.php">Liberación</a></li>
            </ul>
        </div>

        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para crear una nueva soliciutd de implementacion, debes de llenar todos los campos del siguiente formulario para crear el registro.
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                    <li><a href="implementacion.php">Editar ficha</a></li>
                    <li><a href="cartaintencion.php">Carta intención</a></li>
                    <li><a href="pantallaSIOBOVIR.php">Pantalla SIO BOVIR</a></li>
                    <li><a href="usuariosficha.php">Editar usuarios</a></li>
                    <li class="active">Ficha de proceso</li>
                    <li><a href="historial.php">Historial</a></li>
                    <li><a href="ficha.php">Ver ficha de alta</a></li>
                    </ol>
                </div>
            </div>
        </div>