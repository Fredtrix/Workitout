<?php
include("webProsjektTopp.php");
?>

		  <?php

		  if(isset($_GET["page"]))
		  {
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
		  	include("webProsjektForum.php");
		  }
		  elseif($_GET["page"]==5)
		  {
		  	include("webProsjektKontakt.php");
		  }
		 elseif($_GET["page"]==6)
		  {
		  	include("narmestTrening.php");
		  }
		  elseif($_GET["page"]==10)
		  {
		  	include("proteinbutikk.php");
		  }
		  elseif($_GET["page"]==11)
		  {
		  	include("klesbutikk.php");
		  }
		  elseif($_GET["page"]==12) 
		  {
		  	include("handlekurv.php");
		  }
		elseif($_GET["page"]==7)
		  {
		  	include("mindreVekt.php");
		  }
		  elseif($_GET["page"]==8)
		  {
		  	include("myeVekt.php");
		  }
		   elseif($_GET["page"]==9)
		  {
		  	include("ikkediett.php");
		  }
		   elseif($_GET["page"]==20)
		  {
		  	include("webProsjektTreningStyrke.php");
		  }
		   elseif($_GET["page"]==21)
		  {
		  	include("webProsjektTreningKondisjon.php");
		  }
		   elseif($_GET["page"]==22)
		  {
		  	include("webProsjektTreningIdrett.php");
	      }
			elseif($_GET["page"]==23)
		  {
		  	include("ovelser.php");
		  }
		  elseif($_GET["page"]==24)
		  {
		  	include("ovelserhm.php");
		  }
		  elseif($_GET["page"]==25)
		  {
		  	include("ovelsernr.php");
		  }
		  elseif($_GET["page"]==26)
		  {
		  	include("ovelserst.php");
		  }
		  elseif($_GET["page"]==27)
		  {
		  	include("ovelseruw.php");
		  }
		  elseif($_GET["page"]==28)
		  {
		  	include("ovelsersiste.php");
		  }

		  elseif($_GET["page"]==13)
		  {
		  	include("BCAA.php");
		  }
		  
		   elseif($_GET["page"]==14)
		  {
		  	include("creatin.php");
		  }
		  
		   elseif($_GET["page"]==15)
		  {
		  	include("protein.php");
		  }
		  
		    elseif($_GET["page"]==16)
		  {
		  	include("pannekaker.php");
		  }
		  
		     elseif($_GET["page"]==17)
		  {
		  	include("Barer.php");
		  }
		  elseif($_GET["page"]==18)
		  {
		  	include("handlekurvinfo.php");
		  }


		  
		}
		else 
		{
			include("webProsjektinnhold.php");
		}
		
		
		  ?>
<?php
include ("webProsjektFooter.php");
?>


	

			
