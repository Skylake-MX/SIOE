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
              <li role="presentation"><a href="listatraslado.php">Empresa de Traslado</a></li>
              <li role="presentation" class="active"><a href="listacategoria.php">Segmento</a></li>
              <li role="presentation"><a href="listaproveedor.php">Proveedor</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/category.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Guarda los datos del segmento, no podrás crear registros identicos. Puedes actualizar la información ó eliminar el registro.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="listacategoria.php">Lista de segmentos</a></li>
                        <li class="active">Nuevo segmento</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar un nuevo segmento</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-bookmark-outline"></i> &nbsp; Datos de la segmento</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                            <input type="text" class="material-control tooltips-general" placeholder="Código identificador" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID segmento</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre del segmento" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ\-  ]{5,30}" maxlength="30" data-toggle="tooltip" data-placement="top" title="Escribe el segmento">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Segmento</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Dispensador/Aceptador/Reciclador" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ\-  ]{5,30}" maxlength="30" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la técnologia">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo de técnologia</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="GSI-X,XXX" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ,\- ]{9,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Escribe la volumetría del equipo GSI-X,XXX">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Volumetria</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                            <input type="text" class="material-control tooltips-general" placeholder="Año de integración de este segmento" required="" pattern="[0-9]{4,4}" maxlength="4" data-toggle="tooltip" data-placement="top" title="Solo números, 4 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Año de integracion</label>
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