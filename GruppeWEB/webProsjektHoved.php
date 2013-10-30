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
		  
		}
		else 
		{
			include("webProsjektinnhold.php");
		}
		
		
		  ?>
<?php
include ("webProsjektFooter.php");
?>


			
