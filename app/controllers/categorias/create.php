<?php
include('../../config.php');

$nombre_categoria = $_POST['nombre_categoria'];

  $sentencia= $pdo ->prepare("INSERT INTO tb_categorias
 (nombre_categoria,fyh_creacion)
  VALUES (:nombre_categoria,:fyh_creacion)");

$sentencia->bindParam(':nombre_categoria', $nombre_categoria);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
if($sentencia -> execute()){
  session_start();
  $_SESSION['mensajes'] = "Registro exitoso";
  $_SESSION['icon'] = "success";
  header('Location: '.$URL.'/categorias/create.php');
}else{
  session_start();
  $_SESSION['mensajes'] = "Error las contraseñas no son iguales";
  $_SESSION['icon'] = "error";
  header('Location: '.$URL.'/categorias/create.php');
}



?>