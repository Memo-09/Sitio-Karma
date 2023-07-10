<?php
include("./conexion.php");
$nombre = $_POST["nombre"];
$direccion= $_POST["direccion"];
$telefono = $_POST["telefono"];
$nombreArchivo = $_FILES['archivo']['name'];

echo "VALOR2 " . $nombre . "<br>";
echo "VALOR3 " . $direccion . "<br>";
echo "VALOR4 " . $telefono . "<br>";
echo "VALOR5 " . $nombreArchivo . "<br>";

$queryInsert = "CALL InsertarProveedor('$nombre', '$direccion', '$telefono', '$nombreArchivo',@Mensaje)";
$ejectQueryInsert = mysqli_query($conexion, $queryInsert);

$archivoTemporal = $_FILES['archivo']['tmp_name'];
$rutaDestino = '../Sitio_Karma5/images/' . $nombreArchivo;

if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
    echo "El archivo se ha subido correctamente.";
} else {
    echo "Error al subir el archivo.";
}

$resultMessageQuery = mysqli_query($conexion, "SELECT @Mensaje");
$row = mysqli_fetch_assoc($resultMessageQuery);
$resultMessage = $row['@Mensaje'];

if($resultMessage == 'Error: El proveedor ya existe.'){
    header("Location:./Ingresar_Proveedor.php");
    echo $resultMessage;
}else{
    header("Location:./Proveedores.php");
    echo $resultMessage;
}
?>