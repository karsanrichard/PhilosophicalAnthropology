<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | 404 Page not found</title>
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

        <link href="<?php echo base_url().'assets/css/iCheck/all.css'?>" rel="stylesheet" type="text/css" />

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
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                404 Error
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
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        404 Error Page
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">404 error</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="error-page">
                        <h2 class="headline text-info"> 404</h2>
                        <div class="error-content">
                            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                            <p>
                                We could not find the page you were looking for.
                                Meanwhile, you may <a href='<?php echo base_url();?>'>return to homepage</a> or try using the search form.
                            </p>
                            <form class='search-form'>
                                <div class='input-group'>
                                    <input type="text" name="search" class='form-control' placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </div><!-- /.input-group -->
                            </form>
                        </div><!-- /.error-content -->
                    </div><!-- /.error-page -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


       <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
<script type="text/javascript" src = "<?php echo base_url() . 'assets/js/core.js'?>"></script>
        <!-- Morris
    
    .js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!--<script src="<?php echo base_url().'assets/js/plugins/asap/asap.min.js'?>" type="text/javascript"></script>-->
        <!-- Sparkline -->
        <script src="<?php echo base_url().'assets/js/plugins/sparkline/jquery.sparkline.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/js/dropzone.js'?>"></script>

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
