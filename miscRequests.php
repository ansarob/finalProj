<?php
	
	require_once 'login.php';
		$db_server = mysql_connect($db_hostname, $db_username, $db_password);
		
		if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
		
		mysql_select_db($db_database)
			or die("Unable to select database: " . mysql_error());		
		
	$query = "SELECT *
			  FROM books
			  ORDER BY b_likes DESC;";
			  
	$result = mysql_query($query);
			  
	if (!$result) die("Database access failed: " . mysql_error());
	
		$numrows = mysql_num_rows($result);
	
		while($rows = mysql_fetch_assoc($result)) {
			$a_query = "SELECT *
						FROM authors
						WHERE b_id = '" . $rows["b_id"] . "'";
			$a_result = mysql_query($a_query);
			$authors = "";
			$counter = 0;
			while($a_rows = mysql_fetch_assoc($a_result)) {
				if ($counter > 0) {
					$authors .= ", ";
				}
				
				if (strlen($a_rows["a_title"]) > 0) {
					$authors .= $a_rows["a_title"] . " ";
				}
				
				$authors .= $a_rows["a_firstName"] . " " . $a_rows["a_lastName"];
				
				if (strlen($a_rows["a_suffix"]) > 0) {
					$authors .= ", " . $a_rows["a_suffix"];
				}
				
				$counter++;
			}
			
			//$like_query = mysql_query("INSERT INTO like VALUES (NULL,'" . $rows["b_id"] . "',NULL)");
			
			$rows["b_author"] = $authors;
			
			echo '<div id="books-container">';
			echo '<div class="single-book">';
				echo '<a href="' . $like_query . '" class="like-book">LIKE</a>';
				echo '<img src="' . $rows['b_cover'] . '" class="book-cover" />';
				echo '<a href="bookSpec.php?b_id='.$rows['b_id'].'"alt="book" target="_self" class="more-book">MORE</a>';
			
			/*echo 'Title: ' . $rows['b_title'] . '<br />';
			echo 'Author: ' . $rows['b_author'] . '<br />';
			echo 'Publisher: ' . $rows['b_pub'] . '<br />';
			echo 'ISBN: ' . $rows['b_isbn'] . '<br />';
			echo 'Cover: <a href="bookSpec.php?b_id='.$rows['b_id'].'"alt="book" target="_blank"><img src="' . $rows['b_cover'] . '" /></a><br />';*/
			
			echo "</div>";
			echo "</div>";
		}
		
		/*if (isset($_GET['like'])) {
			$like = ($_GET['add']);
			$like_query = "SELECT *
						   FROM books";
		}*/
		
	mysql_close($db_server);
	
?>