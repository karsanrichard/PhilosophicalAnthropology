<!DOCTYPE html>
<html>
	<head>
		<title>Human Sexuality and Freedom</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src = "<?php echo base_url();?>assets/jquery/jquery.js"></script>
		<script type="text/javascript" src = "<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src = "<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>
		<form class = "well" method = "POST" action = "login">
			<input name = "username" type = "text" title = "Enter your User Name Here" placeholder = "User Name Here" required/><br/>
			<input name = "password" type = "Password" title = "Enter your Password Here" required/>
			<br/>
			<input type = "submit" value = "Login" name = "login" class = "btn"/>
		</form>
	</body>
</html>