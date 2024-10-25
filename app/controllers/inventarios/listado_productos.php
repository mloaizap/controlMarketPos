<?php

//consulta productos
$sql_productos = "SELECT 
                pro.id_producto as id_producto,
                pro.codigo_barras as codigo_barras,
                pro.nombre_producto as nombre_producto,
                pro.descripcion as descripcion,  
                pro.costo as costo,
                pro.porcentaje as porcentaje,
                pro.precio_venta as precio_venta,
                pro.precio_mayoreo as precio_mayoreo, 
                pro.stock as stock,
                pro.stock_minimo as stock_minimo,
                pro.stock_maximo as stock_maximo, 
                pro.imagen as imagen, 
                pro.fecha_compra as fecha_compra,
                cat.nombre_categoria as nombre_categoria, 
                us.usuarios as usuarios           
                FROM tb_productos as pro 
                INNER JOIN tb_categorias as cat ON pro.id_categoria = cat.id_categoria
                INNER JOIN tb_usuarios as us ON us.id_usuario = pro.id_usuario";
$query_productos = $pdo ->prepare($sql_productos);
$query_productos->execute();
$productos_datos = $query_productos->fetchAll(fech_style: PDO::FETCH_ASSOC);



?>
