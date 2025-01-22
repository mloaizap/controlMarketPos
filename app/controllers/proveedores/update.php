<?php

 include('../../config.php');

  $id_proveedor = $_POST['id_proveedor'];
  $nombre_proveedor = $_POST ['nombre_proveedor'];
  $nit = $_POST ['nit'];
  $celular = $_POST ['celular'];
  $telefono = $_POST ['telefono'];
  $email = $_POST['email'];
  $direccion = $_POST ['direccion'];

   // Preparar la sentencia
   $sentencia = $pdo->prepare("UPDATE tb_proveedores
   SET nombre_proveedor = :nombre_proveedor,
       nit = :nit,
       celular = :celular,
       telefono = :telefono,
       email = :email,
       direccion = :direccion,
       fyh_actualizacion = :fyh_actualizacion
   WHERE id_proveedor = :id_proveedor");

    // Vincular los parámetros
    $sentencia->bindParam(':nombre_proveedor',$nombre_proveedor);
    $sentencia->bindParam(':nit',$nit);
    $sentencia->bindParam(':celular',$celular);
    $sentencia->bindParam(':telefono',$telefono);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':direccion',$direccion);
    $sentencia->bindParam(':fyh_actualizacion',$fechaHora);
    $sentencia->bindParam(':id_proveedor',$id_proveedor);

    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se actualizo el proveedor de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/proveedores/index.php');
    }else{
        session_start();
        $_SESSION['mensaje'] = "Error no se actualizaron los datos";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/proveedores/update.php?id='.$id_proveedor);
    }

    ?>

