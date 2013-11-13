<?php

	// Tilbakemelding på diskusjoner.
	
	include('connect.php');
	include('header.php');

	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		echo 'Dette er ikke mulig!';
		}
		
	else
	{
		if(!$_SESSION['signed_in'])
		{
			echo '<p class="msg">Du må være logget inn for å kunne gi en tilbakemelding.</p>';
			}
			
		else
		{
			$sql = "INSERT INTO 
			
						posts(post_content,post_date,post_topic,post_by) 
							  
					VALUES 
					
						('" . $_POST['reply-content'] . "', NOW(),
						 " . mysql_real_escape_string($_GET['id']) . ",
						 " . $_SESSION['user_id'] . ")";
							
			$result = mysql_query($sql);
							
				if(!$result)
				{
					echo '<p class="msg">Din tilbakemelding har ikke blitt lagret, prøv igjen senere.</p>';
					}
					
				else
				{
					echo '<p class="msg">Ditt svar har blitt lagret. Gå tilbake til <a href="topic.php?id=' . htmlentities($_GET['id']) . '">diskusjonen</a>.</p>';
					}
		}
	}

	include('footer.php');
	
?>