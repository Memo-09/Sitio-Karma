<?php
    include("./conexion.php");

    if(isset($_POST["restablecer"])){
        $correo = $_POST["correo"];
        $contraseña = $_POST["name"];
        $confirmar= $_POST["text"];
                          
        if($contraseña != $confirmar){
            echo "Las contraseñas no coinciden";
        } else {
            echo $correo."<br>";
            echo $contraseña."<br>";
            echo $confirmar."<br>";
            $queryrestablecer = "UPDATE usuarios SET contrasena='$contraseña' WHERE correo='$correo';";
            $restablecergeneral = mysqli_query($conexion, $queryrestablecer);
            header("Location: Iniciar-Secion.php");
            exit();
            /*
            $restablecergeneral = mysqli_query($conexion, $queryrestablecer);*/
        }
    }
?>