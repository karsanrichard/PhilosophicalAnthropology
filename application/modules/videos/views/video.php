<!DOCTYPE html>
<html>
	<head>
		<title>PHILOSOPHICAL ANTHROPOLOGY</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/video.css">
		<script type="text/javascript" src = "<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>/assets/js/jquery.js"></script>
	</head>
	<body>
		<!-- Navigation Bar -->
		<nav class = "navbar navbar-default" role = "navigation">
			<div class = "container-fluid">
				<!--Brand and toggle get grouped for better mobile-display-->
				<div class = "navbar-header">
					<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#my-navigation">
						<span class = "sr-only">Toggle Navigation</span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>
					<a class = "navbar-brand" href = "#">VIDEOS</a>
				</div>

				<!-- Collect the nav links, forms and other content for toggling -->
				<div class = "collapse navbar-collapse" id = "my-navigation">
					<ul class = "nav navbar-nav">
						<li><a href ="">Home</a></li>
						<li class = "dropdown"><a href ="" class = "dropdown-toggle" data-toggle = "dropdown">Categories<span class = "caret"></span></a>
							<ul class = "dropdown-menu" role = "menu">
								<li><a href = "">Education</a></li>
								<li><a href = "">Documentaries</a></li>
								<li><a href = "">Not Categorised</a></li>
							</ul>
						</li>
						<li><a href ="">My Videos</a></li>
						<li><a href ="">Online</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!--End of Navigation Bar-->

		<!-- video section -->
		<div class = "video-container">
			<video controls>
				<source src = "<?php echo base_url()?>/assets/uploaded/videos/summer.mp4"/>
			</video>
			<div class = "video-controls">

			<a id = "play-pause">Play</a>
			<input id = "seekslider" type = "range" min = "0" max = "100" value = "0" step = "1"/>
			<a id = "volume-toggle">Volume</a>
			<a id = "toggle-screen">[]</a>
			</div>
		</div>
	</body>
</html>