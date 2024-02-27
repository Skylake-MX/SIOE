<!DOCTYPE html>
<html lang="es">
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
//session_start();
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


if($privilegio=="administrador"){

    echo    '<div class="container-fluid">
            <div class="page-header">
              <h1 class="all-tittles"><small>Administración</small></h1>
            </div>
            <section class="full-reset text-center" style="padding: 15px 0;">
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="listatraslado.php"><i class="zmdi zmdi-truck"></i></a></div>
                    <div class="tile-name all-tittles">Empresa de Traslado</div>
                    <div class="tile-num full-reset">7</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="listabancos.php"><i class="zmdi zmdi-balance"></a></i></div>
                    <div class="tile-name all-tittles">Bancos</div>
                    <div class="tile-num full-reset">7</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="listaproveedor.php"><i class="zmdi zmdi-store"></a></i></div>
                    <div class="tile-name all-tittles">Proveedores</div>
                    <div class="tile-num full-reset">5</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="listacategoria.php"><i class="zmdi zmdi-money-box"></a></i></div>
                    <div class="tile-name all-tittles">Segmentos</div>
                    <div class="tile-num full-reset">12</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-memory"></i></div>
                    <div class="tile-name all-tittles">Equipos</div>
                    <div class="tile-num full-reset">12</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="listausuarios.php"><i class="zmdi zmdi-accounts"></a></i></div>
                    <div class="tile-name all-tittles">Gestión de usuarios</div>
                    <div class="tile-num full-reset">70</div>
                </article>
            </section>


            <div class="page-header">
                <h1 class="all-tittles"><small>Seguimiento a actividades</small></h1>
                </div>
            <section class="full-reset text-center" style="padding: 40px 0;">
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="implementacion.php"><i class="zmdi zmdi-file-plus"></a></i></div>
                    <div class="tile-name all-tittles">Nueva solicitud</div>
                    <div class="tile-num full-reset">7</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="listatraslado.php"><i class="zmdi zmdi-steam-square"></a></i></div>
                    <div class="tile-name all-tittles">Visitas técnicas</div>
                    <div class="tile-num full-reset">70</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="asignacioncofre.php"><i class="zmdi zmdi-assignment"></a></i></div>
                    <div class="tile-name all-tittles">Asignación de cofre</div>
                    <div class="tile-num full-reset">11</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="plandeimplementacion.php"><i class="zmdi zmdi-calendar-check"></a></i></div>
                    <div class="tile-name all-tittles">Plan de Implementación</div>
                    <div class="tile-num full-reset">21</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="liberacion.php"><i class="zmdi zmdi-input-antenna"></a></i></div>
                    <div class="tile-name all-tittles">Liberación</div>
                    <div class="tile-num full-reset">77</div>
                </article>
                <article class="tile">
                    <div class="tile-icon full-reset"><a href="bitacora.php"><i class="zmdi zmdi-view-list"></a></i></div>
                    <div class="tile-name all-tittles">Bitacora</div>
                    <div class="tile-num full-reset">77</div>
                </article>
            </section>

        </div>';

}
    elseif($privilegio=="implementaciones" || $privilegio=="comercial"){

        echo    '<div class="container-fluid">
                <div class="page-header">
                    <h1 class="all-tittles"><small>Seguimiento a actividades</small></h1>
                    </div>
                <section class="full-reset text-center" style="padding: 40px 0;">
                    <article class="tile">
                        <div class="tile-icon full-reset"><i class="zmdi zmdi-file-plus"></i></div>
                        <div class="tile-name all-tittles">Nueva solicitud</div>
                        <div class="tile-num full-reset">7</div>
                    </article>
                    <article class="tile">
                        <div class="tile-icon full-reset"><i class="zmdi zmdi-steam-square"></i></div>
                        <div class="tile-name all-tittles">Visitas técnicas</div>
                        <div class="tile-num full-reset">70</div>
                    </article>
                    <article class="tile">
                        <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment"></i></div>
                        <div class="tile-name all-tittles">Asignación de cofre</div>
                        <div class="tile-num full-reset">11</div>
                    </article>
                    <article class="tile">
                        <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar-check"></i></div>
                        <div class="tile-name all-tittles">Plan de Implementación</div>
                        <div class="tile-num full-reset">21</div>
                    </article>
                    <article class="tile">
                        <div class="tile-icon full-reset"><i class="zmdi zmdi-input-antenna"></i></div>
                        <div class="tile-name all-tittles">Liberación</div>
                        <div class="tile-num full-reset">77</div>
                    </article>
                    <article class="tile">
                        <div class="tile-icon full-reset"><i class="zmdi zmdi-view-list"></i></div>
                        <div class="tile-name all-tittles">Bitacora</div>
                        <div class="tile-num full-reset">77</div>
                    </article>
                </section>

            </div>';

    }
 ?>

</body>
</html>