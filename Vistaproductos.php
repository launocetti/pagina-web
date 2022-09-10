<?php include("modulos/productos.php");?>

<?php include("templates/cabecera.php"); ?>



<?php include("sidebar.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Productos</h1>
      <br>
    </section>

    <!-- Menu de tarjetas de colores -->
    <section class="content">

<div class="container"  >

    <div class="col-md-7">

      <div class="card">
        <div class="card-header">
            Datos del Producto
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
                <br>
                  <div class="form-group">
                      <label for="txtID">ID</label>
                      <input type="text" class="form-control" name="txtID" value="<?php echo $txtID;?>" id="txtID" placeholder="ID del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtNombre">Nombre</label>
                      <input type="text" class="form-control" name="txtNombre" value="<?php echo $txtNombre;?>" id="txtNombre" placeholder="Nombre del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtTipo">Tipo</label>
                      <input type="text" class="form-control" name="txtTipo"  value="<?php echo $txtTipo;?>"id="txtTipo"placeholder="Tipo de Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtColor">Color</label>
                      <input type="text" class="form-control" name="txtColor"  value="<?php echo $txtColor;?>" id="txtColor"placeholder="Color del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtCategoria">Categoria</label>
                      <input type="text" class="form-control" name="txtCategoria" value="<?php echo $txtCategoria;?>" id="txtCategoria" placeholder="Categoria del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtMedida">Medida (cm)</label>
                      <input type="text" class="form-control" name="txtMedida"  value="<?php echo $txtMedida;?>" id="txtMedida"placeholder="Medida del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtCantidad">Cantidad</label>
                      <input type="text" class="form-control" name="txtCantidad" value="<?php echo $txtCantidad;?>" id="txtCantidad" placeholder="Cantidad del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtPrecio">Precio $</label>
                      <input type="text" class="form-control" name="txtPrecio" value="<?php echo $txtPrecio;?>" id="txtPrecio" placeholder="Precio del Producto" require="">
                  </div>
                  <div class="form-group">
                      <label for="txtImagen">Imagen</label>
                      <input type="file" class="form-control" name="txtImagen"  value="<?php echo $txtImagen;?>"id="txtImagen"placeholder="Imagen de Producto" require="">
                      <!-- input type="text" class="form-control" name="txtImagen"  value="<?php echo $txtImagen;?>"id="txtImagen"placeholder="Imagen de Producto" require=""-->
                  </div>
                  
                  <br>

              <div class="btn-btn-group ">
                
                <button class="btn  " type="submit" name="btnAccion" id="btnAgregar" value="Agregar"><i class="fas fa-check"></i>Agregar</button>
                <button class="btn  " type="submit" name="btnAccion" id="btnEditar" value="Editar"><i class="fas fa-edit"></i>Editar</button>


              </div>
          </form>
        </div>

      </div> 
          
      </div>

    </div>


<br>


  <!------------------------------------------>



    <div class="row border">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              Lista de Productos
            </div>


<!-- lista de productos -->


              <div class="card-body">
                <table class="table table-striped table-hover " ectype="multipart/form-data">
                  <thead>
                    <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Tipo</th>
                    <th>Color</th>
                    <th>Categoria</th>
                    <th>Medida</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($listaProductos as $producto){ ?>
                          <tr>
                            <td><?php echo $producto['ID'];?></td>
                            <td><?php echo $producto['Nombre'];?></td>
                            <td><?php echo $producto['Tipo'];?></td>
                            <td><?php echo $producto['Color'];?></td>
                            <td><?php echo $producto['Categoria'];?></td>
                            <td><?php echo $producto['Medida'];?></td>
                            <td><?php echo $producto['Cantidad'];?></td>
                            <td><?php echo $producto['Precio'];?></td>
                            <td>
                              <img src="../Imagenes/../<?php echo $producto['Imagen'];?>" width="50" alt="" srcset="">
                            </td>
                            <td>
                              
                              <form method="post">
                              


                                <input type="hidden" name="txtID" id="txtID" value="<?php echo $producto['ID'];?>" />
                                
                                <input type="submit" name="btnAccion" id="btnSeleccionar" value="Seleccionar" class="btn "/>
                                <input type="submit" name="btnAccion" id="btnEliminar" value="Eliminar" class="btn "/>

                                
                              </form>
                            </td>
                            <td>
                              
                                
                            </td>
                            
<!-- recorte del final -->

                          </tr>
                      <?php } ?>           
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>





  <?php include("templates/piePagina.php");
  
?>
