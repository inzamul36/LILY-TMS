<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="LILY Tailor Management System">
        <meta name="author" content="MD INZAMUL HAQUE">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>@yield('title') | LILY TMS</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- DataTables -->
        <link href="{{ asset('css/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('css/plugins/toast/jquery.toast.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- App css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/core.css') }}" rel="stylesheet">
        <link href="{{ asset('css/components.css') }}" rel="stylesheet">      
        <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>


        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">

        <!-- Loader 
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>-->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="{{ asset('images/lily-logo-min.png') }}" alt=""  class="thumb-md img-rounded bg-white"> LI<span>LY</span>
                        </span>
                        <i>
                           <img src="{{ asset('images/lily-logo-min.png') }}" alt="" class="thumb-md img-rounded bg-white">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="javascript:void(0);" class=" right-menu-item" onclick="go_full_screen()">
                                    <i class=" mdi mdi-arrow-expand-all"></i>
                                </a>
                            </li>

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ asset('images/user.png') }}" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="dropdown-header">Login as</li>
                                    <li>
                                        <a href="">
                                            @if( Auth::check() )
                                                {{ Auth::user()->email }}
                                            @endif
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Profile</li>
                                    <li><a href="{{ url('password') }}"><i class="ti-user m-r-5"></i> Change Password</a></li>
                                    <li><a href="{{ route('logout') }}" ><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">  
                        <ul>

                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{{ route('dashboards.index') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li class="menu-title">Customer Area</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route ('customers.create') }}">Add Customer</a></li>
                                    <li><a href="{{ route ('customers.index') }}">Customers List</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-shopping"></i> <span> Order </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route ('orders.create') }}">Add Order</a></li>
                                    <li><a href="{{ route ('orders.index') }}">Orders List</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Staff Area</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route ('staffs.create') }}">Add Staff</a></li>
                                    <li><a href="{{ route ('staffs.index') }}">Staffs List</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cash-multiple"></i> <span> Salary </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route ('salaries.create') }}">Add Salary</a></li>
                                    <li><a href="{{ route ('salaries.index') }}">Salaries List</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">SETTINGS AREA</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-settings"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url ('password') }}">Change Password</a></li>
                                    <li><a href="{{ route ('logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    
                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        
                        @yield('content')

                     </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    {{date('Y')}} © <span class="text-danger">LILY TMS v1.1.</span>
                    <span class="pull-right">
                        <i class="fa fa-heart text- text-danger"></i> by <span class="text-danger">MD INZAMUL HAQUE</span>
                    </span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/detect.js') }}"></script>
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <script src="{{ asset('js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('js/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/plugins/datatables/responsive.bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/plugins/toast/jquery.toast.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/select2/select2.min.js') }}" type="text/javascript"></script>

        <!-- App js -->
        <script src="{{ asset('js/jquery.core.js') }}"></script>
        <script src="{{ asset('js/jquery.app.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatable').DataTable();
            });

            // Select2
            $(".select2").select2();
        </script>

        @if(Session::has('notice'))
            <script type="text/javascript">
                $(document).ready(function () {
                    $.toast({
                        heading: 'Success'
                        , text: '{{ Session::get("notice") }}'
                        , position: 'top-right'
                        , loaderBg: '#ff6849'
                        , icon: 'success'
                        , hideAfter: 9500
                        , stack: 6
                    })
                });
            </script>

        @endif

        @if(Session::has('alert'))
            <script type="text/javascript">
                $(document).ready(function () {
                    $.toast({
                        heading: 'Error'
                        , text: '{{ Session::get("alert") }}'
                        , position: 'top-right'
                        , loaderBg: '#ff6849'
                        , icon: 'danger'
                        , hideAfter: 9500
                        , stack: 6
                    })
                });
            </script>

        @endif

    </body>
</html>
