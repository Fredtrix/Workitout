<?php

	// Kategorier
	
	include('connect.php');
	include('header.php');

	$sql = "SELECT
	
				cat_id,
				cat_name,
				cat_description
				
			FROM
			
				categories
				
			WHERE
			
				cat_id = " . mysql_real_escape_string($_GET['id']) . "";

	$result = mysql_query($sql);

		if(!$result)
		{
			echo '<p class="msg">Denne kategorien kunne ikke vises, prøv igjen senere.' . mysql_error() . '</p>';
			}
			
		else
		{
			if(mysql_num_rows($result) == 0)
			{
				echo '<p class="msg">Denne kategorien finnes ikke.</p>';
				}
				
			else
			{
				while($row = mysql_fetch_assoc($result))
				{
					echo '<h2 class="category">Diskusjoner i ' . $row['cat_name'] . ' kategorien</h2><br>';
					}
			
				$sql = "SELECT
				
							topic_id,
							topic_subject,
							topic_date,
							topic_cat
							
						FROM
						
							topics
							
						WHERE
						
							topic_cat = " . mysql_real_escape_string($_GET['id']) . "";
				
				$result = mysql_query($sql);
				
					if(!$result)
					{
						echo '<p class="msg">Diskusjonene kunne ikke vises, prøv igjen senere.</p>';
						}
						
					else
					{
						if(mysql_num_rows($result) == 0)
						{
							echo '<p class="msg">Det er ikke startet noen diskusjoner i denne kategorien enda.</p>';
							}
							
						else
						{
							echo '<table>
							
								  <tr>
								  
									<th>Diskusjoner</th>
									
									<th>Opprettet</th>
									
								  </tr>';	
								
							while($row = mysql_fetch_assoc($result))
							{				
								echo '<tr>';
								
									echo '<td class="left">';
									
										echo '<h3 class="topictitle"><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><br></h3>';
									
									echo '</td>';
									
									echo '<td class="right">';
									
										echo date('d-m-Y', strtotime($row['topic_date']));
										
									echo '</td>';
									
								echo '</tr>';
							}
						}
					}
				}
			}

	include('footer.php');
	
?>
