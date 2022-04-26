<?php
$mensaje="";
    if(isset($_POST['btnAccion'])){

        switch($_POST ['btnAccion']){
            case 'Agregar':
                
                if(is_numeric($_POST['id'])){
                    $mensaje="Ok Id Correcto".$ID;
                }
                else{
                    $mensaje="ID Incorrecto".$ID;
                }

                break;
        }
    } 
?>