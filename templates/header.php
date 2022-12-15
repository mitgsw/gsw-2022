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

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,500,500i,600,700,800,900" rel="stylesheet">
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
        <img src="images/launch/gsw-heading.png"/>
        <br> <br>
        <img src="images/launch/GSW-logo-02.png" />
        <div class='text-center'>
            <i><h2>Innovate. Inspire. Impact.</h2></i>
        </div>
        <br> <br><br> <br><br> <br>

    </div>

    <div class="brand-logo">
        <h2 style="font-size: 2.5em"> Hosted By</h2>
        <img src="images/logo/GSW-logo-02.png">
    </div>

    <div class="video-container">
        <video type='video/mp4' preload="none" autoplay loop muted="muted" plays-inline="" src="http://gsw-2019.herokuapp.com/images/launch/Splash.mp4"></video>
    </div>

    <div class="brand2">
        <p> Cambrdige, MA</p>
    </div>
</div>

<!--about us section:-->
<div class="why-section">
    <div class="row">
    <br>
    <div class="section-header text-center">
            <h1>23 Years Strong</h1>
    </div>
    <div class="text-center">
        <p>MIT Global Startup Workshop (MIT GSW) 2023 is an annual multi-day conference that brings together entrepreneurs, students, investors, and key stakeholders from across the world to accelerate the entrepreneurial ecosystem of a host region. Through a series of tailored workshops, panels and keynote speakers, MIT GSW aims to share the entrepreneurial practices that have empowered thousands of companies to launch from MIT.

MIT GSW is organized by a diverse group of graduate students and is strongly supported by the MIT entrepreneurial ecosystem including the MIT Legatum Center for Development & Entrepreneurship, the Martin Trust Center for MIT Entrepreneurship, and the MIT Regional Entrepreneurship Accelerator Program (MIT REAP).

Since 1998, our non-profit, student-run organization has held 22 international workshops across 6 continents, and has attracted participants from over 70 nations.</p>
        
    </div>
    <br>
</div>

</br></br>

<div class="section">
    <div class="text-center">
        <a href='https://www.youtube.com/watch?v=FLc7qrZ-Y0c&ab_channel=MITGSW'><h1 style='color: rgba(243, 239, 239, 0.9);'>Learn More</h1></a>
 
    </div>

</div>

<!-- App section here (inactivated)-->

<!--<div class="section">
    <div class="text-center">
        <i><h1 class="trn">Conference App</h1></i>
        <div class='row'>
            <div class='col-md-6'>
                <h4 style='text-align: left'>Get our free app to: </h4>
                <div class='row'>
                    <h4><ul style='color: white; text-align: left'>
                        <li>Connect with speakers and other attendees
                        <li>Access the schedule and speaker profiles</li>
                        <li>Navigate the venue using an interactive map</li>
                        <li>Vote for Startup Showcase winner</li>
                        <li>Receive live announcements</li>
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
-->
<br><br><br> 
            
    <div class="line"></div>
	    <br><br><br><br>
            <div class="section-subheader text-center">
                <p><h1 style='color: rgba(243, 239, 239, 0.9);'>Academic Partners</h1></p>
                <div class="row">
                    <br>
                    <img src="images/logo/mslao-logo.png" class="partner-logo">
                    <img src="images/logo/legatum_2.png" class="partner-logo">
                    <img src="images/logo/martin_trust_2.png" class="partner-logo">
                    <img src="images/logo/reap_2.png" class="partner-logo">
                </div>
            </div>
        <br><br>
     </div>


<br><br>            
<div class="why-section">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-header text-center">
                    <h1 class="trn">WHY ATTEND?</h1>
            </div>
            <ul>
                <li class="trn">Transform your ideas into successful <strong class="trn">startups</strong> by gaining valuable <strong>MIT expertise</strong> through workshops</li>
                <li>Learn about cutting edge, innovative <strong>technologies</strong> from <strong>MIT & world experts</strong> through panel discussions</li>
                <li>Participate in the <strong>GSW Competitions</strong> to receive mentorship from renowned entrepreneurs and gain access to exclusive <strong>VIP networking events</strong> </li>
                <li>Display your company in the <strong>GSW Startup Showcase</strong> featuring protected time with investors</li>
                <li>Gain access to top talent and emerging <strong>tech startups</strong></li>
                <li>Learn and understand the <strong>business landscape</strong> in a global context</li>
                <li>Make fruitful connections with <strong>investors, government officials, corporate representatives,</strong> and more.</li>
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
                    <p class="img-quote">By bringing together cross-sector experts</br>and leaders, GSW has built a global</br>support network, empowering and accelerating</br>entrepreneurship in emerging markets,</br>from Seoul to Madrid, Cape Town to Santiago.</p>
                    <p class="quote-name">L. Rafael Reif</p>
                    <p class="quote-position">President of MIT</p>
                </div>
            </div>
            <img src="images/launch/rafael_reif.jpg" class="img-responsive hidden-xs" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bogota."/>
        </div>
        <img src="images/launch/gsw-rafael-reif-mobile.jpg" class="img-responsive visible-xs-block" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bogota."/>
    </div>
</div>
<br><br><br>
<div class="section">
    <div class="text-center">
      <div class="section-header"><h1 style='color: rgba(243, 239, 239, 0.9);'>Local Roots, Global Reach</h1></div>
      <br>
      <div class="text-center">
      <p><h3 style='color: rgba(243, 239, 239, 0.9);'> Here's a map of the past venues for <strong>MIT GSW</strong>:</p>
      <br>
      <p class="text-center">
        <a href="images/launch/Hi-Res_World Map_2022.png" title="Click to open larger version of the map">
          <img src="images/launch/Hi-Res_World Map_2022.png" class="img-responsive full-width" alt="Map of countries" />
        </a>
      </p>
    </div>
</div>
</div>
<div class="why-section">
    <br>

<!--
    <div class="container">
        <div class="row">
            <!-- <div class="col-xs-6 why-map" id="map">
            </div> --> <!--
            <div class="col-xs-6 why-img">
                <iframe class="why-map" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;coord=4.64216, -74.079369&amp;q=Ak.%2030%20%2352-77%2C%20Bogota%2C%20Colombia+(El%20Cubo%20-%20Business%20and%20Recreation%20Center)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                <a href="https://www.maps.ie/map-my-route/">Plot a route map</a>
                </iframe>
            </div>            
            <div class="col-xs-6">
                <img class="why-img" src="images/launch/mit-top-view.png" />
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</div> -->

<div class="section">
    <div class="text-center">
        <a href='https://gsw.mit.edu/gsw-about/history.php'><h1 style='color: rgba(243, 239, 239, 0.9);'>Our History</h1></a>
 
    </div>

</div>
</body>
