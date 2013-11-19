<?php

	// Logg ut.
	
	include('connect.php');
	include('header.php');

	// echo '<h2>Logg Ut</h2>';
	
	// Sjekk om brukeren er logget inn, og avslutt session variabler.

	if(isset($_SESSION['signed_in']))
	{
		$_SESSION['signed_in'] = NULL;
		$_SESSION['user_name'] = NULL;
		$_SESSION['user_id']   = NULL;

		echo '<p class="msg">Du har nå logget ut, takk for besøket. Velkommen tilbake!</p>';
		}
		
	else
	{
		echo '<p class="msg">Du er ikke logget inn. Logg deg inn <a href="signin.php">her</a>.</p>';
		}	

	include('footer.php');
	
?>