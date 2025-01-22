<?php

include('../../config.php');

$id_proveedor = $POST['id_proveedor'];

$setencia= $pdo ->prepare("DELETE FROM tb_proveedores WHERE id_proveedor=:id_proveedor");

$sentencia->bindParam(':id_proveedor', $id_proveedor);
$sentencia -> execute();
  session_start();
  $_SESSION['mensaje'] = "Se elimino el proveedor correctamente";
  $_SESSION['icono'] = 'success';
  header('Location: '.$URL.'/proveedores/index.php');


?>