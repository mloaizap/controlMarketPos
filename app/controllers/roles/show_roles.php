<?php

$id_rol_get = $_GET['id'];
$sql_rol = "SELECT * FROM tb_rol where id_rol = '$id_rol_get' ";
$query_rol = $pdo ->prepare($sql_rol);
$query_rol ->execute();
$rol_datos = $query_rol ->fetchALL(PDO::FETCH_ASSOC);

foreach ($rol_datos as $rol_dato);{
        $id_rol = $rol_dato['id_rol'];
    }
?>