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
              <h1 class="all-tittles"><small>Gestión de usuarios</small></h1>
            </div>
            </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"  class="active"><a href="listausuarios.php">Agregar usuario</a></li>
                <li role="presentation"><a href="#">Implementaciones</a></li>
                <li role="presentation"><a href="#">Comercial</a></li>
                <li role="presentation"><a href="#">Técnico</a></li>
            </ul>
        </div>

        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Listado de usuarios, puedes actualizar ó eliminar el registro. 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Lista de usuarios</li>
                      <li><a href="adduser.php">Nuevo usuario</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar personal" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>
            <h2 class="text-center all-tittles">Lista de usuarios</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Área/Departamento</div>
                    <div class="div-table-cell">Contacto</div>
                    <div class="div-table-cell">Actualizar</div>
                    <div class="div-table-cell">Borrar</div>
                </div>
                <div class="div-table-row">
                    <div class="div-table-cell">ID</div>
                    <div class="div-table-cell">Nombre</div>
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Área/Departamento</div>
                    <div class="div-table-cell">Contacto</div>
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
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Área/Departamento</div>
                    <div class="div-table-cell">Contacto</div>
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
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Área/Departamento</div>
                    <div class="div-table-cell">Contacto</div>
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
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Área/Departamento</div>
                    <div class="div-table-cell">Contacto</div>
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
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Sucursal</div>
                    <div class="div-table-cell">Área/Departamento</div>
                    <div class="div-table-cell">Contacto</div>
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