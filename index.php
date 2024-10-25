<?php
include('app/config.php');
include('layout/sesion.php');
include('layout/encabezado.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/roles/listado_roles.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Bienvenido a nuestro Sistema de Ventas</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
       Contenido de sistema
      <br><br>
      <div class="row">

      <!-- tarjeta total de usuarios -->
      <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
      <div class="inner">
        <?php
        $contador_de_usuarios = 0;
        foreach($usuarios_datos as $usuarios_dato){
          $contador_de_usuarios = $contador_de_usuarios + 1;
        }
        ?>
      <h3><?php echo $contador_de_usuarios;?></h3>
      <p>Usuarios registrados</p>
      </div>
      <a href="<?php echo $URL;?>/usuarios/create.php">
      <div class="icon">
      <i class="fas fa-user-plus"></i>
      </div>
      <a href="<?php echo $URL;?>/usuarios/index.php" class="small-box-footer">
      Más información <i class="fas fa-arrow-circle-right"></i>
      </a>
      </div>
     
      </div>
         <!-- tarjeta total de Roles -->
      <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
      <div class="inner">
        <?php
        $contador_de_roles = 0;
        foreach($roles_datos as $roles_dato){
          $contador_de_roles = $contador_de_roles + 1;
        }
        ?>
      <h3><?php echo $contador_de_roles;?></h3>
      <p>Total de roles</p>
      </div>
      <a href="<?php echo $URL;?>/roles/create.php">
      <div class="icon">
      <i class="fas fa-user-plus"></i>
      
      </div>
      <a href="<?php echo $URL;?>/roles/index.php" class="small-box-footer">
      Más información <i class="fas fa-arrow-circle-right"></i>
     </a>
     </div>
     </div>
     
         <!-- tarjeta total productos -->
         <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
      <div class="inner">
        <?php
        $contador_de_productos = 0;
        foreach($productos_datos as $productos_dato){
          $contador_de_productos = $contador_de_productos + 1;
        }
        ?>
      <h3><?php echo $contador_de_productos;?></h3>
      <p>Total productos</p>
      </div>
      <a href="<?php echo $URL;?>/inventarios/create.php">
      <div class="icon">
      <i class="fas fa-user-plus"></i>
      
      </div>
      <a href="<?php echo $URL;?>/inventarios/index.php" class="small-box-footer">
      Más información <i class="fas fa-arrow-circle-right"></i>
     </a>
     </div>
     </div>
     

      
      </div><!-- /.row -->
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

<?php include('layout/footer.php'); ?>
