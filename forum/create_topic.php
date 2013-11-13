<?php

	// Opprett diskusjon.
	
	include('connect.php');
	include('header.php');

	// echo '<h2>Start en Diskusjon</h2>';
	
	if(!isset($_SESSION['signed_in']))
	{
		echo '<p class="msg">Du må være <a href="/forumtest/signin.php">logget inn</a> for å starte en diskusjon.</p>';
		}
		
	else
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{	
			$sql = "SELECT
			
						cat_id,
						cat_name,
						cat_description
						
					FROM
					
						categories";
			
			$result = mysql_query($sql);
			
				if(!$result)
				{
					echo '<p class="msg">En feil har oppstått, prøv igjen senere.</p>';
					}
				
				else
				{
					if(mysql_num_rows($result) == 0)
					{
						if($_SESSION['user_level'] == 1)
						{
							echo '<p class="msg">Det er ikke laget noen kategorier enda!</p>';
							}
							
						else
						{
							echo '<p class="msg">Før det kan startes noen diskusjoner må en Administrator opprette en kategori.</p>';
							}
					}
					
					else
					{
						echo '<section class="create">
						
								<form method="post" action="">
								
									<label for="subject">Tema:</label> <br>
						
										<input type="text" name="topic_subject" id="subject"> <br>
							
									<label for="topic">Kategori:</label> <br>
						
										<select name="topic_cat" id="topic">';
						
											while($row = mysql_fetch_assoc($result))
											{
												echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
												}
								
										echo '</select> <br>	
							
										<label for="ttext">Innlegg:</label> <br> 
										
											<textarea name="post_content" id="ttext"> </textarea> <br> <br>
						
									<input type="submit" value="Fullfør" class="formbutton">
							
								</form>
								
							</section>';
					}
				}
		}
			
		else
		{
			$query  = "BEGIN WORK;";
			$result = mysql_query($query);
			
				if(!$result)
				{
					echo '<p class="msg">Det har oppstått en feil, prøv igjen senere.</p>';
					}
					
				else
				{
			
					$sql = "INSERT INTO 
					
								topics(topic_subject,topic_date,topic_cat,topic_by)
								
						   VALUES
						   
								('" . mysql_real_escape_string($_POST['topic_subject']) . "', NOW(),
								  " . mysql_real_escape_string($_POST['topic_cat']) . ",
								  " . $_SESSION['user_id'] . ")";
							 
					$result = mysql_query($sql);
					
						if(!$result)
						{
							echo '<p class="msg">Noe gikke feil under overføringen av data, prøv igjen senere.<br><br>' . mysql_error() . '</p>';
							
							$sql = "ROLLBACK;";
							$result = mysql_query($sql);
							}
							
						else
						{
							$topicid = mysql_insert_id();
							
							$sql = "INSERT INTO
							
										posts(post_content,post_date,post_topic,post_by)
										
									VALUES
									
										('" . mysql_real_escape_string($_POST['post_content']) . "', NOW(),
										  " . $topicid . ",
										  " . $_SESSION['user_id'] . ")";
										  
							$result = mysql_query($sql);
							
							if(!$result)
							{
								echo '<p class="msg">Noe gikke feil under overføringen av data, prøv igjen senere.<br><br>' . mysql_error() . '</p>';
								
								$sql = "ROLLBACK;";
								$result = mysql_query($sql);
								}
								
							else
							{
								$sql = "COMMIT;";
								$result = mysql_query($sql);
								
								echo '<p class="msg">Du har opprettet et nytt diskusjons tema uten feil! Gå til din <a href="topic.php?id='. $topicid . '">diskusjon</a>.</p>';
								}
						}
				}
		}	
	}
	

	include('footer.php');
	
?>
