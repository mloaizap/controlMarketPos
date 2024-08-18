<?php 

include ('../../config.php');

session_start();
if(isset($_SESSION['sesion_usuario'])) {
    session_destroy();
    header('Location: '.$URL.'/');
    exit();
} else {
    // En caso de que no haya sesión activa, redirigir a la página de inicio de sesión
    header('Location: '.$URL.'/login/index.php');
    exit();
}


