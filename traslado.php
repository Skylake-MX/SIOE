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
                    Guarda los datos de la empresa de traslado, no podrás crear registros identicos.
                    Puedes actualizar la información ó eliminar el registro.
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="listatraslado.php">Lista de traslado</a></li>
                      <li class="active">Nueva empresa</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar una nueva ETV</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-truck"></i> &nbsp; Datos de la ETV</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Código identificador" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID empresa de traslado</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la empresa de traslado" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,100}" maxlength="100" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la empresa de traslado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre  de la empresa</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sucursal de traslado" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal de la empresa de traslado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sucursal de la empresa de traslado</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Direccion de la sucursal de traslado" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\-,.  ]{20,200}" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccíon completa de la empresa de traslado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Dirección de sucursal</label>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" placeholder="10 digitos" required="" pattern="[0-9]{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Regional a la que pertenece la sucursal" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la Regional de esta sucursal">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Regional</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="CR de la caja General" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>CR Caja Proceso</label>
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