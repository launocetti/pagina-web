<?php
include('global/sesiones.php');
include('global/conexion.php');


$sentencia=$pdo->prepare("SELECT*FROM productos");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);



$txtID=(isset($_POST['txtID']))? $_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))? $_POST['txtNombre']:"";
$txtTipo=(isset($_POST['txtTipo']))? $_POST['txtTipo']:"";
$txtColor=(isset($_POST['txtColor']))? $_POST['txtColor']:"";
$txtCategoria=(isset($_POST['txtCategoria']))? $_POST['txtCategoria']:"";
$txtMedida=(isset($_POST['txtMedida']))? $_POST['txtMedida']:"";
$txtCantidad=(isset($_POST['txtCantidad']))? $_POST['txtCantidad']:"";
$txtPrecio=(isset($_POST['txtPrecio']))? $_POST['txtPrecio']:"";
$txtImagen=(isset($_POST['txtImagen']))? $_POST['txtImagen']:"";

$btnAccion=(isset($_POST['btnAccion']))? $_POST['btnAccion']:"";


    switch($btnAccion){

        case "btnAgregar":

            $sentencia=$pdo->prepare("INSERT INTO productos 
            (ID, Nombre, Tipo,Color,Categoria,Medida,Cantidad,Precio,Imagen) 
            VALUES (NULL,:Nombre, :Tipo, :Color, :Categoria,:Medida, :Cantidad, :Precio, :Imagen);");
            
            $sentencia->bindParam(':Nombre',$txtNombre);
            $sentencia->bindParam(':Tipo',$txtTipo);
            $sentencia->bindParam(':Color',$txtColor);
            $sentencia->bindParam(':Categoria',$txtCantidad);
            $sentencia->bindParam(':Medida',$txtMedida);
            $sentencia->bindParam(':Cantidad',$txtCantidad);
            $sentencia->bindParam(':Precio',$txtPrecio);
            $sentencia->bindParam(':Imagen',$txtImagen);
            $sentencia->execute();

            header('Location: Vistaproductos.php');
            
            echo "presionaste Agregar Producto";
        break;
        
        case "btnEditar":

            $sentencia=$pdo->prepare("UPDATE productos SET
            Nombre=:Nombre,
            Tipo=:Tipo,
            Color=:Color,
            Categoria=:Categoria,
            Medida=:Medida,
            Cantidad=:Cantidad,
            Precio=:Precio,
            Imagen=:Imagen WHERE ID=:ID");
        
            $sentencia->bindParam(':Nombre',$txtNombre);
            $sentencia->bindParam(':Tipo',$txtTipo);
            $sentencia->bindParam(':Color',$txtColor);
            $sentencia->bindParam(':Categoria',$txtCantidad);
            $sentencia->bindParam(':Medida',$txtMedida);
            $sentencia->bindParam(':Cantidad',$txtCantidad);
            $sentencia->bindParam(':Precio',$txtPrecio);
            $sentencia->bindParam(':Imagen',$txtImagen);
            $sentencia->bindParam(':ID',$txtID);
            $sentencia->execute();

            header('Location: Vistaproductos.php');

            echo "presionaste Editar";
        break;
        case "btnEliminar":

            $sentencia=$pdo->prepare("DELETE FROM productos (Nombre=:Nombre,
            Tipo=:Tipo,
            Color=:Color,
            Categoria=:Categoria,
            Medida=:Medida,
            Cantidad=:Cantidad,
            Precio=:Precio,
            Imagen=:Imagen)
            WHERE id=:ID");


            echo "presionaste Eliminar";
        break;
        }


?>

