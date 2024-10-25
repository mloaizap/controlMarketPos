<?php

$id_categoria = $_GET['id'];
$sql_categoria = "SELECT * FROM tb_categorias where id_categoria = '$id_categoria' ";
$query_categoria = $pdo ->prepare($sql_categoria);
$query_categoria ->execute();
$categoria_datos = $query_categoria ->fetchALL(PDO::FETCH_ASSOC);

foreach ($categoria_datos as $categoria_dato);{
        $id_categoria = $categoria_dato['id_categoria'];
        $nombre_categoria = $categoria_dato['nombre_categoria'];
    }
?>