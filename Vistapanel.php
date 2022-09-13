<?php include("modulos/panel.php");?>
<?php include("templates/cabecera.php");?>

<?php include("sidebar.php"); ?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>Inicio</h1>
      <br>
    </section>

<!------------------- Menu de tarjetas de colores ------------------------>


    <section class="content">
    <br>
      <!-- cajas de colores -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <div class="small-box" id="btnVentas" >
            <div class="inner">
              <h3><?php echo $totalVentas;?></h3>

              <p>Ventas Realizadas</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box " id="btnIngresos">
            <div class="inner">
              <h3>$ <?php echo number_format($ingresosTotalVentas,2);?></h3>

              <p>Ventas Total Acumulado</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box" id="btnUsuarios">
            <div class="inner">
              <h3><?php echo $totalUsuariosRegistrados;?></h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>

        
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" id="btnUnidades">
            <div class="inner">
              <h3><?php echo $totalUnidadesVendidas;?></h3>

              <p>Cantidad de unidades vendidas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
      </div>
    <div>
    <div>


</div>


  <?php include("templates/piePagina.php"); ?>
