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
				echo '<h1>'.$row["title"].'</h1>';
				echo '<p>'.$row["text"].'</p>';
				echo '<i>By: '.$row["user"].'</i>';
			}
		}
		else
		{
			echo "No posts found! :(";
		}
	}
	else
	{
		header("Location: index.php");
	}
	


?>