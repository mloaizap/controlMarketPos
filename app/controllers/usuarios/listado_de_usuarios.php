<?php

//consulta usuarios
$sql_usuarios = "SELECT 
                us.id_usuario as id_usuario,
                us.nombres as nombres, 
                us.usuarios as usuarios,
                us.email as email, 
                roles.nombre_rol as rol 
                FROM tb_usuarios as us 
                INNER JOIN tb_roles as roles ON us.id_rol = roles.id_rol;";
$query_usuarios = $pdo ->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(fech_style: PDO::FETCH_ASSOC);


?>


