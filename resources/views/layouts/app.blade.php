<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mdp Work Inc. - Profesionales en Mar del Plata</title>

    <!-- ICONO -->
    <link rel="shortcut icon" href="img/logo-ico.ico" alt="Carpintero, Plomero, Abogado, Electricista Mar del plata" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn-i.starofservice.com/static/bundles/explore-0db05f8231bb1d613d864127f769df4f.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loader.css">

    <!-- template integrations -->
    <meta name="keywords" content="Profesionales, Mar del Plata, Mar, del, Plata, La feliz, Profesional, carpintero, empleos mar del plata, empleos, profesiones, techista mar del plata, psicólogo mar del plata, trabajo en mar del plata, mardel, profesional en mardel, profesiones en mardel, buscador de profesionales, buscar profesionales, electricista mar del plata, buscador de personas con trabajos en mar del plata, plomero mar del plata, plomeria mar del plata">
    <meta name="MDP WORK INC." content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/theme.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- font-awesome -->
    <script src="https://use.fontawesome.com/8ee5d67531.js"></script>

   <!-- end template integration css -->
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


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
                    .loader-container {
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    z-index: 9999;
                    background: white;
                    justify-content: center;
                    align-items: center;
                    display: flex;
                }
                </style>
                <div class="loader-container">
                        <div class="container-loader-1">
                                <div class="loader"></div>
                                <div class="loader"></div>
                                <div class="loader"></div>
                                <div class="loader"></div>
                                <div class="loader"></div>
                            </div>
                </div>



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
                                <span class="btn-back" id="back-icon"><img class="back-icon" src="img-icons/back.png"> </span>
                                <span class="form-control-feedback"><i class="fa fa-search"></i></span>
                                <input style="font-size: 15px;" name="search" id="searchinput" type="text" autocomplete="off" spellcheck="false" class="form-control input-search" placeholder="Estoy buscando...">
                            </form>
                        </div>

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
                                <a class="nav-link btn btn-outline-secondary" href="{{ route('register') }}"><img src="img-icons/register.png" /> Registrate </a>
                            </li>
                        @endguest
                            <li class="nav-item">
                                <a class="nav-link" id="btn-quienes-top" data-toggle="modal" data-target="#exampleModal"><img src="img-icons/quienes.png" /> ¿Quiénes Somos?</a>
                            </li>
                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><img src="img-icons/auth.png" /> Ingresar</a>
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
                                <p>© 2020 <strong>Mdp Work Inc</strong>. All Rights Reserved.</p>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MDPWORK INC. ¿Quienés Somos?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
            <h4 class="text-secondary">MDPWORK INC.</h4>

            <p><strong>MDPWORK INC.</strong> es una guía para la búsqueda de profesionales dedicados a brindar soluciones para el hogar  y servicio técnico. Pensado para todo el partido de General Pueyrredón y alrededores y con fuerte presencia local inicia sus actividades en la Ciudad <strong>Mar del Plata, Provincia de Buenos Aires, Argentina</strong>. En mdpworkinc.com los usuarios tienen acceso a datos de contacto; información,  fotos  y comentarios de los trabajos  realizados por profesionales independientes y por empresas: para así poder elegir a quien consideren más adecuado. La seguridad es un punto clave, todas las empresas tienen sus datos, credenciales, documentos y fotos verificadas, brindándole al cliente mayor confianza a la hora de contratar servicios para su hogar.</p>

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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  <script type="text/javascript">

      $(document).ready(function(){
        $( "#searchinput" ).focus(function() {
            $('.nav-search').css({'left': '0px', 'right': '0px', 'margin-top': '-33px', 'position': 'absolute', 'transition': 'left 0.2s, right 0.2s, margin-top 0.2s'});
            $('.input-search').css({'box-shadow': '', 'height': '66px', 'padding-left': '50px', 'border-radius': '0px','border-top': 'none', 'border-right': 'none', 'border-left': 'none', 'border-bottom': '1px solid #00b7ff', 'transition': 'height 0.2s'});
            $('.form-control-feedback').hide();
            $('.btn-back').css({'top': '19px','left': '5px','opacity': '1','will-change': 'opacity','display': 'block', 'position': 'absolute', 'margin-left': '10px'});
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
</body>
</html>
