<?php include("modulos/panel.php");?>
<?php include("templates/cabecera.php");?>

  
  <!-- Left side column. contains the logo and sidebar -->

  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Inicio</h1>
      <br>
    </section>

    <!-- Menu de tarjetas de colores -->
    <section class="content">
    <br>
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" id="btnVentas" >
            <div class="inner">
              <h3><?php echo $totalVentas;?></h3>

              <p>Ventas Realizadas</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
<!--        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box a cambiar o no...-->
          <div class="small-box " id="btnIngresos">
            <div class="inner">
              <h3>$ <?php echo number_format($ingresosTotalVentas,2);?></h3>

              <p>Ventas Total Acumulado</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
<!--        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" id="btnUsuarios">
            <div class="inner">
              <h3><?php echo $totalUsuariosRegistrados;?></h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
<!--        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" id="btnUnidades">
            <div class="inner">
              <h3><?php echo $totalUnidadesVendidas;?></h3>

              <p>Cantidad de unidades vendidas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
<!--        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div>

      </div>

    <div>
      <div>


</div>


  <?php include("templates/piePagina.php"); ?>
