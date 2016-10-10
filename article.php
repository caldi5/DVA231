<?php 

session_start(); 
require_once "dbconn.php";

if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['image']))
{
	$image = $_POST['image'];
	$title = $_POST['title'];
	$text = $_POST['text'];
	$author = "Admin";
}
elseif (isset($_GET["id"])) 
{
	$id = $_GET["id"];
	$sql = "SELECT * FROM news WHERE id = $id";
	$results = $conn->query($sql);
	$row =  $results->fetch_array();

	$image = $row["imagepath"];
	$title = $row["title"];
	$text = $row["text"];
	$author = $row["user"];
}
else
{
	$image = 'img/beer.jpg';
	$title = "Title";
	$text = "Text";
	$author = "Admin";
}


?>


<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/favicon.ico">
		<title>NASA - Bootstrap</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		<style type="text/css">
			.container
			{
				height: 100%;
			}
			{

			}
			.article-title
			{
				color: white;
				border-bottom: 1px solid white;
				display: inline-block;
				padding-right: 20px;
			}
			.article-text
			{
				color: white;
			}
		</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
				<a class="navbar-left" href="index.php">
					<img src="img/logo.png">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="row">
					<ul class="links nav navbar-nav navbar-right">
						<li><a href="#">Missions</a></li>
						<li><a href="#">Galleries</a></li>
						<li><a href="#">NASA TV</a></li>
						<li><a href="#">Follow NASA</a></li>
						<li><a href="#">Downloads</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">NASA Audiences</a></li>
						<?php
						if(isset($_SESSION["username"]))
						{
							echo "<li><a href=\"admin.php\">Admin Page</a></li>";
							echo "<li><a href=\"logout.php\">Logout</a></li>";
						}
						else
							echo "<li><a href=\"login.php\">Login</a></li>";
						?>
					</ul>
				</div>
				<div class="row">
					<ul class="menu nav navbar-nav navbar-right">
						<li><a href="#">International Space Station</a></li>
						<li><a href="#">Journey to Mars</a></li>
						<li><a href="#">Earth</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Aeronautics</a></li>
						<li><a href="#">Solar System and Beyond</a></li>
						<li><a href="#">Education</a></li>
						<li><a href="#">Education</a></li>
						<li><a href="#">Benefits to You</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<img style="max-width: 75%;" src=<?php echo '"'.$image.'";'; ?>><br>
		<h1 class="article-title"><?php echo $title; ?></h1>
		<p class="article-text"><?php echo $text; ?></p>
		<i>Written by: <?php echo $author; ?></i>
	</div>
</body>
</html>