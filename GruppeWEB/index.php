<?php
include("webProsjektTopp.php");
?>

		  <?php

		  if(isset($_GET["page"]))
		  {//hovedsider
		  	if ($_GET["page"]==1)
		  	{
		  		include ("webProsjektTrening.php");
		  	}

		  elseif ($_GET["page"] ==2)
		  {
		  	include ("webProsjektKosthold.php");

		  }
		  elseif ($_GET["page"]==3)
		  {
		  	include ("webProsjektButikk.php");
		  }
		  elseif($_GET["page"]==4)
		  {
		  	include("webProsjektKontakt.php");
		  }
		 elseif($_GET["page"]==5)
		  {//undersider
		  	include("narmestTrening.php");
		  }
		  elseif($_GET["page"]==6)
		  {
		  	include("proteinbutikk.php");
		  }
		  elseif($_GET["page"]==7)
		  {
		  	include("klesbutikk.php");
		  }
		  elseif($_GET["page"]==8) 
		  {
		  	include("handlekurv.php");
		  }
		elseif($_GET["page"]==9)
		  {
		  	include("mindreVekt.php");
		  }
		  elseif($_GET["page"]==10)
		  {
		  	include("myeVekt.php");
		  }
		   elseif($_GET["page"]==11)
		  {
		  	include("ikkediett.php");
		  }
		   elseif($_GET["page"]==12)
		  {
		  	include("webProsjektTreningStyrke.php");
		  }
		   elseif($_GET["page"]==13)
		  {
		  	include("webProsjektTreningKondisjon.php");
		  }
		   elseif($_GET["page"]==14)
		  {
		  	include("webProsjektTreningIdrett.php");
	      }
			elseif($_GET["page"]==15)
		  {
		  	include("ovelser.php");
		  }
		  elseif($_GET["page"]==16)
		  {
		  	include("ovelserhm.php");
		  }
		  elseif($_GET["page"]==17)
		  {
		  	include("ovelsernr.php");
		  }
		  elseif($_GET["page"]==18)
		  {
		  	include("ovelserst.php");
		  }
		  elseif($_GET["page"]==19)
		  {
		  	include("ovelseruw.php");
		  }
		  elseif($_GET["page"]==20)
		  {
		  	include("ovelsersiste.php");
		  }

		  elseif($_GET["page"]==21)
		  {
		  	include("BCAA.php");
		  }
		  
		   elseif($_GET["page"]==22)
		  {
		  	include("creatin.php");
		  }
		  
		   elseif($_GET["page"]==23)
		  {
		  	include("protein.php");
		  }
		  
		    elseif($_GET["page"]==24)
		  {
		  	include("pannekaker.php");
		  }
		  
		     elseif($_GET["page"]==25)
		  {
		  	include("Barer.php");
		  }
		  elseif ($_GET["page"] ==26)
		  {
		  	include ("index.php");

		  }
		}
		else 
		{
			include("index.php");
		}
		
		
		  ?>
<?php
include ("webProsjektFooter.php");
?>


	

			
