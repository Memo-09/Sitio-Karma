<?php
if (isset($_POST['datos'])) {
  session_start();
  // Obtener los datos enviados desde JavaScript
  $datos = json_decode($_POST['datos'], true);
  
  include("../conexion.php");
$usuario = $_SESSION['usuario'];
$resultMessageQuery = mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE usuario='$usuario'");
$row = mysqli_fetch_array($resultMessageQuery);
$usuariog = $row[0];
echo "Usuario: " . $usuariog . "<br>";

// Verificar si se recibieron datos válidos
if (is_array($datos) && isset($datos['productos']) && isset($datos['total'])) {
    // Obtener los valores de los productos y el total
    $productos = $datos['productos'];
    $total = $datos['total'];

    $fechaActual = date('Y-m-d');

    // Resto del código para procesar los datos
    // Mostrar los productos en orden
    echo "Productos:<br>";
    $contador = 1;
    
    // Insertar venta
    $query2 = "INSERT INTO ventas VALUES (DEFAULT, '$fechaActual', $total, $usuariog)";
    mysqli_query($conexion, $query2);

    $queryidactual = "SET @id_venta = (SELECT MAX(ID_Venta) FROM ventas)";
    mysqli_query($conexion, $queryidactual);

    $query = "INSERT INTO detalles_venta (ID_Venta, ID_Producto, Cantidad, Precio) VALUES ((SELECT @id_venta), (SELECT ID_Producto FROM productos WHERE Nombre = ?), ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "sid", $titulo, $cantidad, $precio);

    foreach ($productos as $producto) {
        $titulo = $producto['titulo'];
        $precio = $producto['precio'];
        $cantidad = $producto['cantidad'];
        
        echo "Título: $titulo, Precio: $precio, Cantidad: $cantidad, Fecha: $fechaActual<br>";
        
        mysqli_stmt_execute($stmt);
        
        echo "Detalle de venta almacenado correctamente.<br>";
        
        $contador++;
    }
    header("Location:./Página-1.php");
 
} else {
    echo "Error: No se recibieron datos válidos";
}
}
?>






