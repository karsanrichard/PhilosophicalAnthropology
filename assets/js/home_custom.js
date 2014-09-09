$(document).ready(function(){
//variables for setting image and window height
var win_width = $(window).width();
var win_height = $(window).height();
var main_img = $("#main-image").height();
//hiding main image
$("#tab-content").hide();
$("#login").addClass("fadeOutUp");

$("#login_button").click(function(){
	if ($("#login").hasClass("fadeOutUp")) {
	$("#login").removeClass("fadeOutUp");
	$("#login").removeClass("display-none");
	$("#login").addClass("fadeInDown");

	}else{
	$("#login").removeClass("fadeInDown");	
	$("#login").addClass("fadeOutUp");
	// $("#login").hide();
	};
});

$("#menu").click(function(){
	$("#tab-content").show();
	window.scrollTo(0,win_height);
});

// #home,#contact,#portfolio,#history,#about
$("#home,#contact,#portfolio,#history,#about").width(win_width);
$("#home,#contact,#portfolio,#history,#about").height(win_height);
});

function scrollDown(){
	window.scrollTo(0,620);
}

function scrollUp(){
	window.scrollTo(1000,0);
}