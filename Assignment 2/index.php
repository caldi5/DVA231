<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>NASA</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		<script type="text/javascript">
			$(function()
				{
					var jumbo = $('#jumbo');
					var title = $('#jumbo-title');
					var text = $("#jumbo-text");

				  	var backgrounds = ['url(img/earth2.jpg)', 'url(img/rocketJumbo.jpg)', 'url(img/supernova.jpg)'];
					var titles = ["Titel 1", "Titel 2", "Titel 3"];
					var texts = ["Photoshopped picture of earth like planet.", "Picture of a rocket.", "Supernova!"]

					<?php
						if (isset($_GET['image']) && isset($_GET['title']) && isset($_GET['text']))
						{
							$image = $_GET['image'];
							$title = $_GET['title'];
							$text = $_GET['text'];


							echo 'backgrounds.push("url(img/'. $image .'.png)");';
							echo 'titles.push("'.$title.'");';
							echo 'texts.push("'.$text.'");';
						}
					?>

					var current = 0;

					function nextBackground()
					{
						jumbo.css('background-image', backgrounds[current = ++current % backgrounds.length]);
					  	title.html(titles[current]);
					  	text.html(texts[current]);
					 	setTimeout(nextBackground, 3000);
					}

					setTimeout(nextBackground, 3000);
					jumbo.css('background-image', backgrounds[0]);
					title.html(titles[0]);
					text.html(texts[0]);
				});
		</script>

	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<div class="logo">
					<a href="index.html"><img src="img/logo.png"></a>
				</div>

				<div class="navbar">
				<div class="search">
						<form action="index.html" method="get">
							<input type="search" name="q" placeholder="Search">
						</form>
					</div>
					<div class="links">
						<ul>
							<li><a href="#">Missions</a></li>
							<li><a href="#">Galleries</a></li>
							<li><a href="#">NASA TV</a></li>
							<li><a href="#">Follow NASA</a></li>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">NASA Audiences</a></li>
						</ul>
					</div>
				</div>

				<div class="menu">
					<ul>
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

			<div class="content">
				<div class="item jumbo" id="jumbo">
					<div class="image-container">
						<h2 class="image-title" id="jumbo-title">Hola</h2>
						<br>
						<p class="image-text" id="jumbo-text">
							muble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumble
						</p>
					</div>
				</div>
				<div class="item text">
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
				<div class="item news" onmouseover="newsText()">
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
				<div class="item double ">
									<div class="test">
					</div>
					<div class="double-image">
						<img src="https://pbs.twimg.com/profile_images/562466745340817408/_nIu8KHX.jpeg">
					</div>
					<div class="double-text">
						<h2>Hola me llamo André</h2>
						<p>muble jumble humble dumble tumblemuble jumble humble dumble tumblemuble jumble humble dumble tumble</p>
					</div>
				</div>
				<div class="item">
					<video onclick="playPause()" id="video1" width="300px" height="300px">
						<source src="video/vid1.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					<img onclick="playPause()" id="playImageButton" class="video-image" src="img/play.png">

					<script type="text/javascript">
						var myVideo = document.getElementById("video1");
						var playImage = document.getElementById("playImageButton");

						function playPause()
						{
							if (myVideo.paused)
							{
								playImage.style.display = "none";
								myVideo.setAttribute("controls", "");
								myVideo.play();
							}
							else
							{
								playImage.style.display = "initial";
								myVideo.removeAttribute("controls");
								myVideo.pause();
							}
						}
					</script>

				</div>
				<div class="item double">
					<img src="img/kitten.jpg">
				</div>
				<div class="item">
			        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/NASA" data-widget-id="332858661187751936">Tweets by @NASA</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</div>
	</body>
</html>
