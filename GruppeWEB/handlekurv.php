<aside>
<ul id="navigasjonsbarTrening">
<li><a href="webProsjektHoved.php?page=10">Kosttilskudd</a></li>
<li><a href="webProsjektHoved.php?page=11">Treningsklær</a></li>
<li><a href="#">Litteratur</a></li>

</ul>
</aside>
<section id="butikk"><h1 id="butikkh1">Handlekurv</h1>

<hr>

Din bestilling:<br>

<?php

$pris=$_REQUEST["pris"];
$produkt=$_REQUEST["produkt"];
echo "$pris - $produkt";
?>
</section>