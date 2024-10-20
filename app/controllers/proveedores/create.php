<?php
include('../../config.php');

$nombre_proveedor = $_POST['nombre_proveedor'];
$nit = $_POST['nit'];
$celular = $_POST['celular'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];



  $sentencia= $pdo ->prepare("INSERT INTO tb_proveedores
 (nombre_proveedor,nit,celular,telefono,email,direccion,fyh_creacion, fyh_actualizacion)
  VALUES (:nombre_proveedor,:nit,:celular,:telefono,:email,:direccion,:fyh_creacion, :fyh_actualizacion)");

$sentencia->bindParam(':nombre_proveedor', $nombre_proveedor);
$sentencia->bindParam(':nit', $nit);
$sentencia->bindParam(':celular', $celular);
$sentencia->bindParam(':telefono', $telefono);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':direccion', $direccion);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);

if($sentencia -> execute()){
  session_start();
  $_SESSION['mensaje'] = "Se ha creado correctamente el proveedor";
  $_SESSION['icon'] = 'success';
  header('Location: '.$URL.'/proveedores/index.php');
}else{
  session_start();
  $_SESSION['mensaje'] = "Error no se registro el nuevo proveedor";
  $_SESSION['icono'] = 'error';
  header('Location: '.$URL.'/proveedores/create.php');
}

?>