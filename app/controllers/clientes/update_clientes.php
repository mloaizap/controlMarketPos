<?php

$id_cliente_get = $_GET['id'];
$sql_clientes = "SELECT * FROM tb_clientes where id_cliente = '$id_cliente_get'";
$query_clientes = $pdo ->prepare($sql_clientes);
$query_clientes ->execute();
$clientes_datos = $query_clientes ->fetchALL(PDO::FETCH_ASSOC);

foreach ($clientes_datos as $clientes_dato);{
        $nombres = $clientes_dato['nombres'];
        $apellidos = $clientes_dato['apellidos'];
        $telefono = $clientes_dato['telefono'];
        $email = $clientes_dato['email'];
        $tiene_credito = $clientes_dato['tiene_credito'];
        $monto = $clientes_dato['monto'];
        $id_cliente = $clientes_dato['id_cliente'];
}
?>