<?php

  include('../../config.php');

  $id_rol = $_POST['id_rol'];
  $nombre_rol = $_POST['nombre_rol'];

   // Preparar la sentencia
   $sentencia = $pdo->prepare("UPDATE tb_roles 
   SET nombre_rol = :nombre_rol,
   fyh_actualizacion = :fyh_actualizacion
   WHERE id_rol = :id_rol");

    // Vincular los parámetros
    $sentencia->bindParam(':nombre_rol', $nombre_rol);
    $sentencia->bindParam(':fyh_actualizacion', $fechaHora);
    $sentencia->bindParam(':id_rol', $id_rol);

    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se actualizo el rol de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/roles/update.php');
    }else{
        session_start();
        $_SESSION['mensaje'] = "Error no se actualizaron los datos";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/roles/update.php?id='.$id_rol);
    }

    ?>

