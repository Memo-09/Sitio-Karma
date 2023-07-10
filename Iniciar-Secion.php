<?php
    session_start();
    if(isset($_SESSION['usuario'])){
      if($_SESSION['roles'] == 'ADMINISTRADOR'){
        header("Location:./lista.php");
      }elseif($_SESSION['roles'] == 'CLIENTE'){
        header("Location:./cliente/Página-1.php");
      }
    }else{
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Iniciar Secion">
    <meta name="description" content="">
    <title>Iniciar Secion</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Iniciar-Secion.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/bolsa-de-la-compra.png"
}</script>
    <meta name="theme-color" content="#0149b8">
    <meta property="og:title" content="Iniciar Secion">
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item">
</li><li class="u-nav-item"><a class="u-border-active-palette-4-base u-border-hover-palette-4-base u-button-style u-nav-link u-text-active-palette-3-base u-text-grey-90 u-text-hover-palette-3-base" href="Iniciar-Secion.php" style="padding: 10px;">Iniciar Secion</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item">
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Iniciar-Secion.html">Iniciar Secion</a>

</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-container-align-center u-section-1" id="carousel_3d58">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-left u-custom-font u-font-montserrat u-text u-text-1">Iniciar Secion</h2>
                  <div class="u-align-left u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                    <form action="Comando_Inic.php" source="email" name="form" method="POST">
                      <div class="u-form-group u-form-name u-label-top">
                        <label for="name-5a14" class="u-label" wfd-invisible="true">Correo Electronico</label>
                        <input type="text" placeholder="Ingresa tu Correo" id="name-5a14" name="correo1" class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-1">
                      </div>
                      <br>
                      <div class="u-form-email u-form-group u-label-top">
                        <label for="email-5a14" class="u-label" wfd-invisible="true">Contraseña </label>
                        <input type="password" placeholder="Ingresa tu Contraseña" id="email-5a14" name="contrasenia1" class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-2">
                      </div>
                      <br>
                      <div class="u-align-right u-form-group u-form-submit u-label-top">
                        <a href="#" class="u-active-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-black u-palette-3-base u-radius-7 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">ACCEDER</a>
                        <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                      </div>
                      <br>
                      <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                      <input type="hidden" name="formServices" value="be623319878f18294c2c6066a4ae5bb2">
                    </form>
                  </div>
                  <p class="u-align-center u-text u-text-2">Olvidaste tu <span style="font-weight: 700;" class="u-text-custom-color-2">
                      <a href="Restablecer_Contraseña.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-2 u-btn-2">Contraseña</a>
                    </span>
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <img class="u-expanded-width u-image u-image-1" src="images/24770152_101.png" data-image-width="1000" data-image-height="1529">
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
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>
<?php
    }
?>