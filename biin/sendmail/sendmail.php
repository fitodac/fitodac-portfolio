<?php
$ip = $_SERVER["REMOTE_ADDR"];


( $_POST["nombre"] == "" ) ? $nombre = "----" : $nombre = $_POST["nombre"];
( $_POST["tel"] == "" ) ? $tel = "----" : $tel = $_POST["tel"];
( $_POST["empresa"] == "" ) ? $empresa = "----" : $empresa = $_POST["empresa"];
( $_POST["puesto"] == "" ) ? $puesto = "----" : $puesto = $_POST["puesto"];
( $_POST["email"] == "" ) ? $email = "----" : $email = $_POST["email"];
( $_POST["mensaje"] == "" ) ? $mensaje = "----" : $mensaje = $_POST["mensaje"];


$bodyemail = "IP: " . $ip . " <br>";
$bodyemail .= "Nombre: " . $nombre . " <br>";
$bodyemail .= "Número de teléfono: " . $tel . " <br>";
$bodyemail .= "Empresa: " . $empresa . " <br>";
$bodyemail .= "Puesto: " . $puesto . " <br>";
$bodyemail .= "Email: " . $email . " <br>";
$bodyemail .= "Mensaje: " . $mensaje . " <br>";


$recipe = "fitodac@gmail.com";
// $recipe = "info@acompania.com.uy";

$subject = "Contacto desde <biinsolutions.com.uy>";


// $headers = "" .
//            "Reply-To:" . $from . "\r\n" .
//            "X-Mailer: PHP/" . phpversion();
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; 
$headers .= "From: fitodac@gmail.com";


if( $_POST["sendform"] == 1 ){
	mail($recipe, $subject, utf8_decode($bodyemail), $headers);
	?>

<!DOCTYPE html><!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" class="no-js ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" class="no-js ie9" lang="en"><link rel="stylesheet" type="text/css" href=pluginsPath+"js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
<html lang="ES_es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="text/html, charset=UTF-8">
    <meta http-equiv="x-ua-Compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
    <title>Biin Solutions</title>
    <link rel="icon" href="../assets/icons/cropped-favicon-150x150.png?v=1" sizes="32x32">
    <link rel="icon" href="../assets/icons/cropped-favicon-300x300.png?v=1" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="../assets/icons/cropped-favicon-300x300.png?v=1">
    <meta name="msapplication-TileImage" content="../assets/icons/cropped-favicon-300x300.png?v=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Work+Sans:100,200,300,400,500,600,700,800,900&amp;amp;subset=latin-ext" rel="stylesheet">
    <link id="font-awesome-css" rel="stylesheet" type="text/css" href="../assets/libs/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min-ver=5.4.2.css" media="all">
    <link id="js_composer_front-css" rel="stylesheet" type="text/css" href="../assets/libs/js_composer/assets/css/js_composer.min-ver=5.4.2.css" media="all">
    <link id="slick-css" rel="stylesheet" type="text/css" href="../assets/libs/slick/slick-ver=4.8.5.css" media="all">
    <link id="slick-theme-css" rel="stylesheet" type="text/css" href="../assets/libs/slick/slick-theme-ver=4.8.5.css" media="all">
    <link id="lightgallery-css" rel="stylesheet" type="text/css" href="../assets/libs/lightgallery/css/lightgallery.min-ver=4.8.5.css" media="all">
    <link id="bbfb-css" rel="stylesheet" href="../assets/libs/bb_footer_designer/assets/css/bbfb-ver=4.8.5.css" media="all">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/biin.min.css">
    <link id="page-styles" rel="stylesheet" type="text/css" href="../assets/css/contacto.min.css" media="all">
  </head>
  <body class="page-template-default page desktop page--fullwidth page-private--default no-padding has-header-01 tm-wilson wpb-js-composer js-comp-ver-5.4.2 vc_responsive ">
    <div class="site" id="page">
      <header class="header header-desktop header-01 header-overlay light header-sticky">
        <div class="header-container">
          <div class="inside">
            <div class="header-left"><a id="branding_logo" href="./" rel="home"><img class="logo-image branding_logo_image" src="../assets/images/brand.svg" data-normal="../assets/images/brand-alt.svg" data-sticky="../assets/images/brand.svg" alt="Biin Solutions" title="Biin Solutions"></a></div>
            <div class="header-center"></div>
            <div class="header-right">
              <nav class="menu menu--primary" id="menu">
                <ul class="menu__container" id="menu-main">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="servicios.html">Servicios</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="clientes.html">Clientes</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="suscripciones.html">Suscripciones</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="proyecto-arca.html">Nuestros logros</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contacto.html">Contacto</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <header class="header header-mobile">
        <div class="top-search-mobile"></div>
        <div class="container header-mobile-container">
          <div class="row">
            <div class="col-6 header-left"><a id="branding_logo_mobile" href="./" rel="home"><img class="mobile-logo-image" src="assets/images/brand.svg" alt="Biin Solutions" title="Biin Solutions"></a></div>
            <div class="col-6 header-right text-right">
              <div class="open-menu-mobile"><i class="fa fa-bars"></i></div>
            </div>
          </div>
        </div>
      </header>
      <nav id="mobile">
        <ul class="menu__container" id="menu-main-2">
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="servicios.html">Servicios</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="clientes.html">Clientes</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="suscripciones.html">Suscripciones</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="proyecto-arca.html">Nuestros logros</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contacto.html">Contacto</a></li>
        </ul>
      </nav>
      <div id="close-menu"></div>
      <div class="content" id="content">
        <div class="page-title page-title-style-01">
          <div class="container">
            <h1 class="title">Contacto</h1>
          </div>
        </div>
        <div class="container">
          <div class="content-area row" id="primary">
            <div class="main col-md-12" id="main" role="main">
              <div class="article page type-page status-publish hentry">
                <div class="entry-content">
                  <div class="vc_empty_space" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                  <div class="text-center">
                    <div class="pri-color" style="font-size: 2rem; margin-bottom: 10px;">Gracias por contactar con nosotros</div>
                    <p style="font-size: 1.1rem;">Responderemos tu email a la brevedad posible.</p>
                  </div>
                  <div class="vc_empty_space" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bb-footer-container" id="bb-footer-container-default-style-dark">
      <div class="bb-footer-inside" id="bb-footer-inside-default-style-dark">
        <div class="vc_row vc_row-outer vc_row-fluid tm-vc-row vc_custom_1495617189270 vc_row-has-fill tm_vc_row--5a7a22e131123" data-vc-full-width="true" data-vc-full-width-init="false">
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <figure class="wpb_wrapper vc_figure">
                <div class="vc_single_image-wrapper vc_box_border_grey"><img class="vc_single_image-img attachment-full" width="130" src="assets/images/brand-alt.svg" alt=""></div>
              </figure>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-9">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                  <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="insight-menu insight-menu-light">
                          <h5 class="insight-menu-title insight-menu-light-title">Biin Solutions</h5>
                          <ul class="menu" id="menu-about-us">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="servicios.html">Servicios</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="suscripciones.html">Suscripciones</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="biin-finance.html">Biin Finance</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="biin-sales.html">Biin Sales & Op</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="clientes.html">Clientes</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="proyecto-arca.html">Casos de éxito</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="insight-menu insight-menu-light">
                          <h5 class="insight-menu-title insight-menu-light-title">Contacto</h5>
                          <address>Monterrey<br>
                            <a href="tel:+528186477770">+52 (81) 8647 7770</a><br>
                            Puebla<br>
                            <a href="tel:+522227985022">+52 (22) 2798 5022</a><br>
                            
                          </address><a href="mailto:contact@biinsolutions.com">contact@biinsolutions.com</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="insight-menu insight-menu-light">
                          <h5 class="insight-menu-title insight-menu-light-title">Conócenos más en:</h5>
                          <div class="insight-socials insight-socials-align-left insight-socials-size-small insight-socials-type-icon light"><a href="https://www.linkedin.com/company/biin-solutions/?originalSubdomain=mx" title="LinkedIn" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a><a href="https://www.facebook.com/Biin-Solutions-1416438155252420/" title="Facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/BiinSolutions" title="Twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></div>
                          <div class="copy">COPYRIGHT © 2018 BIIN SOLUTIONS. ALL RIGHTS RESERVED.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
      </div>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122953101-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-122953101-1');
    </script>
    <link id="responsive-css" rel="stylesheet" type="text/css" href="../assets/css/responsive.min.css" media="all">
    <script src="../assets/libs/jquery/jquery-ver=1.12.4.js"></script>
    <script src="../assets/libs/slick/slick.min.js"></script>
    <script src="../assets/libs/sticky-kit/jquery.sticky-kit.min.js"></script>
    <script src="../assets/libs/lightgallery/js/lightgallery-all.min.js"></script>
    <script src="../assets/libs/headroom/jQuery.headroom.js"></script>
    <script src="../assets/libs/headroom/headroom.js"></script>
    <script src="../assets/libs/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min-ver=5.4.2.js"></script>
    <script src="../assets/libs/js_composer/assets/js/dist/js_composer_front.min.js"></script>
    <script src="../assets/js/biin-master.js"></script>
  </body>
</html>

<?php
}

