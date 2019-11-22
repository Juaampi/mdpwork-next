<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mdp Work Inc. - Encontrá lo que necesitas!</title>

    <!-- ICONO -->
    <link rel="shortcut icon" href="img/logo-ico.ico" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- template integrations -->
    <meta name="keywords" content="Profesionales, Mar del Plata, Mar, del, Plata, La feliz, Profesional, carpintero, empleos mar del plata, empleos, profesiones, techista mar del plata, psicólogo mar del plata, trabajo en mar del plata, mardel, profesional en mardel, profesiones en mardel, buscador de profesionales, buscar profesionales, buscarp profesiones, buscador de personas con trabajos en mar del plata">
    <meta name="MDP WORK INC." content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/theme.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

   <!-- end template integration css -->
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">


</head>
<body class="bgc-lightgray">
    <div id="app">
        <style>
            #btn-quienes{
    cursor: pointer;
}
#btn-quienes-top{
    cursor: pointer;
}
            </style>
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
                                <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Registrate! </a>
                            </li>
                        @endguest
                            <li class="nav-item">
                                <a class="nav-link" id="btn-quienes-top" data-toggle="modal" data-target="#exampleModal">¿Quienés Somos?</a>
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
                                <p>© 2019 <strong>Mdp Work Inc</strong>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-8 pb10 pt10">
                            <div class="footer_menu text-right mt10">
                                <ul>
                                    <li class="list-inline-item"><a id="btn-quienes" data-toggle="modal" data-target="#exampleModal" >Quienes Somos</a></li>
                                    <li class="list-inline-item"><a href="/legales/privacy">Políticas de Privacidad</a></li>
                                    <li class="list-inline-item"><a href="/legales/terms">Términos y Condiciones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MDPWORK INC. ¿Quienés Somos?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
            <h4 class="text-secondary">MDPWORK INC.</h4>

            <p><strong>MDPWORK INC.</strong> es una guía para la búsqueda de profesionales dedicados a brindar soluciones para el hogar  y servicio técnico. Pensado para todo el partido de General Pueyrredón y alrededores y con fuerte presencia local inicia sus actividades en la Ciudad <strong>Mar del Plata, Provincia de Buenos Aires, Argentina</strong>. En mdpwork.com los usuarios tienen acceso a datos de contacto; información,  fotos  y comentarios de los trabajos  realizados por profesionales independientes y por empresas: para así poder elegir a quien consideren más adecuado. La seguridad es un punto clave, todas las empresas tienen sus datos, credenciales, documentos y fotos verificadas, brindándole al cliente mayor confianza a la hora de contratar servicios para su hogar.</p>

            <p>Si estás buscando un plomero o un electricista para solucionar un problema: o si te quedaste encerrado afuera de tu casa y necesitás un cerrajero urgente, si querés que un pintor te ayude a pintar las paredes de tu casa: este es el lugar para encontrarlo!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Ahora se, quienes son!</button>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
