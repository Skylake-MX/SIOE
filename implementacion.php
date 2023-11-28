<?php

require_once './connect.php';
require_once 'user_session.php';
require_once 'user.php';

error_reporting(0); 
session_start();
$currentUser = new User();
$currentUser->setUser($_SESSION['user']);
$localidad = $currentUser->getLocalidad();
$nombre =$currentUser->getNombre();
$privilegio = $currentUser->getPrivilegio();

// var_dump($_POST);

    if(!empty($_POST)){

        // echo "Esto es un post";

        $id=$_POST['id'];  
        /* var_dump($id); */

        $newbanco = $_POST['banco'];
        $newesquemaDeAcreditacion  = $_POST['esquemaDeAcreditacion'];
        $newtipoDeAcreditacionMismoDia = $_POST['tipoDeAcreditacionMismoDia'];
        $newaccesoPortalSitef = $_POST['accesoPortalSitef'];
        $newgiroDeCliente  = $_POST['giroDeCliente'];
        $newnombreComercial  = $_POST['nombreComercial'];
        $newrazonSocialCliente  = $_POST['razonSocialCliente'];
        $newdomicilioCorporativo  = $_POST['domicilioCorporativo'];
        $newnombreDeSucursalCliente  = $_POST['nombreDeSucursalCliente'];
        $newdomicilioSucursalCliente  = $_POST['domicilioSucursalCliente'];
        $newnombreDeContactoCliente  = $_POST['nombreDeContactoCliente'];
        $newcorreoDeContactoCliente = $_POST['correoDeContactoCliente'];
        $newtelefonoDeContactoCliente  = $_POST['telefonoDeContactoCliente'];
        $newnombreDelEjecutivodeVtas  = $_POST['nombreDelEjecutivodeVtas'];
        $newtipificacionEquipoAInstalar = $_POST['tipificacionEquipoAInstalar'];
        $newactividadRequerida  = $_POST['actividadRequerida'];
        $newcuentaDeAbono = $_POST['cuentaDeAbono'];
        $newreferenciaFija= $_POST['referenciaFija'];
        $newdivisa = $_POST['divisa'];
        $newhorarioDeCortes  = $_POST['horarioDeCortes'];
        $newempresaETVTraslado  = $_POST['empresaETVTraslado'];
        $newsucursalETVTraslado  = $_POST['sucursalETVTraslado'];
        $newempresaETVProcesa  = $_POST['empresaETVProcesa'];
        $newetvProcesa = $_POST['etvProcesa'];
        $newcrCajaProceso = $_POST['crCajaProceso'];
        $newfrecuenciaDeRecoleccion = $_POST['frecuenciaDeRecoleccion'];
        $newhorarioDeRecoleccion = $_POST['horarioDeRecoleccion'];
        $newcodigoBovir = $_POST['codigoBovir'];
        $newidClienteSitef = $_POST['idClienteSitef'];
        $newidSucursalSitef = $_POST['idSucursalSitef'];
        $newidDispositivo = $_POST['idDispositivo'];
        $newmarca = $_POST['marca'];
        $newmodelo = $_POST['modelo'];
        $newnoDeSerie = $_POST['noDeSerie'];
        $newestudioTecnico = $_POST['estudioTecnico'];
        $newanclajeDeCajero = $_POST['anclajeDeCajero'];
        $newfechaConfiguracion = $_POST['fechaConfiguracion'];
        $newfechaInicioOperacion = $_POST['fechaInicioOperacion'];
        $newaux = $_POST['aux'];
        $newaux3 = $_POST['aux3'];
        $newaux4 = $_POST['aux4'];
        //$new = $_POST[''];

        $sql = "UPDATE bitacora SET 
            banco=:banco,
            esquemaDeAcreditacion=:esquemaDeAcreditacion,
            tipoDeAcreditacionMismoDia=:tipoDeAcreditacionMismoDia,
            accesoPortalSitef=:accesoPortalSitef,
            giroDeCliente=:giroDeCliente,
            nombreComercial=:nombreComercial,
            razonSocialCliente=:razonSocialCliente,
            domicilioCorporativo=:domicilioCorporativo,
            nombreDeSucursalCliente=:nombreDeSucursalCliente,
            domicilioSucursalCliente=:domicilioSucursalCliente,
            nombreDeContactoCliente=:nombreDeContactoCliente,
            correoDeContactoCliente=:correoDeContactoCliente,
            telefonoDeContactoCliente=:telefonoDeContactoCliente,
            nombreDelEjecutivodeVtas=:nombreDelEjecutivodeVtas,
            tipificacionEquipoAInstalar=:tipificacionEquipoAInstalar,
            actividadRequerida=:actividadRequerida,
            cuentaDeAbono=:cuentaDeAbono,
            referenciaFija=:referenciaFija,
            divisa=:divisa,
            horarioDeCortes=:horarioDeCortes,
            empresaETVTraslado=:empresaETVTraslado,
            sucursalETVTraslado=:sucursalETVTraslado,
            empresaETVProcesa=:empresaETVProcesa,
            etvProcesa=:etvProcesa,
            crCajaProceso=:crCajaProceso,
            frecuenciaDeRecoleccion=:frecuenciaDeRecoleccion,
            horarioDeRecoleccion=:horarioDeRecoleccion,
            codigoBovir=:codigoBovir,
            idClienteSitef=:idClienteSitef,
            idSucursalSitef=:idSucursalSitef,
            idDispositivo=:idDispositivo,
            marca=:marca,
            modelo=:modelo,
            noDeSerie=:noDeSerie,
            estudioTecnico=:estudioTecnico,
            anclajeDeCajero=:anclajeDeCajero,
            fechaConfiguracion=:fechaConfiguracion,
            fechaInicioOperacion=:fechaInicioOperacion,
            aux=:aux,
            aux3=:aux3,
            aux4=:aux4 WHERE id=:id";

        $query = $pdo->prepare($sql);
        $result = $query->execute([
            
            //'' => $,
            'id' => $id,
            'banco' => $newbanco,
            'esquemaDeAcreditacion' => $newesquemaDeAcreditacion,
            'tipoDeAcreditacionMismoDia' => $newtipoDeAcreditacionMismoDia,
            'accesoPortalSitef' => $newaccesoPortalSitef,
            'giroDeCliente' => $newgiroDeCliente,
            'nombreComercial' => $newnombreComercial,
            'razonSocialCliente' => $newrazonSocialCliente,
            'domicilioCorporativo' => $newdomicilioCorporativo,
            'nombreDeSucursalCliente' => $newnombreDeSucursalCliente,
            'domicilioSucursalCliente' => $newdomicilioSucursalCliente,
            'nombreDeContactoCliente' => $newnombreDeContactoCliente,
            'correoDeContactoCliente' => $newcorreoDeContactoCliente,
            'telefonoDeContactoCliente' => $newtelefonoDeContactoCliente,
            'nombreDelEjecutivodeVtas' => $newnombreDelEjecutivodeVtas,
            'tipificacionEquipoAInstalar' => $newtipificacionEquipoAInstalar,
            'actividadRequerida' => $newactividadRequerida,
            'cuentaDeAbono' => $newcuentaDeAbono,
            'referenciaFija' => $newreferenciaFija,
            'divisa' => $newdivisa,
            'horarioDeCortes' => $newhorarioDeCortes,
            'empresaETVTraslado' => $newempresaETVTraslado,
            'sucursalETVTraslado' => $newsucursalETVTraslado,
            'empresaETVProcesa' => $newempresaETVProcesa,
            'etvProcesa' => $newetvProcesa,
            'crCajaProceso' => $newcrCajaProceso,
            'frecuenciaDeRecoleccion' => $newfrecuenciaDeRecoleccion,
            'horarioDeRecoleccion' => $newhorarioDeRecoleccion,
            'codigoBovir' => $newcodigoBovir,
            'idClienteSitef' => $newidClienteSitef,
            'idSucursalSitef' => $newidSucursalSitef,
            'idDispositivo' => $newidDispositivo,
            'marca' => $newmarca,
            'modelo' => $newmodelo,
            'noDeSerie' => $newnoDeSerie,
            'estudioTecnico' => $newestudioTecnico,
            'anclajeDeCajero' => $newanclajeDeCajero,
            'fechaConfiguracion' => $newfechaConfiguracion,
            'fechaInicioOperacion' => $newfechaInicioOperacion,
            'aux' => $newaux,
            'aux3' => $newaux3,
            'aux4' => $newaux4
            ]);

            $bancoValue = $newbanco;
            $esquemaDeAcreditacionValue = $newesquemaDeAcreditacion;
            $tipoDeAcreditacionMismoDiaValue = $newtipoDeAcreditacionMismoDia;
            $accesoPortalSitefValue = $newaccesoPortalSitef;
            $giroDeClienteValue = $newgiroDeCliente;
            $nombreComercialValue = $newnombreComercial;
            $razonSocialClienteValue = $newrazonSocialCliente;
            $domicilioCorporativoValue = $newdomicilioCorporativo;
            $nombreDeSucursalClienteValue = $newnombreDeSucursalCliente;
            $domicilioSucursalClienteValue = $newdomicilioSucursalCliente;
            $nombreDeContactoClienteValue = $newnombreDeContactoCliente;
            $correoDeContactoClienteValue = $newcorreoDeContactoCliente;
            $telefonoDeContactoClienteValue = $newtelefonoDeContactoCliente;
            $nombreDelEjecutivodeVtasValue = $newnombreDelEjecutivodeVtas;
            $tipificacionEquipoAInstalarValue = $newtipificacionEquipoAInstalar;
            $actividadRequeridaValue = $newactividadRequerida;
            $cuentaDeAbonoValue = $newcuentaDeAbono;
            $referenciaFijaValue = $newreferenciaFija;
            $divisaValue = $newdivisa;
            $horarioDeCortesValue = $newhorarioDeCortes;
            $empresaETVTrasladoValue = $newempresaETVTraslado;
            $sucursalETVTrasladoValue = $newsucursalETVTraslado;
            $empresaETVProcesaValue = $newempresaETVProcesa;
            $etvProcesaValue = $newetvProcesa;
            $crCajaProcesoValue = $newcrCajaProceso;
            $frecuenciaDeRecoleccionValue = $newfrecuenciaDeRecoleccion;
            $horarioDeRecoleccionValue = $newhorarioDeRecoleccion;
            $codigoBovirValue = $newcodigoBovir;
            $idClienteSitefValue = $newidClienteSitef;
            $idSucursalSitefValue = $newidSucursalSitef;
            $idDispositivoValue = $newidDispositivo;
            $marcaValue = $newmarca;
            $modeloValue = $newmodelo;
            $noDeSerieValue = $newnoDeSerie;
            $estudioTecnicoValue = $newestudioTecnico;
            $anclajeDeCajeroValue = $newanclajeDeCajero;
            $fechaConfiguracionValue = $newfechaConfiguracion;
            $fechaInicioOperacionValue = $newfechaInicioOperacion;
            $auxValue = $newaux;
            $aux3Value = $newaux3;
            $aux4Value = $newaux4;
            

            /* var_dump($result); */
            $estatusOp="El registro para " . $id. " se actualizo correctamente. ";
    }
    else{
        
    $id = $_GET['id'];
    // var_dump($_GET);
    // echo "esto es un get";

    $sql="SELECT * FROM bitacora WHERE id=:id";
    $query=$pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);

    $row=$query->fetch(PDO::FETCH_ASSOC);

    $bancoValue = $row['banco'];
    $esquemaDeAcreditacionValue = $row['esquemaDeAcreditacion'];
    $tipoDeAcreditacionMismoDiaValue = $row['tipoDeAcreditacionMismoDia'];
    $accesoPortalSitefValue = $row['accesoPortalSitef'];
    $giroDeClienteValue = $row['giroDeCliente'];
    $nombreComercialValue = $row['nombreComercial'];
    $razonSocialClienteValue = $row['razonSocialCliente'];
    $domicilioCorporativoValue = $row['domicilioCorporativo'];
    $nombreDeSucursalClienteValue = $row['nombreDeSucursalCliente'];
    $domicilioSucursalClienteValue = $row['domicilioSucursalCliente'];
    $nombreDeContactoClienteValue = $row['nombreDeContactoCliente'];
    $correoDeContactoClienteValue = $row['correoDeContactoCliente'];
    $telefonoDeContactoClienteValue = $row['telefonoDeContactoCliente'];
    $nombreDelEjecutivodeVtasValue = $row['nombreDelEjecutivodeVtas'];
    $tipificacionEquipoAInstalarValue = $row['tipificacionEquipoAInstalar'];
    $actividadRequeridaValue = $row['actividadRequerida'];
    $cuentaDeAbonoValue = $row['cuentaDeAbono'];
    $referenciaFijaValue = $row['referenciaFija'];
    $divisaValue = $row['divisa'];
    $horarioDeCortesValue = $row['horarioDeCortes'];
    $empresaETVTrasladoValue = $row['empresaETVTraslado'];
    $sucursalETVTrasladoValue = $row['sucursalETVTraslado'];
    $empresaETVProcesaValue = $row['empresaETVProcesa'];
    $etvProcesaValue = $row['etvProcesa'];
    $crCajaProcesoValue = $row['crCajaProceso'];
    $frecuenciaDeRecoleccionValue = $row['frecuenciaDeRecoleccion'];
    $horarioDeRecoleccionValue = $row['horarioDeRecoleccion'];
    $codigoBovirValue = $row['codigoBovir'];
    $idClienteSitefValue = $row['idClienteSitef'];
    $idSucursalSitefValue = $row['idSucursalSitef'];
    $idDispositivoValue = $row['idDispositivo'];
    $marcaValue = $row['marca'];
    $modeloValue = $row['modelo'];
    $noDeSerieValue = $row['noDeSerie'];
    $estudioTecnicoValue = $row['estudioTecnico'];
    $anclajeDeCajeroValue = $row['anclajeDeCajero'];
    $fechaConfiguracionValue = $row['fechaConfiguracion'];
    $fechaInicioOperacionValue = $row['fechaInicioOperacion'];
    $auxValue = $row['aux'];
    $aux3Value = $row['aux3'];
    $aux4Value = $row['aux4'];


    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SIOE Operaciones Electronicas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="Shortcut Icon" type="image/x-icon" href="app/views/assets/icons/Imagen1.png" />

<script src="app/views/js/sweet-alert.min.js"></script>
<link rel="stylesheet" href="app/views/css/sweet-alert.css">
<link rel="stylesheet" href="app/views/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="app/views/css/normalize.css">
<link rel="stylesheet" href="app/views/css/bootstrap.min.css">
<link rel="stylesheet" href="app/views/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="app/views/css/estilos.css">


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="app/views/js/modernizr.js"></script>
<script src="app/views/js/bootstrap.min.js"></script>
<script src="app/views/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="app/views/js/main.js"></script>
</head>
<body>

<!-- AQUI EMPIEZA EL NAV LATERAL -->


<?php
    if ($privilegio=="administrador"){
    
    echo    
    
    '<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                <small>Sistema Integral Op. Electrónicas</small>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="app/views/assets/icons/logo.png" alt="Logo OE" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">SIOE ('.$privilegio.')</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listabancos.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Bancos</a></li>
                            <li><a href="listatraslado.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Empresa de Traslado</a></li>
                            <li><a href="listacategoria.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Segmento</a></li>
                            <li><a href="listaseccion.php"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedor</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                            <li><a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones</a></li>
                            <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Comercial</a></li>
                            <li><a href="#"><i class="zmdi zmdi-walk zmdi-hc-fw"></i>&nbsp;&nbsp;  Técnico</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="bitacora.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora general</a></li>
                            <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                            <li><a href="#"><i class="zmdi zmdi-card-alert zmdi-steam-square"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-calendar-close zmdi-assignment"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-devices-off zmdi-assignment-check"></i>&nbsp;&nbsp; Check-in<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-calendar-check"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>


                        </ul>

                    </li>
                    <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>
                    <li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuracion</a></li>
                </ul>
            </div>
        </div>
    </div>';




    }
    elseif($privilegio=="implementaciones"){

        echo    
    
    '<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                <small>Sistema Integral Op. Electrónicas</small>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="app/views/assets/icons/logo.png" alt="Logo OE" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">SIOE ('.$privilegio.')</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listacategoria.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Segmento</a></li>
                            <li><a href="listaseccion.php"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedor</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                            <li><a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones</a></li>
                            <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Comercial</a></li>
                            <li><a href="#"><i class="zmdi zmdi-walk zmdi-hc-fw"></i>&nbsp;&nbsp;  Técnico</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="bitacora.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora general</a></li>
                            <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                            <li><a href="#"><i class="zmdi zmdi-card-alert zmdi-steam-square"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-calendar-close zmdi-assignment"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-devices-off zmdi-assignment-check"></i>&nbsp;&nbsp; Check-in<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-calendar-check"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>


                        </ul>

                    </li>
                    <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>
                </ul>
            </div>
        </div>
    </div>';



    }elseif($privilegio=="comercial"){
        echo    
    
        '<div class="navbar-lateral full-reset">
            <div class="visible-xs font-movile-menu mobile-menu-button"></div>
            <div class="full-reset container-menu-movile nav-lateral-scroll">
                <div class="logo full-reset all-tittles">
                    <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                    <small>Sistema Integral Op. Electrónicas</small>
                </div>
                <div class="nav-lateral-divider full-reset"></div>
                <div class="full-reset" style="padding: 10px 0; color:#fff;">
                    <figure>
                        <img src="app/views/assets/icons/logo.png" alt="Logo OE" class="img-responsive center-box" style="width:55%;">
                    </figure>
                    <p class="text-center" style="padding-top: 15px;">SIOE ('.$privilegio.')</p>
                </div>
                <div class="nav-lateral-divider full-reset"></div>
                <div class="full-reset nav-lateral-list-menu">
                    <ul class="list-unstyled">
                        <li><a href="index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="listabancos.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Bancos</a></li>
                                <li><a href="listatraslado.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Empresa de Traslado</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                                <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Comercial</a></li>

                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="bitacora.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora general</a></li>
                                <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                                <li><a href="#"><i class="zmdi zmdi-card-alert zmdi-steam-square"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                                <li><a href="#"><i class="zmdi zmdi-calendar-close zmdi-assignment"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-devices-off zmdi-assignment-check"></i>&nbsp;&nbsp; Check-in<span class="label label-danger pull-right label-mhover">7</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-calendar-check"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                                <li><a href="#"><i class="zmdi zmdi-timer-off zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>
    
    
                            </ul>
    
                        </li>
                        <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>

                    </ul>
                </div>
            </div>
        </div>';
    
    

    }
?>




<!-- AQUI TERMINA EL NAV LATERAL -->

<!-- AQUI EMPIEZA EL NAV -->
<div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="app/views/assets/icons/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>

                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"> <?php echo $nombre; ?>
                    </span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="logout.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar folio">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Notificaciones">
                    <i class="zmdi zmdi-help-outline zmdi-comment"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
<!-- AQUI TERMINA EL NAV -->

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
                <form action="" class="form-padding"  method="post">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos Generales - Responsable Comercial</legend><br>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="banco" value="<?php echo $bancoValue; ?>" placeholder="Nombre del Banco" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" data-toggle="tooltip" data-placement="top" title="Solo números, máximo 3 caracteres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Banco</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="esquemaDeAcreditacion" value="<?php echo $esquemaDeAcreditacionValue; ?>" placeholder="Esquema de Acreditacion" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Esquema de acreditación</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="tipoDeAcreditacionMismoDia" value="<?php echo $tipoDeAcreditacionMismoDiaValue; ?>" placeholder="Tipo de Acreditacion Mismo Día" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,30}" data-toggle="tooltip" data-placement="top" title="Apellido paterno del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo de Acreditación Mismo Dia</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="accesoPortalSitef" value="<?php echo $accesoPortalSitefValue; ?>" placeholder="Acceso a Portal SITEF" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,30}" data-toggle="tooltip" data-placement="top" title="Apellido materno del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Acceso Portal SITEF</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="giroDeCliente" value="<?php echo $giroDeClienteValue; ?>" placeholder="Giro de Cliente" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Giro del cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombreComercial" value="<?php echo $nombreComercialValue; ?>" placeholder="Nombre Comercial" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,50}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sociedad">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre Comercial</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="razonSocialCliente" value="<?php echo $razonSocialClienteValue; ?>" placeholder="Razón Social Cliente" required="" maxlength="100" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ.,0-9 ]{5,100}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sociedad">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Razón Social Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="domicilioCorporativo" value="<?php echo $domicilioCorporativoValue; ?>" placeholder="Domicilio Corportativo" required="" maxlength="120" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ.,#0-9 ]{5,120}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Domicilio Corporativo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombreDeSucursalCliente" value="<?php echo $nombreDeSucursalClienteValue; ?>" placeholder="Nombre de Sucursal Cliente" required="" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,50}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de Sucursal Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="domicilioSucursalCliente" value="<?php echo $domicilioSucursalClienteValue; ?>" placeholder="Domicilio Sucursal Client" required="" maxlength="120" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ.,#0-9 ]{5,120}" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la sucursal GSI">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Domicilio Sucursal Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombreDeContactoCliente" value="<?php echo $nombreDeContactoClienteValue; ?>" placeholder="Nombre de contacto Cliente" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,70}" data-toggle="tooltip" data-placement="top" title="Área o departamento del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de contacto Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" name="correoDeContactoCliente" value="<?php echo $correoDeContactoClienteValue; ?>" placeholder="example@mail.com" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ@.- ]{10,50}" data-toggle="tooltip" data-placement="top" title="Escribe el e-mail del usuario">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo de contacto Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="telefonoDeContactoCliente" value="<?php echo $telefonoDeContactoClienteValue; ?>" placeholder="Télefono en red con prefijo" maxlength="10" pattern="[0-9]{8,10}" data-toggle="tooltip" data-placement="top" title="Télefono en red con prefijo">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono de contacto Cliente</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" name="nombreDelEjecutivodeVtas" value="<?php echo $nombreDelEjecutivodeVtasValue; ?>" placeholder="Nombre del ejecutivo de Vtas" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,70}" data-toggle="tooltip" data-placement="top" title="Solo 10 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del ejecutivo de Vtas:</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="tipificacionEquipoAInstalar" value="<?php echo $tipificacionEquipoAInstalarValue; ?>" placeholder="GSI-X,XXX" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ,\- ]{6,10}" maxlength="10" data-toggle="tooltip" data-placement="top" title="Escribe la volumetría del equipo GSI-X,XXX">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipificación Equipo a Instalar</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="actividadRequerida" value="<?php echo $actividadRequeridaValue; ?>" placeholder="Actividad requerida" required="" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Actividad requerida</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="cuentaDeAbono" value="<?php echo $cuentaDeAbonoValue; ?>" placeholder="Cuenta de Abono"  maxlength="20" pattern="[0-9]{4,20}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cuenta  de Abono</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="referenciaFija" value="<?php echo $referenciaFijaValue; ?>" placeholder="Referencia Fija" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Referencia Fija</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="divisa" value="<?php echo $divisaValue; ?>" placeholder="Divisa" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}"  data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Divisa</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="horarioDeCortes" value="<?php echo $horarioDeCortesValue; ?>" placeholder="Horarios de cortes"  maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Horarios de cortes</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="empresaETVTraslado" value="<?php echo $empresaETVTrasladoValue; ?>" placeholder="Empresa ETV (Traslado)" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa ETV (Traslado)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="sucursalETVTraslado" value="<?php echo $sucursalETVTrasladoValue; ?>" placeholder="Sucursal ETV (Traslado)" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sucursal ETV (Traslado)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="empresaETVProcesa" value="<?php echo $empresaETVProcesaValue; ?>" placeholder="Empresa ETV (Procesa)" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Empresa ETV (Procesa)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="etvProcesa" value="<?php echo $etvProcesaValue; ?>" placeholder="ETV (Procesa)" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ETV (Procesa)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="crCajaProceso" value="<?php echo $crCajaProcesoValue; ?>" placeholder="CR Caja  (Proceso)" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>CR Caja  (Proceso)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="frecuenciaDeRecoleccion" value="<?php echo $frecuenciaDeRecoleccionValue; ?>" placeholder="Frecuencia de Recolección" maxlength="30" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,30}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Frecuencia de Recolección</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="horarioDeRecoleccion" value="<?php echo $horarioDeRecoleccionValue; ?>" placeholder="Horario de Recolección" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,50}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Horario de Recolección</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="codigoBovir" value="<?php echo $codigoBovirValue; ?>" placeholder="Código Bovir" maxlength="10" pattern="[0-9]{4,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
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
                                <input type="file" class="material-control tooltips-general" placeholder="Carta intención" name="cartaIntencion"  >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Carta intención</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="file" class="material-control tooltips-general" placeholder="Pantalla SIO/BOVIR" name="imgSIOBOVIR" >
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
                                <input type="text" class="material-control tooltips-general" name="idClienteSitef" value="<?php echo $idClienteSitefValue; ?>" placeholder="ID cliente (SITEF)" maxlength="10" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,10}"  data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID cliente (SITEF)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="idSucursalSitef" value="<?php echo $idSucursalSitefValue; ?>" placeholder="ID Sucursal (SITEF)" maxlength="10" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID Sucursal (SITEF)</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="idDispositivo" value="<?php echo $idDispositivoValue; ?>" placeholder="ID Dispositivo"  maxlength="10" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
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
                                <input type="text" class="material-control tooltips-general" name="marca" value="<?php echo $marcaValue; ?>" placeholder="Marca" maxlength="20" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,20}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Marca</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="Modelo" value="<?php echo $modeloValue; ?>" placeholder="Modelo" maxlength="20" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,20}"  data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Modelo</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="noDeSerie" value="<?php echo $noDeSerieValue; ?>" placeholder="Numero de Serie" maxlength="20" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,20}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
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
                                <input type="text" class="material-control tooltips-general" name="estudioTecnico" value="<?php echo $estudioTecnicoValue; ?>" placeholder="Estudio Técnico"  maxlength="100" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,100}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Estudio técnico</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="anclajeDeCajero" value="<?php echo $anclajeDeCajeroValue; ?>" placeholder="Anclaje de cajero" maxlength="100" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,100}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Anclaje de cajero</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="fechaConfiguracion" value="<?php echo $fechaConfiguracionValue; ?>" placeholder="Fecha Configuración" maxlength="10" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha Configuración</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="fechaInicioOperacion" value="<?php echo $fechaInicioOperacionValue; ?>" placeholder="Fecha Inicio de operación" maxlength="10" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,10}" data-toggle="tooltip" data-placement="top" title="Escribe el número de empleado">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha Inicio de operación</label>
                            </div>
                        </div>
                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <input type="hidden" name="id" value="<?php echo $id; echo "se genero id con get"; ?>">
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