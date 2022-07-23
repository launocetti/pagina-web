<?php
session_start();

$mensaje="";

if(isset($_POST['btnAction'])){

    switch($_POST ['btnAction']){

        case 'Agregar':

            if(is_numeric($_POST['id'])){
                $ID=$_POST['id'];
                $mensaje.="Id: ".$ID."<br/>";
            }else{ $mensaje.="ID Incorrecto".$ID."<br/>";
                }
            if(is_string($_POST['nombre'])){
                $NOMBRE=$_POST['nombre'];
                $mensaje.="Nombre: ".$NOMBRE."<br/>";
                }else{ $mensaje.="Nombre Incorrecto".$NOMBRE."<br/>"; break;}
                    
                if(is_numeric($_POST['cantidad'])){
                    $CANTIDAD=$_POST['cantidad'];
                    $mensaje.="Cantidad: ".$CANTIDAD."<br/>";
                }else{ $mensaje.="Cantidad Incorrecta".$CANTIDAD."<br/>";break;}
                    
                if(is_numeric($_POST['precio'])){
                    $PRECIO=$_POST['precio'];
                    $mensaje.="Precio: $".$PRECIO."<br/>";
                }else{ $mensaje.="Precio Incorrecto".$PRECIO."<br/>"; break;}

//con el else se acumulan productos en el carrito, se contabilizan y mostrarlos

            if(!isset($_SESSION['CARRITO'])){
                $prod=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO,
                    );
                    $_SESSION['CARRITO'][0]=$prod;
            }else{
                $NumeroProductos= count($_SESSION['CARRITO']);
                $prod=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO,
                    );
                    $_SESSION['CARRITO'][$NumeroProductos]=$prod;
            }
       //    $mensaje=print_r($_SESSION, true);

        break;

        }
    } 
?>