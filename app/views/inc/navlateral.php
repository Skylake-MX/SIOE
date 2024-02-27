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
                            <li><a href="listatraslado.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Empresa de Traslado</a></li>
                            <li><a href="listabancos.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Bancos</a></li>
                            <li><a href="listaseccion.php"><i class="zmdi zmdi-store zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedores</a></li>
                            <li><a href="listacategoria.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>&nbsp;&nbsp; Segmentos</a></li>
                            <li><a href="#"><i class="zmdi zmdi-memory zmdi-hc-fw"></i>&nbsp;&nbsp; Equipos</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Gestíon de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="listausuarios.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar usuario</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                            <li><a href="visitatecnica.php"><i class="zmdi zmdi-steam-square zmdi-hc-fw"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                            <li><a href="asignacioncofre.php"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="plandeimplementacion.php"><i class="zmdi zmdi-calendar-check zmdi-hc-fw"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="liberacion.php"><i class="zmdi zmdi-input-antenna zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="bitacora.php"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora<span class="label label-danger pull-right label-mhover">7</span></a></li>
                        </ul>

                    </li>
                    <li><a href="#"><i class="zmdi zmdi-memory zmdi-hc-fw"></i>&nbsp;&nbsp; Base de Cofres Electrónicos</a></li>
                    <li><a href="#"><i class="zmdi zmdi-headset-mic zmdi-hc-fw"></i>&nbsp;&nbsp; CAMCE</a></li>
                    <li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Soporte Técnico</a></li>
                    <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>
                    <li><a href="#"><i class="zmdi zmdi-settings zmdi-hc-fw"></i>&nbsp;&nbsp; Configuracion</a></li>
                </ul>
            </div>
        </div>
    </div>';


    }
    elseif($privilegio=="implementaciones" || $privilegio=="comercial"){

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
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-puzzle-piece zmdi-hc-fw"></i>&nbsp;&nbsp; Implementaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="implementacion.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva solicitud</a></li>                           
                            <li><a href="#"><i class="zmdi zmdi-steam-square zmdi-hc-fw"></i>&nbsp;&nbsp; Visitas técnicas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>&nbsp;&nbsp; Asignacion de cofre<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-calendar-check zmdi-hc-fw"></i>&nbsp;&nbsp; Plan de implementacion<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-input-antenna zmdi-hc-fw"></i>&nbsp;&nbsp; Liberación<span class="label label-danger pull-right label-mhover">7</span></a></li>
                            <li><a href="#"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i>&nbsp;&nbsp; Bitacora<span class="label label-danger pull-right label-mhover">7</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Estadisticos</a></li>
                    <li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuracion</a></li>
                </ul>
            </div>
        </div>
    </div>';
    
    

    }
?>