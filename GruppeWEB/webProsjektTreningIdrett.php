<script>
$(document).ready(function linker1(){
  $("#trening").click(function(){
    $(".hide").toggle(200);
  });
});
</script>


<aside>
<ul id="navigasjonsbarTrening">
<li><a href="webProsjektHoved.php?page=1">Om trening</a></li>
<li id="trening"><a href="#">Treningsprogram</a></li>
<li class="hide"><a href="webProsjektHoved.php?page=20">Styrke</a></li>
<li class="hide"><a href="webProsjektHoved.php?page=21">Kondisjon</a></li>
<li class="hide"><a href="webProsjektHoved.php?page=22">For utøvere</a></li>
<li><a href="webProsjektHoved.php?page=6">Finn ditt treningssenter</a></li>
<li><a href="webProsjektHoved.php?page=23">Øvelser</a></li>
</ul>
</aside>
<article id="utover">
<h2>For utøvere</h2>
<p>Styrketrening er veldig viktig for deg som driver med sport, ikke minst for å forebygge skader men også for å kunne yte bedre.
Målet med disse programmene er ikke å få de største musklene, men å få sterkere muskler og bedre utholdenhet.
</p>
<img class="mot" src="motivasjon3.jpg" alt="motivasjonIdrett" height="400" width="830">
<h3>Fotball</h3>
<table border="1" id="fotball">
<tr>
<th>Dag 1</th>
<th>Dag 2</th>
</tr>
<tr>
<td class="dag1">Utfall.3*10 reps</td>
<td class="dag2">Skulderpress 3*10 reps</td>
</tr>
<tr>
<td class="dag1">Knebøy 3*10 reps</td>
<td class="dag2">Situp med vekt 3*10 reps</td>
</tr>
<tr>
<td class="dag1">Dips 3*12 reps</td>
<td class="dag2">leg-extension 3*10 reps</td> 
<tr>
<td class="dag1">Leg curl 3*10 reps</td>
<td class="dag2">Franskpress 3*10 reps</td>
</tr>
<tr>
<td class="dag1">Bicycle sit-up 3*8</td>
<td class="dag2"></td>
</tr>
<tr>
<td class="dag1">Stående roing 3*10</td>
<td class="dag2"></td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" id="fotballKnapp" onClick="window.location.href='TreningsProgramFotball.docx'"/>
<h3>Ishockey</h3>
<table border="1" id="IshockeyProgram">
<tr>
<th>Tidlig pre-season</th>
<th>Sent pre-season</th>
</tr>
<tr>
<td class="dag1">Knebøy 3*12 reps</td>
<td class="dag2">Hack squat 5*5-6 reps</td>
</tr>
<tr>
<td class="dag1">Skråbenk 3*13 reps</td>
<td class="dag2">Benkpress 5*5-6 reps</td>
</tr>
<tr>
<td class="dag1">Rumensk markløft 4*12 reps</td>
<td class="dag2">Rumensk markløft 6*5-6 reps</td> 
<tr>
<td class="dag1">Biceps curl 3*14 reps</td>
<td class="dag2">Nedtrekk 5*5-6 reps</td>
</tr>
<tr>
<td class="dag1">Sittende triceps extension 4*12 reps</td>
<td class="dag2">pullup 6*5-6 reps</td>
</tr>
<tr>
<td class="dag1">Sittende roing 3*14</td>
<td class="dag2">Upright row 5*5-6 reps</td>
</tr>
<tr>
<td class="dag1">Skrå sit-up 4*12 reps</td>
<td class="dag2">Skrå hammercurl 5*5-6 reps</td>
</tr>
<tr>
<td class="dag1">Nedtrekk 3*12 reps</td>
<td class="dag2">Shrug 5*5-6 reps</td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" id="ishockeyKnapp" onClick="window.location.href='TreningsIshockey.docx'"/>
<h3>Tennis</h3>
<table border="1" id="tennisProgram">
<tr>
<th>Dag 1</th>
<th>Dag 2</th>
<th>Dag 3</th>
</tr>
<tr>
<td class="dag1">Skulderpress med manualer 3*10 reps</td>
<td class="dag2">Knebøy manualer 3*9-12 reps</td>
<td class="dag3">Flies kabel 3*10-12</td>
</tr>
<tr>
<td class="dag1">Hammer curls 3*10-12 reps</td>
<td class="dag2">Upright row med stang 3*12-15 reps</td>
<td class="dag3">Flies manualer 3*10-12 reps</td>
</tr>
<tr>
<td class="dag1">Wrist curl 3*9-10 reps</td>
<td class="dag2">Skrå sit-ups 3*9-12 reps</td> 
<td class="dag3">Sidehev 3*9-10 reps</td>
<tr>
<td class="dag1">Knebøy 3*8-9 reps</td>
<td class="dag2">Rygghev 3*9-10 reps</td>
<td class="dag3">Bridge crunch 3*9-10 reps</td>
</tr>
<tr>
<td class="dag1">Sit-up pilatesball 3*9-12 reps</td>
<td class="dag2">Benkpress 3×9-10 reps</td>
<td class="dag3">Wrist twist manualer 3*9-10 reps</td>
</tr>
<tr>
<td class="dag1">Utfall manualer 3*9-12</td>
<td class="dag2"></td>
<td class="dag3">Bosu russian twist 3*9-10</td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" id="tennisKnapp" onClick="window.location.href='TreningsProgramTennis.docx'"/>

<h3>Golf</h3>
<table border="1" id="golfProgram">
<tr>
<th>Dag 1</th>
<th>Dag 2</th>
<th>Dag 3</th>
</tr>
<tr>
<td class="dag1">Abdominal twist 3*10-12 reps</td>
<td class="dag2">Flies kabel 3*8-10 reps</td>
<td class="dag3">Tåhev manualer 3*8-10</td>
</tr>
<tr>
<td class="dag1">Rumensk markløft 3*8-10 reps</td>
<td class="dag2">Wrist twist manualer 3*8-10 reps</td>
<td class="dag3">Omvendt flies 3*6-8 reps</td>
</tr>
<tr>
<td class="dag1">Utfall manualer 3*8-10 reps</td>
<td class="dag2">Kabel torso rotation 3*8-10 reps</td> 
<td class="dag3">Arnold press 3*8-10 reps</td>
<tr>
<td class="dag1">Nedtrekk 3*8-10 reps</td>
<td class="dag2">Seated twist 3*8-10 reps</td>
<td class="dag3">Sittende roing 3*8-10 reps</td>
</tr>
<tr>
<td class="dag1">Shrug 3*10-12 reps</td>
<td class="dag2">Rygghev pilatesball 3*8-10 reps</td>
<td class="dag3">Pushup 2* max reps</td>
</tr>
<tr>
<td class="dag1">Nedtrekk triceps 3*8-10</td>
<td class="dag2">Knebøy pilatesball vegg 3*8-10 reps</td>
<td class="dag3"></td>
</tr>
<tr>
<td class="dag1">Skrå sit-up 3*8-10</td>
<td class="dag2"></td>
<td class="dag3"></td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" id="golfKnapp" onClick="window.location.href='TreningsProgramGolf.docx'"/>

<h3>Basktetball</h3>
<table border="1" id="baskettProgram">
<tr>
<th>Tidlig pre-season</th>
<th>Sent pre-season</th>
</tr>
<tr>
<td class="dag1">Utfall stang 3*12 reps</td>
<td class="dag2">Knebøy 3*9-10 reps</td>
</tr>
<tr>
<td class="dag1">Liggende beinhev 3*15-20 reps</td>
<td class="dag2">Benkpress 3*10-12 reps</td>
</tr>
<tr>
<td class="dag1">Sittende triceps extension 2*12 reps</td>
<td class="dag2">Rumensk markløft 3*9-10 reps</td> 
<tr>
<td class="dag1">Rumensk markløft 3*10-12 reps</td>
<td class="dag2">Chins 3*9-10</td>
</tr>
<tr>
<td class="dag1">Skråbenk manualer 3*15 reps</td>
<td class="dag2">Tåhev maskin 3*10 reps</td>
</tr>
<tr>
<td class="dag1">Nedtrekk 3*12</td>
<td class="dag2">Push press 3*10 reps</td>
</tr>
<tr>
<td class="dag1">Bicepscurl 4*10 reps</td>
<td class="dag2">Side lunge 3*10 reps</td>
</tr>
<tr>
<td class="dag1">Sittende roing 3*10 reps</td>
<td class="dag2">Drag curl 3*10 reps</td>
</tr>
</table>
<input type="submit" value="Last ned treningsprogram" id="baskettKnapp" onClick="window.location.href='TreningsProgramBasket.docx'"/>
</article> 