<aside>
<ul id="navigasjonsbarTrening">
<li><a href="#">Kontakt</a></li>
</ul>
</aside>
<article id="kontakt">
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
         <input type="text" name="tlf"><br>
         Emne:<br>
         <select name ="emne">
         <option>  </option>    
         <option value="frakt">Frakt</option>
         <option value="produkt">Produkt</option>
         <option value="reklamasjon">Reklamasjon</option>
		 <option value="trening">Trening</option>
		 <option value="kosthold">Kosthold</option>
        <option value="feil">Rapportere feil</option>
		<option value="annet">Annet</option>
		</select>
         <br>
         <textarea name="melding" rows="5" cols="50">Skriv her...</textarea>

         <input type="submit" value="Send" name="sendMail"/><br>
        </form>
		
		<?php
		
$dato= date("d-m-Y H:i");
if (isset($_REQUEST["sendMail"]))
{
        mail("treningsprat@hotmail.no",$_REQUEST["emne"],
		"Navn: ".$_REQUEST["fornavn"]."\n".
        "Etternavn: ".$_REQUEST["etternavn"]."\n".
        "Adresse: ".$_REQUEST["adresse"]."\n".
        "Telefonnummer: ".$_REQUEST["tlf"]."\n".
        "Emne: ".$_REQUEST["emne"]."\n".
        "Melding: ".$_REQUEST["melding"],"From:".$_REQUEST["email"]);
        echo "Mail er sendt.<br>";
        echo "Tid for sendt mail er: $dato <br>";
       
            
}




?>
</article>
