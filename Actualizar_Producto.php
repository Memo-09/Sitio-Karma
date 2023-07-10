<?php
    session_start();
    if(isset($_SESSION['usuario'])){
      if($_SESSION['roles'] == 'ADMINISTRADOR'){
        $id = $_GET["id"];
        if($id == null){
          header("Location:lista.php");
        }else{
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="NUEVO PRODUCTO">
    <meta name="description" content="">
    <title>Actualizar_Producto</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Actualizar_Producto.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/bolsa-de-la-compra.png"
}</script>
    <meta name="theme-color" content="#0149b8">
    <meta property="og:title" content="Actualizar_Producto">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es">
    <header class="u-clearfix u-header u-header" id="sec-1607"><div class="u-clearfix u-sheet u-sheet-1">
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
      </div>
    </header>
    <section class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-section-1" id="carousel_6c60">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-align-center u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1500" data-image-height="1070">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h1 class="u-align-center u-text u-text-default u-text-1">ACTUALIZAR PRODUCTO</h1>
                  <div class="u-form u-form-1">
                    <?php
                      include("./conexion.php");
                      $resultMessageQuery = mysqli_query($conexion, "CALL SeleccionProducto($id)");
                      $row = mysqli_fetch_array($resultMessageQuery)
                    ?>
                    <form action="actualizar_prod.php?id=<?php echo $id?>" class="" source="email" name="form" style="padding: 10px;" method="POST">
                      <div class="u-form-email u-form-group">
                        <label for="email-f2d6" class="u-label">Nombre</label>
                        <input type="text" placeholder="Introduce el Nombre del Producto" id="email-f2d6" name="nombre" class="u-input u-input-rectangle" required="" value="<?php echo $row[0] ?>">
                      </div>
                      <br>
                      <div class="u-form-group u-form-group-3">
                        <label for="text-ddb4" class="u-label">Tipo</label>
                        <input type="text" placeholder="Escribe el tipo que Conforma el Producto" id="text-ddb4" name="tipo" class="u-input u-input-rectangle" value="<?php echo $row[1] ?>">
                      </div>
                      <br>
                      <div class="u-form-group u-form-select u-form-group-4">
                        <label for="select-a129" class="u-label">Marca</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-a129" name="marca" class="u-input u-input-rectangle" required>
                            <option value="marcas" data-calc="marcas">--SELECCIONAR--</option>
                            <?php 
                                include ("./conexion.php");
                                $queryrol = "CALL MostrarMarcas";
                                $ejecutarrol=mysqli_query($conexion, $queryrol);
                                while ($roles =  mysqli_fetch_array($ejecutarrol)){
                                    echo "<option value = '$roles[0]'>$roles[1]</option>";
                                }
                            ?>
                          </select>
                          <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                        </div>
                      </div>
                      <br>
                      <div class="u-form-group u-form-group-5">
                        <label for="text-4e41" class="u-label">Precio</label>
                        <input type="number" placeholder="Agregar Precio " id="text-4e41" name="precio" class="u-input u-input-rectangle" value="<?php echo $row[3] ?>">
                      </div>
                      <br>
                      <div class="u-form-group u-form-select u-form-group-4">
                        <label for="select-a129" class="u-label">Categoria</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-a129" name="categorias" class="u-input u-input-rectangle" required>
                            <option value="marcas" data-calc="marcas">--SELECCIONAR--</option>
                            <?php 
                                include ("./conexion.php");
                                $queryrol = "CALL MostrarCategorias";
                                $ejecutarrol=mysqli_query($conexion, $queryrol);
                                while ($roles =  mysqli_fetch_array($ejecutarrol)){
                                    echo "<option value = '$roles[0]'>$roles[1]</option>";
                                }
                            ?>
                          </select>
                          <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                        </div>
                      </div>
                      <br>
                      <div class="u-align-left u-form-group u-form-submit">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-6 u-btn-1">Enviar</a>
                        <input type="submit" value="submit" class="u-form-control-hidden" name="actualizar">
                      </div>
                    </form>
                  </div>
                  <a href="lista.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-2">CANCELAR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-90 u-footer" id="sec-23e0"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Derechos Reservados por El Gerente y el Desarrollador del Proyecto<br>KARMA S.A DE C.V@
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-design" target="_blank">
        <span>Best Website Design</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.cc" target="_blank">
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