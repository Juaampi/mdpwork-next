@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Home Design -->
	<section class="home-one style2" style="background-image: url('img/fondo.jpg'); background-size: cover; height: 100%;">
		<div class="container">
			<div class="row home-content text-center">

				<div class="col-lg-12">
					<div class="home-text">
                        <h3 class="title-mdpwork">Mdp Work Inc.</h3>
						<p class="ml4" style="text-shadow: 2px 2px #000000">
                            <span class="letters letters-1">¿Se te rompió el auto?</span>
                            <span class="letters letters-2">¿Necesitas un electricista?</span>
                            <span class="letters letters-3">¿Tenes un evento importante?</span>
                            <span class="letters letters-4">Tu solución está acá ! </span>
                        </p>

                    </div>
				</div>
                <div class="col-lg-12" style="margin-top: 60px;">
                    <h4 style="text-shadow: 1px 1px dimgrey;" class="text-white">Nuestros filtros especializados te permiten seleccionar entre las mejores opciones para encontrar la solución que estás buscando.</h4>
					<div class="home-job-search-box mt20 mb20">
                        <p class="text-white" style="font-weight: 600;">¿Querés postularte gratis en el sitio? <a class="btn btn-sm btn-info" href="/register">¡Registrarme! </a></p>
						<form action="{{route('User.search')}}" method="GET" class="form-inline">
							<div class="search_option_one">
							    <div class="form-group">
							    	<label for="exampleInputName"><img src="img-icons/search-icon.png"></label>
							    	<input type="text" autocomplete="off" spellcheck="false" class="form-control h70" name="search" id="searchinput" placeholder="Carpintero, Electricista, Uñas, Bebidas">
							    </div>
							</div>
							<div class="search_option_two">
							    <div class="form-group">
							    	<label for="exampleInputEmail"><img src="img-icons/location.png"/></label>
							    	<input type="text" autocomplete="off" spellcheck="false" name="zone" class="form-control h70" id="zoneinput" placeholder="Busca por zona">
							    </div>
							</div>
							<div class="search_option_button">
							    <button type="submit" id="submit-busqueda" class="btn btn-thm btn-secondary h70">Buscar</button>
							</div>
						</form>
					</div>
                    <p id="description-add" style="color: white"><span class="color-white"><strong>Más buscados:</strong></span> Electricista,  Albañil,  Desarrollador Web,  Dentista,  Maquillaje,  Uñas,  Paseador de perros</p>
                    <a class="btn btn-outline-light" style="margin-top: 15px;font-size: 25px;" href="/lista">Ver la lista completa</a>
				</div>
			</div>
		</div>
	</section>

    <script>
       // Get the input field
var input = document.getElementById("zoneinput");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submit-busqueda").click();
  }
});


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
 document.getElementById("submit-busqueda").click();
}
});


 </script>

	<!-- Popular Job Categories -->
	<section class="popular-job bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="ulockd-main-title">
						<h3 class="mt0">Categorías Populares</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=albañil" class="icon_hvr_img_box style2 sbbg1">
						<div class="overlay">
							<div class="icon"><img src="img/construccion.png" /></div>
							<div class="details">
								<h5>Albañiles</h5>
								<p><strong>22</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=mecánico" class="icon_hvr_img_box style2 sbbg2">
						<div class="overlay">
							<div class="icon"><img src="img/mecanico.png" /></div>
							<div class="details">
								<h5>Mantenimiento de Vehículos</h5>
								<p><strong>60</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=maquillaje%20y%20peinados" class="icon_hvr_img_box style2 sbbg3">
						<div class="overlay">
							<div class="icon"><img src="img/nail.png" /></div>
							<div class="details">
								<h5>Maquillaje y Peinados</h5>
								<p><strong>24</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=fotografía" class="icon_hvr_img_box style2 sbbg4">
						<div class="overlay">
							<div class="icon"><img src="img/fotografia.png" /></span></div>
							<div class="details">
								<h5>Fotografía</h5>
								<p><strong>17</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=psicolog" class="icon_hvr_img_box style2 sbbg5">
						<div class="overlay">
							<div class="icon"><img src="img/medicina.png" /></div>
							<div class="details">
								<h5>Psicología</h5>
								<p><strong>60</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=animación" class="icon_hvr_img_box style2 sbbg6">
						<div class="overlay">
							<div class="icon"><img src="img/fiesta.png" /></div>
							<div class="details">
								<h5>Animación infantil</h5>
								<p><strong>22</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=limpieza%20profesional" class="icon_hvr_img_box style2 sbbg7">
						<div class="overlay">
							<div class="icon"><img src="img/oficina.png" /></div>
							<div class="details">
								<h5>Limpieza Profesional</h5>
								<p><strong>5</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="/busqueda?search=abogado20%de20%derecho%20laboral" class="icon_hvr_img_box style2 sbbg8">
						<div class="overlay">
							<div class="icon"><img src="img/contable.png" /></div>
							<div class="details">
								<h5>Abogado Derecho Laboral</h5>
								<p><strong>10</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-6 offset-lg-3">
					<div class="pjc_all_btn text-center">
						<a class="btn btn-thm" href="/lista">Ver todos los profesionales</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Features Job List Design -->
	<section class="popular-job bgc-lightgray pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Últimos profesionales agregados</h3>
						<a class="text-thm float-right" href="#">Ver todos<i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
                @foreach($lastest as $last)
                    @if($last->rol == 'profesional')
				<div class="col-sm-12 col-lg-12">
					<div class="fj_post">
						<div class="details">
                            @php
                                $carbon = Carbon::now('America/Argentina/Buenos_Aires');
                                $day = $carbon->isoFormat('dddd');
                                $hour = $carbon->format('H:i:s');
                                if($day == 'Monday'){
                                    $day = 'lunes';
                                }
                                if($day == 'Tuesday'){
                                    $day = 'martes';
                                }
                                if($day == 'Wednesday'){
                                    $day = 'miercoles';
                                }
                                if($day == 'Thursday'){
                                    $day = 'jueves';
                                }
                                if($day == 'Friday'){
                                    $day = 'viernes';
                                }
                                if($day == 'Saturday'){
                                    $day ='sabado';
                                }
                                if($day == 'Sunday'){
                                    $day = 'domingo';
                                }

                            @endphp
                            <!-- OPTIMIZACION DE CODIGO ESTO VA EN LA CONTROLADORA -->
                            @if($last->{'inhourafter'.$day} && $last->{'outhourafter'.$day})
                                @if($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day})
                                     <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                @elseif($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day})
                                    <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                @else
                                    <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                @endif
                            @else
                                @if($hour >= $last->{'inhour'.$day} && $hour <= $last->{'outhour'.$day})
                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                @else
                                    <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                @endif
                            @endif

						<!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

							<div class="thumb fn-smd">
							<img class="img-fluid" style="height: 120px; width: 140px;" src="img-perfil/{{$last->img}}" alt="1.jpg">
                            @php
                            $cantComent = 0;
                            $cantPoints = 0;
                            $points = 0;
                        @endphp
                        @foreach($coments as $coment)
                            @if($coment->user_id == $last->id)
                                @php
                                    $cantComent ++;
                                    $cantPoints += $coment->point;
                                @endphp
                            @endif
                        @endforeach
                        @php
                        if($cantPoints != 0){
                         $points = $cantPoints / $cantComent;
                        }else{
                         $points = 4;
                        }
                        @endphp
                                <ul style="margin-bottom: 0px;">
                                    @if($points <= 1)
									<li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    @endif
                                    @if($points > 1 && $points <= 2)
									<li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
									</li>
									<li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    @endif
                                    @if($points > 2 && $points <= 3)
									<li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    @endif
                                    @if($points > 3 && $points <= 4)
									<li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
                                        <img height="18px;" src="img-icons/vacia.png">
                                    </li>
                                    @endif
                                    @if($points > 4 && $points <= 5)
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    <li style="display: inline">
										<img height="18px;" src="img-icons/llena.png">
                                    </li>
                                    @endif
                                </ul>

									<span class="badge badge-warning"><strong>{{$points}}</strong></span>
							</div>

                            <div class="row" id="perfil-responsive-div">
                                <div class="col-md-4">
							        <h4>{{$last->name}}</h4>
                                    <p style="width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" class="font-style-italic"><img src="img-icons/location.png" /> {{$last->zone}}, Mar del Plata</p>
                                    <img src="img-icons/experiencia.png"> <a href="/busqueda?search={{$last->job}}"><strong>{{ $last->job }}</strong> <img src="img-icons/check.png"></a>
                                </div>
                                <div class="col-md-6">
                                        <p id="horario">
											<img src="img-icons/horario.png" />
                                            <!-- TODOS  HORARIOS: -->
												<strong>{{$day}}: </strong>
												@if($last->{'inhourafter'.$day} && $last->{'outhourafter'.$day})
													@if($hour <= $last->{'outhour'.$day} && $hour >= $last->{'inhour'.$day})
														<span style="font-size: 14px">@php echo date('G:i',strtotime($last->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
													@elseif($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day} )
														<span style="font-size: 14px">@php echo date('G:i',strtotime($last->{'inhourafter'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhourafter'.$day} )) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible hoy</span>
                                                    @endif
												@else
													@if($last->{'inhour'.$day} && $last->{'outhour'.$day})
                                                        @if($hour <= $last->{'outhour'.$day} && $hour >= $last->{'inhour'.$day})
															<span style="font-size: 14px">@php echo date('G:i',strtotime($last->{'inhour'.$day}))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
														@else
															<span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
														@endif
													@else
														<span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible hoy</span>
													@endif
												@endif
                                        </p>
                                        <p>
                                            @php
                                            $cantidadComentarios = 0;
                                            @endphp
                                                @foreach($coments as $coment)
                                                @if($coment->user_id == $last->id)
                                                    @php
                                                        $cantidadComentarios ++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        <img src="img-icons/coments.png" /> Comentarios: <span class="badge badge-secondary">{{$cantidadComentarios}}</span>
                                        </p>
                                </div>

                        </div>
                        <div class="row row-responsive">

                                <ul id="ulmetodos">
                                    <li id="txtmetodos" style="float: left; margin: 7px 12px 2px 90px">
                                        <img src="img-icons/tarjeta.png" /> <span style="font-style: italic;">Métodos de pago aceptados</span>
                                    </li>
                                    @if($last->isEfective)
                                        <li  class="limetodos">
                                            <img src="img/credit-card/moneysi.png" style="height: 40px; float: left;"  title="Efectivo" />
                                        </li>
                                    @else
                                        <li  class="limetodos">
                                            <img src="img/credit-card/money.png" style="height: 40px; float: left;"  title="Efectivo" />
                                        </li>
                                    @endif
                                    @if($last->isVisa)
                                    <li class="limetodos">
                                        <img src="img/credit-card/visasi.png" style="height: 40px; float: left;" title="Tarjeta de crédito VISA" />
                                    </li>
                                    @else
                                    <li class="limetodos">
                                        <img src="img/credit-card/visa.png" style="height: 40px; float: left;" title="Tarjeta de crédito VISA" />
                                    </li>
                                    @endif
                                    @if($last->isMasterCard)
                                    <li class="limetodos">
                                         <img src="img/credit-card/mastercardsi.png" style="height: 40px; float: left;" title="Tarjeta de crédito MASTER CARD" />
                                    </li>
                                    @else
                                    <li class="limetodos">
                                        <img src="img/credit-card/mastercard.png" style="height: 40px; float: left;" title="Tarjeta de crédito MASTER CARD" />
                                   </li>
                                    @endif
                                    @if($last->isMercadoPago)
                                    <li class="limetodos">
                                            <img src="img/credit-card/mercadosi.png" style="height: 40px; float: left;"  title="Mercado Pago"/>
                                    </li>
                                    @else
                                    <li class="limetodos">
                                        <img src="img/credit-card/mercado.png" style="height: 40px; float: left;"  title="Mercado Pago"/>
                                     </li>
                                    @endif
                                    <li class="limetodos">
                                        <img src="img/credit-card/american.png" style="height: 40px; float: left;"  title="American Express"/>
                                     </li>
                                </ul>

                        </div>
                        </div>
                        <form action="{{route('User.perfil')}}" method="GET" class="text-center">
                            <input type="hidden" value="{{$last->id}}" name="user_id">
                            <input type="submit" class="btn-ver btn btn-md btn-transparent float-right fn-smd" value="Ver/Contactar" />
                        </form>
					</div>
                </div>
                @endif
                @endforeach
            </div>
            <a class="btn btn-thm" href="/lista">Ver todos los profesionales</a>
		</div>
	</section>


	<!-- Our Footer Bottom Area -->

<a class="scrollToHome text-thm" href="#"><img src="img-icons/coete.png" /></a>
</div>


<!-- Wrapper End -->

<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Información de bienvenida</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card text-center">
                <div class="card-header">
                    Bienvenidos a <strong>Mdp Work Inc.</strong>
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="color: #999;font-size: 15px;line-height: 1.2;">En ésta era tecnológica una nueva herramienta virtual llamada
                      <div class="badge badge-info">MDP WORK INC. </div> te ofrece una solución a tus problemas, sin perder tiempo y desde la comodidad de tu hogar.
                </h5>
                <h5><img src="img/dispositivos.png" class="mt-2 mb-2" style="height: 200px;"/></h5>
                  <p class="card-text" style="color: #999;font-size: 15px;line-height: 1.2;">La <strong><span class="text-info">tecnología</span></strong> hace años viene proponiendo un cambio en la vida de las personas que la utilizan. En éste caso éste sitio web ofrece 2 formas de ser utilizado: </p>
                  <div class="bs-callout bs-callout-info"><p style="color: #999;font-size: 15px;line-height: 1.2;"><strong>1. </strong>Si tenes alguna profesión, algun oficio o realizas algún tipo de trabajo en la zona, podés ingresar a la zona de <strong>profesionales</strong>, registrarte y automáticamente te encontrarás en nuestro listado. <a href="/register" class="btn btn-sm btn-info">Registrarme</a></p></div>
                  <div class="bs-callout bs-callout-warning"><p style="color: #999;font-size: 15px;line-height: 1.2;"><strong>2. </strong>Si tuviste algún problema en tu casa o con tu vehículo, judicial o simplemente necesitas hacerte las uñas, no dudes en utilizar el buscador que te ofrecemos y contactarte directamente, <strong>sin vueltas y sin publicidades</strong>, con la persona que te lo solucionará. Utilizá nuestros filtros especializados y no pierdas más tiempo! <a href="/lista" class="btn btn-sm btn-warning" >Ver listado</a></p></div>
                </div>
                <div class="card-footer text-muted">
                  <strong>MDP WORK INC.</strong>. La nueva forma de solucionar tus problemas.
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok Gracias!</button>
        </div>
      </div>
    </div>
  </div>


<script>
        var countries = ["9 de Julio","Aeropuerto","Aeroparque","Alfar","Ameghino","Antártida Argentina","Barrio 180","Lomas del Golf","Bernardino Rivadavia","Belgrano","Belisario Roldán","Bosque Alegre","Bosque Peralta Ramos","Caisamar","Centenario","Cerrito","Cerrito Sur","Cerrito San Salvador","Colina Alegre","Constitución","Coronel Dorrego","Costa Azul","Don Bosco","Don Emilio","Dorrego","El Grosellar","El Martillo","El Progreso","Estrada","Etchepare","Faro","Juramento","Las Américas","Las Avenidas","Colinas de Peralta Ramos","Las Heras","La Florida","La Perla","La Zulema","Libertad","Los Acantilados","Los Pinares","Los Troncos","Malvinas Argentinas","Newbery","Nueva Pompeya","Montemar","Parque Hermoso","Parque La Florida","Parque Luro","Parque Palermo","Parque Peña","Peralta Ramos Oeste","Pinos de Anchorena","Chapadmalal","Playa Grande","Punta Mogotes","San Antonio","San Carlos","San Eduardo","San Geronimo","San Jacinto","San José","San Patricio","San Salvador","Santa Mónica","Sarmiento","Stella Maris","Jardín Stella Maris","Jardín","Alfar","Nuevo Golf","Zacagnini", "Otra zona", "Todo Mar del Plata"];
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
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                  /*create a DIV element for each matching element:*/
                  b = document.createElement("DIV");
                  /*make the matching letters bold:*/
                  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                  b.innerHTML += arr[i].substr(val.length);
                  /*insert a input field that will hold the current array item's value:*/
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                  /*execute a function when someone clicks on the item value (DIV element):*/
                      b.addEventListener("click", function(e) {
                      /*insert the value for the autocomplete text field:*/
                      inp.value = this.getElementsByTagName("input")[0].value;
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
                autocomplete(document.getElementById("zoneinput"), countries);
        </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript">
            var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 2;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  })
  .add({
    targets: '.ml4 .letters-4',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-4',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    delay: 300
  });
        </script>




@endsection
