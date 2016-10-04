<?php
	require_once "dbconn.php";

	if (isset($_GET["q"]))
	{
		$query = $_GET["q"];
		$sql = "SELECT * FROM news WHERE (user LIKE '%$query%'
		OR title LIKE '%$query%'
		OR text LIKE '%$query%'
		)";

		$results = $conn->query($sql);

		if ($results->num_rows > 0)
		{
			while ($row =  $results->fetch_assoc())
			{
				$text = $row["text"];
				echo '<a href="article.php?id='.$row["id"].'">';
				echo '<li>';
				if (strlen($text) <= 25)
				{
					echo $text;
				}
				else
				{
					$text = substr($text, 0, 25).'..';
					echo $text;
				}
				echo '</li>';
				echo '</a>';
			}
		}
	}
	else
	{
		header("Location: index.php");
	}

?>