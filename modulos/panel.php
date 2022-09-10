<?php

include('global/sesiones.php');
include('global/conexion.php');



    $sentenciaSQL=$pdo->prepare("SELECT count(*)totalVentas, SUM(Total) as IngresosTotalVentas FROM `factura`");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $totalVentas=$registro ['totalVentas'];
    $ingresosTotalVentas=$registro['IngresosTotalVentas'];

    $sentenciaSQL=$pdo->prepare("SELECT count(*)totalUsuariosRegistrados FROM `login`");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $totalUsuariosRegistrados=$registro ['totalUsuariosRegistrados'];

    $sentenciaSQL=$pdo->prepare("SELECT count(*)totalUnidadesVendidas FROM `venta`");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $totalUnidadesVendidas=$registro ['totalUnidadesVendidas'];
    

    $sentencia=$pdo->prepare("SELECT*FROM login");
    $sentencia->execute();
    $listaUsuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>