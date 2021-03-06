<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Instructors</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url().'assets/css/fonts/fontawesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url().'assets/css/ionicons/css/ionicons.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url().'assets/css/asap/asap.css'?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url().'assets/css/jvectormap/jquery-jvectormap-1.2.2.css'?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url().'assets/css/datepicker/datepicker3.css'?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url().'assets/css/daterangepicker/daterangepicker-bs3.css'?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url().'assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href = "<?php echo base_url().'assets/css/admin.css'?>" rel = "stylesheet" type = "text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin Dashboard
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url().'assets/images/img/avatar3.png'?>" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url().'assets/images/img/avatar2.png'?>" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-warning-sign"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url().'assets/images/img/avatar3.png'?>" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url().'assets/images/img/avatar3.png'?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="glyphicon glyphicon-ok-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="<?php echo base_url(). 'admin'?>">
                                <i class="fa fa-tachometer"></i> <span>Home</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url().'admin/Instructors'?>">
                                <i class="fa fa-mortar-board"></i> <span>Instructors</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/members'?>">
                                <i class="fa fa-users"></i><span>Members</span>   
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(). 'admin/users'?>">
                                <i class="fa fa-user"></i> <span>Users</span>
                               
                            </a>
                            
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url().'admin/mail_box' ?>">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/logout') ?>">
                                <i class="fa fa-lock"></i> <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Instructors` Details
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Instructors</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                                               
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-11 connectedSortable">                            

                            <!-- Calendar -->
                            <div class="box box-solid ">
                                <div class="box-header">
                                    <i class="ion ion-person-add"></i>
                                    <h3 class="box-title">Instructors Information</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        
                                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                                                                
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body yes-padding">
                                <?php 
                                    // print_r($instructors); die();

                                    if ($instructors != NULL) {
                                ?>
                                    <div class="table-responsive">
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
                                            <tbody class="">
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
                                    <div  class="table-responsive">
                                        <table style="font-size:90%" id="" class="table table-bordered table-responsive">
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
                                                
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->                            

                        </section><!-- right col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                       
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

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
            <?php echo form_open(base_url().'admin/edit_instructor'); ?>
                <div class="input-group" style="width: 100%;padding:4px;">
                        <span class="input-group-addon" style="width: 40%;"> First Name:</span>
                        <input id="editfname" name="editfname" class="textfield form-control" />    
                </div>
                <div class="input-group" style="width: 100%;padding:4px;">
                        <span class="input-group-addon" style="width: 40%;"> Second Name:</span>
                        <input id="editsname" name="editsname" class="textfield form-control" />    
                </div>
                <div class="input-group" style="width: 100%;padding:4px;">
                        <span class="input-group-addon" style="width: 40%;"> Institution:</span>
                        <input id="editinst" name="editinst" class="textfield form-control" />  
                </div>
                <div class="input-group" style="width: 100%;padding:4px;">
                        <span class="input-group-addon" style="width: 40%;"> Location:</span>
                        <input id="editlocal" name="editlocal" class="textfield form-control" />    
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
            </form>
            </div>
        </div>
    </div>
</div>



        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url().'assets/js/plugins/morris/morris.min.js'?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url().'assets/js/plugins/sparkline/jquery.sparkline.min.js'?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url().'assets/js/plugins/jqueryKnob/jquery.knob.js'?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url().'assets/js/plugins/daterangepicker/daterangepicker.js'?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url().'assets/js/plugins/datepicker/bootstrap-datepicker.js'?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url().'assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url().'assets/js/plugins/iCheck/icheck.min.js'?>" type="text/javascript"></script>

        <!-- Admin App -->
        <script src="<?php echo base_url().'assets/js/admin/app.js'?>" type="text/javascript"></script>

        <!-- Admin dashboard demo (This is only for demo purposes)  -->
        <script src="<?php echo base_url().'assets/js/admin/dashboard.js'?>" type="text/javascript"></script>

        <!-- Admin for demo purposes -->
        <script src="<?php echo base_url().'assets/js/admin/demo.js'?>" type="text/javascript"></script>

        <script type="text/javascript">
        function add_instructor () {
            $("#addinstructor").modal("show");
        }

      
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
            

            $('input[name=editstatus][value='+status+']').prop('checked', true);


                
            $("#instructordiv").modal("show");

        }
        </script>

    </body>
</html>