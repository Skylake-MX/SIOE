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
              <h1 class="all-tittles"><small>Administración</small></h1>
            </div>
            </div>
            <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
            <li role="presentation"><a href="listabancos.php">Bancos</a></li>
              <li role="presentation" class="active"><a href="listatraslado.php">Empresa de Traslado</a></li>
              <li role="presentation"><a href="listacategoria.php">Segmento</a></li>
              <li role="presentation"><a href="listaproveedor.php">Proveedor</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/institution.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Listado de las instituciones de traslado, puedes actualizar ó eliminar el registro.
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Lista de traslado</li>
                      <li><a href="traslado.php">Nueva empresa</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar empresa de traslado" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la empresa de traslado que deseas buscar.">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            <h2 class="text-center all-tittles">Lista de empresas de traslado</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Regional</div>
                    <div class="div-table-cell">CR caja general</div>
                    <div class="div-table-cell">Actualizar</div>
                    <div class="div-table-cell">Borrar</div>
                </div>
                <div class="div-table-row">
                    <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Regional</div>
                    <div class="div-table-cell">CR caja general</div>
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
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Regional</div>
                    <div class="div-table-cell">CR caja general</div>
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
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Regional</div>
                    <div class="div-table-cell">CR caja general</div>
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
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Regional</div>
                    <div class="div-table-cell">CR caja general</div>
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
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Direccion</div>
                    <div class="div-table-cell">Telefono</div>
                    <div class="div-table-cell">Regional</div>
                    <div class="div-table-cell">CR caja general</div>
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