<?php
include('../../config.php');


$nombres = $_POST['nombres'];
$usuarios = $_POST['usuarios'];
$id_rol = $_POST['id_rol'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

//Revisa si las credenciales son iguales
if ($password_user == $password_repeat) {
  $password_user = password_hash($password_user, PASSWORD_DEFAULT);
} else {
  session_start();
  $_SESSION['mensaje'] = "Las contraseñas no coinciden.";
  $_SESSION['icon'] = 'error';
  header('Location: ' . $URL . '/usuarios/create.php');
  exit;
}


try {
  $sentencia= $pdo ->prepare("INSERT INTO tb_usuarios
 (nombres,usuarios,id_rol,email,password_user,fyh_creacion)
  VALUES (:nombres,:usuarios,:id_rol,:email,:password_user, :fyh_creacion)");

$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':usuarios',$usuarios);
$sentencia->bindParam(':id_rol',$id_rol);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':password_user',$password_user);
$sentencia->bindParam(':fyh_creacion',$fechaHora);

if ($sentencia->execute()) {
  session_start();
  $_SESSION['mensaje'] = "Se ha creado correctamente el usuario";
  $_SESSION['icon'] = 'success';
  header('Location: ' . $URL . '/usuarios/index.php');
} else {
  throw new Exception("Error en la inserción de usuario");
}
} catch (PDOException $e) {
session_start();
$_SESSION['mensaje'] = "Error: " . $e->getMessage();
$_SESSION['icon'] = 'error';
header('Location: ' . $URL . '/usuarios/create.php');
}


?>
