<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<meta charset="UTF-8">
<title>fitness</title>
<link rel="stylesheet" type="text/css" href="webProsjektStilark.css">
</head>
<body>


<!--topp-->
<header>


</header>
 
 <script>
 $(document).ready(function linker(){
 
 $(".hide4").hide(200);
   $("#Kost4").click(function(){
     $(".hide4").show(200);
 });
});
</script>

<script>
 $(document).ready(function linker(){

$(".hide2").hide(200);
 $("#Kost2").click(function(){
  $(".hide2").show(200);
 });
});
</script>

<script>
 $(document).ready(function linker(){

$(".hide3").hide(200);
 $("#Kost3").click(function(){
  $(".hide3").show(200);
 });
});
</script>

<aside>
<ul id="navigasjonsbarTrening">
<li><a href="webProsjektHoved.php?page=2">Generelt om kosthold</a></li>
<li id="Kost4"><a href="#">Kostholds tips</a></li>
<li class="hide4"><a href="webProsjektHoved.php?page=7">Tips for å gå ned i vekt </a></li>
<li class="hide4"><a href="webProsjektHoved.php?page=8">Tips for å gå opp i vekt </a></li>
<li class="hide4"><a href="webProsjektHoved.php?page=9">Dietter du IKKE skal velge </a></li>
<li id="Kost2"><a href="#">Kostholds tilskudd</a></li>
<li class="hide2"><a href="webProsjektHoved.php?page=13"> BCAA</a></li>
<li class="hide2"><a href="webProsjektHoved.php?page=14">Kreatin</a></li>
<li class="hide2"><a href="webProsjektHoved.php?page=15">Protein</a></li>
<li id="Kost3"><a href="#">Sunne oppskrifter</a></li>
<li class="hide3"><a href="webProsjektHoved.php?page=16">Sunne pannekaker</a></li>
<li class="hide3"><a href="webProsjektHoved.php?page=17">Protein barer</a></li>

</ul>
</aside>
<!--Slider script-->
<?php
include ("slider.js");
?>