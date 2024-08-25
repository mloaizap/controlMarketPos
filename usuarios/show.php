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
            <h1 class="m-0">Registro de un usuario nuevo</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
      
      <div class="row">
            <div class="col-md-6">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Creación de usuarios</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>
            </div>

            <div class="card-body" style="display: block;">
                <div class="col-md-12">
                 <form action="../app/controllers/usuarios/create.php" method="post">
                  <div class="form-group">
                  <label for="">Nombres</label>
                  <input type="text" name="nombres" class="form-control" placeholder="Escriba nombres y apellidos del usuario nuevo">
                  </div><!-- /form group -->
                  <div class="form-group">
                  <label for="">Usuario</label>
                  <input type="text" name="usuarios" class="form-control" placeholder="Escriba el usuario nuevo a registrar">  
                  </div><!-- /form group -->
                  <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Registre su correo electronico">
                  </div><!-- /form group -->
                  <div class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" name="password_user" class="form-control">
                </div><!-- /form group -->
                <div class="form-group">
                  <label for="">Repita la Contraseña</label>
                  <input type="password" name="password_repeat" class="form-control">
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
