<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/plugins/images/logo@2x.png">
    <title>Smart Question Bank</title>
    <!-- Bootstrap Core CSS -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- page CSS -->
    <link href="/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- animation CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/css/colors/purple-dark.css" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header')
</head>

<body class="fix-header">
  <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
<!--     <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="/plugins/images/Layer 0@2x.png" width="80%" alt="home" class="dark-logo" />
                    </b>
                </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                <li><center><img src="/plugins/images/Smart Question Bank@2x.png" width="50%" alt="home" class="dark-logo hidden-xs hidden-sm" /></center></li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="/plugins/images/user.png" alt="user-img" class="img-circle"> <span class="hide-menu">{{ $lecturer->name }} <span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li><a href="/logout"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="/dashboard" class="waves-effect "><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Home </span></a></li>
                    <li> <a href="/create_question" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">Create Question</span></a></li>
                    <li> <a href="/courses" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Select Question</span></a></li>
                    <li><a href="/files" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">File</span></a></li> 
                    <li><a href="/profile" class="waves-effect"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li> 
                    <li><a href="/setting" class="waves-effect"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li> 
                </ul>
            </div>
        </div>
                <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">

            @yield('content')



            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Smart Question Bank </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <script src="/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
      <!-- Custom Theme JavaScript -->
        <script src="/plugins/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
        <script src="/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <!--Wave Effects -->
        <script src="/js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/js/custom.min.js"></script>

        <script src="/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

        @yield('footer')

    </body>

    </html>