<aside>
<ul id="navigasjonsbarTrening">
<li><a href="index.php?page=10">Kosttilskudd</a></li>
<li><a href="index.php?page=11">Treningsklær</a></li>
</ul>
</aside>
<section id="betalingsbutikk"><h1 id="butikkh1">Handlekurv</h1>

<hr>
<form action="index.php" method="post">
<h4>Kvittering:</h4>
Takk for at du handlet hoss Treningsprat.<br><br><br>
Betalingen er bekreftet og bestillingen er sendt inn.<br><br>
<?php

echo "Leveres til: <code>".$_REQUEST["adresse"]." " .$_REQUEST["postnr"]." " .$_REQUEST["poststed"]."</code><br><br>";
echo "Kortinnhaver: <code>".$_REQUEST["navn"]."</code><br><br>";
echo "Kort: <code>*************</code><br><br>";


?>

	<input type="submit" value="Tilbake" class="handlekjop">
</form>
</section>