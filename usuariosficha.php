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
                    <li class="active">Editar usuarios</li>
                    <li><a href="fichaproceso.php">Ficha de proceso</a></li>
                    <li><a href="historial.php">Historial</a></li>
                    <li><a href="historial.php">Ver ficha de alta</a></li>
                    </ol>
                </div>
            </div>
        </div>


        <div class="container-fluid">
             <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Ficha de Alta - Usuarios</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos para alta de usuarios que depositan en cofre electronico - Responsable Comercial</legend><br>
                        </div>

                <div class="div-table">
                    <div class="div-table-row div-table-head">
                        <div class="div-table-cell">Tipo de usuario</div>
                        <div class="div-table-cell">Asignado a</div>
                        <div class="div-table-cell">Usuario</div>
                        <div class="div-table-cell">Contraseña</div>
                        <div class="div-table-cell">Puesto</div>
                        <div class="div-table-cell">Solicita</div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Tipo de usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Solicita" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar">  </div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Tipo de usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Solicita" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar">  </div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Tipo de usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Solicita" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar">  </div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Tipo de usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Solicita" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar">  </div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Tipo de usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Solicita" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar">  </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos para alta de usuarios que ingresan a portal SITEF - Responsable Comercial</legend><br>
                        </div>

                        <div class="div-table">
                    <div class="div-table-row div-table-head">
                        <div class="div-table-cell">Usuario</div>
                        <div class="div-table-cell">Contraseña</div>
                        <div class="div-table-cell">Asignado a</div>
                        <div class="div-table-cell">Télefono</div>
                        <div class="div-table-cell">Correo electrónico</div>
                        <div class="div-table-cell">Puesto</div>
                        <div class="div-table-cell">Privilegios</div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Télefono" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Correo electrónico" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Privilegios" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Télefono" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Correo electrónico" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Privilegios" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Télefono" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Correo electrónico" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Privilegios" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Télefono" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Correo electrónico" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Privilegios" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                    </div>
                    <div class="div-table-row">
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Usuario"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Contraseña" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Asignado a" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Télefono" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Correo electrónico" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Puesto" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                        <div class="div-table-cell"><input type="text" class="material-control text-center" placeholder="Privilegios" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}"><span class="bar"></span></div>
                    </div>
                </div>
                <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                </div>
            </div>
</body>
</html>