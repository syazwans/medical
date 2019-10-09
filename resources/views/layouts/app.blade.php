<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/PERKESO_UI/assets/images/favicon.png">
    <title>BeAMS</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->

    @include('layouts.css')
    @yield('style')
    {{--C:\DATASS\ProjekAku\Perkeso\perkeso\perkeso\public\PERKESO_UI\assets\node_modules\jquery--}}
    <script src="{{ asset('/js/perkeso_ui/jquery-3.2.1.min.js') }}"></script>
    <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />


</head>

<body class="horizontal-nav skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading...</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="home">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/PERKESO_UI/assets/images/perkeso.jpg" alt="homepage" class="dark-logo" style="width:150%;height:150%;"/>
                            <!-- Light Logo icon -->
                            <img src="/PERKESO_UI/assets/images/perkeso2.png" alt="homepage" class="light-logo" style="width:150%;height:150%;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span class="hidden-sm-down"></span> </a>
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    
                    <div class="navbar-collapse">
                        
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                                <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                                    <!-- ============================================================== -->
                                    <!-- Search -->
                                    <!-- ============================================================== -->
                        {{-- <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li> --}}
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    
                        {{--<div class="nav-item dropdown u-pro">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Bahasa (Languages) &nbsp;<i class="fa fa-angle-down"></i> </a>
                                    <br><br>
                                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                    <a href="locale/en" id="english" class="dropdown-item">English</a>
                                   
                                    

                                    <a href="locale/ms" id="malay"   class="dropdown-item">Malay</a>
                                     <input type="hidden" id="change_language" class="" value="@lang('home.check')">
                                </div>
                            </div>--}}

                           {{--  <ul class="navbar-nav my-lg-0">
                                <div class="links">
                                    <div class="links">
                                        <a class="ti-check" style="font-size:20px;" href="locale/en">English</a>
                                         <a  style="font-size:20px;" >English</a>
                                        <a>|</a>
                                        <a class="ti-check" style="font-size:20px;" href="locale/en">Malay</a>
                                    </div>
                                </div>
                            </ul> --}}

                            <div class="language">
                                <div class="langchild">
                                <a href="locale/en" id="english">EN</a>|<a href="locale/ms" id="malay">BM</a>
                                </div>
                                <input type="hidden" id="change_language" class="" value="@lang('home.check')">
                            </div> 
                            <div class="nav-item dropdown u-pro">
                                
                                <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/PERKESO_UI/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">{{Session::get('loginname')}} ,
                                {{Session::get('loginbranchcode')}}</span>
                                <i class="fa fa-angle-down"></i></span> </a>
                                <br/>
                                <br/>
                                <br/>
                                <div class="text-right">Last login on  <a><span class="hidden-md-down">{{Session::get('loginlastsignondate')}} </span>
                                    <span class="hidden-md-down">{{Session::get('loginlastsignontime')}} </span></a>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> @lang('app.profile')</a>
                                    {{--<a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> @lang('app.balance')</a>--}}
                                    <a href="/home" class="dropdown-item"><i class="ti-email"></i> @lang('home.task')</a>
                                    {{--<div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> @lang('app.account')</a>--}}
                                    <div class="dropdown-divider"></div>
                                    <a href="../logout" class="dropdown-item"><i class="fa fa-power-off"></i> @lang('app.logout')</a>
                                </div>
                            </div><br>
                        </ul>
                    </div>
                </nav>
{{-- 
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><b>
                           
                        </b><span class="hidden-sm-down"></span> </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a> </li>

                    </ul>
        

                        <div class="nav-item dropdown u-pro">
                                <label class="control-label">Last login on Tuesday, 12 May 2019 at 12:09:17 &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <br>
                        </div>  
                    </ul>
                </div>
            </nav> --}}




        </header>
        <aside class="left-sidebar">
            @include('layouts.navbar')
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            © Powered by Heitech Padu Berhad
        </footer>
    </div>
    @include('layouts.js')
    <!-- @yield('script') -->
</body>

</html>
