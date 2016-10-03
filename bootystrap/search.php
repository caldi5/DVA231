<?php
	require_once "dbconn.php";

	$query = "select * from news";
	$results = $conn->query($query);

	if ($results->num_rows > 0)
	{
		while ($row =  $results->fetch_assoc())
		{
			echo '<h1>'.$row["title"].'</h1>';
			echo '<p>'.$row["text"].'</p>';
			echo '<i>By: '.$row["user"].'</i>';
		}
	}
?>