<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
     <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Thrillhouse</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> --}}
     {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> --}}
     <!-- CSS Files -->
     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{asset('css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <!-- <link href="{{asset('css/demo.css')}}" rel="stylesheet" /> -->
 </head>
 
 <body>
     <div class="wrapper">
        <div class="sidebar" data-image="{{asset('img/sidebar-5.jpg')}}">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{route('dashboard')}}" class="simple-text">
                        Thrillhouse
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item @if(Route::is('dashboard')) active @endif">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('quotes') || Route::is('quote.show')) active @endif">
                        <a class="nav-link" href="{{route('quotes')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Quotes</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('categories')) active @endif">
                        <a class="nav-link" href="{{route('categories')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('items')) active @endif">
                        <a class="nav-link" href="{{route('items')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('appliances')) active @endif">
                        <a class="nav-link" href="{{route('appliances')}}">
                            <i class="nc-icon nc-atom"></i>
                            <p>Appliances</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('packages')) active @endif">
                        <a class="nav-link" href="{{route('packages')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Packages</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('settings')) active @endif">
                        <a class="nav-link" href="{{route('settings')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li class="nav-item @if(Route::is('admins')) active @endif">
                        <a class="nav-link" href="{{route('admins')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Admins</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Admin </a>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">{{Auth::user()->name}}</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                    <span class="no-icon">Log out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @yield('main')
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ??
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
     </div> 
 </body>
 <!--   Core JS Files   -->
 <script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
 <!--  Google Maps Plugin    -->
 {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
 <!--  Chartist Plugin  -->
 <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{asset('js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 @stack('scripts')
 <script src="{{asset('js/demo.js')}}"></script>
 
 </html>
 