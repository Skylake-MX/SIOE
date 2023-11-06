<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once('./app/views/inc/head.php'); ?>
    <link rel="stylesheet" href="./app/views/css/timeline.css">
</head>
<body>

    <?php 
        require_once('./app/views/inc/navlateral.php');
        require_once('./app/views/inc/nav.php');
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
                    <li><a href="fichaproceso.php">Ficha de proceso</a></li>
                    <li class="active">Historial</li>
                    <li><a href="ficha.php">Ver ficha de alta</a></li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
                        <section id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img class="img-circle" src="./app/views/assets/icons/logo.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">1 - Nombre (Comercial)</h4>
                                    <p class="text-center">
                                        <label class="text-center">Captura información- Ficha técnica</label><br>
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>8:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>8:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>  
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img class="img-circle" src="./app/views/assets/icons/user04.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">2 - Sistema</h4>
                                    <p class="text-center">
                                        <label class="text-center">Creación de Folio</label><br>
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>8:17 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>8:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img class="img-circle" src="./app/views/assets/icons/marlene.jpeg" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">3 - Marlene Lopez (Implementación)</h4>
                                    
                                    <p class="text-center">
                                        <label class="text-center">Confirmacion de informacion - Ficha técnica</label><br>
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>12:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>12:10 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img">
                                    <img class="img-circle" src="./app/views/assets/icons/Imagen1.png" alt="user-picture">
                                </div>
                                <div class="cd-timeline-content">
                                    <h4 class="text-center">4 - Mariana Castro (Implementación)</h4>
                                    <p class="text-center">
                                        <label class="text-center">En proceso de asignacion de visita técnica.</label><br>
                                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Inicio: <em>15:00 AM</em> &nbsp;&nbsp;&nbsp; 
                                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> Finalización: <em>15:17 AM</em>
                                    </p>
                                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                                </div>
                            </div>   
                        </section>
                    </div>
        
</body>
</html>