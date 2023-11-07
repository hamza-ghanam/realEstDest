<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $siteTitle }} - @yield('page-title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminplugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('adminplugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('adminplugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminplugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminplugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminplugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminplugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminplugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminplugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminplugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="{{ asset('adminplugins/bootstrap/v4.5.3/bootstrap.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminplugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- Custom style for RTL -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
    <style>
        .dataTables_empty {
            text-align: center;
        }
    </style>
</head>
<body class=" hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Change Password</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link"
                   href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{ $siteLogo }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light"><strong
                    style="font-weight: bold;">{{ $siteTitle }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item has-treeview {{ (strpos(Route::currentRouteName(), 'pageConfigs') !== false)  ? 'menu-open' : ''}}">
                        <a href="#"
                           class="nav-link {{ strpos(Route::currentRouteName(), 'pageConfigs') !== false  ? 'active' : ''}}">
                            <i class="nav-icon fas fa-ticket-alt"></i>
                            <p>
                                إعدادات الصفحات
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#"
                                   class="nav-link {{ strpos(Route::currentRouteName(), 'MainPanelConfigs') !== false  ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>الواجهة الرئيسية</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   class="nav-link {{ strpos(Route::currentRouteName(), 'HomePageConfigs') !== false  ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>صفحة من نحن</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   class="nav-link {{ strpos(Route::currentRouteName(), 'HomePageConfigs') !== false  ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>صفحة من نحن</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ (strpos(Route::currentRouteName(), 'classifications') !== false)  ? 'menu-open' : ''}}">
                        <a href="#"
                           class="nav-link {{ strpos(Route::currentRouteName(), 'classifications') !== false  ? 'active' : ''}}">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                                Classifications
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#"
                                   class="nav-link {{ strpos(Route::currentRouteName(), 'classifications.index') !== false  ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Show All</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                   class="nav-link {{ strpos(Route::currentRouteName(), 'classifications.create') !== false  ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @yield('breadcrumb')
                            <!--
                            <li class="breadcrumb-item"><a href="#">Reports</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                            -->
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="#">Vision Sciences</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminplugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminplugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 rtl -->
<script src="{{ asset('adminplugins/bootstrap/v4.5.3/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('adminplugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminplugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminplugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


<!-- Sparkline -->
<script src="{{ asset('adminplugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('adminplugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminplugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminplugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminplugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminplugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminplugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('adminplugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminplugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

@yield('script')
</body>
</html>
