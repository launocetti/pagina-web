<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
//include 'mostrarCarrito.php';
?>

<?php
if($_POST){

//variables para los datos que se guardan en la bd
    
    $total=0;
    $SID=session_id();
    $Email=$_POST['email'];


    foreach($_SESSION['CARRITO'] as $indice=>$prod){
        $total= $total+($prod['PRECIO']*$prod['CANTIDAD']);
    }

//  los datos de la compra, se guardan en la bd

    $sentencia=$pdo->prepare("INSERT INTO `factura` 
    (`ID_factura`, `fecha`, `Email`, `Total`, `Estado`) 
    VALUES (NULL, NOW(),:Email,:Total,'pendiente');");
    
    $sentencia->bindParam(':Email',$Email);
    $sentencia->bindParam(':Total',$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

//cargar datos de compra en bd

    foreach($_SESSION['CARRITO'] as $indice=>$prod){
        
        $sentencia=$pdo->prepare("INSERT INTO `venta` 
        (`ID_venta`, `ID_factura`, `Id_Producto`, `precio`,`cantidad`) 
        VALUES (NULL,:ID_factura, :Id_Producto, :precio, :cantidad);");
        
        $sentencia->bindParam(':ID_factura',$idVenta);
        $sentencia->bindParam(':Id_Producto',$prod['ID']);
        $sentencia->bindParam(':precio',$prod['PRECIO']);
        $sentencia->bindParam(':cantidad',$prod['CANTIDAD']);
        $sentencia->execute();
    }


//mostrar valos total de compra 

}
?>
<br><br><br><br>
<div class=" jumbotron alert alert-primary justify-content-center ">
    <div class="text-center">
        <h1 class="display-4"></h1>
        
        <p class="lead">Monto Total a Pagar: </p>
        <h4 class="form-control">$ <?php echo number_format($total,2);?></h4>   
    </div>

    <div class="d-grid">
        <button type="button" class="btn btn-outline-primary btn-block" 
                type="submit" 
                name="btnAccion"
                value="proceder"> 
                <a class="nav-link " href="https://link.mercadopago.com.ar/funnyflowerpot" >
                Proceder a pagar  <i class="fas fa-hand-point-right"></i></button>
    </div>

        
</div>


