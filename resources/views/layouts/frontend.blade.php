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
     @stack('styles')
     <!-- <link href="{{asset('css/demo.css')}}" rel="stylesheet" /> -->
 </head>
 
 <body>
     <div class="wrapper">
        
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
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Thrillhouse</a>, Developed by ReignTech
                    </p>
                </nav>
            </div>
        </footer>
     </div> 
 </body>
 <!--   Core JS Files   -->
 <script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
 <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 @stack('scripts')
 <script src="{{asset('js/demo.js')}}"></script>
 
 </html>
 