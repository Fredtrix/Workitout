<?php
include("webProsjektTopp.php");
?>

		  <?php

		  if(isset($_GET["page"]))
		  {
		  	if ($_GET["page"]==1)
		  	{
		  		include ("webprosjektTrening.php");
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
			
		  elseif($_GET["page"]==13)
		  {
		  	include("BCAA.php");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> afbc451d184dad1298129cd0c9171a56dfcf5d40
=======
>>>>>>> afbc451d184dad1298129cd0c9171a56dfcf5d40
		  }
		  
		   elseif($_GET["page"]==14)
		  {
		  	include("creatin.php");
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> afbc451d184dad1298129cd0c9171a56dfcf5d40
=======
>>>>>>> afbc451d184dad1298129cd0c9171a56dfcf5d40
=======
>>>>>>> afbc451d184dad1298129cd0c9171a56dfcf5d40
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


	

			
