<?php

 include('../../config.php');

  $id_cliente = $_POST['id_cliente'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $tiene_credito = $_POST['tiene_credito'];
  $monto = $_POST['monto'];

   // Preparar la sentencia
   $sentencia = $pdo->prepare("UPDATE tb_clientes 
   SET nombres = :nombres,
   apellidos = :apellidos,
   telefono = :telefono,
   email = :email,
   tiene_credito = :tiene_credito,
   monto = :monto,
   fyh_actualizacion = :fyh_actualizacion
   WHERE id_cliente = :id_cliente");

    // Vincular los parámetros
    $sentencia->bindParam(':nombres',$nombres);
    $sentencia->bindParam(':apellidos',$apellidos);
    $sentencia->bindParam(':telefono',$telefono);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':tiene_credito',$tiene_credito);
    $sentencia->bindParam(':monto',$monto);
    $sentencia->bindParam(':fyh_actualizacion',$fechaHora);
    $sentencia->bindParam(':id_cliente', $id_cliente);

    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se actualizo el cliente correctamente";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/clientes/index.php');
    }else{
        session_start();
        $_SESSION['mensaje'] = "Error no se actualizaron los datos";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/clientes/update.php?id='.$id_cliente);
    }

    ?>

