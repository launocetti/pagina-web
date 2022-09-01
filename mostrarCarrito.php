<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<br><br><br><br><br>

<h3>Lista de Productos Seleccionados</h3>

<?php if (!empty($_SESSION['CARRITO'])) { ?>
    
    <table class="table table-light table-bordered border-primary table-hover" >
    <tbody >
        <tr>
            <th width="40%" >Descripcion</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%" class="text-center">--</th>
        </tr>
        
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$prod) {?>
        <tr>
            <td width="40%"><?php echo $prod['NOMBRE']?></td>
            <td width="15%" class="text-center"><?php echo $prod['CANTIDAD']?></td>
            <td width="20%" class="text-center">$<?php echo $prod['PRECIO']?></td>
            <td width="20%" class="text-center">$<?php echo number_format($prod['PRECIO']*$prod['CANTIDAD'],2) ?></td>
            <td width="5%">

            <form action="" method="post">

            <input type="hidden" 
            name="id" 
            id="id" 
            value="<?php echo openssl_encrypt($prod['ID'],COD,KEY);?>">

                <button 
                class="btn btn-danger rounded-pill" 
                type="submit"
                name="btnAccion"
                value="Eliminar" 
                >Eliminar</button>
            </form>
            </td>
        </tr>
    

        <?php $total= $total+($prod['PRECIO']*$prod['CANTIDAD']);?>
        <?php }?>
        <tr>
            <td colspan="3" align="rigth"><h3>Total a Pagar</h3></td>
            <td align="rigth"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
            <br>
        </tr>

        <tr>
            <td colspan="5">
            <form action="pagar.php" method="post">
                <div class="alert alert-success">
                    <div class="form-group">
                        <label for="my-input">Correo de contacto: </label>
                        <input id="email" name="email" 
                        class="form-control" 
                        type="email"
                        placeholder="Ingrese su Correo Electronico"
                        required>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        La factura del pedido se enviará a este correo electrónico.
                    </small>
                </div>
                <button class="btn btn-primary btn-lg btn-block rounded-pill" 
                type="submit" 
                name="btnAccion"
                value="proceder">Proceder a pagar</button>
            </form>

            </td>
        </tr>
    </tbody>

</table>

<?php } else { ?>
    <div class="alert alert-success">
        No hay productos en el Carrito
    </div>
<?php }?>

