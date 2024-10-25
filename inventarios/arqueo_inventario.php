<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');

// Buscar el producto por código de barras
$producto = null;
if (isset($_POST['codigo_barras'])) {
    $codigo_barras = $_POST['codigo_barras'];
    $stmt = $pdo->prepare("SELECT * FROM tb_productos WHERE codigo_barras = ?");
    $stmt->execute([$codigo_barras]);
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Actualizar el stock y cambiar estado a 'arqueado'
if (isset($_POST['confirmar_stock']) && isset($_POST['codigo_barras'])) {
    $nuevo_stock = $_POST['nuevo_stock'];
    $codigo_barras = $_POST['codigo_barras'];
    $stmt = $pdo->prepare("UPDATE tb_productos SET stock = ?, estado = 'arqueado' WHERE codigo_barras = ?");
    $stmt->execute([$nuevo_stock, $codigo_barras]);
    $mensaje_exito = "Inventario actualizado correctamente";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Arqueo de Inventario</h2>

        <!-- Mensaje de éxito -->
        <?php if (isset($mensaje_exito)): ?>
            <div class="alert alert-success text-center">
                <?php echo $mensaje_exito; ?>
            </div>
        <?php endif; ?>

        <!-- Formulario para buscar producto por código de barras -->
        <form method="POST" action="arqueo_inventario.php" class="mb-4">
            <div class="d-flex justify-content-center">
                <div class="input-group" style="max-width: 500px;">
                    <input type="text" name="codigo_barras" class="form-control text-center" placeholder="Escanea o ingresa el código de barras" required>
                    <button class="btn btn-primary" type="submit">Buscar Producto</button>
                </div>
            </div>
        </form>

        <!-- Información del producto encontrado -->
        <?php if ($producto): ?>
            <div class="d-flex justify-content-center">
            <div class="card mb-6 shadow">
                 <!-- Título centrado del producto -->
                 <h5 class="card-title text-center mb-6">Datos del producto:</h5>
                 <div class="card-body">
                   
                     <!-- Fila con dos columnas equilibradas -->
                    <div class="row">
                        <!-- Primera columna: detalles básicos -->
                        <div class="col-md-8">
                            <p class="card-text">
                                <strong>Producto:</strong> <?php echo $producto['nombre_producto']; ?><br>
                                <strong>Código de barras:</strong> <?php echo $producto['codigo_barras']; ?><br>
                                <strong>Precio Costo:</strong> $<?php echo number_format($producto['costo'], 2); ?><br>
                                <strong>Precio Venta:</strong> $<?php echo number_format($producto['precio_venta'], 2); ?><br>
                                <strong>Precio Mayoreo:</strong> $<?php echo number_format($producto['precio_mayoreo'], 2); ?><br>
                            </p>
                        </div>

                        <!-- Segunda columna: stock y departamento -->
                        <div class="col-md-8">
                            <p class="card-text">
                                <strong>Stock Actual:</strong> <?php echo $producto['stock']; ?><br>
                                <strong>Stock Mínimo:</strong> <?php echo $producto['stock_minimo']; ?><br>
                                <strong>Stock Máximo:</strong> <?php echo $producto['stock_maximo']; ?><br>
                                <strong>Departamento:</strong> <?php echo $producto['id_categoria']; ?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Formulario para actualizar el stock -->
            <form method="POST" action="arqueo_inventario.php">
                <input type="hidden" name="codigo_barras" value="<?php echo $producto['codigo_barras']; ?>">
                <div class="d-flex justify-content-center">
                <div class="mb-3">
                    <label for="nuevo_stock" class="form-label">Confirmar nuevo stock:</label>
                    <input type="number" name="nuevo_stock" class="form-control" min="0" value="<?php echo $producto['stock']; ?>" required>
                </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="confirmar_stock" class="btn btn-success">Actualizar Inventario</button>
                </div>
            </form>

        <!-- Producto no encontrado -->
        <div class="d-flex justify-content-center">
        <div class="mb-3 w-50">
        <?php elseif (isset($_POST['codigo_barras'])): ?>
            <div class="alert alert-danger text-center p-2 rounded shadow-sm">Producto no encontrado</div>
        <?php endif; ?>
         </div>
         </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
