<?php
include('../../config.php');


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$tiene_credito = $_POST['tiene_credito'];
$monto = $_POST['monto'];

try {
  $sentencia= $pdo ->prepare("INSERT INTO tb_clientes
 (nombres,apellidos,telefono,email,tiene_credito,monto,fyh_creacion)
  VALUES (:nombres,:apellidos,:telefono,:email,:tiene_credito,:monto,:fyh_creacion)");

$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':telefono',$telefono);
$sentencia->bindParam(':email',$email);
$sentencia->bindParam(':tiene_credito',$tiene_credito);
$sentencia->bindParam(':monto',$monto);
$sentencia->bindParam(':fyh_creacion',$fechaHora);


if ($sentencia->execute()) {
  session_start();
  $_SESSION['mensaje'] = "Se ha creado correctamente el cliente";
  $_SESSION['icon'] = 'success';
  header('Location: ' . $URL . '/clientes/index.php');
} else {
  throw new Exception("Error en la inserción de cliente");
}
} catch (PDOException $e) {
session_start();
$_SESSION['mensaje'] = "Error: " . $e->getMessage();
$_SESSION['icon'] = 'error';
header('Location: ' . $URL . '/clientes/create.php');
}


?>
