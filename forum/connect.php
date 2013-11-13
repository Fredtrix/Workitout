<?php 

	// Tilkobling til database.
	
	$server	    = 'student.cs.hioa.no'; // Host = HIOA
	$username	= 's172817';
	$password	= '';
	$database	= 's172817';
	
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