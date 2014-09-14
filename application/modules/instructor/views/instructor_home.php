<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Instructor | Dashboard</title>
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
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Instructor's Page
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
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo ($this->session->userdata('full_name'));?><i class="caret"></i></span>
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

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
                        <li class="active">
                            <a href="<?php echo base_url(). 'instructor'?>">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'questions/set_questions'?>">
                                <i class="fa fa-question"></i> <span>Questions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ion ion-ios7-paper-outline"></i>
                                <span>Quizes taken</span>
                            </a>
                        </li>
                        <li>
                        	<a id = "un" style = "cursor: pointer;"><i class = "fa fa-upload"></i> <span>Upload Notes</a></span>
                        </li>
                        <li>
                            <a href="<?php echo base_url() .'videos'?>">
                                <i class="fa fa-video-camera"></i>
                                <span>Videos</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>                                
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-lock"></i> <span>Log out</span>
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
                        Instructor Home Page
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Instructor Home Page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Upload
                                    </h3>
                                    <p>
                                        Notes
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-upload"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        Questions
                                    </h3>
                                    <p>
                                        Set Questions
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-paper-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        Upload
                                    </h3>
                                    <p>
                                        videos
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-videocam"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        Report
                                    </h3>
                                    <p>
                                        problem
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-minus-circled"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">                                                      

                            <!-- quick email widget -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-envelope"></i>
                                    <h3 class="box-title">Quick Email</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div>
                                <div class="box-body">
                                    <form action="<?php echo base_url(). 'admin/email_details'?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="recipient" placeholder="Email to:"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <textarea class="textarea" name = "message" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                </div>
                                <div class="box-footer clearfix">
                                    <button class="pull-right btn btn-default" id="sendEmail" type = "submit">Send <i class="fa fa-arrow-circle-right"></i></button>
                                    </form>
                                </div>
                            </div>

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">                            

                        <!-- Report problem -->
                        <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Report your Problem Here</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form id = "instruct" action="instructor/send_error" method = "POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name = "subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea type="password" class="form-control" id="message" placeholder="Type message here" name="message"></textarea>
                                        </div>
                                        <div><span id = "result"></span></div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button class="btn btn-primary" type = "submit" id = "sendError"><i class = "ion ion-android-send"></i> Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->                         

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <div id="upload_notes" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class = "ion ion-ios7-paper-outline"></i> Upload Notes</h4>
                    </div>
                    <div class="modal-body">
                        <form enctype = "multipart/form-data" action = "<?php echo base_url() .'instructor/upload_item'?>" type = "POST" id = "notes_upload">
                        <!-- <form> -->
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="filename">Save As</label>
                                            <input type="text" class="form-control" id="filename" placeholder="Enter File Name" name = "filename">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Choose a Category</label>
                                            <select name = "category" class = "form-control">
                                                <option value = "">Choose a Category</option>
                                                <option value = "sexuality">Human Sexuality</option>
                                                <option value = "freedom">Human Freedom</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="choosefile">File input</label>
                                            <input type="file" id="fileSelect" name ="files[]" >
                                        </div>
                                    </div><!-- /.box-body -->
                                     <div class="box-footer">
                                       <input type = "hidden" name = "category" value = "notes" />
                                            <button class="btn btn-primary" id = "upload-button"><i class = "fa fa-upload" ></i> <span>Upload<span></button>
                                        </div>
                                    </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
        <script>
            // $("#upload-button").click(function (){
            //     var form = document.getElementById('notes_upload');
            //     var fileSelect = document.getElementById('fileSelect');
            //     var uploadButton = document.getElementById('upload-button');

            //     // alert(form + ' ' + fileSelect + ' ' + uploadButton);

            //     form.onsubmit = function(event) {
            //         event.preventDefault();

            //         // Update button text.
            //         uploadButton.innerHTML = '<i class = "fa fa-refresh fa-spin"></i> Uploading...';
            //         // Get the selected files from the input.
            //         var files = fileSelect.files;
            //         // Create a new FormData object.
            //         var formData = new FormData();
            //         // Loop through each of the selected files.
            //         for (var i = 0; i < files.length; i++) {
            //           var file = files[i];

            //           // Check the file type.
            //           if (!file.type.match('image.*')) {
            //             continue;
            //           }

            //           // Add the file to the request.
                      
            //           formData.append('files[]', file, file.name);
            //         }
            //         // Set up the request.
            //         var xhr = new XMLHttpRequest();
            //         // console.log(xhr);
            //         // Open the connection.
            //         xhr.open('POST', 'localhost/philosophy/instructor/upload_item', true);
            //         // Set up a handler for when the request finishes.
            //         xhr.onload = function () {
            //           if (xhr.status === 200) {
            //             // File(s) uploaded.
            //             console.log('uploaded');
            //             uploadButton.innerHTML = 'Upload';
            //           } else {
            //             console.log('An error occurred!');
            //           }
            //         };
            //         }
            // });
        </script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
        <!-- Morris
 	
 	.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!--<script src="<?php echo base_url().'assets/js/plugins/asap/asap.min.js'?>" type="text/javascript"></script>-->
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
        <script src="<?php echo base_url().'assets/js/back.js'?>"></script>
        <!-- Admin App -->
        <script src="<?php echo base_url().'assets/js/admin/app.js'?>" type="text/javascript"></script>

        <!--Admin dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url().'assets/js/admin/dashboard.js'?>" type="text/javascript"></script>

        <!-- Admin for demo purposes -->
        <script src="<?php echo base_url().'assets/js/admin/demo.js'?>" type="text/javascript"></script>
    </body>
</html>
