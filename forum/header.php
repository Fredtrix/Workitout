<!doctype html>

<html lang="no"> <!-- Norwegian -->

	<head>
	
		<title> Nettforum </title>

		<meta http-equiv="Content-Type" content="UTF-8"> <!-- Æ, Ø, Å -->
		
		<!-- Søkemotor -->
		
		<meta name="description" content="Snakk med andre om trening og kosthold.">
		
		<meta name="keywords" content="trening, kosthold, aktivitet, sport">
		
		<!-- Stylesheet -->
		
		<link rel="stylesheet" type="text/css" href="forumstyle.css">
		
		<!-- Informasjon -->
		
		<!-- Mye av PHP koden og variablene jeg har brukt er på Engelsk, jeg kunne tenke meg å jobbe videre
			 med dette forum-prosjektet på fritid, og da vil jeg gjerne at det skal være litt mer tilgjengelig 
			 enn kun for ett språk. I både backend og frontend. FH -->
		
	</head>
	
	<body>
	
		<header id="banner">
	
			<h1> TRENINGSPRAT </h1>
		
		</header> <!-- end banner -->
	
		<div id="wrapper">
		
			<section id="forumheader">
		
				<nav id="menunav">
				
					<a class="button" href="../forum/index.php"> Oversikt </a>
					
					<a class="button" href="../forum/create_topic.php"> Oppertt Diskusjon </a>
					
					<a class="button" href="../forum/create_cat.php"> Lag Kategori </a>
					
				</nav> <!-- end menunav -->
				
				<aside id="sidebar">
				
					<nav id="userbar">
						
						<?php
						
							if(isset($_SESSION['signed_in']))
							{
								echo 'Hallo, <span class="user">' . htmlentities($_SESSION['user_name']) . '</span>. Ikke deg? <a class="userbutton" href="signout.php">Logg ut</a>';
								}
								
							else
							{
								echo '<a class="userbutton" href="signin.php">Logg inn</a> eller <a class="userbutton" href="signup.php">Registrer</a> deg';
								}
						
						?>
						
					</nav> <!-- end userbar -->
				
				</aside>
			
			</section> <!-- end forumheader -->
		
			<section id="content">
