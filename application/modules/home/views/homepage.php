<?php //echo $login_info;exit; ?>
<head>
<meta name="author" content="Richard Seth Karsan|Joshua Bakasa|Chrispine Otaalo ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/home-custom.css">
	<title>Human Sexuality & Freedom</title>
</head>
<body>
<div id="container">
<div id="main-image">
<div class="slogan clearfix">
	<h1>Beauty in Simplicity</h1><br>
	<p class="slogan-p">Lorem ipsum dolor sit amet.</p>
<div id="slogan-buttons">
	<!-- <a href="#" class="">Mission</a> -->

<div class="dropdown">
  <button class="slogan-buttons" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Selection
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Human Sexuality</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Human Freedom</a></li>
  </ul>
</div>
</div>

</div>

<div id="login" class="login animated display-none ">
<?php echo form_open('home/login'); ?>
	<input type="text" class="form-control float-left" name="username" placeholder="Username/Email"> 
	<input type="password" class="form-control float-left" name="password" placeholder = "Password">
     <button class="btn btn-default" id="member_login" type="submit">Login</button>
     <!-- <button class = "btn btn-default login_submit" id="member_register" type="button" data-toggle="modal" data-target="#myModal">Register</button> -->
     <a class = "btn btn-default login_submit" id="member_register" href="<?php echo base_url();?>home/reg_home">Register</a>
<?php echo form_close();?>

</div>



</div>


<div id="site-content" class="clearfix">
	<div id="menu" class="menu-custom" onclick="scrollDown()">
		<ul class="nav nav-pills" role="tablist">
		  	<li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
		  	<li><a href="#contact" role="tab" data-toggle="tab">Contact</a></li>
		  	<li><a href="#portfolio" role="tab" data-toggle="tab">Portfolio</a></li>
		  	<li><a href="#about" role="tab" data-toggle="tab">About</a></li>
		  	<li><a href="#history" role="tab" data-toggle="tab">Where We're From</a></li>
		</ul>
	</div>
	<div id="tab-content" class="tabs-custom">
	<div class="tab-pane fade in active" id="home">
		<div id="top-home-content">
			
		</div>
	</div>
	
	<div class="tab-pane fade clearfix" id="contact">
		<div class="contact-tab">
		<input type="text" class="form-control  float-left" name="username" placeholder="Username/Email"> 
		<input type="password" class="form-control float-left" name="pwd" placeholder = "Password">
		<input type="email" class="" placeholder="Enter your email adress here">
		<input type="text">
		<textarea class="" placeholder="Enter your message here"></textarea>
			
		</div>
	</div>
	
	<div class="tab-pane fade clearfix" id="portfolio">
		<p>qwertyui</p>
	</div>
	
	<div class="tab-pane fade clearfix" id="history">
		
	</div>
	
	<div class="tab-pane fade clearfix" id="about">
	
	</div>
	<!-- end of about div -->
	</div>
	<!-- end of tab content -->
	<div>
	<!-- end of site content -->
		
	</div>
	<footer>
		<small>&copy;Richard Seth Karsan | John Chrispine Otaalo | Bakasa Joshua (2014) This template is owned solely by OUR GROUP and can not be used or redistributed without purchase</small>
		<div class="back-to-top">
		<button type="button" onclick="scrollUp()" id="logout_button" disabled = "disabled" class="btn btn-default"><?php echo $login_info; ?> <span class = "glyphicon glyphicon-thumbs-up"></span></button>
		<?php 
			if ($login_status == 'TRUE') {
				echo '
				<a " onclick="scrollUp()" id="logout_button" href = "'.base_url().'home/logout" class="btn btn-default log_out"> Log Out <span class = "glyphicon glyphicon-thumbs-down"></span></a>


				';
			}elseif($login_status =='FALSE'){
				echo '
				<button type="button" onclick="scrollUp()" id="login_button" class="btn btn-default"> Login / Register <span class = "glyphicon glyphicon-user"></span></button>
				';
			}
		 ?>
			<button type="button" onclick="scrollUp()" id="back-to-top" class="btn btn-default"> Back to Top <span class = "glyphicon glyphicon-hand-up"></span></button>
		</div>
	</footer>

</div>
<!-- end of site content -->
</div>
<!-- end of container -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/home_custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
</body>