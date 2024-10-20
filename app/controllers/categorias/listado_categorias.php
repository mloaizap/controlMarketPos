<?php

//consulta categorias
$sql_categorias = "SELECT * FROM tb_categorias";
$query_categorias = $pdo ->prepare($sql_categorias);
$query_categorias->execute();
$categorias_datos = $query_categorias->fetchAll(fech_style: PDO::FETCH_ASSOC);


?>