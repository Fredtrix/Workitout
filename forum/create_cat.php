<?php

	// Opprett kategori.
	
	include('connect.php');
	include('header.php');

	// echo '<h2>Opprett en Kategori</h2>';

	if(!isset($_SESSION['signed_in']))
	{
		echo '<p class="msg">Du må være <a href="/forumtest/signin.php">logget inn</a> for å kunne opprette en kategori.</p>';
		}

	elseif(isset($_SESSION['signed_in']))
	{
		if($_SESSION['user_level'] != 1)
		{
			echo '<p class="msg">Du har ikke rettigheter til å lage en kategori.</p>';
			}
	

		else
		{
			if($_SERVER['REQUEST_METHOD'] != 'POST')
			{
				echo '<section class="create">
				
						  <form method="post" action="">
						  
							<label for="catname">Kategori:</label> <br>
						
								<input type="text" name="cat_name" id="catname"> <br>
							
							<label for="ctext">Beskrivelse:</label> <br>
							
								<textarea name="cat_description" id="ctext"> </textarea> <br>
							
							<input type="submit" value="Fullfør" class="formbutton">
							
						  </form>
				 
					  </section>';
				 
				// end of echo 
				}
			
			else
			{
				$sql = "INSERT INTO 
				
							categories(cat_name,cat_description)
				
						VALUES
						
							('" . mysql_real_escape_string($_POST['cat_name']) . "',
							 '" . mysql_real_escape_string($_POST['cat_description']) . "')";
							 
				$result = mysql_query($sql);
				
					if(!$result)
					{
						echo 'FEIL' . mysql_error() . '';
						}
					
					else
					{
						echo '<p class="msg">Ny kategori ble opprettet uten feil, og er nå lagt til forumet.</p>';
						}
			}
		}
	}

	include('footer.php');
	
?>
