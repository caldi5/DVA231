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