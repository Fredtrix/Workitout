<?php

	//signin.php
	
	include('connect.php');
	include('header.php');

	echo '<h3 class="register">Logg Inn</h3><br>';

	// Sjekk om brukeren er logget inn fra før.
	
	if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
	{
		echo '<p class="msg">Du er alerede logget inn, du kan <a href="signout.php">logge ut</a> om du ønsker det.</p>';
		}
		
	else
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{
			echo '<section class="register">
			
					<form method="post" action="">
			
						<label for="user_name">Brukernavn</label> <br>
							
							<input type="text" name="user_name" id="user_name"> <br>
							
						<label for="user_pass">Password</label> <br>
					
							<input type="password" name="user_pass" id="user_pass"> <br>
					
						<br>
						
						<input type="submit" value="Logg Inn" class="formbutton">
				
					</form>
				  
				  </section>';
			 
			//end of echo 
			}
			
		else
		{
			$errors = array(); 
			
			if(!isset($_POST['user_name']))
			{
				$errors[] = '<p class="msg">Brukernavnet må fylles inn!</p>';
				}
			
			if(!isset($_POST['user_pass']))
			{
				$errors[] = '<p class="msg">Passorded må fylles inn!</p>';
				}
			
			if(!empty($errors)) 
			{
				echo '<p class="msg">Følgende felt er fylt inn feil:<br><br><ul>';
				
					foreach($errors as $key => $value) 
					{
						echo '<li>' . $value . '</li>'; 
						}
					
				echo '</ul></p>';
			}
			
			else
			{
				$sql = "SELECT 
				
							user_id,
							user_name,
							user_level
							
						FROM
						
							users
							
						WHERE
						
							user_name = '" . mysql_real_escape_string($_POST['user_name']) . "'
							
						AND
						
							user_pass = '" . sha1($_POST['user_pass']) . "'";
							
				$result = mysql_query($sql);
				
				if(!$result)
				{
					echo '<p class="msg">Det har oppstått en feil under innloggingen, prøv igjen senere.</p>';
					}
					
				else
				{
					if(mysql_num_rows($result) == 0)
					{
						echo '<p class="msg">Du har oppgitt feil brukernav/passord, prøv igjen!</p>';
						}
						
					else
					{
						$_SESSION['signed_in'] = true;
						
						while($row = mysql_fetch_assoc($result))
						{
							$_SESSION['user_id'] 	= $row['user_id'];
							$_SESSION['user_name'] 	= $row['user_name'];
							$_SESSION['user_level'] = $row['user_level'];
							}
						
						echo '<p class="msg">Velkommen, ' . $_SESSION['user_name'] . '. <br><a href="index.php">Gå til forum oversikten</a>.</p>';
					}
				}
			}
		}
	}

	include('footer.php');
	
?>