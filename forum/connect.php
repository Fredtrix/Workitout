<?php 

	// Tilkobling til database. Alle feltene under må fylles inn, med unntak av passord hvis HIOA server.
	
	$server	    	= ''; 
	$username	= '';
	$password	= '';
	$database	= '';
	
	session_start(); // 'session_start()' Må altid være med når session brukes!

	if(!mysql_connect($server, $username, $password))
	{
		exit('<p class="msg">FEIL: Kunne ikke koble seg til databasen!</p>');
		}
		
	elseif(!mysql_select_db($database))
	{
		exit('<p class="msg">FEIL: Kunne ikke velge databasen!</p>');
		}

?>
