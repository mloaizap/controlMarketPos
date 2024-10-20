<?php

//consulta roles
$sql_roles = "SELECT * FROM tb_roles";
$query_roles = $pdo ->prepare($sql_roles);
$query_roles->execute();
$roles_datos = $query_roles->fetchAll(fech_style: PDO::FETCH_ASSOC);


?>