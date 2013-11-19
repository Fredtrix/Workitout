<?php

	// Diskusjoner
	
	include('connect.php');
	include('header.php');

	$sql = "SELECT
	
				topic_id,
				topic_subject
				
			FROM
			
				topics
				
			WHERE
			
				topics.topic_id = " . mysql_real_escape_string($_GET['id']) . "";
				
	$result = mysql_query($sql);

		if(!$result)
		{
			echo '<p class="msg">Diskusjonen kunne ikke vises, prøv igjen senere.</p>';
			}
			
		else
		{
			if(mysql_num_rows($result) == 0)
			{
				echo '<p class="msg">Denne diskusjonen finnes ikke.</p>';
				}
				
			else
			{
				while($row = mysql_fetch_assoc($result))
				{
					echo '<table class="topic">
					
							<tr>
							
								<th colspan="2">' . $row['topic_subject'] . '</th>
								
							</tr>';
				
					$posts_sql = "SELECT
					
									posts.post_topic,
									posts.post_content,
									posts.post_date,
									posts.post_by,
									users.user_id,
									users.user_name
									
								  FROM
								  
									posts
									
								  LEFT JOIN
								  
									users
									
								  ON
								  
									posts.post_by = users.user_id
									
								  WHERE
								  
									posts.post_topic = " . mysql_real_escape_string($_GET['id']) . "";
								
					$posts_result = mysql_query($posts_sql);
					
					if(!$posts_result)
					{
						echo '<tr> <td>Innleggene kunne ikke vises, prøv igjen senere.</tr> </td> </table>';
						}
						
					else
					{
						while($posts_row = mysql_fetch_assoc($posts_result))
						{
							echo '<tr class="topic-post">
							
									<td class="user-post"><span class="user">' . $posts_row['user_name'] . '</span><br>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</td>
									
									<td class="post-content">' . htmlentities(stripslashes($posts_row['post_content'])) . '</td>
									
								  </tr>';
								  
							// end of echo
							}
					}
					
					if(!isset($_SESSION['signed_in']))
					{
						echo '<tr><td colspan=2>Du må være <a href="signin.php">logget inn</a> for å svare. Du kan <a href="signup.php">registrere deg</a> om du vil delta i diskusjonen.';
						}
						
					else
					{
						echo '<tr> <td colspan="2"> <h2 class="reply">Svar:</h2> <br>
						
							<form method="post" action="reply.php?id=' . $row['topic_id'] . '">
							
								<textarea name="reply-content" class="replyc"> </textarea> <br><br>
								
								<input type="submit" value="Fullfør" class="replybutton">
								
							</form></td></tr>';
					}
					
					echo '</table>';
				}
			}
		}

	include('footer.php');
?>