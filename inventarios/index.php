<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');
include('../app/controllers/inventarios/listado_productos.php');
?>

<!-- Content Wrapper -->
<div class="content-wrapper">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de Productos</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Card -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Registrar un producto nuevo</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><center>Nro</center></th>
                      <th><center>Código Barras</center></th>
                      <th><center>Imagen</center></th>
                      <th><center>Nombre Producto</center></th>
                      <th><center>Descripción</center></th>
                      <th><center>Categoría</center></th>
                      <th><center>Costo</center></th>
                      <th><center>Precio Venta</center></th>
                      <th><center>Precio Mayoreo</center></th>
                      <th><center>Fecha compra</center></th>
                      <th><center>Stock</center></th>
                      <th><center>Stock Mínimo</center></th>
                      <th><center>Stock Máximo</center></th>
                      <th><center>Acciones</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $contador = 0;
                    foreach ($productos_datos as $producto) { 
                      $id_producto = $producto['id_producto'];
                    ?>
                    <tr>
                      <td class="text-center"><?= ++$contador; ?></td>
                      <td><?= $producto['codigo_barras']; ?></td>
                      <td><img src="<?= $producto['imagen']; ?>" alt="Producto" class="img-fluid" style="width:50px;"></td>
                      <td><?= $producto['nombre_producto']; ?></td>
                      <td><?= $producto['descripcion']; ?></td>
                      <td><?= $producto['nombre_categoria']; ?></td>
                      <td><?= $producto['costo']; ?></td>
                      <td><?= $producto['precio_venta']; ?></td>
                      <td><?= $producto['precio_mayoreo']; ?></td>
                      <td><?= $producto['fecha_compra']; ?></td>
                      <td><?= $producto['stock']; ?></td>
                      <td><?= $producto['stock_minimo']; ?></td>
                      <td><?= $producto['stock_maximo']; ?></td>
                      
                      <td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                          <a href="show.php?id=<?= $id_producto; ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver</a>
                          <a href="update.php?id=<?= $id_producto; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                          <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</button>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/mensaje.php'); ?>
<?php include('../layout/footer.php'); ?>

<!-- Page specific script -->
<script>
$(function () {
  $("#example1").DataTable({
    "pageLength": 8,
    "language": {
      "emptyTable": "No hay información",
      "info": "Mostrando _START_ a _END_ de _TOTAL_ productos",
      "infoEmpty": "Mostrando 0 a 0 de 0 productos",
      "search": "Buscador:",
      "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
    "responsive": true, "lengthChange": false, "autoWidth": false,
    buttons: [{
      extend: 'collection',
      text: 'Reportes',
      buttons: ['copy', 'pdf', 'csv', 'excel', 'print']
    },
    {
      extend: 'colvis',
      text: 'Visor de columnas'
    }]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
