<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Thrillhouse</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/wizard.css')}}">

</head>

<body>


    @yield('main')
    <!-- <footer class="footer" style=" width: 100%">
        <div class="container-fluid">
            <nav style="display: flex; justify-content: space-between">
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
    </footer> -->

</body>

@stack('scripts')


</html>