<?php

$id_producto = $_GET['id'];
$sql_productos = "SELECT * FROM tb_productos where id_producto = '$id_producto'";
$query_productos = $pdo ->prepare($sql_productos);
$query_productos ->execute();
$productos_datos = $query_productos ->fetchALL(PDO::FETCH_ASSOC);

foreach ($productos_datos as $productos_dato);{
        $id_producto = $productos_dato['id_producto'];
        $nombre_producto = $productos_dato['nombre_producto'];
    }
?>