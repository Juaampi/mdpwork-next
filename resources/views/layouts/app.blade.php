<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- template integrations -->
    <meta name="keywords" content="candidates, career, employment, freelance, glassdoor, Human Resource Management, indeed, job board, job listing, job portal, job postings, jobs, listings, recruitment, resume">
    <meta name="Mdp Work" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/theme.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

   <!-- end template integration css -->
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">


</head>
<body class="bgc-lightgray">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logo.png"  style="border-radius: 30px;height: 40px;"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul id="right-menu" class="navbar-nav ml-auto right-menu">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Anunciate </a>
                            </li>
                        @endguest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">¿Quienés Somos?</a>
                            </li>
                         @guest
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ route('login') }}">Ingresar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><img src="img/fb.png" /></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><img src="img/insta.png" /></a>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/panel">Panel</a>
                                    <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      Cerrar sesion
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
        <section class="footer_bottom_area p0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 pb10 pt10">
                            <div class="copyright-widget tac-smd mt10">
                                <p>© 2019 <strong>Mdp Work</strong>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-8 pb10 pt10">
                            <div class="footer_menu text-right mt10">
                                <ul>
                                    <li class="list-inline-item"><a href="page-terms-and-policies.html">Quienes Somos</a></li>
                                    <li class="list-inline-item"><a href="page-terms-and-policies.html">Políticas de Privacidad</a></li>
                                    <li class="list-inline-item"><a href="page-terms-and-policies.html">Términos y Condiciones</a></li>
                                    <li class="list-inline-item"><a href="page-terms-and-policies.html">Seguridad y Privacidad</a></li>
                                    <li class="list-inline-item">
                                        <select class="selectpicker show-tick">
                                            <option>English</option>
                                            <option>Frenc</option>
                                            <option>Italian</option>
                                            <option>Spanish</option>
                                            <option>Turkey</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax-new.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
 <script type="text/javascript" src="js/autocomplete.js"></script>
 <script type="text/javascript" src="js/barrios.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
