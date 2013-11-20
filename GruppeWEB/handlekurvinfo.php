<aside>
<ul id="navigasjonsbarTrening">
<li><a href="index.php?page=10">Kosttilskudd</a></li>
<li><a href="index.php?page=11">Treningsklær</a></li>
</ul>
</aside>
<section id="betalingsbutikk"><h1 id="butikkh1">Handlekurv</h1>

<hr>
<form action="index.php?page=28" method="post">
	Bestillingsinfo:<br>
	<input type="text" name="navn" class="betalingsinfo" value="Fornavn/Etternavn" onblur="if(this.value=='') {this.value='Fornavn/Etternavn'}" onfocus="if (this.value== 'Fornavn/Etternavn'){this.value=''}"></input><br>
	<input type="text" name="adresse" class="betalingsinfo" value="Adresse" onblur="if(this.value=='') {this.value='Adresse'}" onfocus="if (this.value== 'Adresse'){this.value=''}"></input><br>
    <input type="text" name="poststed" class="betalingsinfo" value="Poststed" onblur="if(this.value=='') {this.value='Poststed'}" onfocus="if (this.value== 'Poststed'){this.value=''}"></input>
    <input type="text" name="postnr" class="betalingsinfo" value="Postnr" onblur="if(this.value=='') {this.value='Postnr'}" onfocus="if (this.value== 'Postnr'){this.value=''}"></input><br>
    <input type="text" name="telefon" class="betalingsinfo" value="Telefon" onblur="if(this.value=='') {this.value='Telefon'}" onfocus="if (this.value== 'Telefon'){this.value=''}"></input><br>
	<br>Betaling:<br>
	<select class="handlestorrelse">
		<option>VISA</option>
		<option>MASTERCARD</option>
		<option>AMERICAN EXPRESS</option>
		<option>DINERS CLUB</option>
	</select><br>
	<input type="text" id="betalingsinfo" value="Kortnummer" onblur="if(this.value=='') {this.value='Kortnummer'}" onfocus="if (this.value== 'Kortnummer'){this.value=''}"></input><br>
	Utangsdato:(mm/yy)<select>
		<option>01</option>
		<option>02</option>
		<option>03</option>
		<option>04</option>
		<option>05</option>
		<option>06</option>
		<option>07</option>
		<option>08</option>
		<option>09</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
	</select>
	/
		<select>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
	</select>
	<input type="text" id="cvc" value="CVC" onblur="if(this.value=='') {this.value='CVC'}" onfocus="if (this.value== 'CVC'){this.value=''}"></input><br>
	<input type="submit" value="Bestill" class="handlekjop">
</form>
</section>