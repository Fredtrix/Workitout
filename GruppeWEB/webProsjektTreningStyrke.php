<script>
$(document).ready(function linker1(){
  $("#trening").click(function(){
    $(".hide").toggle(200);
  });
});
</script>
<!--Easteregg-->
<script src="eastereggTrening.js"></script>

<!--Navigasjonsbar siden-->
<aside>
<ul id="navigasjonsbarTrening">
<li><a href="index.php?page=1">Om trening</a></li>
<li id="trening"><a href="#">Treningsprogram</a></li>
<li class="hide"><a href="index.php?page=12">Styrke</a></li>
<li class="hide"><a href="index.php?page=13">Kondisjon</a></li>
<li class="hide"><a href="index.php?page=14">For utøvere</a></li>
<li><a href="index.php?page=5">Finn ditt treningssenter</a></li>
<li><a href="index.php?page=15">Øvelser</a></li>
<li id="eggTrening">!</li>
</ul>
</aside>
<!--Hovedinnhold-->
<article id="artikkelStyrke">
<h2 id="eggtest">Styrkeprogram</h2>

<p>Det viktigste å ha i bakhodet når du skal starte å trene styrke er å utføre øvelsene/teknikkene riktig!<br> 
Det er utrolig viktig å gjøre styrkeøvelser korekt eller så vil det bare ha negative utslag 
som skader, smerter o.l. Så i starten er det lurt å starte med lette vekter, slik at du får inn bevegelsene og teknikken, 
det er også veldig viktig å puste riktig... <br>
<a href="http://fitnessbloggen.no/styrketrening-for-nybegynnere/" target="_blank">Les deg opp på denne artikkelen</a><br>
</p>

<img class="mot" src="motivasjon2.jpg" alt="motivasjonStyrke" height="400" width="830">

<h3>For deg som er ny</h3>
<p>Programmet er ikke kun for nybegynnere, det kan også brukes om du er erfaren. Dette er et fullkroppsprogram som baserer seg på at du skal trene hele kroppen
hver gang du trener. Har du ikke mulighet til å trene flere enn 2 ganger i uken så er et fullkroppsprogram det beste. 
Kjør programmet 2-3 ganger i uken hvor du bytter på økt 1 og økt 2.
Er det noen øvelser du er usikre på, så ta en titt på øvelse siden vår
her finner du en full oversikt over alle øvelser som er forklart i programmene</p>

<table border="1" class="treningsprogrammer" id="nybegynner">
<tr>
<th>Økt 1</th>
<th>Økt 2</th>
</tr>
<tr>
<td class="dag1">Knebøy 3*5 reps</td>
<td class="dag2">Knebøy 3*5 reps</td>
</tr>
<tr>
<td class="dag1">Benkpress 3*5 reps</td>
<td class="dag2">Militærpress 3*5 reps</td>
</tr>
<tr>
<td class="dag1">Hip-thrust 2*8 reps</td>
<td class="dag2">Stående roing 3*5 reps</td> 
<tr>
<td class="dag1">Pullups 3*8 reps</td>
<td class="dag2">Markløft 1*5 reps</td>
</tr>
<tr>
<td class="dag1">Sidehev 3*12</td>
<td class="dag2">Franskpress 3*8</td>
</tr>
<tr>
<td class="dag1">Tåhev 3*12</td>
<td class="dag2">Biceps curl 3*8</td>
</tr>
<tr>
<td class="dag1">Pallofpress 2*12</td>
<td class="dag2">Planke 2*maks</td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" class="progKnapp" onClick="window.location.href='fullkroppsprogram.docx'"/>

<h3>Når størrelsen teller</h3>
<p>Dette er programmet for deg som vil bli større.<br> Programmet er delt inn 4 dager, optimalet er å trene mandag(dag1), tirsdag(dag2), torsdag(dag3)
 og fredag(dag4). 
kan du ikke det, så prøv så godt det lar seg gjøre å putte en hviledag mellom dag 2 og dag 3.</p>

<table border="1" class="treningsprogrammer" id="volum">
<tr>
<th>Dag 1</th>
<th>Dag 2</th>
<th>Dag 3</th>
<th>Dag 4</th>
</tr>
<tr>
<td class="dag1">Benkpress.4*4-6 reps</td>
<td class="dag2">Knebøy 4*4-6 reps</td>
<td class="dag3">Benkpress droppsett type 1</td>
<td class="dag4">Markløft droppsett type 1</td>
</tr>
<tr>
<td class="dag1">Kabelroing 4*6-8 reps</td>
<td class="dag2">Strak markløft 3*6-8 reps</td>
<td class="dag3">Skrå manualbenk 3*8-10 reps</td>
<td class="dag4">Chins 3*8-10 reps</td>
</tr>
<tr>
<td class="dag1">Skuldepress med stang 3*4-6 reps</td>
<td class="dag2">Bulgarsk utfall 3*6-8 reps</td> 
<td class="dag3">Flies variant 3*12-15 reps</td>
<td class="dag4">Benkroing 4*10-12 reps</td>
<tr>
<td class="dag1">Chins 4*4-6 reps</td>
<td class="dag2">Hiptrust 3*6-8 reps</td>
<td class="dag3">Sidehev variant 4*10-12 reps</td>
<td class="dag4">Rear delt flies 3*12-15 reps</td>
</tr>
<tr>
<td class="dag1">Dips 3*4-6 reps</td>
<td class="dag2">Hengende beinhev 3×8 reps</td>
<td class="dag3">Frankspress 3*8-10 reps</td>
<td class="dag4">Bicepscurl 3*8-10 reps</td>
</tr>
<tr>
<td class="dag1"></td>
<td class="dag2"></td>
<td class="dag3">Pushdown variant droppsett typ 2</td>
<td class="dag4">Biceps isolasjon droppsett type 2</td>
</tr>
<tr>
<td class="dag1"></td>
<td class="dag2"></td>
<td class="dag3"></td>
<td class="dag4">Beinpress widowaker</td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" class="progKnapp" onClick="window.location.href='TreningsProgramVolum.docx'"/>
<p>Programmet er hentet fra: </p><a href="http://fitnessbloggen.no/x-size/" target="_blank">Fitnessbloggen.no</a>
<p><u>Droppsett type 1</u>
Droppsett benyttes på benkpress og markløft. Bruk 3-4 sett med 6 reps på og kjøre deg opp til et tungt toppsett på 5-6 reps til teknisk utmattelse. 
Ta deretter av 20% vekt og kjør så mange repetisjoner som mulig på denne vekten frem til teknisk feil.
Med teknisk utmattelse forstås som det punktet hvor teknikken ikke er identisk med første repetisjon, men at du må jukse på teknikken for og fortsette. 
Pausene bør ikke vøre lengre enn 20-30 sek.<br>

<u>Droppsett type 2</u>
Denne benyttes på mindre øvelser. Du tar først et sett til utmattelse. Her sikter vi oss inn på ca 8-10 repp på første sett. 
Deretter reduserer men vekten 10-20% å kjører ett nytt sett til utmattelse. 
Du reduserer på samme måte og fullfører tredje sett. Pausene mellom de tre settene skal ikke overskride 10-15 sek
</p>

<h3>For deg som vil bli sterkere</h3>
<p><br> Dette programmet er delt opp i en 2-splitt hvor du trener overkropp eller nedre del av kroppen.<br>
Du er avhengig av å kunne trene 3 dager i uken hvor du skal ha en hviledag mellom dag 2 og den tredje dagen du trener, så det kan se slik ut: 
mandag(dag1), tirsdag(dag2) og torsdag(dag1). Varm opp med 2/3 av normal vekt før du begynner med den fulle vekten.<br>
Gjør to øvelsere "back to back" (supersett) uten hvile i mellom, for så å ta en pause på 1 min. Deretter tar du for deg de 2 neste øvelsene uten hvile.</p>

<table border="1" class="treningsprogrammer" id="strength">
<tr>
<th>Dag 1</th>
<th>Dag 2</th>
</tr>
<tr>
<td class="dag1">Benkpress.5*5 reps</td>
<td class="dag2">Knebøy 6*3-5reps</td>
</tr>
<tr>
<td class="dag1">Stående roing 5*5 reps</td>
<td class="dag2">Markløft 6*3-5 reps</td>
</tr>
<tr>
<td class="dag1">Skuldepressmaskin 5*5 reps</td>
<td class="dag2">leg-curl pilatesball 4*6 reps</td> 
<tr>
<td class="dag1">Chins/pull-up 5*5 reps</td>
<td class="dag2">Kabel hamstring curl 3*8 reps</td>
</tr>
<tr>
<td class="dag1">Knestående skrå sit-up 3*8</td>
<td class="dag2"></td>
</tr>
<tr>
<td class="dag1">Beinhev 3*8</td>
<td class="dag2"></td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" class="progKnapp" onClick="window.location.href='2splitt.docx'"/>
</article>
