<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Crear Roles</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
      
      <div class="row">
            <div class="col-md-6">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Diligenciar el nuevo Rol</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>
            </div>

            <div class="card-body" style="display: block;">
                <div class="col-md-12">
                 <form action="../app/controllers/roles/create.php" method="post">
                  <div class="form-group">
                  <label for="">Nombre Rol</label>
                  <input type="text" name="nombre_rol" class="form-control" placeholder="Escriba el rol nuevo">
                  </div><!-- /form group -->
                  
                <div class="form-group">
                  <a href="index.php" class="btn btn-secondary">Cancelar</a> 
                <button type="submit" class="btn btn-primary">Crear</button>
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
