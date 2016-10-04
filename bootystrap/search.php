<?php
	require_once "dbconn.php";

	if (isset($_GET["q"]))
	{
		$query = $_GET["q"];
		$sql = "SELECT * FROM news WHERE (user LIKE '%$query%'
		OR title LIKE '%$query%'
		OR text LIKE '%$query%'
		) LIMIT 4";

		$results = $conn->query($sql);

		if ($results->num_rows > 0)
		{
			while ($row =  $results->fetch_assoc())
			{
				$title = $row["title"];
				echo '<a href="article.php?id='.$row["id"].'">';
				echo '<li>';
				if (strlen($title) <= 25)
				{
					echo $title;
				}
				else
				{
					$title = substr($title, 0, 25).'..';
					echo $title;
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