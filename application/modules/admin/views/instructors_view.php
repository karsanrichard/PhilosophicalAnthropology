<html>
	<head>
		<title>Administrators Section</title>
		<link href="<?php echo base_url().'assets/Flat-UI/bootstrap/css/bootstrap.css' ?>" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="<?php echo base_url().'assets/Flat-UI/css/flat-ui.css' ?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/bootstrap/css/simple-sidebar.css' ?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css' ?>" rel="stylesheet">
			
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src = "<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

		<!--<script src="<?php echo base_url(); ?>assets/mediaelement/build/mediaelement-and-player.min.js"></script>-->
		<script src="<?php echo base_url(); ?>assets/mediaelement/testforfiles.js"></script>	
		<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mediaelement/build/mediaelementplayer.min.css" />   
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/mediaelement/build/mejs-skins.css" />-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/semantic/packaged/css/semantic.css">
	</head>
	<body>
		<div id="wrapper">
		        <!-- Sidebar -->
	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav">
	                <li class="sidebar-brand">
	                    <a href="#">
	                        Administrator`s Section
	                    </a>
	                </li>
	                <li>
	                    <a href="<?php echo base_url('admin') ?>">Dashboard</a>
	                </li>
	                <li>
	                    <a href="#">Shortcuts</a>
	                </li>
	                <li>
	                    <a href="<?php echo base_url().'admin/instructors' ?>">Instructors</a>
	                </li>
	            </ul>
	        </div>
	        <!-- /#sidebar-wrapper -->

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
						<a class = "navbar-brand" href = "#">Instructor`s Details</a>
					</div>

					<!-- Collect the nav links, forms and other content for toggling -->
					<div class = "collapse navbar-collapse" id = "my-navigation">
						<ul class = "nav navbar-nav">
							<li><a href ="">Home</a></li>				
							<li><a href="#menu-toggle" class="" id="menu-toggle">Hide/Show Side-bar</a></li>
						</ul>
					</div>
				</div>
			</nav>

			
			<div id="page-content-wrapper">
				
				<div>
					<div>
						<a href="javascript:void(null);" onclick="add_instructor();" class="btn btn-default"><span> Add Instructor</span></a>
					</div>
				</div>
				<br />
				<div>
					<?php 
						// print_r($instructors); die();

						if ($instructors != NULL) {
					?>
						<div>
							<table style="font-size:90%" id="" class="table table-bordered table-responsive">
								<thead>
									<tr>
										<td rowspan="2"><center>#</center></td>
										<td rowspan="2"><center>First Name</center></td>
										<td rowspan="2"><center>Second Name</center></td>
										<td rowspan="2"><center>Institution</center></td>
										<td rowspan="2"><center>Location</center></td>
										<td rowspan="2"><center>Email</center></td>
										<td rowspan="2"><center>Telephone</center></td>
										<td colspan="2"><center>Actions</center></td>
									</tr>
									<tr>
										<td><center>Status</center></td>
										<td><center>Edit</center></td>
									</tr>
								</thead>
								<tbody class="table striped">
									<?php
										$i=1;
										// print_r($instructors); die();
										foreach ($instructors as $values) {
									?>	
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $values['first_name']; ?></td>
											<td><?php echo $values['second_name']; ?></td>
											<td><?php echo $values['institution']; ?></td>
											<td><?php echo $values['location']; ?></td>
											<td><?php echo $values['email']; ?></td>
											<td><?php echo $values['phone']; ?></td>

											<?php
												if ($values['status'] == 1) {
												 	$class = "glyphicon glyphicon-ok-sign";
												 	$color = "#34AE11";
												 } else if ($values['status'] == 2) {
												 	$class = "glyphicon glyphicon-remove-sign";
												 	$color = "#F13A3A";
												 }
												  
											?>
											<td>
												<center>
												<span class="<?php echo $class;?>" style="color: <?php echo $color; ?>" ></span>
												</center>
											</td>
											<td>
												<center>
												<a href="javascript:void(null);" onclick="edit_instructor(<?php echo $values['id'];?>,'<?php echo $values['first_name'];?>','<?php echo $values['second_name'];?>','<?php echo $values['institution'];?>','<?php echo $values['location'];?>','<?php echo $values['email'];?>','<?php echo $values['phone'];?>','<?php echo $values['status'];?>')"><span class="glyphicon glyphicon-pencil" style="color: #70D3E9;"></span></a>
												</center>
											</td>
										</tr>	
									<?php
										$i++;
										}
									?>
									
								</tbody>
							</table>
						</div>
					<?php 
						} else {
					?>
						<div>
							<table>
								<thead>
									<tr>
										<td rowspan="2">#</td>
										<td rowspan="2">First Name</td>
										<td rowspan="2">Second Name</td>
										<td rowspan="2">Institution</td>
										<td rowspan="2">Location</td>
										<td rowspan="2">Email</td>
										<td rowspan="2">Telephone</td>
										<td colspan="2">Actions</td>
									</tr>
									<tr>
										<td>Status</td>
										<td>Edit</td>
									</tr>
								</thead>
								<tbody>
									<td colspan="9"><center> No data available in this table...</center></td>
								</tbody>
							</table>
						</div>
					<?php		
						}
					?>	
					
					
				</div>
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
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;" >First Name:</span>
							<input class="textfield form-control" type="text" name="first_name" id="first_name" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Second Name: </span>
							<input class="textfield form-control" type="text" name="second_name" id="second_name" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Other Name: </span>
							<input class="textfield form-control" type="text" name="other_name" id="other_name" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Date of Birth: </span>
							<input class="textfield form-control" type="date" name="DOB" id="DOB" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Institution: </span>
							<input class="textfield form-control" type="text" name="institution" id="institution" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Location: </span>
							<input class="textfield form-control" type="text" name="location" id="location" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">@Email: </span>
							<input class="textfield form-control" type="text" name="email" id="email" required/>
						</div>
						<div class="input-group" style="width: 100%;padding:4px;">
							<span class="input-group-addon" style="width: 40%;">Phone Number: </span>
							<input class="textfield form-control" type="text" name="phone" id="phone" required/>
						</div>
						<div style="">
							<button type="submit" class="btn btn-default"> Save User</button>
						</div>
								
					</div>
				</form>
				<div class="modal-footer" style="height:11px;padding-top:11px;">
	      			<?php echo $this->config->item("copyrights");?>
	      		</div> 
	      	</div>
		</div>
	</div>
</div>

<div class="modal fade" id="instructordiv">
	<div class="modal-dialog" style="width:60%;margin-bottom:2px;">
		<div class="modal-content" >
			<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    		<h5 class="modal-title">Edit Instructor</h5>
	  		</div>
			<div class="modal-body" style="padding-bottom:0px;">	
				<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> First Name:</span>
						<input id="editfname" name="email" class="textfield form-control" />	
		        </div>
				<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> Second Name:</span>
						<input id="editsname" name="email" class="textfield form-control" />	
		        </div>
		        <div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> Institution:</span>
						<input id="editinst" name="email" class="textfield form-control" />	
		        </div>
		        <div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> Location:</span>
						<input id="editlocal" name="email" class="textfield form-control" />	
		        </div>
				<div class="input-group" style="width: 100%;padding:4px;">
						<span class="input-group-addon" style="width: 40%;"> email:</span>
						<input id="editemail" name="email" class="textfield form-control" />	
		        </div>
				<div class="input-group" style="width: 100%;padding:4px;">
					<span class="input-group-addon" style="width: 40%;">Telephone:</span>
					<input id="editphone" name="phone" class="textfield form-control" />	
		        </div>
				<div class="input-group" style="width: 100%;padding:4px;">
					<span class="input-group-addon" style="width: 40%;"> Status :</span>
					<span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="1">  Active  <span style="font-size: 1.4em;color: #3e8f3e;" class="glyphicon glyphicon-ok-sign"></span></input></span>
					<span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="2">  Deactivate <span style="font-size: 1.4em;color: #eb9316;" class="glyphicon glyphicon-remove-sign"></span></input></span>
	            </div>				
				<div class="modal-footer" style="height:11px;padding-top:11px;">
	      			<?php echo $this->config->item("copyrights");?>
	      		</div> 
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
    <script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.min.js' ?>"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    function add_instructor () {
			$("#addinstructor").modal("show");
		}

	function edit_instructor(id,fname,sname,institution,location,email,phone,status){

		var str = "#tr_"+id;

		var row = $(str).html();

		$("#edit_table_details").html(row);

		$("#editfacilityid").val(id);
		$("#editfname").val(fname);
		$("#editsname").val(sname);
		$("#editinst").val(institution);
		$("#editlocal").val(location);
		$("#editemail").val(email);
		$("#editphone").val(phone);
			


		$('input[name=editstatus][value=1]').prop('checked', false);
		$('input[name=editstatus][value=2]').prop('checked', false);
		$('input[name=editstatus][value=3]').prop('checked', false);

		$('input[name=editstatus][value='+status+']').prop('checked', true);


			
		$("#instructordiv").modal("show");

	}
    </script>

	</body>
</html>