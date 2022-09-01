<?php include("modulos/ventas.php");?>
<?php include("cabecera.php"); ?>

  
  <!-- Left side column. contains the logo and sidebar -->

  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ventas
        <small>Detalle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ventas y Facturas</li>
      </ol>
    </section>

    <!-- Menu de tarjetas de colores -->
    <section class="content">

            <!-- lista de productos -->
  <div class="container border">

  <div class=" row col-xs-12">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-hover" ectype="multipart/form-data">
                  <thead>
                    <tr>
                    <th>id_venta</th>
                    <th>ID_factura</th>
                    <th>Id_Producto</th>
                    <th>Precio_Unidad</th>
                    <th>Cantidad</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($listaVentas as $venta){ ?>
                          <tr>
                            <td><?php echo $venta['id_venta'];?></td>
                            <td><?php echo $venta['ID_factura'];?></td>
                            <td><?php echo $venta['Id_Producto'];?></td>
                            <td><?php echo $venta['precio'];?></td>
                            <td><?php echo $venta['cantidad'];?></td>

                            <td>

                            <?php } ?>  
                            </td>
                          </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-hover" ectype="multipart/form-data">
                  <thead>
                    <tr>
                    <th>ID_factura</th>
                    <th>Fecha</th>
                    <th>Email</th>
                    <th>Total</th>
                    <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($listaFacturas as $factura){ ?>
                          <tr>
                            <td><?php echo $factura['ID_factura'];?></td>
                            <td><?php echo $factura['Fecha'];?></td>
                            <td><?php echo $factura['Email'];?></td>
                            <td><?php echo $factura['Total'];?></td>
                            <td><?php echo $factura['Estado'];?></td>

                            <td>

                            <?php } ?>  
                            </td>
                          </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include("piePagina.php"); ?>