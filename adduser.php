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
                    Bienvenido a la sección para registrar nuevos usuarios del sistema, debes de llenar todos los campos del siguiente formulario para crear el registro.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="listausuarios.php">Lista de usuarios</a></li>
                      <li class="active">Nuevo usuario</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo usuario</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos básicos</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Código identificador" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID usuario</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre(s)" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Apellido paterno" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Apellido paterno del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellido paterno</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Apellido materno" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Apellido materno del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellido materno</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Numero de emplado</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sociedad" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sociedad">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sucursal GSI" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sucursal</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Área ó departamento del usuario" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,70}" data-toggle="tooltip" data-placement="top" title="Área o departamento del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Area ó Departamento</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="Email del usuario" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ@.- ]{10,70}" data-toggle="tooltip" data-placement="top" title="Escribe el e-mail del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Télefono en red con prefijo" required="" maxlength="6" pattern="[0-9]{3,6}" data-toggle="tooltip" data-placement="top" title="Télefono en red con prefijo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono en red</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" placeholder="10 digitos" required="" pattern="[0-9]{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono largo</label>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-lock"></i> &nbsp; Datos de la cuenta</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                           <div class="group-material">
                                <input type="password" class="material-control tooltips-general" placeholder="Repite la contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Repetir contraseña</label>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general" required="" maxlength="30" data-toggle="tooltip" data-placement="top" title="Selecciona una opción">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Perfil</label>
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