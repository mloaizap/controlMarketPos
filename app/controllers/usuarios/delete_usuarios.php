<?php

include('../../config.php');

$id_usuario = $_POST['id_usuario'];
        
          $sentencia= $pdo ->prepare("DELETE FROM tb_usuarios WHERE id_usuario=:id_usuario");
        
        $sentencia->bindParam(':id_usuario', $id_usuario);
        $sentencia -> execute();
          session_start();
          $_SESSION['mensaje'] = "Se elimino el usuario correctamente";
          $_SESSION['icono'] = 'success';
          header('Location: '.$URL.'/usuarios/index.php');
        

?>