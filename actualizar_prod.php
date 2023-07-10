<?php
$id = $_POST["id"];
$producto = $_POST["nombre"];
$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$precio = $_POST["precio"];
$categorias = $_POST["categorias"];

echo "VALOR1 " . $id . "<br>";
echo "VALOR2 " . $producto . "<br>";
echo "VALOR3 " . $tipo . "<br>";
echo "VALOR4 " . $marca . "<br>";
echo "VALOR5 " . $precio . "<br>";
echo "VALOR7 " . $categorias . "<br>";

include("./conexion.php");
$queryInsert = "CALL EditarProducto($id,'$producto','$tipo',$marca,$precio,@Message)";
$ejectQueryInsert2 = mysqli_query($conexion, $queryInsert);

$resultMessageQuery = mysqli_query($conexion, "SELECT @Message");
$row = mysqli_fetch_assoc($resultMessageQuery);
$resultMessage = $row['@Message'];
echo $resultMessage;

if($resultMessage == 'Error: Ya existe un registro con el mismo nombre y tipo'){
    header("Location:./Actualizar_Producto.php?id=$id");
}else{
    $queryInsert22 = "CALL EditarCategoriaPro($categorias,$id)";
    $ejectQueryInsert2 = mysqli_query($conexion, $queryInsert22);
    header("Location:./Categorias.php");
}
?>