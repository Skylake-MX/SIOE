<?php
// Datos de conexión a la base de datos
$host = '194.5.156.145';
$usuario_db = 'u882853344_admin';
$contrasena_db = 'Gheal910427.*';
$nombre_bd = 'u882853344_SIOE';
error_reporting(E_ALL ^ E_NOTICE);
// Datos del formulario de inicio de sesión
$usuario = $_POST['username'];
$contrasena = $_POST['password'];

// var_dump($_POST);
// Crear una conexión a la base de datos
$conexion = new mysqli($host, $usuario_db, $contrasena_db, $nombre_bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
else{
    //echo "conexion exitosa";
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