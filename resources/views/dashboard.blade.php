
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('template/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        @livewireStyles
        @livewireScripts

    <body>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{asset('template/assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{asset('template/assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{asset('template/assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>

                    <li>
                        <a href="{{ route('home')}}"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Inicio</span></a>
                    </li>
                    <li>
                        <a href="{{ route('image.create')}}"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Subir Imagenes</span></a>
                    </li>
                    
                    <li>
                        <a href="{{route('clients.index')}}"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Clientes</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">  
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search" class="topbar-icon"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>                      

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">{{Auth::user()->name}}</span>
                                &nbsp;
                                @include('includes.avatar')                              
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Perfil</a>
                                <a class="dropdown-item" href="{{ route('user.config')}}"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Configuracion</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> 
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a>
                            </div>                                
                        </li>                           
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                @yield('container')
                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
    </body>
    <!-- jQuery  -->
    <script src="{{asset('template/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('template/assets/js/waves.js')}}"></script>
    <script src="{{asset('template/assets/js/feather.min.js')}}"></script>
    <script src="{{asset('template/assets/js/simplebar.min.js')}}"></script>
    <script src="{{asset('template/assets/js/moment.js')}}"></script>
    <script src="{{asset('template/plugins/daterangepicker/daterangepicker.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('template/assets/js/app.js')}}"></script>
    <script>
    // Función para simular el clic en el formulario cuando se hace clic en el enlace
    function logout() {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    }
    </script>

</html>
