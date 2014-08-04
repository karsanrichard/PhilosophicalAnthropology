<!DOCTYPE html>
<html>
	<head>
		<title>Human Sexuality and Freedom</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/kickstart/css/kickstart-buttons.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/kickstart/css/kickstart-grid.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/kickstart/css/prettify.css">
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/video.js"></script>
	</head>
	<body>
		<div class = "navbar">
			<div class = "title">
				<a href = ""><h3>VIDEOS SECTION</h3></a>
			</div>
		</div><!--end of navbar -->
		<div class = "content">
			<div class = "search-bar">
				<form method="post" action="" id = "search-box">
					<h2>SEARCH: </h2>
					<input type = "text" name = "videosearch" placeholder = "search video here" id = "search" />
					<button type = "submit" class = "green" id = "submit"><i class="icon-search"></i></button>
					<!-- <input type = "submit" name = "search" value = "Search" class = "blue" id = "submit"> -->
				</form>
			</div><!--end of searchbar -->
			<div class = "col_8">
				<div id = "video">
					<video id = "curr-vid" loop>
						<source src = "<?php echo base_url(); ?>assets/uploaded/videos/chris.mp4" />
					</video>
					<div id = "video-controls-bar">
						<a id = "play-pause"><i class = "icon-pause"></i></a>
						<input id = "seekslider" type = "range" min = "0" max = "100" value = "0" step = "1" />
						<span id = "curtimetext"></span> / <span id = "durtimetext"></span>
						<a id = "mutebtn"><i class = "icon-volume-up"></i></a>
						<input id = "volumeslider" type = "range" min = "0" max = "100" value = "100" step = "1"/>
						<a id = "fullscreenbtn"><i class = "icon-fullscreen"></i></a>
					</div>
				</div><!-- video -->
				<div class = "video-details">
					<img src = "<?php echo base_url(); ?>assets/uploaded/images/users/chris.jpg" width = "50" height = "50" />
					<a href = "" style = "color: black;">CHRISPINE OTAALO</a>
					<p>Posted: 2 years ago</p>
					<p class = "videotitle">TURN DOWN FOR WHAT LIL JOHN FT DJ SNAKE</p>
					<p class = "desc">Description</p>
					<article>
						This is a video by Lil John and DJ Snake... <br>
						This is a video by Lil John and DJ Snake... <br>
						This is a video by Lil John and DJ Snake... <br>
					</article>
				</div><!-- video-details -->
				<div class = "social-section">
				<ul class = "socialmenu">
					<li><a href = "" class = "mainbutton"><i class = "icon-thumbs-up"></i> Like</a></li>
					<li><a href = "" class = "mainbutton"><i class = "icon-thumbs-down"></i> Dislike</a></li>
					<li><a href = "" class = "mainbutton"><i class = "icon-share"></i> Share</a>
						<ul id = "social">
		 					<li><a href = "" class = "fb"><i class = "icon-facebook"></i> Facebook</a></li>
		 					<li><a href = "" class = "twit"><i class = "icon-twitter"></i> Twitter</a></li>
		 					<li><a href = "" class = "gp"><i class = "icon-google-plus"></i> Google Plus</a></li>
		 				</ul>
					</li>
 					<li><a href = "" class = "mainbutton"><i class = "icon-download-alt"></i> Download</a></li>
 				</ul>
				</div><!-- social-section -->
				<div class = "video-comments">
					<div class = "new-comment">
						<h3>Post a comment</h3>
						<textarea name = "user-comment"></textarea>
						<button type = "submit"  class = "red" id = "commentpost" name = "post_comment"><i class = "icon-upload"></i> Post Comment</button>
					</div>
					<div class = "other-comments">
						<div class = "single-user-comment">
							<div class = "ki">
								<div class = "parent-comment">
									<a href = ""><img class = "user-profile" src = "" height = "48" width = "48"></a>
									<div class = "more-user-details">
										<header class = "more-header">
											<h3 class = "user-name">
												<a href=""><span class = "synthesised">John Chrispine</span></a>
											</h3>
											<span class = "time">
												<span class = "inner-time">
													<a href="" class = "anchor-time">1 day ago</a>
												</span>
											</span>
											<div class = "haluwa"></div>
										</header>
										<div class = "after-header"></div>
										<div class = "actualtext">
											<article style = "color: red;">This is the message</article>
										</div>
									</div>
								</div>
								<div class = "child-comment"></div>
							</div>
						</div>
					</div>
				</div><!-- video-comments -->
			</div><!--currentvideo -->

			<div class = "featured-youtube col_4">
				<div id = "featured">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div><!-- featured -->

				<div id = "youtube">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div><!-- youtube -->
			</div><!--faetured-youtube -->

		</div><!--end of content -->
	</body>
</html>