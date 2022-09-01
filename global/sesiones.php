<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo "Rerdirigir al login...";
    header('Location:index.php');
}{
    print_r($_SESSION['usuario']);
}

?>

