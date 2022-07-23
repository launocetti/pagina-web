<?php
/*cadena de conexion*/
$servidor="mysql:dbname=" .BD. ";host=".SERVIDOR;

try{
/*variable PDO que me permite conectarme a la BD*/
    $pdo= new PDO($servidor,USUARIO,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );

/*script que indica que la conexion se realizo*/
    echo "<script>alert('Conectado...)</script>";

} catch(PDOException $e){

/*script que indica que la conexion NO se realizo*/
    echo "<script>alert('Error...)</script>";
}

?>