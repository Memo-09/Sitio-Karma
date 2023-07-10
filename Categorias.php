<?php
    session_start();
    if(isset($_SESSION['usuario'])){
      if($_SESSION['roles'] == 'ADMINISTRADOR'){
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="PRODUCTOS">
    <meta name="description" content="">
    <title>Inicio2</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Categorias.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/bolsa-de-la-compra.png"
}</script>
    <meta name="theme-color" content="#0149b8">
    <meta property="og:title" content="Inicio2">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-1607"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="16" data-image-height="16" title="Inicio2">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Inicio2.html">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Proveedores.html">Proveedores</a>
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
    <section class="u-align-center u-clearfix u-section-1" id="carousel_fe8d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-palette-2-light-3 u-repeater-item u-video-cover u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" src="images/2_P.jpg" data-image-width="1200" data-image-height="600">
                <div class="u-align-center u-container-style u-expanded-width u-group u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-1">
                      <a href="lista.php?categoria=ZAPATOS" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">ZAPATOS</a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-palette-2-light-3 u-repeater-item u-video-cover u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-2" src="images/3605532612768_LA_VIE_EST_BELLE_L_EAU_DE_PARFUM_50ml.webp" data-image-width="250" data-image-height="250">
                <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-group-2">
                  <div class="u-container-layout u-container-layout-4">
                    <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-2">
                      <a href="lista.php?categoria=PERFUMES" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">PERFUMES</a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-palette-2-light-3 u-repeater-item u-video-cover u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-3" src="images/1_P.jpg" data-image-width="1200" data-image-height="600">
                <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-group-3">
                  <div class="u-container-layout u-container-layout-6">
                    <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-3">
                      <a href="lista.php?categoria=SUDADERAS/PLAYERAS" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3">SUDADERAS<br>PLAYERAS
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-palette-2-light-3 u-repeater-item u-video-cover u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-4" src="images/t.jpg" data-image-width="700" data-image-height="829">
                <div class="u-align-center u-container-style u-expanded-width u-group u-video-cover u-group-4">
                  <div class="u-container-layout u-container-layout-8">
                    <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-default u-text-4">
                      <a href="lista.php?categoria=VESTIDOS" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4">VESTIDOS</a>
                    </h4>
                  </div>
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
      <a class="u-link" href="https://nicepage.com/html5-template" target="_blank">
        <span>HTML5 Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/wysiwyg-html-editor" target="_blank">
        <span>HTML editor</span>
      </a>. 
    </section>
  
</body></html>
<?php
      }
    }else{
      header("Location:Iniciar-Secion.php");
    }
?>