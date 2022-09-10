<?php include("modulos/panel.php");?>
<?php include("templates/cabecera.php");?>
<?php include("sidebar.php"); ?>


  <div class="content-wrapper">

    <section class="content-header">
      <h1>Usuarios</h1>
      <br>
    </section>

    <!-----------------  formulario de usuarios--------------------->
<section class="content">

<div class="row border">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              Usuarios Registrados
            </div>
            <br>

                
                <div class="card-body table-responsive no-padding">
                <table class="table table-striped table-hover" ectype="multipart/form-data">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>usuario</th>
                        <th>password</th>
                        <th>Nombre_Apellido</th>
                        <th>email</th>
                        <th>Nivel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaUsuarios as $usuario){ ?>
                        <tr>
                            <td><?php echo $usuario['id'];?></td>
                            <td><?php echo $usuario['username'];?></td>
                            <td><?php echo md5 ($usuario['password']);?></td>
                            <td><?php echo $usuario['Nombre_Apellido'];?></td>
                            <td><?php echo $usuario['email'];?></td>
                            <td><?php echo $usuario['nivel'];?></td>
                        </tr>

                        <?php } ?> 
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php include("templates/piePagina.php"); ?>
