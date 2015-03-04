<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">

  <!-- www.phpied.com/conditional-comments-block-downloads/ -->
  <!--[if IE]><![endif]-->

  <title>Shikiryu.com - Contact</title>
  <meta name="description" content="Contact page for Clément Desmidt - Shikiryu" />
  <meta name="author" content="Clément Desmidt - Shikiryu" />

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

  <!-- For the less-enabled mobile browsers like Opera Mini -->
  <link rel="stylesheet" media="handheld" href="http://bookmarklet.shikiryu.com/css/handheld.css?v=1" />

  <!-- CSS : blueprint Framework -->
  <!-- <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print"> -->
  <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

  <!-- Import buttons plugin // add nice button instead of input button -->
  <link rel="stylesheet" href="http://bookmarklet.shikiryu.com/css/plugins/buttons/screen.css" />
  
  <link rel="stylesheet" href="tipsy.css" />
  
  <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css' />

 <!-- CSS : implied media="all" -->
 <!-- <link rel="stylesheet" href="http://bookmarklet.shikiryu.com/css/style.css?v=1"> -->
  <link rel="stylesheet" href="override.css?v=1" />
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="http://bookmarklet.shikiryu.com/js/modernizr-1.5.min.js"></script>

</head>
 
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
 <div id="msgOK"><span class="english">Your message has been sent!</span><br/><span class="french">Votre message a été envoyé !</span><br/><br/><span class="english"><a href="javascript:location.reload();" title="Post a new message">Post a new message</a></span><br/><span class="french"><a href="javascript:location.reload();" title="Envoyer un nouveau message">Envoyer un nouveau mail</a></span><?if($_SERVER['HTTP_REFERER'] != ''){?><br/><span class="english"><a href="javascript:history.go(-1);" title="Go back">Return to the previous page</a></span><br/><span class="french"><a href="javascript:history.go(-1);" title="Revenir en arrière">Retour à la page précédente</a></span><?}?></div>
  <div id="container" class="container drop-shadow round">
    <header>
		<h1><img src="ShikiTimbre100.png" alt="Timbre Clément" width="75" height="75"/>Contact<br/>Clément Desmidt - Shikiryu</h1>
    </header>
   
    <div id="main">
		<div id="returnMsg"></div>
		<form action="/" method="POST">
		<section id="message">
			<textarea name="msg" placeholder="Your message / Votre message"></textarea>
		</section>
		<section id="infos">
			<input type="text" name="name" placeholder="Your name / Votre nom" /> 
			<input type="email" name="email" placeholder="Your email / Votre email" />
			<input type="hidden" name="from" value="<?=$_SERVER['HTTP_REFERER']?>" />
		</section>
		<input type="submit" value="Send / Envoyer" id="send" />
		</form>
		<br/>
    </div>
    
    <footer>
		<a href="http://shikiryu.com/" class="myLink" title="Site de Clément Desmidt">Clément Desmidt</a>
    </footer>
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN jQuery. fall back to local if necessary -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="http://bookmarklet.shikiryu.com/js/jquery-1.4.2.min.js"><\/script>')</script>

	<script src="jquery.tipsy.js"></script>
	<script src="plugins.js?v=1"></script>
  
 <!--  <script src="http://bookmarklet.shikiryu.com/js/script.js?v=1"></script> -->

  <!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js?v=1"></script>
  <![endif]-->
  
</body>
</html>