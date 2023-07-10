<?php
    session_start();
    if(isset($_SESSION['usuario'])){
      if($_SESSION['roles'] == 'ADMINISTRADOR'){
        $categoria = $_GET["categoria"];
        if ($categoria == null){
          header("Location:./Categorias.php");
        }else{
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>lista</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="lista.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./cliente/estilo.css">
    <script src="./app_editar_eliminar.js" async></script>
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/bolsa-de-la-compra.png"
}</script>
    <meta name="theme-color" content="#0149b8">
    <meta property="og:title" content="lista">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-1607"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="lista.php" class="u-image u-logo u-image-1" data-image-width="16" data-image-height="16" title="Inicio2">
          <img src="images/bolsa-de-la-compra.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
            </li><li class="u-nav-item"><a class="u-border-active-palette-4-base u-border-hover-palette-4-base u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-3-base" href="Categorias.php" style="padding: 10px;">Inicio</a>
            </li><li class="u-nav-item"><a class="u-border-active-palette-4-base u-border-hover-palette-4-base u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-3-base" href="Proveedores.php" style="padding: 10px;">Proveedores</a>
            </li><li class="u-nav-item"><a class="u-border-active-palette-4-base u-border-hover-palette-4-base u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-3-base" style="padding: 10px;">Mi cuenta</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a href="cerrarsecion.php" class="u-button-style u-nav-link u-white">Cerrar Secion</a>
            </li></ul>
            </div>
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Categorias.php">Inicio</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Proveedores.php">Proveedores</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link">Mi cuenta</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a href="cerrarsecion.php" class="u-button-style u-nav-link">Cerrar Secion</a>
                </li></ul>
                </div>
                </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-0a27">
      <div class="u-clearfix u-sheet u-valign-middle-lg ">
        <a href="Ingresar_Producto.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1">AGREGAR NUEVO PRODUCTO</a>
      </div>
    </section>

    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
          <?php
            // Realizar la consulta
            include("./conexion.php");
            $resultMessageQuery = mysqli_query($conexion, "CALL MostrarProductosGeneral('$categoria')");

            // Verificar si se obtuvieron resultados
            if (mysqli_num_rows($resultMessageQuery) > 0) {
                // Iterar sobre los resultados y mostrarlos en el componente
                while ($row = mysqli_fetch_array($resultMessageQuery)) {
                    // Obtener los datos del registro actual
                    $id = $row[0];
                    $titulo = $row[1];
                    $imagen = $row[2];
                    $precio = $row[3];
                    $marca = $row[4];

                    // Generar el código HTML del elemento del componente
                    echo '<div class="item">';
                    echo '<span class="titulo-item">' . $titulo . '</span>';
      ?>
                    <img src="./images/<?php echo $imagen  ?>" alt="" class="img-item" style="width: 158px; height: 170px;">
      <?php
                    echo '<span class="titulo-item">' . $marca . '</span>';
                    echo '<span class="precio-item">' . $precio . '</span>';
      ?>
                    <button class="boton-item"><a href='eliminar_producto.php?id=<?php echo $id ?>'>ELIMINAR</a></button>
                    <button class="boton-item"><a href="Actualizar_Producto.php?id=<?php echo $id ?>">ACTUALIZAR</a></button>
      <?php
                    echo '</div>';
                }
            } else {
                echo "No se encontraron resultados.";
            }

            // Cerrar la conexión
            mysqli_close($conexion);
          ?>
        </div>
        </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-90 u-footer" id="sec-23e0"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Derechos Reservados por El Gerente y el Desarrollador del Proyecto<br>KARMA S.A DE C.V@
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.app" target="_blank">
        <span>Website Builder</span>
      </a>. 
    </section>
  
</body></html>
<?php
        }
      }
    }else{
      header("Location:Iniciar-Secion.php");
    }
?>