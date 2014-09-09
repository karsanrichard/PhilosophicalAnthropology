<html>
	<head>
		<title>Administrators Section</title>
		<link href="<?php echo base_url().'assets/Flat-UI/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="<?php echo base_url().'assets/Flat-UI/css/flat-ui.css' ?>" rel="stylesheet">
			
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/mediaelement/build/mediaelement-and-player.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/mediaelement/testforfiles.js"></script>	
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mediaelement/build/mediaelementplayer.min.css" />   
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mediaelement/build/mejs-skins.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/semantic/packaged/css/semantic.css">
		<script type="text/javascript">
		function add_instructor () {
			$("#addinstructor").modal("show");
		}
		</script>

	</head>
	<body>

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
							<li class = "dropdown"><a href ="" class = "dropdown-toggle" data-toggle = "dropdown">Topics<span class = "caret"></span></a>
								<ul class = "dropdown-menu" role = "menu">
									<li><a href = "">Human Freedom</a></li>
									<li><a href = "">Human Sexuality</a></li>
									
								</ul>
							</li>
							<li><a href ="">My Videos</a></li>
							<li><a href ="">Online</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div>
				<div>
					<button><a href="javascript:void(null);" onclick="add_instructor();"><span> Add Instructor</span></a></button>
				</div>
			</div>


<div class="modal fade" id="addinstructor">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    		<h5 class="modal-title">Add Instructor</h5>
	  		</div>
			<div class="modal-body" style="padding-bottom:0px;">	
				<?php echo form_open(base_url().'admin/add_instructor') ?>
						<div>
							<table cellpadding="4px" cellspacing="4px">
								<tr>
								<div>
									<td><span>First Name: </span></td>
									<td><input type="text" name="first_name" id="first_name" required/></td>
								</div>
								<div>
									<td><span>Second Name: </span></td>
									<td><input type="text" name="second_name" id="second_name" required/></td>
								</div>
								</tr>
								<tr>
								<div>
									<td><span>Other Name: </span></td>
									<td><input type="text" name="other_name" id="other_name" required/></td>
								</div>
								<div>
									<td><span>Date of Birth: </span></td>
									<td><input type="date" name="DOB" id="DOB" required/></td>
								</div>
								</tr>
								<tr>
								<div>
									<td><span>Institution: </span></td>
									<td><input type="text" name="institution" id="institution" required/></td>
								</div>
								<div>
									<td><span>Location: </span></td>
									<td><input type="text" name="location" id="location" required/></td>
								</div>
								</tr>
								<tr>
								<div>
									<td><span>Email: </span></td>
									<td><input type="text" name="email" id="email" required/></td>
								</div>
								<div>
									<td><span>Phone Number: </span></td>
									<td><input type="text" name="phone" id="phone" required/></td>
								</div>
								</tr>
								<tr>
									<td colspan="4">
										<div style="">
											<input type="submit" name="save" value="Save User"  required/>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</form>

			<div class="modal-footer" style="height:11px;padding-top:11px;">
      			<?php echo $this->config->item("copyrights");?>
      		</div> 
		</div>
	</div>
</div>



	<script src="<?php echo base_url().'assets/Flat-UI/js/jquery-1.8.3.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/jquery-ui-1.10.3.custom.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/jquery.ui.touch-punch.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/bootstrap-select.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/bootstrap-switch.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/flatui-checkbox.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Fla-UI/js/flatui-radio.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/jquery.tagsinput.js' ?>"></script>
    <script src="<?php echo base_url().'assets/Flat-UI/js/jquery.placeholder.js' ?>"></script>
	</body>
</html>