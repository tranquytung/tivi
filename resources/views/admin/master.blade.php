
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website bán tivi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url("admin_theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url("admin_theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url("admin_theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url("admin_theme/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url("admin_theme/dist/css/skins/_all-skins.min.css")}}">
    <link rel="stylesheet" href="{{ url("css/style_nd.css")}}">
    <script src=" {{ url('ckeditor/ckeditor.js') }} "></script>
    <script src=" {{ url('ckfinder/ckfinder.js') }} "></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
   <!-- <script src="{{ url('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
    <script src="{{ url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>-->
    <![endif]-->

    <!-- Google Font -->
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b>TV</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Bán</b>TiVi</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset("admin_theme/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset("admin_theme/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
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

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar users panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset("admin_theme/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="{{ url("#") }}">
                        <i class="fa fa-dashboard"></i> <span>Thông Kê</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i> Thông kê </a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> Thống kê</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Quản Lý</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('admin.category.list') }}"><i class="fa fa-circle-o"></i>Danh mục</a></li>
                        <li><a href="{{ route('admin.hang.list') }}"><i class="fa fa-circle-o"></i>Quản Lý Hãng</a></li>
                        <li><a href="{{ route('admin.ktmh.list') }}"><i class="fa fa-circle-o"></i>Kích thước màn hình</a></li>
                        <li><a href="{{ route('admin.loaitivi.list') }}"><i class="fa fa-circle-o"></i> Loại ti vi </a></li>
                        <li><a href="{{ route('admin.dophangiai.list') }}"><i class="fa fa-circle-o"></i>Độ phân giải</a></li>
                        <li><a href="{{ route('admin.product.list') }}"><i class="fa fa-circle-o"></i>Sản phẩm</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Tài khoản</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('admin.quanli.list') }}"><i class="fa fa-circle-o"></i>Admin</a></li>
                        <li><a href="{{ route('admin.users.list') }}"><i class="fa fa-circle-o"></i>Users</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Thanh Toán</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('admin.quanli.list') }}"><i class="fa fa-circle-o"></i>Chưa thanh toán</a></li>
                        <li><a href="{{ route('admin.users.list') }}"><i class="fa fa-circle-o"></i>Đã thanh toán</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('page')
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>@yield('homepage')</a></li>
                <li class="active"> @yield('page')</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            @if(Session::has('flash_message'))
            <div class="callout callout-success">
                <p>{{  Session::get('flash_message') }}</p>
            </div>
            @endif

        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <div class="pull-left">
                        @yield('add')
                    </div>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @yield('content')
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Phiên bản</b> 2.4.1
        </div>
        <strong>Copyright &copy; 2018 <a href="">Nhóm Tùng Long</a>.</strong>
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url("admin_theme/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url("admin_theme/bower_components/bootstrap/dist/js/bootstrap.min.js" )}}"></script>
<!-- SlimScroll -->
<script src="{{ url("admin_theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{ url("admin_theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ url("admin_theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url("admin_theme/dist/js/demo.js")}}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    });
</script>
<script>
    @yield('js')
</script>
</body>
</html>
