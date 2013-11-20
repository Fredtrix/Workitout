<aside>
<ul id="navigasjonsbarTrening">
<li><a href="index.php?page=6">Kosttilskudd</a></li>
<li><a href="index.php?page=7">Treningsklær</a></li>
</ul>

</aside>
<?php
include ("butikkeaster.js");
?>
<div id="sidebilderhovedbutikk">
<img src="sideslider1.jpg" id="sidebilde1" height="250" width="250"><br>
<img src="sideslider2.jpg" id="sidebilde2" height="250" width="250"><br>
<img src="sideslider3.jpg" id="sidebilde3" height="250" width="250">
</div>
<section id="butikk"><h2 id="butikkh1">Butikk</h2>

	<hr>
<table border="1" id="tilbudtabell">
    <form action="index.php?page=8" method="post">
	<tr>
		<th>Tilbud</th>
		<th>Nyheter</th>
		<th>Populært</th>

	</tr>
		<td><img class="butikkBilder" src="dprotein3.jpg" alt="protein"></td>
		<td><img class="butikkBilder" src="syre3.png" alt="protein"></td>
		<td><img class="butikkBilder" src="mbrownie2.jpg" alt="protein"></td>
	</tr>
	<tr>
        <td id="tilbudspris">Pris: 599kr</td>
        <td>Pris: 335kr</td>
        <td>Pris: 299kr</td>
    </tr>
    	<tr>
   
        <td><input name="dprotein3tilbud" type="submit" value="KJØP" class="kjopknapp"></td>
        <td><input name="syre1nyhet" type="submit" value="KJØP" class="kjopknapp"></td>
        <td><input name="mbrownie2populer" type="submit" value="KJØP" class="kjopknapp"></td>
    </tr>
        <tr>
		<td><img class="butikkBilder" src="syre1.jpg" alt="protein"></td>
		<td><img class="butikkBilder" src="burner2.png" alt="protein"></td>
		<td><img class="butikkBilder" src="ktsjorte1.jpg" alt="protein"></td>
		</tr>

        <td id="tilbudspris">Pris: 299kr</td>
        <td>Pris: 249kr</td>
        <td>Pris: 399kr</td>
        </tr>
            	<tr>

        <td><input name="syre1tilbud" type="submit" value="KJØP" class="kjopknapp"></td>
        <td><input name="burner2nyhet" type="submit" value="KJØP" class="kjopknapp"></td>
        <td><input name="ktskjorte1populer"type="submit" value="KJØP" class="kjopknapp"></td>
    </tr>
		<tr>

		<td><img class="butikkBilder" src="ksinglet3.jpg" alt="protein"></td>
		<td><img class="butikkBilder" src="pokning2.png" alt="protein"></td>
		<td><img class="butikkBilder" src="pokning3.jpg" alt="protein"></td>
		</tr>

        <td id="tilbudspris">Pris: 199kr</td>
        <td>Pris: 349kr</td>
        <td>Pris: 499kr</td>            	<tr>

        <td><input name="ksinglet3" type="submit" value="KJØP" class="kjopknapp"></td>
        <td><input name="pokning2nyhet" type="submit" value="KJØP" class="kjopknapp"></td>
        <td><input name="pokning3populer"type="submit" value="KJØP" class="kjopknapp"></td>
    </tr>
    <form>
</form>
</table>

</section>

