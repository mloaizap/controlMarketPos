<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/encabezado.php');
include('../app/controllers/clientes/listado_clientes.php');

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado clientes</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Clientes registrados</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>

            </div>

            <div class="card-body" style="display: block;">
                               
                </table>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr> 
                    <th><center>Nro</center> </th>
                    <th><center>Nombres</center> </th>
                    <th><center>Apellidos</center> </th>
                    <th><center>Telefono</center> </th>
                    <th><center>Email</center> </th>
                    <th><center>Tiene credito</center> </th>
                    <th><center>Monto</center> </th>
                    <th><center>Acciones</center> </th>
                    </tr>
                  </thead>
                  <body>
                    <?php
                       $contador = 0;
                      foreach ($clientes_datos as $clientes_dato) { 
                      $id_cliente = $clientes_dato['id_cliente'];?>
                     <tr> 
                        <td><center><?php echo $contador = $contador + 1; ?></center></td>
                        <td><?php echo $clientes_dato['nombres']; ?></td>
                        <td><?php echo $clientes_dato['apellidos']; ?></td>
                        <td><?php echo $clientes_dato['telefono']; ?></td>
                        <td><?php echo $clientes_dato['email']; ?></td>
                        <td><?php echo $clientes_dato['tiene_credito']; ?></td>
                        <td><?php echo $clientes_dato['monto']; ?></td>
                        <td>
                        <center>
                        <div class="btn-group">
                            
                            <a href = "update.php?id=<?php echo $id_cliente;?>"type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i>Editar</button></a>
                            <a href = "delete.php?id=<?php echo $id_cliente;?>"type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</button></a>
                        </div>
                        </center>
                        </td>
                     </tr>                  
                    <?php
                    }
                    ?>                
                    
                </body>
                  
                  <tfoot>
                  <tr> 
                  <th><center>Nro</center> </th>
                    <th><center>Nombres</center> </th>
                    <th><center>Apellidos</center> </th>
                    <th><center>Telefono</center> </th>
                    <th><center>Correo electronico</center> </th>
                    <th><center>Tiene credito</center> </th>
                    <th><center>Monto</center> </th>
                    <th><center>Acciones</center> </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
               
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
  <?php include('../layout/mensaje.php'); ?>
  <?php include('../layout/footer.php'); ?>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
   /* cambio de idiomas de datatable */
   "pageLength": 8,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
              "infoEmpty": "Mostrando 0 to 0 of 0 Usuarios",
              "infoFiltered": "(Filtrado de MAX total Usuarios)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar MENU Usuarios",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscador:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              },
             },
      /* fin de idiomas */
      "responsive": true, "lengthChange": false, "autoWidth": false,
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"] ---visualizar todo
      /* Ajuste de botones */
      buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy'
                        }, {
                            extend: 'pdf',
                        }, {
                            extend: 'csv',
                        }, {
                            extend: 'excel',
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }
                        ]
                    },
                        {
                            extend: 'colvis',
                            text: 'Visor de columnas'
                        }
                    ],
                    /*Fin de ajuste de botones*/


    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
