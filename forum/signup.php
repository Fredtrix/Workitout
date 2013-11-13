<?php

	// Registrering av brukere.
	
	include('connect.php');
	include('header.php');

	echo '<h3 class="register">Registrering</h3> <br>';

	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo '<section class="register">
		
				<form method="post" action="">
		      
				  <label for="user_name">Brukernavn</label> <br>
			
					<input type="text" name="user_name" id="user_name"> <br>
					
				  <label for="user_pass">Passord</label> <br>	
				
					<input type="password" name="user_pass" id="user_pass"> <br>
					
				  <label for="pass_check">Passord Igjen</label> <br>
				
					<input type="password" name="user_pass_check" id="pass_check"> <br>
					
				  <label for="epost">E-post</label> <br>
				
					<input type="email" name="user_email" id="epost"> <br>
				
				  <br>
				
				  <input type="submit" value="Fullfør" class="formbutton">
			
				</form>
		 
			  </section>';
		 
		// end of echo
		}
		
	else
	{
		$errors = array(); 
		
		// BRUKERNAVN
		
		if(isset($_POST['user_name']))
		{
			if(!ctype_alnum($_POST['user_name']))
			{
				$errors[] = '<p class="msg">Brukernavnet kan bare inneholde bokstaver og tall.</p>';
				}
				
			if(strlen($_POST['user_name']) > 30)
			{
				$errors[] = '<p class="msg">Brukernavnet kan ikke ha mer en 30 tegn.</p>';
				}
		}
		
		else
		{
			$errors[] = '<p class="msg">Brukernavnet må fylles inn.</p>';
			}
			
		// PASSORD
		
		if(isset($_POST['user_pass']))
		{
			if($_POST['user_pass'] != $_POST['user_pass_check'])
			{
				$errors[] = '<p class="msg">Passordene er ikke like.</p>';
				}
		}
		
		else
		{
			$errors[] = '<p class="msg">Passordet må fylles inn.</p>';
			}
		
		if(!empty($errors)) 
		{
			echo '<p class="msg">Følgende felter er ikke fylt inn riktig: <br> <br> <ul>';
			
				foreach($errors as $key => $value) 
				{
					echo '<li>' . $value . '</li>'; 
					}
					
			echo '</ul></p>';
			}
			
		else
		{
			$sql = "INSERT INTO
			
						users(user_name,user_pass,user_email,user_date,user_level)
						
					VALUES
					
						('" . mysql_real_escape_string($_POST['user_name']) . "',
						 '" . sha1($_POST['user_pass']) . "',
						 '" . mysql_real_escape_string($_POST['user_email']) . "', NOW(), 0)";
							
			$result = mysql_query($sql);
			
				if(!$result)
				{
					echo '<p class="msg">En feil har oppstått, prøv igjen senere.</p>';
					}
					
				else
				{
					echo '<p class="msg">Gratulerer! Du har nå registrert en bruker konto. Du kan nå <a href="signin.php">logge inn</a> for å komme i gang.</p>';
					}
		}
	}

	include('footer.php');
	
?>
