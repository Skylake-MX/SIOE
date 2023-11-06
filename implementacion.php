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
                    <li class="active">Editar ficha</li>
                    <li><a href="cartaintencion.php">Carta intención</a></li>
                    <li><a href="pantallaSIOBOVIR.php">Pantalla SIO BOVIR</a></li>
                    <li><a href="usuariosficha.php">Editar usuarios</a></li>
                    <li><a href="fichaproceso.php">Ficha de proceso</a></li>
                    <li><a href="historial.php">Historial</a></li>
                    <li><a href="ficha.php">Ver ficha de alta</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Ficha de Alta</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos Generales - Responsable Comercial</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Código identificador" required="" pattern="[0-9]{1,3}" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Banco</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre(s)" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Esquema de acreditación</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Apellido paterno" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Apellido paterno del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo de Acreditación Mismo Dia</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Apellido materno" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Apellido materno del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Acceso Portal SITEF</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Giro del cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sociedad" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sociedad">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre Comercial</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sociedad" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sociedad">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Razón Social Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sucursal GSI" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Domicilio Corporativo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sucursal GSI" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de Sucursal Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombre de la sucursal GSI" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Domicilio Sucursal Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Área ó departamento del usuario" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,70}" data-toggle="tooltip" data-placement="top" title="Área o departamento del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de contacto Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="Email del usuario" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ@.- ]{10,70}" data-toggle="tooltip" data-placement="top" title="Escribe el e-mail del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo de contacto Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Télefono en red con prefijo" required="" maxlength="6" pattern="[0-9]{3,6}" data-toggle="tooltip" data-placement="top" title="Télefono en red con prefijo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono de contacto Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" placeholder="10 digitos" required="" pattern="[0-9]{10,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del ejecutivo de Vtas:</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="GSI-X,XXX" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ,\- ]{9,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Escribe la volumetría del equipo GSI-X,XXX">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipificación Equipo a Instalar</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Actividad requerida</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cuenta  de Abono</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Referencia Fija</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Divisa</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Horarios de cortes</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa ETV (Traslado)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sucursal ETV (Traslado)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa ETV (Procesa)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ETV (Procesa)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>CR Caja  (Proceso)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Frecuencia de Recolección</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Horario de Recolección</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Código Bovir</label>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-lock"></i> &nbsp; Carga de Documentos - Responsable Comercial</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="file" class="material-control tooltips-general" placeholder="Carta intención" name="cartaIntencion" required="" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Carta intención</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="file" class="material-control tooltips-general" placeholder="Pantalla SIO/BOVIR" name="imgSIOBOVIR" required="" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Pantalla SIO-BOVIR</label>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-lock"></i> &nbsp; ID's - Responsable Operaciones Eléctronicas</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID cliente (SITEF)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Sucursal (SITEF)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Dispositivo</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-lock"></i> &nbsp; Asignacion de Equipo - Responsable Implementaciones</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Marca</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Modelo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>No. de Serie:</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-lock"></i> &nbsp; Responsable Instalaciones</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Estudio técnico</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Anclaje de cajero</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha Configuración</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Numero de empleado" required="" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha Inicio de operación</label>
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