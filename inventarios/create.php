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
            <h1 class="m-0">Crear un producto nuevo</h1>
          </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
      
      <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Diligenciar datos nuevo producto</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            </div>
            </div>

            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-md-12">
                    <form action="../app/controllers/inventarios/create.php" method="post">
                  
                    <div class="row">
                        <div class="col-md-8">
                        <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="label">Código Barras</div>
                            <input type="text"name="codigo_barras" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            <div class="label">Nombre producto</div>
                            <input type="text" name="nombre_producto" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="label">Fecha compra</div>
                            <input type="date" name="fecha_compra" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="label">Unidad medida</div>                   
                            <input type="text" name="unidad_medida" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="label">Descripción</div>
                            <input type="text" name="descripcion"  class="form-control">
                        </div>
                    </div>
                    
                    </div> <!-- cierra fila -->

                <div class="row">
                <div class="col-md-3">
                        <div class="form-group">
                            <div class="label">Costo</div>
                            <input type="text" name="costo" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="label">Porcentaje</div>
                            <input type="text" name="porcentaje" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="label">Precio venta</div>
                            <input type="text" name="precio_venta" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="label">Precio mayoreo</div>
                            <input type="text" name="precio_mayoreo" class="form-control">
                        </div>
                    </div>
                                          
                 </div>

                 
                <div class="row">
                <div class="col-md-3">
                        <div class="form-group">
                        <div class="label">Categoria</div>
                        <select name="id_categoria" id="" class="form-control" required>
                  <?php
                  foreach ($categorias_datos as $categoria_dato) { ?>
                 <option value="<?php echo $categoria_dato['id_categoria']; ?>"><?php echo $categoria_dato['nombre_categoria']; ?></option>
                  <?php
                 } 
                 ?>
                  </select>
                        </div>
                    </div>

                <div class="col-md-3">
                        <div class="form-group">
                            <div class="label">Stock</div>
                            <input type="number" name="stock" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                            <div class="label">Stock minimo</div>
                            <input type="number" name="stock_minimo" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="label">Stock máximo</div>
                            <input type="number" name="stock_maximo" class="form-control">
                        </div>
                    </div>
                    
                                     
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="label">Usuario</div>                   
                            <input type="text" name="usuario" class="form-control" value= "<?php echo $usuario_sesion;?>" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="label">Proveedor</div>
                            <select name="id_proveedor" id="" class="form-control" required>
                  <?php
                  foreach ($proveedores_datos as $proveedores_dato) { ?>
                 <option value="<?php echo $proveedores_dato['id_proveedor']; ?>"><?php echo $proveedores_dato['nombre_proveedor']; ?></option>
                  <?php
                 } 
                 ?>
                  </select>
                        </div>
                    </div>
                    
                    </div> <!-- cierra fila -->


                </div><!-- cierra fila -->
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                            <label for="" >Imagen producto</label>
                            <input type="file" class="form-control" id="file">
                            <br>
                            <output id="list"> </output>
                            <script>
                                                        function archivo(evt) {
                                                            var files = evt.target.files; // FileList object
                                                            // Obtenemos la imagen del campo "file".
                                                            for (var i = 0, f; f = files[i]; i++) {
                                                                //Solo admitimos imágenes.
                                                                if (!f.type.match('image.*')) {
                                                                    continue;
                                                                }
                                                                var reader = new FileReader();
                                                                reader.onload = (function (theFile) {
                                                                    return function (e) {
                                                                        // Insertamos la imagen
                                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                                    };
                                                                })(f);
                                                                reader.readAsDataURL(f);
                                                            }
                                                        }
                                                        document.getElementById('file').addEventListener('change', archivo, false);
                                                    </script>
                        </div>
                  </div><!-- cierra fila -->

                        </div><!-- /.col md-3 -->
                    </div><!-- /.col md-9-->
                 </div> <!-- /.row -->

                   

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
