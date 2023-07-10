<?php 
include("./conexion.php");
if (isset($_POST["tipoins"])) {
    $producto = $_POST["nombreins"];
    $tipo = $_POST["tipoins"];
    $marca = $_POST["select"];
    $precio = $_POST["preicoins"];
    $nombreArchivo = $_FILES['archivo']['name'];
    $categorias = $_POST["categorias"];

    echo "VALOR2 " . $producto . "<br>";
    echo "VALOR3 " . $tipo . "<br>";
    echo "VALOR4 " . $marca . "<br>";
    echo "VALOR5 " . $precio . "<br>";
    echo "VALOR6 " . $nombreArchivo . "<br>";
    echo "VALOR7 " . $categorias . "<br>";

    if ($tipo == "") {
        $queryInsert = "CALL InsertarProducto('$producto', 'SIN TIPO', $precio, $marca, '$nombreArchivo', @Message)";
        $ejectQueryInsert = mysqli_query($conexion, $queryInsert);

        $resultMessageQuery = mysqli_query($conexion, "SELECT @Message");
        $row = mysqli_fetch_assoc($resultMessageQuery);
        $resultMessage = $row['@Message'];
        echo $resultMessage;

        $queryinsert2 = "CALL InsertarDet('$producto', $categorias)";
        $ejectQueryinsert2 = mysqli_query($conexion, $queryinsert2);

        if ($ejectQueryinsert2) {
            echo "La segunda consulta se ejecutó correctamente.";
            header("Location: Categorias.php");
        } else {
            echo "Error al ejecutar la segunda consulta: " . mysqli_error($conexion);
            header("Location: Ingresar_Producto.php");
        }

        $archivoTemporal = $_FILES['archivo']['tmp_name'];
        $rutaDestino = '../Sitio_Karma5/images/' . $nombreArchivo;

        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Error al subir el archivo.";
        }

    }
    else{
        $queryInsert = "CALL InsertarProducto('$producto', '$tipo', $precio, $marca, '$nombreArchivo', @Message)";
        $ejectQueryInsert = mysqli_query($conexion, $queryInsert);

        $resultMessageQuery = mysqli_query($conexion, "SELECT @Message");
        $row = mysqli_fetch_assoc($resultMessageQuery);
        $resultMessage = $row['@Message'];
        echo $resultMessage;

        $queryinsert2 = "CALL InsertarDet('$producto', $categorias)";
        $ejectQueryinsert2 = mysqli_query($conexion, $queryinsert2);

        if ($ejectQueryinsert2) {
            echo "La segunda consulta se ejecutó correctamente.";
            header("Location: Categorias.php");
        } else {
            echo "Error al ejecutar la segunda consulta: " . mysqli_error($conexion);
            header("Location: Ingresar_Producto.php");
        }

        $archivoTemporal = $_FILES['archivo']['tmp_name'];
        $rutaDestino = '../Sitio_Karma5/images/' . $nombreArchivo;

        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Error al subir el archivo.";
        }
    }
}
?>