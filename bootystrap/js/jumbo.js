$(function()
	{
		var jumbo = $('#jumbo');
		var title = $('#jumbo-title');
		var text = $("#jumbo-text");

	  	var backgrounds = ['url(img/earth2.jpg)', 'url(img/rocketJumbo.jpg)', 'url(img/supernova.jpg)'];
		var titles = ["Titel 1", "Titel 2", "Titel 3"];
		var texts = ["Photoshopped picture of earth like planet.", "Picture of a rocket.", "Supernova!"]

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