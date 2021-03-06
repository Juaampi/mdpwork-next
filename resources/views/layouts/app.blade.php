<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165624703-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165624703-1');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mardeltrabaja.com | Encontrá lo que necesitás</title>

    <!-- ICONO -->
    <link rel="shortcut icon" href="img/logo-ico.ico" alt="Carpintero, Plomero, Abogado, Electricista Mar del plata" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn-i.starofservice.com/static/bundles/explore-0db05f8231bb1d613d864127f769df4f.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- template integrations -->
    <meta name="keywords" content="Profesionales, Mar del Plata, Mar, del, Plata, La feliz, Profesional, carpintero, empleos mar del plata, empleos, profesiones, techista mar del plata, psicólogo mar del plata, trabajo en mar del plata, mardel, profesional en mardel, profesiones en mardel, buscador de profesionales, buscar profesionales, electricista mar del plata, buscador de personas con trabajos en mar del plata, plomero mar del plata, plomeria mar del plata">
    <meta name="MDP WORK INC." content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/theme.css">
    <!-- font-awesome -->
    <script src="https://use.fontawesome.com/8ee5d67531.js"></script>

   <!-- end template integration css -->
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>


@php
    use App\Subcategory;
    use App\User;
        $subcategories = Subcategory::all();
        $users = User::where('rol', '=', 'profesional')->orderBy('created_at', 'desc')->paginate(10);
        $subcategoriesArray = [];
        $cantidades = [];
        $o = 0;
        for($u = 0; $u<count($users); $u++){
            $bandera = 0;
            for($i = 0; $i<count($subcategories); $i++)
            {
                if($users[$u]->job == $subcategories[$i]->name){
                    $bandera = 1;
                }
            }
            if($bandera == 0){
                $subcategoriesArray[$o] = $users[$u]->job;
                $o++;
            }
        }
       foreach($subcategories as $subcategory){
           $subcategoriesArray[$o] = $subcategory->name;
           $o++;
       }

@endphp
<body class="bgc-lightgray">
    <div id="app">





        <style>

.modal.show {
    background-color: rgba(0,0,0, 0.5) !important;
}

            #btn-quienes{
    cursor: pointer;
}
#btn-quienes-top{
    cursor: pointer;
}
.has-search .form-control {
    padding-left: 25px;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    width: 30px;
    height: 20px;
    line-height:35px;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.btn-back{
    top: 1px;
    left: -4px;
    opacity: 0;
    will-change: opacity;
    -webkit-transition: opacity .10s ease-out;
    transition: opacity .10s ease-out;
    display:none;
}

</style>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logo.png"  style="border-radius: 30px;height: 40px;"/>
                </a>
                      <!-- Actual search box -->
                        <div class="has-search responsive-search">
                            <form action="{{route('User.search')}}" id="form-search" method="GET" class="nav-search">
                                <span class="btn-back" id="back-icon"><i class="fa fa-arrow-left"></i> </span>
                                <span class="form-control-feedback"><i class="fa fa-search"></i></span>
                                <input style="font-size: 15px;" name="search" id="searchinput" type="text" autocomplete="off" spellcheck="false" class="form-control input-search" placeholder="Estoy buscando...">
                            </form>
                        </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse menu-responsive" id="navbarSupportedContent">
                    <div class="container">
                    <div class="row">
                        <div class="col-3">
                        <img @if(!Auth::user()) src="img-perfil/user-circle-list.png" @elseif(Auth::user()->avatar) src="{{Auth::user()->avatar}}" @elseif(Auth::user()->img) src="img-perfil/{{ Auth::user()->img }}" @elseif(Auth::user()->img == 'logo.png') src="img-perfil/user-circle-list.png" @endif style="margin-top: 20px; border-radius: 30px;" />
                        </div>
                        <div class="col-9">
                            <h5 style="margin-top: 20px; margin-bottom: 0px;font-weight: 600;">Bienvenido</h5>
                            @guest
                            <h6 class="text-muted">Ingresá para optimizar tu perfil o dejar tu reseña.</h6>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-6" style="padding: 1px;">
                                    <a href="/register" class="btn btn-info" style="width: 100%; color: white;font-size: 12px;">Registrarme</a>
                                </div>
                                <div class="col-6" style="padding: 1px;">
                                    <a class="btn btn-outline-info" href="/login" style="width: 100%; color: #17a2b8; font-size: 12px;">Iniciar Sesion</a>
                                </div>
                            </div>
                            @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-6" style="padding: 1px;">
                                    <a href="/panel" class="btn btn-info" style="width: 100%; color: white;">Panel</a>
                                </div>
                                <div class="col-6" style="padding: 1px;">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-outline-info" href="/register" style="width: 100%; color: #17a2b8">Salir</a>
                                </div>
                            </div>
                            @endguest
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>


                    <ul style="margin-top: 10px;position: relative;background: #fff;list-style: none;margin: 0;padding: 16px 0;border-bottom: solid 1px #e6e6e6;font-size: 14px;">
                        <a href="/"><li style="display: block;padding: 10px 0;margin: 0;">
                            <i class="fa fa-home" style="font-size: 20px;width: 20px;height: 20px;display: inline-block;margin-right: 18px;float: left;"></i> Inicio
                        </li>
                        </a>
                        <a  data-toggle="modal" data-target="#exampleModal">
                            <li style="display: block;padding: 10px 0;margin: 0;">
                                 <i class="fa fa-life-ring" style="font-size: 20px;width: 20px;height: 20px;display: inline-block;margin-right: 18px;float: left;"></i> ¿Quiénes somos?
                            </li>
                        </a>
                        <a href="/lista">
                            <li style="display: block;padding: 10px 0;margin: 0;">
                                 <i class="fa fa-id-card" style="font-size: 20px;width: 20px;height: 20px;display: inline-block;margin-right: 18px;float: left;"></i> Profesionales
                            </li>
                        </a>
                        <a href="/register">
                            <li style="display: block;padding: 10px 0;margin: 0;">
                                 <i class="fa fa-fire " style="font-size: 20px;width: 20px;height: 20px;display: inline-block;margin-right: 18px;float: left;"></i> <span>¡Quiero aparecer en la lista!</span>
                            </li>
                        </a>
                        <a href="/aspirantes">
                            <li style="display: block;padding: 10px 0;margin: 0;">
                                 <i class="fa fa-star " style="font-size: 20px;width: 20px;height: 20px;display: inline-block;margin-right: 18px;float: left;"></i> <span>No tengo experiencia laboral </span>
                            </li>
                        </a>
                        <a href="/destacado">
                            <li style="display: block;padding: 10px 0;margin: 0;">
                                 <i class="fa fa-address-card " style="font-size: 20px;width: 20px;height: 20px;display: inline-block;margin-right: 18px;float: left;"></i> <span style="font-weight: 600">¿Cómo ser un destacado?</span>
                            </li>
                        </a>

                    </ul>

                    </div>
                </div>

                <div class="collapse navbar-collapse" id="">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul id="right-menu" class="navbar-nav ml-auto right-menu">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-secondary" href="{{ route('register') }}"><i class="fa fa-id-badge"></i> Postularse </a>
                            </li>
                        @endguest
                            <li class="nav-item">
                                <a class="nav-link" id="btn-quienes-top" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-life-ring"></i> ¿Quiénes Somos?</a>
                            </li>
                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> Ingresar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-instagram"></i></a>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Mardeltrabaja.com ¿Quienés Somos?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                      <h4 class="text-secondary">Mardeltrabaja.com</h4>

                      <p><strong>Mardeltrabaja.com</strong> es una guía para la búsqueda de profesionales dedicados a brindar soluciones para el hogar  y servicio técnico. Pensado para todo el partido de General Pueyrredón y alrededores y con fuerte presencia local inicia sus actividades en la Ciudad <strong>Mar del Plata, Provincia de Buenos Aires, Argentina</strong>. En Mardeltrabaja.com los usuarios tienen acceso a datos de contacto; información,  fotos  y comentarios de los trabajos  realizados por profesionales independientes y por empresas: para así poder elegir a quien consideren más adecuado.</p>

                      <p>Si estás buscando un plomero o un electricista para solucionar un problema: o si te quedaste encerrado afuera de tu casa y necesitás un cerrajero urgente, si querés que un pintor te ayude a pintar las paredes de tu casa: este es el lugar para encontrarlo!</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Ahora se, quienes son!</button>
                </div>
              </div>
            </div>
          </div>

        <main class="">
            @yield('content')
        </main>
        <section class="footer_bottom_area p0" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 pb10 pt10">
                            <div class="copyright-widget tac-smd mt10">
                                <p>© 2020 <strong>Mardeltrabaja.com</strong>. Todos los derechos reservados.</p>
                            </div>
                        </div>
                        <div class="col-lg-8 pb10 pt10">
                            <div class="footer_menu text-right mt10">
                                <ul>
                                    <li class="list-inline-item"><a id="btn-quienes" data-toggle="modal" data-target="#exampleModal" >¿Quiénes Somos?</a></li>
                                    <li class="list-inline-item"><a href="/legales/privacy">Políticas de Privacidad</a></li>
                                    <li class="list-inline-item"><a href="/legales/terms">Términos y Condiciones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>


 <script type="text/javascript" src="js/autocomplete.js"></script>
 <script type="text/javascript" src="js/barrios.js"></script>
 <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="js/jquery3.3.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript">

      $(document).ready(function(){
        $( "#searchinput" ).focus(function() {
            $('.nav-search').css({'left': '0px', 'right': '0px', 'margin-top': '-33px', 'position': 'absolute', 'transition': 'left 0.2s, right 0.2s, margin-top 0.2s'});
            $('.input-search').css({'box-shadow': '', 'height': '66px', 'padding-left': '50px', 'border-radius': '0px','border-top': 'none', 'border-right': 'none', 'border-left': 'none', 'border-bottom': '1px solid #00b7ff', 'transition': 'height 0.2s'});
            $('.form-control-feedback').hide();
            $('.btn-back').css({'color': '#4183fa', 'top': '20px','left': '5px','opacity': '1','will-change': 'opacity','display': 'block', 'position': 'absolute', 'margin-left': '10px'});
            $('.back-icon').css({'height': '16px'});
        });
        $('#back-icon').click(function(){
            $('.nav-search').css({'left': '70px', 'right': '90px', 'margin-top': '', 'position': 'absolute', 'transition': 'left 0.2s, right 0.2s, margin-top 0.2s'});
            $('.input-search').css({'height': '', 'padding-left': '', 'border-radius': '','border-top': '', 'border-right': '', 'border-left': '', 'border-bottom': '', 'transition': 'height 0.2s'});
            $('.form-control-feedback').show();
            $('.btn-back').hide();
        });

      });

   </script>

<script type="text/javascript">
    $(window).load(function() {
        $(".loader-container").hide();
    });
    </script>

       <script>
        function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
              var a, b, i, val = this.value;
              /*close any already open lists of autocompleted values*/
              closeAllLists();
              if (!val) { return false;}
              currentFocus = -1;
              /*create a DIV element that will contain the items (values):*/
              a = document.createElement("DIV");
              a.setAttribute("id", this.id + "autocomplete-list");
              a.setAttribute("class", "autocomplete-items");
              /*append the DIV element as a child of the autocomplete container:*/
              this.parentNode.appendChild(a);
              /*for each item in the array...*/
              for (i = 0; i < arr.length; i++) {
                arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].toUpperCase().indexOf(val.toUpperCase()) !== -1) {
                  /*create a DIV element for each matching element:*/
                  b = document.createElement("DIV");
                  b.setAttribute("class", "ayudadorlistaporuno");
                  /*make the matching letters bold:*/

                  let fromIdx = arr[i].toUpperCase().indexOf(val.toUpperCase());
let toIdx = fromIdx + val.length;
b.innerHTML = arr[i].substring(0, fromIdx);
b.innerHTML += "<span style='color: black'>" + arr[i].substring(fromIdx, toIdx) + "</span>";
b.innerHTML += "<i style='float: left;height: 18px;margin-top: 4px;margin-right: 15px;' class='fa fa-search'>";
b.innerHTML += arr[i].substring(toIdx);
                  /*insert a input field that will hold the current array item's value:*/
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                  b.innerHTML += "<hr>";
                  /*execute a function when someone clicks on the item value (DIV element):*/
                      b.addEventListener("click", function(e) {
                      /*insert the value for the autocomplete text field:*/
                      inp.value = this.getElementsByTagName("input")[0].value;
                      $('#form-search').submit();
                      /*close the list of autocompleted values,
                      (or any other open lists of autocompleted values:*/
                      closeAllLists();
                  });
                  a.appendChild(b);
                }
              }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
              var x = document.getElementById(this.id + "autocomplete-list");
              if (x) x = x.getElementsByTagName("div");
              if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                  /*and simulate a click on the "active" item:*/
                  if (x) x[currentFocus].click();
                }
              }
          });
          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }
          function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
        }

        </script>

        <script type="text/javascript">
                var subcategoriesArray = @json($subcategoriesArray);
                autocomplete(document.getElementById("searchinput"), subcategoriesArray);
        </script>

<script>
    // Get the input field
var input = document.getElementById("searchinput");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
// Number 13 is the "Enter" key on the keyboard
if (event.keyCode === 13) {
 // Cancel the default action, if needed
 event.preventDefault();
 // Trigger the button element with a click
 $('#form-search').submit();
}
});


 </script>

<script>
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

        autoplay: {
        delay: 2000,
        },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: false,
      },
    })
    </script>

<script>
    var swiper = new Swiper('.swiper-container2', {
      slidesPerView: 3,
      direction: 'horizontal',
      spaceBetween: 5,
      freeMode: true,
    });
  </script>

<script>
    var swiper = new Swiper('.swiper-container3', {
      slidesPerView: 3,
      direction: 'horizontal',
      spaceBetween: 5,
      freeMode: true,
    });
  </script>


</body>
</html>
