<?php
include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();


if(isset($_SESSION['user'])){
    // echo "Sesion activa";
    $user->setUser($userSession->getCurrentUser());
    include_once 'home.php';

}else if(isset($_POST['noEmpleado']) && isset($_POST['password'])){
    // echo "Validacion de Login";
    $userForm = $_POST['noEmpleado'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        // echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'home.php';
    }else{
        // echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }

}else{
      //echo "Login";
      include_once 'login.php';
}

?>
