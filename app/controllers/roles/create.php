<?php
include('../../config.php');

$nombre_rol = $_POST['nombre_rol'];


  $sentencia= $pdo ->prepare("INSERT INTO tb_roles
 (nombre_rol,fyh_creacion)
  VALUES (:nombre_rol,:fyh_creacion)");

$sentencia->bindParam(':nombre_rol', $nombre_rol);
$sentencia->bindParam(':fyh_creacion', $fechaHora);

if($sentencia -> execute()){
  session_start();
  $_SESSION['mensaje'] = "Se ha creado correctamente el Rol";
  $_SESSION['icon'] = 'success';
  header('Location: '.$URL.'/roles/index.php');
}else{
  session_start();
  $_SESSION['mensaje'] = "Error no se registro el nuevo Rol";
  $_SESSION['icon'] = 'error';
  header('Location: '.$URL.'/roles/create.php');
}

?>