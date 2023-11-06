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
            <!-- </div> -->
            <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation" class="active"><a href="listabancos.php">Bancos</a></li>
              <li role="presentation"><a href="listatraslado.php">Empresa de Traslado</a></li>
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
                    Guarda los datos de la banca, no podrás crear registros identicos.
                    Puedes actualizar la información ó eliminar el registro.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">

                    <li ><a href="listabancos.php">Lista de bancos</a></li>
                    <li class="active">Nuevo banco</li>

                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Guardar datos de la institución</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-balance"></i> &nbsp; Datos del banco</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Código identificador" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Banco</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la institución bancaría" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\-  ]{5,100}" maxlength="100" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la institución">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de la institución</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Dirección de la institución bancaría" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\-,.  ]{20,200}" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccíon completa de la institución bancaría">
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
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre del contacto comercial con la institución bancaría" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{10,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del contacto comercial; Nombre Apellido P Apellido M">
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
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre del contacto operativo con la institución bancaría" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{10,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del contacto operativo; Nombre Apellido P Apellido M">
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