<?php include("modulos/productos.php");?>

<?php include("cabecera.php"); ?>



<?php include("sidebar.php"); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Menu de tarjetas de colores -->
    <section class="content">





<div class="container"  >
        <form action="" method="post" ectype="multipart/form-data">
          <h4 class="modal-title">Agregar Producto</h4>
                  <div class="input-group mb-3">
                    <span class="input-group-text">ID</span>
                    <input type="text" class="form-control" value="<?php echo $txtID;?>" name="txtId"  placeholder="ID del Producto" require="">
                  </div><div class="input-group mb-3">
                    <span class="input-group-text">Nombre</span>
                    <input type="text" class="form-control" value="<?php echo $txtNombre;?>" name="txtNombre"  placeholder="Nombre del Producto"require="">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Tipo</span>
                    <input type="text" class="form-control" value="<?php echo $txtTipo;?>" name="txtTipo"  placeholder="Tipo de Producto"require="">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Color</span>
                    <input type="text" class="form-control" value="<?php echo $txtColor;?>" name="txtColor"  placeholder="Color del Producto"require="">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Categoria</span>
                    <input type="text" class="form-control" value="<?php echo $txtCategoria;?>" name="txtCategoria"  placeholder="Categoria del Producto"require="">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">Medida (cm)</span>
                    <input type="text" class="form-control" value="<?php echo $txtMedida;?>" name="txtMedida"  placeholder="Medida del Producto"require="">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">Cantidad</span>
                    <input type="text" class="form-control" value="<?php echo $txtCantidad;?>" name="txtCantidad"  placeholder="Cantidad de Productos"require="">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Precio $</span>
                    <input type="text" class="form-control" value="<?php echo $txtPrecio;?>" name="txtPrecio"  placeholder="Precio del Producto"require="">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Imagen url</span>
                    <input type="text" class="form-control" value="<?php echo $txtImagen;?>" name="txtImagen"  placeholder="Imagen del Producto"require="">
                  </div>

            <div class="btn-btn-group ">
              <button class="btn btn-warning btn-lg" type="submit" name="btnAccion" value="btnEditar"><i class="fas fa-edit"></i>Editar</button>
              <button class="btn btn-primary btn-lg" type="submit" name="btnAccion" value="btnAgregar"><i class="fas fa-check"></i>Agregar</button>
              <button class="btn btn-success btn-lg" type="submit" name="btnAccion" value="btnCancelar"> Cancelar</button>  
              <button class="btn btn-danger btn-lg" name="btnAccion"value="btnEliminar"type="submit"><i class="fas fa-cut"></i>  Eliminar</button>
            </div>
        </form>
      </div>


  <!------------------------------------------>



    <div class="row border">
        <div class="col-lg-12">
          <div class="card">
              
          <!-- boton de busqueda


              <div class="card-header">
                    <h3 class="box-title">Lista de Productos</h3>
                    <div class="row">
                      <div class="col-lg-12">
                        <form action="">
                          <div class="form-row" action="seleccionar.php" method="post">
                            <div class="col-sm-4 my-1">
                              <input type="text" class="form-control" name="texto">
                            </div>
                            <div class="col-auto my-1">
                              <div row>
                              <input type="submit" class="btn btn-primary btn-lg" value="Buscar">
                              
                              <input type="submit" class="btn btn-success btn-lg"  value="Seleccionar" name="accion">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <br>
              </div>

-->

<!-- lista de productos -->


              <div class="card-body">
                <table class="table table-striped table-hover" ectype="multipart/form-data">
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
                            <td><?php echo $producto['Imagen'];?></td>
                            <td>
                              
                              <form action="" method="post" ectype="multipart/form-data">
                                
                                <input type="hidden" name="txtId" value="<?php echo $producto['ID'];?>">
                                <input type="hidden" name="txtNombre" value="<?php echo $producto['Nombre'];?>">
                                <input type="hidden" name="txtTipo" value="<?php echo $producto['Tipo'];?>">
                                <input type="hidden" name="txtColor" value="<?php echo $producto['Color'];?>">
                                <input type="hidden" name="txtCategoria" value="<?php echo $producto['Categoria'];?>">
                                <input type="hidden" name="txtMedida" value="<?php echo $producto['Medida'];?>">
                                <input type="hidden" name="txtCantidad" value="<?php echo $producto['Cantidad'];?>">
                                <input type="hidden" name="txtPrecio" value="<?php echo $producto['Precio'];?>">
                                <input type="hidden" name="txtImagen" value="<?php echo $producto['Imagen'];?>">

                                <input type="submit" name="btnAccion" value="Seleccionar" >
                                
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



----------------------------



------------------------------------------


  <?php include("piePagina.php");
  
?>
