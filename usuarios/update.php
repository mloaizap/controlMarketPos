<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');
include('../app/controllers/usuarios/update_usuario.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <h1 class="m-0">Editar usuarios</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
      
      <div class="row">
            <div class="col-md-6">
            <div class="card card-success">
            <div class="card-header">
            <h3 class="card-title">Edita la información del usuario</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>
            </div>

            <div class="card-body" style="display: block;">
                <div class="col-md-12">
                <form action="../app/controllers/usuarios/update.php" method="post">
                  <div class="form-group">
                  <input type="text" name="id_usuario" value="<?php echo $id_usuario_get;?>" hidden>
                  <label for="">Nombres</label>
                  <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" required>
                  </div><!-- /form group -->
                  <div class="form-group">
                  <label for="">Usuario</label>
                  <input type="text" name="usuarios" class="form-control" value="<?php echo $usuarios;?>" required>  
                  </div><!-- /form group -->
                  <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required>
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
                <button type="submit" class="btn btn-success">Actualizar</button>
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

