<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');
include ('../app/controllers/categorias/listado_categorias.php');
include ('../app/controllers/proveedores/listado_proveedores.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registrar productos</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
      
      <div class="row">
            <div class="col-md-6">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Crear un producto nuevo</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>
            </div>

            <div class="card-body" style="display: block;">
                <div class="col-md-12">
                 <form action="../app/controllers/inventarios/create.php" method="post">
                  <div class="form-group">
                    
                  <label for="">Codigo Barras</label>
                  <input type="text" name="codigo_barras" class="form-control"required>
                  <label for="">Nombre producto</label>
                  <input type="text" name="nombre_producto" class="form-control"required>
                  <label for="">Descripción</label>
                  <input type="text" name="descripcion" class="form-control">
                  <label for="">Imagen</label>
                  <input type="text" name="imagen" class="form-control">
                  <label for="">Categoria</label>
                  <select name="id_categoria" id="" class="form-control" required>
                  <?php
                  foreach ($categorias_datos as $categoria_dato) { ?>
                 <option value="<?php echo $categoria_dato['id_categoria']; ?>"><?php echo $categoria_dato['nombre_categoria']; ?></option>
                  <?php
                 } 
                 ?>
                  </select>
                  <label for="">Costo</label>
                  <input type="text" name="costo" class="form-control"required>
                  <label for="">Porcentaje</label>
                  <input type="text" name="porcentaje" class="form-control"required>
                  <label for="">Precio venta</label>
                  <input type="text" name="precio_venta" class="form-control"required>
                  <label for="">Precio mayoreo</label>
                  <input type="text" name="precio_mayoreo" class="form-control">
                  <label for="">Stock</label>
                  <input type="text" name="stock" class="form-control"required>
                  <label for="">Stock minimo</label>
                  <input type="text" name="stock_minimo" class="form-control"required>
                  <label for="">Stock maximo</label>
                  <input type="text" name="stock_maximo" class="form-control"required>
                  <label for="">Proveedor</label>
                  <select name="id_proveedor" id="" class="form-control" required>
                  <?php
                  foreach ($proveedores_datos as $proveedores_dato) { ?>
                 <option value="<?php echo $proveedores_dato['id_proveedor']; ?>"><?php echo $proveedores_dato['nombre_proveedor']; ?></option>
                  <?php
                 } 
                 ?>
                  </select>
                  </div><!-- /form group -->
                  
                <hr> 
                <div class="form-group">
                  <a href="index.php" class="btn btn-secondary">Cancelar</a> 
                <button type="submit" class="btn btn-primary">Registrar</button>
                </div><!-- /form group -->
              </form>
                 
                </div><!-- /.columna 12 -->
          
            </div>

            </div>
            </div>
        </div>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('../layout/footer.php'); ?>
