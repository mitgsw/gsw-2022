<?php
/**
 *  Given a file, i.e. /css/base.css, replaces it with a string containing the
 *  file's mtime, i.e. /css/base.1221534296.css.
 *  
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 */
function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

$pageTitle = 'MIT Global Startup Workshop ATHENS, GREECE Mayo 27 y 28, 2019';
?>

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130174054-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130174054-2');
    gtag('send', 'pageview');
    </script>

    <meta charset="UTF-8">
    <title><?= $pageTitle ?></title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Gotham:200,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=1.1">
    <link href="https://use.fontawesome.com/0b972b6cf8.css" media="all" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.translate.js"></script>
    <script src="assets/js/translate_page.js"></script>
</head>


<body>
<div data-parallax="scroll" class="parallax-window main-page-header" style="display:inline-block;">

    <div class="brand">
        <img src="images/launch/athens-bg.jpeg"/>
        <br> <br>
        <img src="images/launch/bogota_plus_dates_sp.png" />
        <div class='text-center'>
            <i><h2>GSW 2023 Coming Soon!</h2></i>
        </div>
        <br> <br><br> <br><br> <br>

    </div>

    <div class="brand-logo">
        <h2 style="font-size: 2.5em"> Hosted By</h2>
        <img src="images/logo/logo-2023.png">
    </div>

    <div class="video-container">
        <video type='video/mp4' preload="none" autoplay loop muted="muted" plays-inline="" src="https://gsw-2019.herokuapp.com/images/launch/bogota-drone-footage.mp4"></video>
    </div>

    <div class="brand2">
        <p> footage from worldmoments.org</p>
    </div>
</div>

<div class="section">
    <div class="text-center">
        <a href='https://www.youtube.com/watch?v=Xgdt24FuAkk'><h1 style='color: rgba(243, 239, 239, 0.9);'>LIVE STREAM SALON A</h1></a>
        <a href='https://www.youtube.com/watch?v=ohr1D6PCJeU'><h1 style='color: rgba(243, 239, 239, 0.9);'>LIVE STREAM SALON B</h1></a>
    </div>

</div>

<div class="section">
    <div class="text-center">
        <i><h1 class="trn">Conference App</h1></i>
        <div class='row'>
            <div class='col-md-6'>
                <h4 style='text-align: left'>Obtenga nuestra aplicación gratuita para: </h4>
                <div class='row'>
                    <h4><ul style='color: white; text-align: left'>
                        <li>Conectar con ponentes y otros asistentes</li>
                        <li>Accede al calendario y los perfiles de ponentes</li>
                        <li>Navega por el lugar utilizando un mapa interactivo</li>
                        <li>Vota por el ganador de Startup Showcase</li>
                        <li>Recibe anuncios en vivo</li>
                    </ul></h4>
                </div>
            </div>
            <div class='col-md-6'>
            <br><br>
                <div class='row'>
                    <a href='https://itunes.apple.com/us/app/mit-gsw-2019/id1458106305?ls=1&mt=8'><img class='app-logo' src='images/logo/apple.png'></a>
                </div>
                <div class='row'>
                    <a href='https://play.google.com/store/apps/details?id=edu.mit.eeeh6p'><img class='app-logo' src='images/logo/google.png'></a>
                </div>
            </div>
        
        </div>  
    </div>
</div>

<div id="registration-section">
    <div class="row text-center">
        <div class="col-xs-12">
            <br /><br><br><br>
            
            <div class="line"></div>
	    <br><br><br><br>
            <div class="section-subheader text-center">
                <p>Colaboradores</p>
                <div class="container">
                    <div class="col-lg-12 text-center partner-border vertical-align" style="padding: 80px 0px 80px 0px ">
                        <div class="col-sm-6 text-center">
                            <h1 style='font-size: 3.5vw'> ANFITRIÓN</h1>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://www.ccb.org.co/en">
                                <img src="images/logo/bogota-team-logo.png" class="partner-logo partner-logo-mobile" style="height: 90px">
                            </a>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="col-lg-12 text-center partner-border vertical-align">
                        <div class="col-sm-6 text-center">
                            <h1 style='font-size: 3.5vw'> ALIADO PREMIUM</h1>
                        </div>
                        <div class="col-sm-6">
                        <a href="https://www.cetcolsubsidio.edu.co/"><img src="images/logo/colub-1.png" style="height: 110px;" class='partner-logo-mobile'> </a>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="col-lg-12 text-center partner-border" style="padding: 5px 0px 60px 0px ">
                        <div class="text-center">
                            <h1 style='font-size: 2.5vw'> Patrocinadores</h1>
                            <br>
                        </div>
                        <div class="row">
                            <div style='display: block, margin: auto, text-align: center'>
                                <img src="images/logo/mintic.png" class="partner-logo partner-logo-mobile">
                                <img src="images/logo/hilton.png" class="partner-logo partner-logo-mobile">
                                <img src="images/logo/softbank.png" class="partner-logo partner-logo-mobile" style="max-height: 70px">
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div style='display: block, margin: auto, text-align: center'>
                                <img src="images/logo/claro.png" class="partner-logo">
                                <img src="images/logo/sasin.png" class="partner-logo">
                            </div>
                        </div>
                        <br><br>
                        <div class="row ">
                            <div style='display: block, margin: auto, text-align: center'>
                                <img src="images/logo/pulsa2.png" class="partner-logo">
                                <img src="images/logo/pulsa.png" class="partner-logo">
                            </div>
                        </div>
                        <br>
                    </div>
                    <br><br><br>
                    <div class="col-lg-12 text-center partner-border" style="padding: 5px 0px 80px 0px ">
                        <div class="text-center">
                            <h2 class="academic-mobile" style="margin-bottom: 20px"> ALIADOS ACADÉMICOS</h2>
                        </div>
                        
                        <div class='row'>
                            <div style='display: block, margin: auto, text-align: center'>
                                <img src="images/logo/cesa.png" class="partner-logo">
                                <img src="images/logo/connect-logo.png" class="partner-logo">
                                <img src="images/logo/nuevo-logo-2.png" class="partner-logo">
                            </div>
                        </div>
                        <br>
                        <img src="images/logo/mslao-logo.png" class="partner-logo">
                        <img src="images/logo/legatum_2.png" class="partner-logo">
                        <img src="images/logo/martin_trust_2.png" class="partner-logo">
                        <img src="images/logo/reap_2.png" class="partner-logo">
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>

<br><br>            
<div class="why-section">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-header text-center">
                    <h1>¿POR QUÉ ASISTIR?</h1>
            </div>
            <ul>
                <li>Aprópiese de la experiencia de MIT a través de talleres que le permitirán transformar sus ideas de negocio en <strong>empresas exitosas</strong></li>
                <li>Aprenda <strong> sobre tecnologías  innovadoras  y  de  vanguardia </strong> de  MIT  y  expertos  mundiales  a través de paneles de discusión</li>
                <li>Participe en <strong>los concursos del GSW </strong> para recibir mentorías por parte de emprendedores exitosos y obtenga acceso a eventos exclusivos de networking </li>
                <li>Presente su emprendimiento ante inversionistas en <strong> el GSW Showcase</strong></li>
                <li>Conozca a <strong>los mejores emprendedores </strong>de base tecnológica del país</li>
                <li>Familiarícese con <strong>el ecosistema de emprendimiento </strong> del país</li>
                <li>Conéctese con <strong>inversionistas, entidades gubernamentales y gerentes de grandes empresas </strong></li>
            </ul><br><br><br>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="hidden-xs">
            <div class="col-xs-1"></div>
            <div class="col-xs-5">
                <div class="quote">
                    <p class="img-quote">Al   reunir   expertos   y   líderes   de diferentes sectores, </br> GSW ha construido una red global de apoyo </br> y aceleración del   emprendimiento   en  </br> mercados emergentes.  Desde  Seúl  a  Madrid, </br> Ciudad del Cabo a Santiago de Chile.</p>
                    <p class="quote-name">L. Rafael Reif</p>
                    <p class="quote-position">Presidente de MIT</p>
                </div>
            </div>
            <img src="images/launch/rafael_reif.jpg" class="img-responsive hidden-xs" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bogota."/>
        </div>
        <img src="images/launch/gsw-rafael-reif-mobile.jpg" class="img-responsive visible-xs-block" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bogota."/>
    </div>
</div>
<br><br><br><br>
<div class="why-section">
    <div class="row">
    <br>
    <div class="section-header text-center">
            <h1>SEDE DEL EVENTO</h1>
    </div>
    <div class="text-center">
        <p>El Cubo (Colsubsidio) – Centro Empresarial y Recreativo</p>
        <p>Ak. 30 # 52-77, Bogotá D.C., Colombia</p>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <!-- <div class="col-xs-6 why-map" id="map">
            </div> -->
            <div class="col-xs-6 why-img">
                <iframe class="why-map" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;coord=4.64216, -74.079369&amp;q=Ak.%2030%20%2352-77%2C%20Bogota%2C%20Colombia+(El%20Cubo%20-%20Business%20and%20Recreation%20Center)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                <a href="https://www.maps.ie/map-my-route/">Plot a route map</a>
                </iframe>
            </div>            
            <div class="col-xs-6">
                <img class="why-img" src="images/launch/colsubsidio.jpg" />
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</div>
</body>
