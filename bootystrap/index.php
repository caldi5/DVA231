<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NASA - Bootstrap</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

		<style type="text/css">

		</style>
	</head>
	<body>
		<!-- ta bort navbar-inverse för att göra den transparent, fuckar dock styling -->
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
			<div class="row" >
				<div class="col-lg-12">
					<div id="jumbo" class="item jumbo col-md-12">
						<div class="image-container">
							<h2 class="image-title" id="jumbo-title">Hola</h2>
							<p class="image-text" id="jumbo-text">muble jumble humble dumble tumblemuble jumble humble dumble tumblemuble
							</p>
						</div>
					</div>
				</div>
				<div class="col-sx-12 col-sm-6 col-md-3">
					<div class="item text-item col-md-12">
						<div class="text-container">
							<div class="text-container-header">
								<h3>Fancy title</h3>
							</div>
							<div class="text-container-content">
								<p>muble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumble</p>
							</div>
							<div class="text-container-footer">
								<a href="#">Other stuff</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sx-12 col-sm-6 col-md-3">
					<div class="item news-item col-md-12">
						<div class="image-container">
							<h2 class="image-title">Hola</h2>
							<p class="image-text">
								muble jumble humble dumble tumblemuble jumble
								<span class="cont">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
								</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sx-12 col-sm-6 col-md-6">
					<div class="item double col-md-12">
						<div class="double-square">
						</div>
						<div class="double-image">
							<img src="https://pbs.twimg.com/profile_images/562466745340817408/_nIu8KHX.jpeg">
						</div>
						<div class="double-text">
							<h2>Hey, What's up?</h2>
							<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
						</div>
					</div>
				</div>
				<div class="col-sx-12 col-sm-6 col-md-3">
					<div class="item col-md-12">Small</div>
				</div>
				<div class="col-sx-12 col-sm-6 col-md-6">
					<div class="item col-md-12">Double</div>
				</div>
				<div class="col-sx-12 col-sm-6 col-md-3">
					<div class="item col-md-12">Small</div>
				</div>
			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>