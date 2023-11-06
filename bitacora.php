<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once('./app/views/inc/head.php'); ?>
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
                <li role="presentation" class="active"><a href="bitacora.php">Bitacora General</a></li>
                <li role="presentation"><a href="implementacion.php">Nueva solicitud</a></li>
                <li role="presentation"><a href="visitatecnica.php">Visita Técnica</a></li>
                <li role="presentation"><a href="asignacioncofre.php">Asignacion Cofre</a></li>
                <li role="presentation"><a href="asignacioncofre.php">Check-In</a></li>
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
                    Bienvenido a la sección para realizar el seguimiento a las actividades pendientes.
                </div>
            </div>
        </div>

        <div class="container-fluid">
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar por folio de seguimiento" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el folio que deseas buscar">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            <h2 class="text-center all-tittles">Actividades pendientes</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell">Folio</div>
                    <div class="div-table-cell">Fecha de Solicitud</div>
                    <div class="div-table-cell">Actividad Solicitada</div>
                    <div class="div-table-cell">Formateria</div>
                    <div class="div-table-cell">Cliente</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">ETV</div>
                    <div class="div-table-cell">Sucursal GSI</div>
                    <div class="div-table-cell">Estatus</div>
                    <div class="div-table-cell">Responsabilidad</div>
                    <div class="div-table-cell">Actualizar</div>
                    <div class="div-table-cell">Borrar</div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">Folio</div>
                    <div class="div-table-cell">Fecha de Solicitud</div>
                    <div class="div-table-cell">Actividad Solicitada</div>
                    <div class="div-table-cell">Formateria</div>
                    <div class="div-table-cell">Cliente</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">ETV</div>
                    <div class="div-table-cell">Sucursal GSI</div>
                    <div class="div-table-cell">Estatus</div>
                    <div class="div-table-cell">Responsabilidad</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">Folio</div>
                    <div class="div-table-cell">Fecha de Solicitud</div>
                    <div class="div-table-cell">Actividad Solicitada</div>
                    <div class="div-table-cell">Formateria</div>
                    <div class="div-table-cell">Cliente</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">ETV</div>
                    <div class="div-table-cell">Sucursal GSI</div>
                    <div class="div-table-cell">Estatus</div>
                    <div class="div-table-cell">Responsabilidad</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">Folio</div>
                    <div class="div-table-cell">Fecha de Solicitud</div>
                    <div class="div-table-cell">Actividad Solicitada</div>
                    <div class="div-table-cell">Formateria</div>
                    <div class="div-table-cell">Cliente</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">ETV</div>
                    <div class="div-table-cell">Sucursal GSI</div>
                    <div class="div-table-cell">Estatus</div>
                    <div class="div-table-cell">Responsabilidad</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">Folio</div>
                    <div class="div-table-cell">Fecha de Solicitud</div>
                    <div class="div-table-cell">Actividad Solicitada</div>
                    <div class="div-table-cell">Formateria</div>
                    <div class="div-table-cell">Cliente</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">ETV</div>
                    <div class="div-table-cell">Sucursal GSI</div>
                    <div class="div-table-cell">Estatus</div>
                    <div class="div-table-cell">Responsabilidad</div>
                    <div class="div-table-cell">
                        <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    </div>
                    <div class="div-table-cell">
                        <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                    </div>
                </div>
                <div class="div-table-row">
                <div class="div-table-cell">Folio</div>
                    <div class="div-table-cell">Fecha de Solicitud</div>
                    <div class="div-table-cell">Actividad Solicitada</div>
                    <div class="div-table-cell">Formateria</div>
                    <div class="div-table-cell">Cliente</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">ETV</div>
                    <div class="div-table-cell">Sucursal GSI</div>
                    <div class="div-table-cell">Estatus</div>
                    <div class="div-table-cell">Responsabilidad</div>
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