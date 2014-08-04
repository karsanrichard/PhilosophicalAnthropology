var vid, playbtn, seekbar, curtimetext, durtimetext, mutebtn, volumeslider, fullscreenbtn;

window.onload = initializePlayer;

function initializePlayer()
{
	//set object references
	vid = document.getElementById('curr-vid');
	playbtn = document.getElementById('play-pause');
	seekbar = document.getElementById('seekslider');
	curtimetext = document.getElementById('curtimetext');
	durtimetext = document.getElementById('durtimetext');
	mutebtn = document.getElementById('mutebtn');
	volumeslider = document.getElementById('volumeslider');
	fullscreenbtn = document.getElementById('fullscreenbtn');

	//add event listeners
	playbtn.addEventListener("click", playpause, false);
	seekbar.addEventListener("change", vidSeek, false);
	vid.addEventListener("timeupdate", seektimeupdate, false);
	mutebtn.addEventListener("click", vidmute, false);
	volumeslider.addEventListener("change", setvolume, false);
	fullscreenbtn.addEventListener("click", togglefullscreen, false);
}

function playpause()
{
	if(vid.paused)
	{
		vid.play();
		playbtn.innerHTML = "<i class = 'icon-pause'></i>";
	}
	else
	{
		vid.pause();
		playbtn.innerHTML = "<i class = 'icon-play'></i>";
	}
}

function vidSeek()
{
	var seekto = vid.duration * (seekbar.value/100);
	vid.currentTime = seekto;
}

function seektimeupdate()
{
	var nt = vid.currentTime * (100/vid.duration);
	seekslider.value = nt;
	var curmins = Math.floor(vid.currentTime / 60);
	var cursecs = Math.floor(vid.currentTime - curmins * 60);
	var durmins = Math.floor(vid.duration / 60);
	var dursecs = Math.floor(vid.duration - durmins * 60);

	if (cursecs < 10){ cursecs = "0" + cursecs; }
	if (curmins < 10){ curmins = "0" + curmins; }
	if (dursecs < 10){ dursecs = "0" + dursecs; }
	if (durmins < 10){ durmins = "0" + durmins; }



	curtimetext.innerHTML = curmins + ":" + cursecs;
	durtimetext.innerHTML = durmins + ":" + dursecs;
}

function vidmute()
{
	if(vid.muted)
	{
		vid.muted = false;
		mutebtn.innerHTML = "<i class = 'icon-volume-down'></i>";
	}
	else
	{
		vid.muted = true;
		mutebtn.innerHTML = "<i class = 'icon-volume-off'></i>";
	}
}

function setvolume()
{
	vid.volume = volumeslider.value / 100;
}

function togglefullscreen()
{
	if (vid.requestFullScreen)
	{
		vid.requestFullScreen();
	}
	else if (vid.webkitRequestFullScreen)
	{
		vid.webkitRequestFullScreen();
	}
	else if (vid.mozRequestFullScreen)
	{
		vid.mozRequestFullScreen();
	}
	else if (vid.msRequestFullScreen)
	{
		vid.msRequestFullscreen();
	}
}