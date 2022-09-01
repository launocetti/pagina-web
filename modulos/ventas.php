<?php
include('global/sesiones.php');
include('global/conexion.php');


$sentencia=$pdo->prepare("SELECT*FROM venta");
$sentencia->execute();
$listaVentas=$sentencia->fetchAll(PDO::FETCH_ASSOC);


$txtid_venta=(isset($_POST['txtid_venta']))? $_POST['txtid_venta']:"";
$txtID_factura=(isset($_POST['txtID_factura']))? $_POST['txtID_factura']:"";
$txtId_Producto=(isset($_POST['txtId_Producto']))? $_POST['txtId_Producto']:"";
$txtprecio=(isset($_POST['txtprecio']))? $_POST['txtprecio']:"";
$txtCantidad=(isset($_POST['txtCantidad']))? $_POST['txtCantidad']:"";



$sentencia=$pdo->prepare("SELECT*FROM factura");
$sentencia->execute();
$listaFacturas=$sentencia->fetchAll(PDO::FETCH_ASSOC);


$txtID_factura=(isset($_POST['txtID_factura']))? $_POST['txtID_factura']:"";
$txtFecha=(isset($_POST['txtFecha']))? $_POST['txtFecha']:"";
$txtEmail=(isset($_POST['txtEmail']))? $_POST['txtEmail']:"";
$txtTotal=(isset($_POST['txtTotal']))? $_POST['txtTotal']:"";
$txtEstado=(isset($_POST['txtEstado']))? $_POST['txtEstado']:"";

?>

