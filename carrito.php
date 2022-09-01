<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST ['btnAccion']){

        case 'Agregar':

            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="Id:".$ID."<br/>";
            }else{ 
                $mensaje.="ID Incorrecto".$ID."<br/>";
            }
            if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="Nombre: ".$NOMBRE."<br/>";
                }else{ 
                    $mensaje.="Nombre Incorrecto".$NOMBRE."<br/>"; break;
                }
                    
                if(is_numeric( openssl_decrypt($_POST['cantidad'],COD,KEY))){
                    $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                    $mensaje.="Cantidad: ".$CANTIDAD."<br/>";
                }else{ 
                    $mensaje.="Cantidad Incorrecta".$CANTIDAD."<br/>";break;
                }
                    
                if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
                    $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                    $mensaje.="Precio: $".$PRECIO."<br/>";
                }else{ 
                    $mensaje.="Precio Incorrecto".$PRECIO."<br/>"; break;
                }

//con el else se acumulan productos en el carrito, se contabilizan y mostrarlos

            if(!isset($_SESSION['CARRITO'])){
                $prod=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO
                    );
                    $_SESSION['CARRITO'][0]=$prod;
                    $mensaje="Producto agregado al Carrito";
            }else{

                $idProductos=array_column($_SESSION['CARRITO'],"ID");

                if(in_array($ID,$idProductos)){
                    echo ">script>alert('El producto ya ha sido seleccionado')</script>";
                }else{

                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $prod=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        'PRECIO'=>$PRECIO
                        );
                        $_SESSION['CARRITO'][$NumeroProductos]=$prod;
                        $mensaje="Producto agregado al Carrito";
                }

            }
            //$mensaje=print_r($_SESSION, true);


        break;
        case "Eliminar":
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);

                foreach($_SESSION['CARRITO'] as $indice=>$prod){
                    if($prod['ID']==$ID){
                        unset($_SESSION['CARRITO'] [$indice]);
                        echo"<script> alert('Producto borrado');</script>";
                    }
                }

            }else{ 
                $mensaje.="ID Incorrecto".$ID;
            }

        break;

        

        }
    } 
?>