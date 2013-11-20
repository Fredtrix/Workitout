<script>
$(document).ready(function linker(){
  $(".hide").hide(1);
  $("#trening").click(function(){
    $(".hide").show(200);
  });
});
</script>

<aside>
<ul id="navigasjonsbarTrening">
<li><a href="index.php?page=1">Om trening</a></li>
<li id="trening"><a href="#">Treningsprogram</a></li>
<li class="hide"><a href="index.php?page=12">Styrke</a></li>
<li class="hide"><a href="index.php?page=13">Kondisjon</a></li>
<li class="hide"><a href="index.php?page=14">For utøvere</a></li>
<li><a href="index.php?page=5">Finn ditt treningssenter</a></li>
<li><a href="index.php?page=15">Øvelser</a></li>
</ul>
</aside>
<article>
<h2>Finn ditt nærmeste treningssenter</h2>
<div id="treningssenter"><iframe id="iframeSenter" width="425" height="350"
src="https://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=treningssenter&amp;aq=&amp;sll=61.143235,9.09668&amp;sspn=6.008413,21.643066&amp;t=h&amp;ie=UTF8&amp;hq=treningssenter&amp;hnear=&amp;ll=61.143235,9.09668&amp;spn=6.008413,21.643066&amp;output=embed"></iframe>
<br><small><a href="https://maps.google.no/maps?f=q&amp;source=embed&amp;hl=no&amp;geocode=&amp;q=treningssenter&amp;aq=&amp;sll=61.143235,9.09668&amp;sspn=6.008413,21.643066&amp;t=h&amp;ie=UTF8&amp;hq=treningssenter&amp;hnear=&amp;ll=61.143235,9.09668&amp;spn=6.008413,21.643066">
Vis større kart</a></small></div>
 </article>