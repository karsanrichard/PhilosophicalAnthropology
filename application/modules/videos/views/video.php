<!DOCTYPE html>
<html>
	<head>
	<meta name = 'viewport' content = "width=device-width, initial-scale = 1">
		<title>PHILOSOPHICAL ANTHROPOLOGY</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Flat-UI/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Flat-UI/css/flat-ui.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/video.css">
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/mediaelement/build/mediaelement-and-player.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/mediaelement/testforfiles.js"></script>	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mediaelement/build/mediaelementplayer.min.css" />   
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mediaelement/build/mejs-skins.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/semantic/packaged/css/semantic.css">
	</head>
	<body class = "menu">
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
		<div class = " videocontainer container-fluid">
		<!-- video section -->
		<div class = "video col-md-8" style="">
			<video width="820" height="430"  type="video/mp4" id="player1" controls="controls" preload="none" class="mejs-myskin">
				<source src = "<?php echo base_url()?>/assets/uploaded/videos/arsenal.mp4"/>
			</video>
			<div class="ui segment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.<div class="ui fitted divider"></div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</div>
			<div class="ui threaded comments comm">
  <div class="comment">
    <a class="avatar">
      <img src="/images/demo/avatar.jpg">
    </a>
    <div class="content">
      <a class="author">Dog Doggington</a>
      <div class="metadata">
        <span class="date">2 days ago</span>
      </div>
      <div class="text">
        I think this is a great idea and i am voting on it
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
        <a class="delete">Delete</a>
      </div>
    </div>
    <div class="comments">
      <div class="comment">
        <a class="avatar">
          <img src="/images/demo/avatar2.jpg">
        </a>
        <div class="content">
          <a class="author">Pawfin Dog</a>
          <div class="metadata">
            <span class="date">1 day ago</span>
          </div>
          <div class="text">
            I think this is a great idea and i am voting on it
          </div>
          <div class="actions">
            <a class="reply">Reply</a>
            <a class="delete">Delete</a>
          </div>
        </div>
        <div class="comments">
          <div class="comment">
            <a class="avatar">
              <img src="/images/demo/avatar.jpg">
            </a>
            <div class="content">
              <a class="author">Dog Doggington</a>
              <div class="metadata">
                <span class="date">20 minutes ago</span>
              </div>
              <div class="text">
                I think this is a great idea and i am voting on it
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
                <a class="delete">Delete</a>
              </div>
            </div>
          </div>
          <div class="comment">
            <a class="avatar">
              <img src="/images/demo/avatar.jpg">
            </a>
            <div class="content">
              <a class="author">Dog Doggington</a>
              <div class="metadata">
                <span class="date">20 minutes ago</span>
              </div>
              <div class="text">
                Also pizza.
              </div>
              <div class="actions">
                <a class="reply">Reply</a>
                <a class="delete">Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="comment">
        <a class="avatar">
          <img src="/images/demo/avatar.jpg">
        </a>
        <div class="content">
          <a class="author">Dog Doggington</a>
          <div class="metadata">
            <span class="date">2 days ago</span>
          </div>
          <div class="text">
            I think this is a great idea and i am voting on it
          </div>
          <div class="actions">
            <a class="reply">Reply</a>
            <a class="delete">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="comment">
    <a class="avatar">
      <img src="/images/demo/avatar.jpg">
    </a>
    <div class="content">
      <a class="author">Dog Doggington</a>
      <div class="metadata">
        <span class="date">20 hours ago</span>
      </div>
      <div class="text">
        I think this is a great idea and i am voting on it
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
  <div class="comment">
    <a class="avatar">
      <img src="/images/demo/avatar2.jpg">
    </a>
    <div class="content">
      <a class="author">Pawfin Dog</a>
      <div class="metadata">
        <span class="date">15 hours ago</span>
      </div>
      <div class="text">
        I think this is a great idea and i am voting on it
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
</div>
		</div>

		<aside class = "side col-md-3" style="">
			<div class="videothumb col-md-8">
		    	<a href="#" class="thumbnail" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
		      	<img src="<?php echo base_url()?>/assets/images/video.jpg" alt="...">
		    	</a>
	  		</div>

	  		<div class="videothumb col-md-8">
		    	<a href="#" class="thumbnail">
		      	<img src="<?php echo base_url()?>/assets/images/video.jpg" alt="...">
		    	</a>
	  		</div>

	  		<div class="videothumb col-md-8">
		    	<a href="#" class="thumbnail">
		      	<img src="<?php echo base_url()?>/assets/images/video.jpg" alt="...">
		    	</a>
	  		</div>

	  		<div class="videothumb col-md-8">
		    	<a href="#" class="thumbnail">
		      	<img src="<?php echo base_url()?>/assets/images/video.jpg" alt="...">
		    	</a>
	  		</div>
		</aside>
		</div>
<script>
$('audio,video').mediaelementplayer({
	success: function(player, node) {
		$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
	}
});

</script>
		<script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-1.8.3.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery-ui-1.10.3.custom.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.ui.touch-punch.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap-select.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/bootstrap-switch.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/flatui-checkbox.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/flatui-radio.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.tagsinput.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/Flat-UI/js/jquery.placeholder.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/semantic/packaged/javascript/semantic.js'?>"></script>
	</body>
</html>