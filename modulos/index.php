<?php

if(isset($_POST["btnLogin"])){

 //conexon a la base de datos y validacion de usuario con la tabla de usuarios

    include("global/conexion.php");

    $username=($_POST['username']);
    $password=($_POST['password']);

    $sentenciaSQL=$pdo->prepare("SELECT * FROM login
    WHERE username=:username
    AND password=:password");

    $sentenciaSQL->bindParam("username",$username,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("password",$password,PDO::PARAM_STR);
    $sentenciaSQL->execute();

    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    print_r($registro);


    $numeroRegistros=$sentenciaSQL->rowCount();

    if($numeroRegistros>=1){

    session_start();
    $_SESSION['usuario']=$registro;
    

        echo "<br/> Bienvenido...";
        header('Location:Vistapanel.php');

    }else{
        echo "<br/> No se encontraron registros";
    }

}

?>