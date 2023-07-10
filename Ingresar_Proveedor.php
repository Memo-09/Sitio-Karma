<?php
    session_start();
    if(isset($_SESSION['usuario'])){
      if($_SESSION['roles'] == 'ADMINISTRADOR'){
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="NUEVO PRODUCTO">
    <meta name="description" content="">
    <title>Ingresar_Proveedor</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Ingresar_Proveedor.css" media="screen">
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
    <meta property="og:title" content="Ingresar_Proveedor">
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item">
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
    <section class="u-clearfix u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-section-1" id="carousel_6c60">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-align-center u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="800" data-image-height="534">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xs u-container-layout-2">
                  <h1 class="u-align-center u-text u-text-default u-text-1">NUEVO PROVEEDOR</h1>
                  <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                    <form action="insertar_Proveedor.php" class="" source="email" name="form" style="padding: 10px;" method="POST" enctype="multipart/form-data">
                      <div class="u-form-group u-form-name">
                        <label for="name-f2d6" class="u-label">Nombre</label>
                        <input type="text" placeholder="Ingresar Nombre del Porveedor" id="name-f2d6" name="nombre" class="u-input u-input-rectangle" required="">
                      </div>
                      <br>
                      <div class="u-form-email u-form-group">
                        <label for="email-f2d6" class="u-label">Direccion</label>
                        <input type="text" placeholder="Ingresar Direccion" id="email-f2d6" name="direccion" class="u-input u-input-rectangle" required="">
                      </div>
                      <br>
                      <div class="u-form-group u-form-group-3">
                        <label for="text-ddb4" class="u-label">Telefono</label>
                        <input type="text" placeholder="Ingresar Celular de Proveedor" id="text-ddb4" name="telefono" class="u-input u-input-rectangle">
                      </div>
                      <br>
                      <div class="u-form-group u-form-group-5">
                        <label for="text-4e41" class="u-label">Foto</label>
                        <input type="file" name="archivo" id="archivo" class="u-input u-input-rectangle" onchange="validarArchivo()">
                      </div>
                      <br>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-7 u-btn-1">Enviar</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <br>
                    </form>

                    <script>
                      function validarArchivo() {
                        var archivoInput = document.getElementById('archivo');
                        var archivo = archivoInput.files[0];

                        if (archivo) {
                          var nombreArchivo = archivo.name;
                          var extension = nombreArchivo.split('.').pop().toLowerCase();

                          if (extension === 'jpg' || extension === 'png') {
                            // El archivo es una imagen válida, puedes realizar alguna acción adicional si lo deseas
                            return true;
                          } else {
                            archivoInput.value = ''; // Limpiar el valor del input
                            alert('El archivo seleccionado no es una imagen JPG o PNG válido.');
                            return false;
                          }
                        }
                      }
                    </script>


                  </div>
                  <a href="Proveedores.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-2">CANCELAR</a>
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
    }else{
      header("Location:Iniciar-Secion.php");
    }
?>