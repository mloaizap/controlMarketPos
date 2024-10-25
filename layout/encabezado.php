
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Control MarketPos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
<!--Libreria de Sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
 <!-- jQuery -->
<script src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Sistema de ventas ControlMarket POS</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
       <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
    
    <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class= "btn btn-danger">Cerrar Sesión</a>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>" class="brand-link">
      <img src="<?php echo $URL;?>/public/images/logocontrol.png" alt="Logo"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ControlMarket POS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombres_sesion;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-person"></i>
              <p>
                Usuarios
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de usuarios</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- Menu Roles -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-shield-lock" ></i>
              <p>
                Roles
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/roles/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/roles/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de roles</p>
                </a>
              </li>
            </ul>
          </li>
         <!-- Menu Categorias -->
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-list-ul"></i>
              <p>
                Categorias
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/categorias/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/categorias/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de categorias</p>
                </a>
              </li>
            </ul>
          </li>

         <!-- Menu Inventarios -->
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-boxes"></i>
              <p>
                Inventarios
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/inventarios/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/inventarios/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/inventarios/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/inventarios/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kardex</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/inventarios/arqueo_inventario.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arqueo inventario</p>
                </a>
              </li>
            </ul>
          </li>  

         <!-- Menu Proveedores -->
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-truck"></i>
              <p>
                Proveedores
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/proveedores/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/proveedores/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Proveedores</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Ventas -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-cash-stack" ></i>
              <p>
                Ventas
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/ventas/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/ventas/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial de ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/ventas/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facturación</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Clientes -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-people" ></i>
              <p>
                Clientes
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial de compras</p>
                </a>
              </li>
            </ul>
          </li>

        <!-- Menu Compras -->
        <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-cart"></i>
              <p>
                Compras
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/compras/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado Compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/compras/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Solicitar pedidos</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Menu Promociones y descuentos -->
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-tag"></i>
              <p>
                Promociones y descuentos
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/descuentos/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ofertas y promociones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/descuentos/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Descuentos especiales</p>
                </a>
              </li>
            </ul>
          </li>

        <!-- Menu Informes -->
        <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-bar-chart"></i>
              <p>
                Informes
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/informes/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informe de Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/informes/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte de inventario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/informes/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informe financiero</p>
                </a>
              </li>
            </ul>
          </li>
         
          <!-- Menu Creditos -->
        <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-credit-card"></i>
              <p>
                Creditos
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/creditos/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado de cuenta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/creditos/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de clientes</p>
                </a>
              </li>
             </ul>
          </li>


        <!-- Menu Configuración -->
        <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="bi bi-gear" ></i>
              <p>
                Configuración
                <i class="users fas fa"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/configuracion/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Impresora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/configuracion/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Información Empresa</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>