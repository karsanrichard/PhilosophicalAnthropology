$(document).ready(function(){
	var win_width = $(window).width();
	var win_height = $(window).height();
$('.toggle-button').click(function(){
	//$('#nav-menu').toggleClass('active');
	$('#nav-menu').sidebar('toggle');
});
// $('')
	//$('sidebar').first().sidebar('attach events','.toggle.button');
// fullscreen
	//$('.ui.sidebar').sidebar('toggle');
;
})
function scrollDown(){
	window.scrollTo(0,620);
}

function scrollUp(){
	window.scrollTo(1000,0);
}