<aside>
<ul id="navigasjonsbarTrening">
<li><a href="#">Treningsprogram</a></li>
<li><a href="webProsjektHoved.php?page=6">finn ditt treningssenter</a></li>
<li><a href="#">Kosthold</a></li>
<li><a href="#">Butikk</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Kontakt</a></li>
</ul>
</aside>
<form action="" method="post">
         Fornavn:<br>
         <input type="text" name="fornavn" /><br>
         Etternavn:<br>
         <input type="text" name="etternavn"/><br>
         E-Mail:<br>
         <input type="email" name="email"/><br>
         Adresse:<br>
         <input type="text" name="adresse"/><br>
         Telefonnummer:<br>
         <input type="text" name="telefonnummer"><br>
         Emne:<br>
         <select name ="emne">
         <option>  </option>    
         <option value="frakt">Frakt</option>
         <option value="produkt">Produkt</option>
         <option value="reklamasjon">Reklamasjon</option>
		 <option value="reklamasjon">Trening</option>
		 <option value="reklamasjon">Kosthold</option>
        <option value="reklamasjon">Rapportere feil</option>
		<option value="reklamasjon">Annet</option>
		</select>
         <br>
         <textarea name="melding" rows="5" cols="50">Skriv her...</textarea>

         <input type="submit" value="Send" name="sendMail"/><br>
        </form>
		<?php
$dato= date("d-m-Y H:i");
if (isset($_REQUEST["sendMail"]))
{
        mail("treningsprat@hotmail.com",$_REQUEST["emne"],$_REQUEST["melding"],"From:".$_REQUEST["email"]);
        echo "Mail er sendt.<br>";
        echo "Tid for sendt mail er: $dato <br>";
       
            
}




?>
