$(document).ready(function(){
	var win_width = $(window).width();
	var win_height = $(window).height();
	$('.menu-links1').click(function(){
		$('.fullscreen1').width(win_width);
		$('.fullscreen1').height(win_height);
	});

	$('.menu-links2').click(function(){
		$('.fullscreen2').width(win_width);
		$('.fullscreen2').height(win_height);
	});

	$('.menu-links3').click(function(){
		$('.fullscreen3').width(win_width);
		$('.fullscreen3').height(win_height);
	});
// fullscreen
	$('.ui.sidebar').sidebar('toggle');
;
})
function scrollDown(){
	window.scrollTo(0,620);
}

function scrollUp(){
	window.scrollTo(1000,0);
}