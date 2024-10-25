<?php

 include('../../config.php');

  $id_categoria = $_POST['id_categoria'];
  $nombre_categoria = $_POST['nombre_categoria'];

   // Preparar la sentencia
   $sentencia = $pdo->prepare("UPDATE tb_categorias 
   SET nombre_categoria = :nombre_categoria,
   fyh_actualizacion = :fyh_actualizacion
   WHERE id_categoria = :id_categoria");

    // Vincular los parámetros
    $sentencia->bindParam(':nombre_categoria',$nombre_categoria);
    $sentencia->bindParam(':fyh_actualizacion',$fechaHora);
    $sentencia->bindParam(':id_categoria',$id_categoria);

    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se actualizo la categoria de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/categorias/index.php');
    }else{
        session_start();
        $_SESSION['mensaje'] = "Error no se actualizaron los datos";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/categorias/update.php?id='.$id_categoria);
    }

    ?>

