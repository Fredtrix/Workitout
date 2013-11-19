<?php

	// Forumboard, main-index.
	
	include('connect.php');
	include('header.php');

	$sql = "SELECT
	
				categories.cat_id,
				categories.cat_name,
				categories.cat_description,
				COUNT(topics.topic_id) AS topics
				
			FROM
			
				categories
				
			LEFT JOIN
			
				topics
				
			ON
				topics.topic_id = categories.cat_id
				
			GROUP BY
			
				categories.cat_name, categories.cat_description, categories.cat_id";

	$result = mysql_query($sql);

		if(!$result)
		{
			echo '<p class="msg">Kategoriene kunne ikke vises, prøv igjen senere.</p>';
			}
			
		else
		{
			if(mysql_num_rows($result) == 0)
			{
				echo '<p class="msg">Ingen kategorier er laget enda.</p>';
				}
				
			else
			{
				echo '<table>
				
					  <tr>
					  
						<th>Kategori</th>
						
						<th>Siste diskusjon</th>
						
					  </tr>';	
					
				while($row = mysql_fetch_assoc($result))
				{				
					echo '<tr>';
					
						echo '<td class="left">';
						
							echo '<h3 class="cattitle"><a href="category.php?id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
						
						echo '</td>';
						
						echo '<td class="right">';
						
							// Hent siste diskusjon fra hver kategori
						
							$topicsql = "SELECT
							
											topic_id,
											topic_subject,
											topic_date,
											topic_cat
											
										FROM
										
											topics
											
										WHERE
											topic_cat = " . $row['cat_id'] . "
											
										ORDER BY
										
											topic_date
											
										DESC
										
										LIMIT
										
											1";
										
							$topicsresult = mysql_query($topicsql);
						
								if(!$topicsresult)
								{
									echo 'Siste diskusjon kunne ikke vises.';
									}
									
								else
								{
									if(mysql_num_rows($topicsresult) == 0)
									{
										echo 'Ingen diskusjoner.';
										}
										
									else
									{
										while($topicrow = mysql_fetch_assoc($topicsresult))
										{
											echo '<a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> i ' . date('d-m-Y', strtotime($topicrow['topic_date']));
											}
									}
								}
								
						echo '</td>';
						
					echo '</tr>';
				}
			}
		}

	include('footer.php');

?>
