<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');
include('../app/controllers/proveedores/show_proveedores.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <h1 class="m-0">Eliminar un proveedor</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
      
      <div class="row">
            <div class="col-md-6">
            <div class="card card-danger">
            <div class="card-header">
            <h3 class="card-title">¿Estas seguro de eliminar el proveedor?</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>
            </div>

            <div class="card-body" style="display: block;">
                <div class="col-md-12">
                  <form action="../app/controllers/proveedores/delete_proveedores.php" method="post">
                  <input type="text" name="id_cliente" value="<?php echo $id_proveedor_get; ?>"hidden> 
                  <div class="form-group">
                  <label for="">Nombres</label>
                  <input type="text" name="nombre_proveedor" class="form-control" value="<?php echo $nombre_proveedor;?>" disabled>
                  <div class="form-group">
                  <label for="">Nit</label>
                  <input type="text" name="nit" class="form-control"value="<?php echo $nit;?>"  disabled> 
                  </div><!-- /form group -->
                  
                 <hr> 
                <div class="form-group">
                  <a href="index.php" class="btn btn-secondary">Volver</a> 
                  <button class="btn btn-danger">Eliminar </button> 
                  </form>


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

<?php include('../layout/mensaje.php'); ?>
<?php include('../layout/footer.php'); ?>
