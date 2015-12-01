<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" /> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

<!-- Page Title -->
<title>Cristovision | El canal de la Iglesia Católica</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />


<!--Page Scripts Load -->
<script src="scripts/jquery.min.js"		type="text/javascript"></script>	
<script src="scripts/hammer.js"			type="text/javascript"></script>	
<script src="scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="scripts/subscribe.js"		type="text/javascript"></script>
<script src="scripts/contact.js"		type="text/javascript"></script>
<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="scripts/bxslider.js"		type="text/javascript"></script>
<script src="scripts/colorbox.js"		type="text/javascript"></script>
<script src="scripts/retina.js"			type="text/javascript"></script>
<script src="scripts/custom.js"			type="text/javascript"></script>
<script src="scripts/framework.js"		type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" src="cordova.js"></script>

<script type="text/javascript" charset="utf-8">
// Wait for device API libraries to load
    //
    document.addEventListener("deviceready", onDeviceReady, false);
    // device APIs are available
    //

    function openBrowser3(){
        window.open('https://www.facebook.com/CanalCristovisionTV', '_system', 'location=yes');
    }
    function openBrowser4(){
        window.open('https://twitter.com/CRISTOVISION', '_system', 'location=yes');
    }

    </script>

</head>
<body style="background-image:url('images/background/background.png');">

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Cargando el contenido...
            <em>La carga del contenido depende de su velocidad de conexion!</em>
        </p>
    </div>
</div>

<div class="header">
    <a class="logo-home" href="index.html"><img src="images/logob.png" alt="img" width="40"></a>
    <div class="header-text">
        <strong>CRISTOVISIÓN</strong>
        <em>El canal de la Iglesia Católica</em>
    </div>
</div>
<div class="header-clear"></div>


<?php include ("http://www.cristovision.tv/aplicacion/homilias.php"); ?>
    
    <div class="decoration"></div>
</div>

<div class="footer">
    <div class="small-navigation-icons">

      <button onclick='openBrowser3("https://www.facebook.com/CanalCristovisionTV");' class="small-nav-icon facebook-nav"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/facebook.png"></button>
      <!--<a href="https://www.facebook.com/CanalCristovisionTV" class="small-nav-icon facebook-nav"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/facebook.png"></a>-->
        <a href="#" class="small-nav-icon go-up up-nav"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/bendedup.png"></a>
        <button onclick='openBrowser4("https://twitter.com/CRISTOVISION");' class="small-nav-icon twitter-nav"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/twitter.png"></button>
        <!--<a href="https://twitter.com/CRISTOVISION" class="small-nav-icon twitter-nav"><img style="height:24px; width:24px; left:19%; top:19%;"src="images/twitter.png"></a>-->

        <div class="clear"></div>
    </div>
    <p class="copyright">CRISTOVISION 2014. TODOS LOS DERECHOS RESERVADOS</p>
</div>


</body>
</html>






























