<?php

include('../../config.php');

$id_categoria = $_POST['id_categoria'];
        
          $sentencia= $pdo ->prepare("DELETE FROM tb_categorias WHERE id_categoria=:id_categoria");
        
        $sentencia->bindParam(':id_categoria',$id_categoria);
        $sentencia -> execute();
          session_start();
          $_SESSION['mensaje'] = "Se elimino la categoria correctamente";
          $_SESSION['icono'] = 'success';
          header('Location: '.$URL.'/categorias/index.php');
        

?>