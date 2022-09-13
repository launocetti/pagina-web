<?php
include('global/sesiones.php');
include('global/conexion.php');


$txtID=(isset($_POST['txtID']))? $_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))? $_POST['txtNombre']:"";
$txtTipo=(isset($_POST['txtTipo']))? $_POST['txtTipo']:"";
$txtColor=(isset($_POST['txtColor']))? $_POST['txtColor']:"";
$txtCategoria=(isset($_POST['txtCategoria']))? $_POST['txtCategoria']:"";
$txtMedida=(isset($_POST['txtMedida']))? $_POST['txtMedida']:"";
$txtCantidad=(isset($_POST['txtCantidad']))? $_POST['txtCantidad']:"";
$txtPrecio=(isset($_POST['txtPrecio']))? $_POST['txtPrecio']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))? $_FILES['txtImagen']['name']:"";

$btnAccion=(isset($_POST['btnAccion']))? $_POST['btnAccion']:"";


/*--------------------------------- acciones sobre los productos ---------------------------------------*/



    switch($btnAccion){

        case "Agregar":

            $sentencia=$pdo->prepare("INSERT INTO productos 
            (ID, Nombre, Tipo,Color,Categoria,Medida,Cantidad,Precio,Imagen) 
            VALUES (NULL,:Nombre, :Tipo, :Color, :Categoria,:Medida, :Cantidad, :Precio, :Imagen);");
            
            $sentencia->bindParam(':Nombre',$txtNombre);
            $sentencia->bindParam(':Tipo',$txtTipo);
            $sentencia->bindParam(':Color',$txtColor);
            $sentencia->bindParam(':Categoria',$txtCategoria);
            $sentencia->bindParam(':Medida',$txtMedida);
            $sentencia->bindParam(':Cantidad',$txtCantidad);
            $sentencia->bindParam(':Precio',$txtPrecio);

/*para que no se superpongan las imagenes al cargar los productos */


            $fecha=new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            if($tmpImagen!=""){
                move_uploaded_file($tmpImagen,"../../Imagenes/".$nombreArchivo);
            }

            $sentencia->bindParam(':Imagen',$nombreArchivo);
            $sentencia->execute();

            break;
        
        case "Editar":

            $sentencia=$pdo->prepare("UPDATE productos SET
            Nombre=:Nombre,
            Tipo=:Tipo,
            Color=:Color,
            Categoria=:Categoria,
            Medida=:Medida,
            Cantidad=:Cantidad,
            Precio=:Precio,
            Imagen=:Imagen
            WHERE ID=:ID");
        
            $sentencia->bindParam(':Nombre',$txtNombre);
            $sentencia->bindParam(':Tipo',$txtTipo);
            $sentencia->bindParam(':Color',$txtColor);
            $sentencia->bindParam(':Categoria',$txtCategoria);
            $sentencia->bindParam(':Medida',$txtMedida);
            $sentencia->bindParam(':Cantidad',$txtCantidad);
            $sentencia->bindParam(':Precio',$txtPrecio);

            $fecha=new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            if($tmpImagen!=""){
                move_uploaded_file($tmpImagen,"../../Imagenes/".$nombreArchivo);
            }

            $sentencia->bindParam(':Imagen',$nombreArchivo);
            $sentencia->bindParam(':ID',$txtID);
            $sentencia->execute();

            break;

        case "Cancelar":
            header("Vistaproductos.php");
            break;

        case"Seleccionar":

            $sentencia=$pdo->prepare("SELECT*FROM productos WHERE ID=:ID");
            $sentencia->bindParam(':ID',$txtID);
            $sentencia->execute();
            $producto=$sentencia->fetch(PDO::FETCH_LAZY);

            $txtNombre=$producto['Nombre'];
            $txtTipo=$producto['Tipo'];
            $txtColor=$producto['Color'];
            $txtCategoria=$producto['Categoria'];
            $txtMedida=$producto['Medida'];
            $txtCantidad=$producto['Cantidad'];
            $txtPrecio=$producto['Precio'];
            $txtImagen=$producto['Imagen'];


            break;

        case "Eliminar":

/*buscar imagen en el registro*/

            $sentencia=$pdo->prepare("SELECT Imagen FROM productos WHERE ID=:ID");
            $sentencia->bindParam(':ID',$txtID);
            $sentencia->execute();
            $producto=$sentencia->fetch(PDO::FETCH_LAZY);

/*validar si existe imagen para ese registro para eliminarla */

            if(isset($producto["Imagen"])&&($producto["Imagen"]!="imagen.jpg")){
                if(file_exists("../../Imagenes/".$producto["Imagen"])){
                    unlink("../../Imagenes/".$producto["Imagen"]);
                }
            }


            $sentencia=$pdo->prepare("DELETE FROM productos WHERE ID=:ID");
            $sentencia->bindParam(':ID',$txtID);
            $sentencia->execute();

            break;
        }

        
$sentencia=$pdo->prepare("SELECT*FROM productos");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

