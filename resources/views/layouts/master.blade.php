<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profiler.net</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('resources/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('resources/assets/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('resources/assets/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ asset('resources/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/assets/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/assets/css/skins/skin-blue.min.css') }}">
    <script type="text/javascript"> var baseUrl = "{{url('/')}}";</script>




    <!-- galery style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/dist/sweetalert.css') }}">

     <link rel="stylesheet" href="{{ asset('resources/assets/css/galery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/donut_chart.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" >
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-black  sidebar-mini   ">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Prof</b>.net</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Profiler</b>.net</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="{{ Auth::user()->profile_pic==NULL ? URL::asset('resources/assets/img/pro.jpg') : URL::asset(Auth::user()->profile_pic) }}" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                </ul><!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li><!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li><!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
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
                    <!-- User Account Menu -->
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ Auth::user()->profile_pic==NULL ? URL::asset('resources/assets/img/pro.jpg') : URL::asset(Auth::user()->profile_pic) }}" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ Auth::user()->profile_pic==NULL ? URL::asset('resources/assets/img/pro.jpg') : URL::asset(Auth::user()->profile_pic) }}" class="img-circle" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                        @endif
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Auth::user()->profile_pic==NULL ? URL::asset('resources/assets/img/pro.jpg') : URL::asset(Auth::user()->profile_pic) }}"  class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <?php $admin = 2 ?>;
                <?php if($admin==0){ ?>
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li ><a href="{{url('/home')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="{{url('/site')}}"><i class="fa fa-desktop"></i> <span>MY Sites</span></a></li>
                <li><a href="{{url('/temp')}}"><i class="fa fa-television"></i> <span>My Templates</span></a></li>
                <li><a href="{{url('/profile')}}"><i class="fa fa-user"></i> <span>My Profile</span></a></li>
                <li><a href="{{url('/gallery/list')}}"><i class="fa fa-photo"></i> <span>My galery</span></a></li>
                    <?php }if($admin==2){ ?>
                    <li ><a href="{{url('/admin/home')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="{{url('/templates/new')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Add Template</span></a></li>
                    <li><a href="{{url('/templates/edit')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i><span>Edit Template</span></a></li>
                    <li><a href="{{url('/templates/slide')}}"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Slide Show</span></a></li>
                    <li><a href="{{url('/templates/mail/view')}}"><i class="fa fa-envelope-square" aria-hidden="true"></i> <span>Manage Mails</span></a></li>
                    <li><a href="{{url('/admin/user/manage')}}"><i class="fa fa-users" aria-hidden="true"></i> <span>Manage Users</span></a></li>
                    <li><a href="{{url('/reports')}}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Get Reports</span></a></li>
                    <li><a href="{{url('/myprofile')}}"><i class="fa fa-user" aria-hidden="true"></i> <span>My Profile</span></a></li>
                    <?php }
                    ?>
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">

    </footer>





</div><!-- ./wrapper -->


<!-- jQuery 2.1.4 -->
<script src="{{ asset('resources/assets/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('resources/assets/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('resources/assets/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('resources/assets/js/app.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('resources/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
{{--<script src="{{ asset('resources/assets/js/lol.js')}}"></script>--}}



   <!-- Galery -->  
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<script src="{{ asset('resources/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('resources/assets/js/galery.js')}}"></script>
<script src="{{ asset('resources/assets/js/alert.js')}}"></script>
<script src="{{ asset('resources/assets/js/lightbox.js')}}"></script>
<!-- InputMask -->
<!-- Select2 -->
<script src="{{ asset('resources/assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('resources/assets/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{ asset('resources/assets/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('resources/assets/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>


<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();


    });
</script>


</body>
</html>
