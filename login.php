<?php
// var_dump($_POST);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut Icon" type="image/x-icon" href="app/views/assets/icons/Imagen1.png" />
    <link rel="stylesheet" href="app/views/css/style.css">

    <script src="app/views/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="app/views/css/sweet-alert.css">
    <link rel="stylesheet" href="app/views/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="app/views/css/normalize.css">
    <link rel="stylesheet" href="app/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/views/css/jquery.mCustomScrollbar.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="app/views/js/modernizr.js"></script>
    <script src="app/views/js/bootstrap.min.js"></script>
    <script src="app/views/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="app/views/js/main.js"></script>

</head>
<body>
  <div class="login-container full-cover-background">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form action="" method="POST">
            <div class="group-material-login">
              <input type="text" class="material-login-control" placeholder="" name="noEmpleado" required="" autocomplete="off" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" placeholder="" name="password" required="" autocomplete="off" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="group-material">
                <!-- <select class="material-control-login">
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Implementaciones">Implementaciones</option>
                    <option value="Comercial">Comercial</option>
                    <option value="Técnico">Técnico</option>
                    <option value="Administrador">Administrador</option>
                </select> -->
            </div>
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>   
  </div>
</body>
</html>
