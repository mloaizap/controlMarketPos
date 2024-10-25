<?php

$id_categoria_get = $_GET['id'];
$sql_categorias = "SELECT * FROM tb_categorias where id_categoria = '$id_categoria_get'";
$query_categorias = $pdo ->prepare($sql_categorias);
$query_categorias ->execute();
$categorias_datos = $query_categorias ->fetchALL(PDO::FETCH_ASSOC);

foreach ($categorias_datos as $categorias_dato);{
        $nombre_categoria = $categorias_dato['nombre_categoria'];
      
}
?>