<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$usuarios = $_POST['usuarios'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

if($password_user==$password_repeat) {
  $password_user = password_hash($password_user, algo: PASSWORD_DEFAULT);

  $sentencia= $pdo ->prepare("INSERT INTO tb_usuarios
 (nombres,usuarios,email,password_user,fyh_creacion)
  VALUES (:nombres,:usuarios,:email,:password_user, :fyh_creacion)");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':usuarios', $usuarios);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password_user', $password_user);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia -> execute();
}else{
  session_start();
  $_SESSION['mensajes'] = "Error las contraseñas no son iguales";
  header('Location: '.$URL.'/usuarios/create.php');
}



?>