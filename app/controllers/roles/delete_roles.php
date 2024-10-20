<?php

include('../../config.php');

$id_rol = $_POST['id_rol'];
        
          $sentencia= $pdo ->prepare("DELETE FROM tb_roles WHERE id_rol=:id_rol");
        
        $sentencia->bindParam(':id_rol', $id_rol);
        $sentencia -> execute();
          session_start();
          $_SESSION['mensaje'] = "Se elimino el rol correctamente";
          $_SESSION['icono'] = 'success';
          header('Location: '.$URL.'/roles/index.php');
        

?>