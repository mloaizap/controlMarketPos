<?php

$id_proveedor_get = $_GET['id'];
$sql_proveedores = "SELECT * FROM tb_proveedores where id_proveedor = '$id_proveedor_get' ";
$query_proveedores = $pdo ->prepare($sql_proveedores);
$query_proveedores ->execute();
$proveedores_datos = $query_proveedores ->fetchALL(PDO::FETCH_ASSOC);

foreach ($proveedores_datos as $proveedores_dato);{
        $id_proveedor_get = $proveedores_dato['id_proveedor'];
        $nombre_proveedor = $proveedores_dato['nombre_proveedor'];
        $nit = $proveedores_dato['nit'];
        $celular = $proveedores_dato['celular'];
        $telefono = $proveedores_dato['telefono'];
        $email = $proveedores_dato['email'];
        $direccion = $proveedores_dato['direccion'];

}
?>