<?php
// Datos de conexión a la base de datos
$host = '194.5.156.145';
$usuario_db = 'u882853344_root';
$contrasena_db = 'Gheal910427.*';
$nombre_bd = 'u882853344_test';

// Datos del formulario de inicio de sesión
$usuario = $_POST['username'];
$contrasena = $_POST['password'];

var_dump($_POST);
// Crear una conexión a la base de datos
$conexion = new mysqli($host, $usuario_db, $contrasena_db, $nombre_bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
else{
    echo "conexion exitosa";
}

// // Consulta para verificar las credenciales del usuario
// $sql = "SELECT * FROM usuarios WHERE username = '$usuario' AND password = '$contrasena'";
// $resultado = $conexion->query($sql);

// if ($resultado->num_rows == 1) {
//     // Las credenciales son válidas, el usuario ha iniciado sesión con éxito
//     header("Location: inicio_exitoso.html"); // Redirigir a una página de inicio exitoso
// } else {
//     echo "Error: Credenciales incorrectas. Por favor, inténtelo de nuevo.";
// }

// // Cerrar la conexión
// $conexion->close();
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
       <form action="index.php" method="POST">
            <div class="group-material-login">
              <input type="text" class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Nombres</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="group-material">
                <select class="material-control-login">
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="Implementaciones">Implementaciones</option>
                    <option value="Comercial">Comercial</option>
                    <option value="Técnico">Técnico</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>   
  </div>
</body>
</html>
