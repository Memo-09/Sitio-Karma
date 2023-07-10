<?php
include("../conexion.php");
// Establecer el número de iteraciones deseado
$numeroIteraciones = 5;

// Realizar las llamadas al procedimiento almacenado en un ciclo for
for ($i = 1; $i <= $numeroIteraciones; $i++) {
    $id_venta = 73; // Reemplaza con el ID de venta correcto
    $id_producto = 20; // Reemplaza con el ID de producto correcto
    $precio = 10.00; // Reemplaza con el precio correcto

    // Construir y ejecutar la consulta SQL que llama al procedimiento almacenado
    $query = "INSERT detalles_venta VALUES(1, 1, 1, 35.00);";
    mysqli_query($conexion, $query);
}

?>