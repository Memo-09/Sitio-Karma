<?php
    $id = $_GET['id']; // Supongamos que obtienes el ID del registro a actualizar desde un formulario
    include("./conexion.php");
    // Construir la consulta SQL de actualización
    $sql = "UPDATE proveedores SET status=0 WHERE ID_Proveedor=$id;";

    // Ejecutar la consulta SQL
    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
        header("Location: ./proveedores.php");
        exit; // Asegúrate de agregar la instrucción "exit" después de la redirección
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
?>