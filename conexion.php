<?php
    //DATOS DEL SERVIDOR BD
    $servidor = "localhost";
    $usuario_bd = "root";
    $password = "";
    $namebd = "tienda_ropa";

    $conexion = mysqli_connect($servidor, $usuario_bd, $password, $namebd);
    mysqli_query($conexion, "SET NAMES 'utf8'");
?>