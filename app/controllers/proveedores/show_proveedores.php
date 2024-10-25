<?php

$id_proveedor_get = $_GET['id'];
$sql_proveedor = "SELECT * FROM tb_proveedores where id_proveedor = '$id_proveedor_get' ";
$query_proveedor = $pdo ->prepare($sql_proveedor);
$query_proveedor ->execute();
$proveedor_datos = $query_proveedor ->fetchALL(PDO::FETCH_ASSOC);

foreach ($proveedor_datos as $proveedor_dato);{
        $id_proveedor = $proveedor_dato['id_proveedor'];
        $nombre_proveedor = $proveedor_dato['nombre_proveedor'];
        $nit = $proveedor_dato['nit'];
        $celular = $proveedor_dato['celular'];
        $telefono = $proveedor_dato['telefono'];
        $email = $proveedor_dato['email'];
        $direccion = $proveedor_dato['direccion'];
   
}
?>