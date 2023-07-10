<?php
    $nombre = $_POST["correo1"];
    $email = $_POST["contrasenia1"];

    include "./conexion.php";
    $queryval = "CALL Acceder('$nombre', '$email');";
    $ejctval = mysqli_query($conexion, $queryval);
    $validar = mysqli_fetch_array($ejctval);

    if ($validar != null) {
        echo "$nombre Y $email" . "<br>";
        echo "VALOR1: " . $validar[0] . "<br>";
        echo "VALOR2: " . $validar[1] . "<br>";
        echo "VALOR3: " . $validar[2] . "<br>";
        echo "VALOR4: " . $validar[3] . "<br>";
    } else {
        echo "$nombre Y $email";
        echo "El array es nulo.";
    }

    if($validar[1]==$nombre){
        if($validar[2]==$email){
          session_start();
          $_SESSION['usuario'] =$validar[0];
          $_SESSION['roles'] = $validar[3];
          if( $_SESSION['roles'] == 'ADMINISTRADOR'){
            header("Location:./Categorias.php");
          }else{
            header("Location:./cliente/Página-1.php");
          }
        }else{
          echo "Favor de Verificar que la contraseña sea correcta";
          header("Location:./Iniciar-Secion.php");
        }
      }else{
        echo "Favor de Verificar que el nombre sea el correcto";
        header("Location:./Iniciar-Secion.php");
      }
    
?>