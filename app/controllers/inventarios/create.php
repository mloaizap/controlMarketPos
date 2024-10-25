<?php
include('../../config.php');

session_start();  // Asegúra  iniciar  sesión al comienzo.
$id_usuario = $_SESSION['id_usuario'] ?? null;  // Relaciona el id_usuario almacenado en la sesión.

if (empty($id_usuario)) {
    $_SESSION['mensaje'] = "Usuario no autenticado.";
    $_SESSION['icon'] = "error";
    header('Location: '.$URL.'/inventarios/create.php');
    exit;
}

// Recibir los valores del formulario

$imagen = $_POST['imagen'];
$codigo_barras = $_POST['codigo_barras'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$id_categoria = $_POST['id_categoria'];
$costo = $_POST['costo'];
$porcentaje = $_POST['porcentaje'];
$precio_venta = $_POST['precio_venta'];
$precio_mayoreo = $_POST['precio_mayoreo'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$fecha_compra = $_POST['fecha_compra'];
$id_proveedor = $_POST['id_proveedor'];




  $sentencia= $pdo ->prepare("INSERT INTO tb_productos
 (imagen, codigo_barras, nombre_producto, descripcion, costo, porcentaje, precio_venta, precio_mayoreo, stock, stock_minimo, stock_maximo, id_categoria, id_proveedor, id_usuario, fecha_compra, fyh_creacion)
  VALUES (:imagen, :codigo_barras, :nombre_producto, :descripcion, :costo, :porcentaje, :precio_venta, :precio_mayoreo, :stock, :stock_minimo, :stock_maximo, :id_categoria, :id_proveedor,:id_usuario,:fecha_compra,:fyh_creacion)");



$sentencia->bindParam(':imagen', $imagen);
$sentencia->bindParam(':codigo_barras', $codigo_barras);
$sentencia->bindParam(':nombre_producto', $nombre_producto);
$sentencia->bindParam(':descripcion', $descripcion);
$sentencia->bindParam(':id_categoria', $id_categoria);
$sentencia->bindParam(':costo', $costo);
$sentencia->bindParam(':porcentaje',$porcentaje);
$sentencia->bindParam(':precio_venta',$precio_venta);
$sentencia->bindParam(':precio_mayoreo',$precio_mayoreo);
$sentencia->bindParam(':stock',$stock);
$sentencia->bindParam(':stock_minimo',$stock_minimo);
$sentencia->bindParam(':stock_maximo',$stock_maximo);
$sentencia->bindParam(':id_proveedor',$id_proveedor);
$sentencia->bindParam(':id_usuario',$id_usuario); // se toma el id_usuario de la sesión
$sentencia->bindParam(':fecha_compra',$fecha_compra);
$sentencia->bindParam(':fyh_creacion',$fechaHora);

try {
  if ($sentencia->execute()) {
      $_SESSION['mensajes'] = "Registro exitoso";
      $_SESSION['icon'] = "success";
      header('Location: '.$URL.'/inventarios/index.php');
  } else {
      $_SESSION['mensajes'] = "El producto no ha sido creado";
      $_SESSION['icon'] = "error";
      header('Location: '.$URL.'/inventarios/create.php');
  }
} catch (PDOException $e) {
  echo 'Error en la inserción: ' . $e->getMessage();
}


?>