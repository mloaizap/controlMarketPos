<?php 

include ('../../config.php');

//Formulario de ingreso usuario

$usuario = $_POST['usuario'];
$password_user = $_POST['password_user'];

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE usuarios = '$usuario' AND password_user = '$password_user';";
$query = $pdo ->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(fech_style: PDO::FETCH_ASSOC);
foreach ($usuarios as $user){
$contador = $contador + 1;
$usuarios_tabla = $user['usuarios']; // user es igual a usuarios de la tabla de usuarios
$nombres = $user['nombres'];

}
if($contador == 0) {
    echo "Usuario ó contraseña incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: '.$URL.'/login');
}else {
    echo "Datos correctos";
    session_start();

    $_SESSION['sesion usuario'] = $usuario;
    header('Location: '.$URL.'/index.php');

}
?>