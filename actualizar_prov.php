<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono= $_POST["telefono"];

echo "VALOR1 " . $id . "<br>";
echo "VALOR2 " . $nombre . "<br>";
echo "VALOR3 " . $direccion . "<br>";
echo "VALOR4 " . $telefono . "<br>";

include("./conexion.php");
$queryInsert = "CALL EditarProveedor($id, '$nombre', '$direccion', '$telefono', @Message);";
$ejectQueryInsert2 = mysqli_query($conexion, $queryInsert);

$resultMessageQuery = mysqli_query($conexion, "SELECT @Message");
$row = mysqli_fetch_assoc($resultMessageQuery);
$resultMessage = $row['@Message'];
echo $resultMessage;

if($resultMessage == 'Error: Ya existe un registro con el mismo nombre'){
    header("Location:./Actualizar_Producto.php?id=$id");
}else{
    header("Location:./Proveedores.php");
}
?>