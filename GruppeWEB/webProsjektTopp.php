<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<meta charset="UTF-8">
<title>fitness</title>
<link rel="stylesheet" type="text/css" href="webProsjektStilark.css">
</head>
<body>
<!--Facebook like button-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--topp-->
<header>
<div id="slide"><img src="styrke1.png" id="slide" alt="bilder"></div>

</header>

<div class="fb-like" data-href="https://www.facebook.com/pages/Treningsprat/177743495763636"
data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
<!--Navigasjon-->
<nav>
<ul id="navigasjonsbar">
<li><a href="index.php?page=26">Hjem</a></li>
<li><a href="index.php?page=1">Trening</a></li>
<li><a href="index.php?page=2">Kosthold</a></li>
<li><a href="index.php?page=3">Butikk</a></li>
<li><a href="#">Forum</a></li>
<li><a href="index.php?page=4">Kontakt</a></li>
</ul>
</nav>


<!--Slider script-->
<?php
include ("slider.js");
?>

