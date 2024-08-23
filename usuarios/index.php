<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');
include('../app/controllers/usuarios/listado_de_usuarios.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de usuarios</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Usuarios registrados</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>

            </div>

            <div class="card-body" style="display: block;">
                 <table class="table table-bordered table-hover table-sm">
                    <tr> 
                    <th>Nro </th>
                    <th>Nombres </th>
                    <th>Usuario </th>
                    <th>Email </th>
                    </tr>

                 <body>
                    <?php
                      foreach ($usuarios_datos as $usuarios_dato) { ?>
                     <tr> 
                        <td><?php echo $usuarios_dato['id_usuarios']; ?></td>
                        <td><?php echo $usuarios_dato['nombres']; ?></td>
                        <td><?php echo $usuarios_dato['usuarios']; ?></td>
                        <td><?php echo $usuarios_dato['email']; ?></td>
                     </tr>                  
                    <?php
                    }
                    ?>
                    
                </body>
                </table>
            </div>

            </div>
            </div>
        </div>
      






      
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('../layout/footer.php'); ?>
