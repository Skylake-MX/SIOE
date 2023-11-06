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
                    <li class="active"><a href="implementacion.php">Editar ficha</a></li>
                    <li><a href="cartaintencion.php">Carta intención</a></li>
                    <li><a href="pantallaSIOBOVIR.php">Pantalla SIO BOVIR</a></li>
                    <li><a href="usuariosficha.php">Editar usuarios</a></li>
                    <li><a href="fichaproceso.php">Ficha de proceso</a></li>
                    <li><a href="historial.php">Historial</a></li>
                    <li class="active">Ver ficha de alta</li>
                    </ol>
                </div>
            </div>
        </div>

        <p></p>
    <div style="width: 800px; text-align: left; margin: auto; margin-top:1px;font-size: 12px">
      
    <table border="1px" style="text-align: center; margin: auto; margin-top:1px;width: 800px; font-size: 12px">
    <th bgcolor="#203764"; colspan="1" style="color: white;">Responsable</th>
    <th bgcolor="#203764"; colspan="7" style="color: white;">Datos alta de Cliente</th>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 150px; color: white;">Banco</td>
        <td>BANORTE</td>
        </tr>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Esquema de acreditación</td>
        <td>TRADICIONAL</td>
        </tr>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Tipo de Acreditación Mismo Dia</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Acceso Portal SITEF</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Giro de Cliente</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Nombre Comercial</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Razón Social Cliente</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Domicilio Corporativo</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Nombre de Sucursal Cliente</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#203764" style="width: 100px; color: white;">Comercial/Ejecutivo vta</td>
        <td bgcolor="#203764" style="width: 100px; color: white;">Domicilio Sucursal Cliente</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Nombre de contacto Cliente</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Correo de contacto Cliente</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Teléfono de contacto Cliente</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Nombre del ejecutivo de Vtas:</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Tipificación Equipo a Instalar</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Actividad requerida</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Cuenta  de Abono</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Referencia Fija</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Divisa</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Horarios de cortes</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Empresa ETV (Traslado)</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Sucursal ETV (Traslado)</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Empresa ETV (Procesa)</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">ETV (Procesa)</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">CR Caja  (Proceso)</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Frecuencia de Recolección</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Comercial/Ejecutivo vta</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Horario de Recolección</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#20376" style="width: 100px;  color: white">Implantacion SAP</td>
        <td bgcolor="#20376" style="width: 100px;  color: white">Código Bovir</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#0070c0" style="width: 100px;  color: white">Operaciones Electrónicas</td>
        <td bgcolor="#0070C0" style="width: 100px;  color: white">ID cliente (SITEF)</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#0070C0" style="width: 100px;  color: white">Operaciones Electrónicas</td>
        <td bgcolor="#0070C0" style="width: 100px;  color: white">ID Sucursal (SITEF)</td>
        <td></td>
        </tr>  
        <tr>
        <td bgcolor="#0070C0" style="width: 100px;  color: white">Operaciones Electrónicas</td>
        <td bgcolor="#0070C0" style="width: 100px;  color: white">ID Dispositivo</td>
        <td></td>
        </tr>  
        <tr>
        <td bgcolor="#333F4F" style="width: 100px; color: white;">Implementaciones</td>
        <td bgcolor="#333F4F" style="width: 100px; color: white;">Marca</td>
        <td></td>
        </tr>  
        <tr>
        <td bgcolor="#333F4F" style="width: 100px; color: white;">Implementaciones</td>
        <td bgcolor="#333F4F" style="width: 100px; color: white;">Modelo</td>
        <td></td>
        </tr>  
        <tr>
        <td bgcolor="#333F4F" style="width: 100px; color: white;">Implementaciones</td>
        <td bgcolor="#333F4F" style="width: 100px; color: white;">No. de Serie</td>
        <td></td>
        </tr>
        <tr>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Instalaciones</td>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Estudio técnico</td>
        <td></td>
        </tr>  
        <tr>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Instalaciones</td>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Anclaje de cajero</td>
        <td></td>
        </tr>  
        <tr>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Instalaciones</td>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Fecha Configuración</td>
        <td></td>
        </tr> 
        <tr>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Instalaciones</td>
        <td bgcolor="#4472C4" style="width: 100px; color: white;">Fecha Inicio de operación</td>
        <td></td>
        </tr>
    </table>
    <br>
    <table border="1px" style="text-align: center; margin: auto; margin-top:1px;width: 800px; font-size: 12px">
    <th bgcolor="#808080"; colspan="8" style="text-align: center; color: white;">DATOS PARA ALTA DE USUARIOS QUE DEPOSITAN EN COFRE ELECTRONICO</th>
        <tr>
        <td bgcolor="#808080" style="width: 100px; color: white;" colspan="1">Responsable</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario 1</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario 2</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario 3</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario 4</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario 5</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario 6</td>
        </tr>

        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Tipo de Usuario</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Asignado a</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Contraseña</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Puesto</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Solicita</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Fecha Hora de solicitud</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Fecha Hora de entrega</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>

    </table>
        <br>
        <table border="1px" style="text-align: center; margin: auto; margin-top:1px;width: 800px; font-size: 11px">
    <th bgcolor="#808080"; colspan="8" style="text-align: center; color: white;">DATOS PARA ALTA DE USUARIOS QUE INGRESAN A PORTAL SITEF</th>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Responsable</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1"></td>
        </tr>

        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Operaciones Electrónicas</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Usuario</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Operaciones Electrónicas</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Contraseña</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Asignado a</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Telefono</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Correo Electrónico</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Puesto</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
        <tr>
        <td bgcolor="#808080" style="width: 150px; color: white;" colspan="1">Comercial/Ejecutivo vta</td>
        <td bgcolor="#808080" style="width: 150px; color: white;" colpsan="1">Privilegios</td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        <td  style="width: 150px;" colpsan="1"></td>
        </tr>
    </table>

    <br><br>

    </div>

</body>
</html>