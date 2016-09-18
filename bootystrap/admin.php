<?php
	session_start();
	if(!isset($_SESSION["username"]))
		header("location: login.php");;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NASA - Bootstrap</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="index.php">Index</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php">Logout</a></li>";
					</ul>
				</div>
			</nav>

		<div class="container">
			<h1>New Newstory</h1>
			<form method="post">
				<div class="form-group">
				  <label>Select news type:</label>
				  <select class="form-control" name="newsType">
				    <option>Jumbotron</option>
				    <option>Double</option>
				    <option>Single</option>
				  </select>
				</div>
				<div class="form-group">
					<label>Title:</label>
					<input type="text" class="form-control" name="title" placeholder="Chose a title" required autofocus>
				</div>
				<div class="form-group">
					<label>text</label>
					<textarea class="form-control" rows="5" name="mainText"></textarea>
				</div>
				<div class="form-group">
					<label>Upload an image</label>
					<input type="file" class="form-control" name="image">
				</div>
				<div class="form-group">
				  <label>Select category:</label>
				  <select class="form-control" name="category">
				    <option>Category 1</option>
				    <option>Category 2</option>
				    <option>Category 3</option>
				    <option>Category 4</option>
				  </select>
				</div>	
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="newsUpload">Submit</button>
			</form>
		</div>
	</body>
</html>
