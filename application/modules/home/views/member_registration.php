<!DOCTYPE html>
<html>
<head>
	<title>Member Registration</title>
	<meta name="author" content="Richard Seth Karsan|Medianover.com">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/home-custom.css">

</head>
<body>
<div class="container">
	<div class="reg-form">
		        <h4 style = "font-family: 'PT Sans Caption', sans-serif !important;" class="modal-title" id="myModalLabel"> Member Registration</h4>
		      <?php echo form_open('home/member_registration'); ?>

		      	<input type="text" class="form-control" name="fname" placeholder="First Name">
		      	<input type="text" class="form-control" name="sname" placeholder="Second Name">
		      	<input type="date" class="form-control" name="dob" placeholder="Date of Birth">
		      	<input type="text" class="form-control" name="email" placeholder="E-mail">
		      	<input type="password" class="form-control" name="pwd" placeholder="Password">
		      	<input type="password" class="form-control" name="pwd_retype" placeholder="Re-type Password">
		      	<input type="text" class="form-control" name="occupation" placeholder="Occupation/Proffesion">

		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-info">Register</button>
		        <?php echo form_close(); ?>
		      </div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/home_custom.js"></script>
</body>
</html>