@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<div class="wrapper" style="background: #e7e7e7">
    <div class="swiper-container responsive">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="img/swiper1.webp"/></div>
            <div class="swiper-slide"><img src="img/swiper2.webp"/></div>
        </div>
    </div>
    @if(isset($ultimosvistos))
    @if($ultimosvistos != '')

    <div class="responsive bg-white ml-2 mr-2 mt-2 mb-2" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="container">
            <div class="row">
                <h6 style="    font-family: 'Lato', sans-serif; font-size: 14px; padding: 10px 10px 10px 10px;" class="font-weight-bold">Visto recientemente</h6>
                <div id="list-responsive" class="container">
                    <div class="row bg-white" style="margin-bottom: 10px;">
                        <div class="col-3" style="padding-left: 10px; padding-right: 10px;">
                            <img style="border-radius: 5px;height: 50px;" class="img-fluid" src="images/large/{{$ultimosvistos->img}}" alt="1.jpg">
                        </div>
                    <div class="col-8">
                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;white-space: nowrap;overflow: hidden;text-overflow: ellipsis" class="text-info">{{$ultimosvistos->job}}</p>
                    <h4 style="font-size: 14px; margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 600">@if($ultimosvistos->verify == 2) <img height="13px" src="img-icons/verify.webp">  @endif {{$ultimosvistos->name}} </h4>
                          <a class="stretched-link" style="text-decoration: none;  color: #3db39e;background: none;border: none;font-size: 12px;" href="{{Route('User.perfil', ['user_id' => $ultimosvistos->id])}}" ></a>
                    </div>
                    <div class="col-1" style="padding:0px;">
                        @if($ultimosvistos->points < 2)
                        <p style="font-size: 10px;"><span style="color: #d84747;"><i class="fa fa-star"></i></span>
                        <span style="color: #d84747;"><strong>{{round($ultimosvistos->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                        @elseif($ultimosvistos->points >= 3 && $ultimosvistos->points < 4)
                        <p style="font-size: 10px;"><span style="color: #d66514;"><i class="fa fa-star"></i></span>
                        <span style="color: #d66514;"><strong>{{round($ultimosvistos->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                        @elseif($ultimosvistos->points >= 4 && $ultimosvistos->points < 5)
                        <p style="font-size: 10px;"><span style="color: #28af77"><i class="fa fa-star"></i></span>
                        <span style="color: #28af77"><strong>{{round($ultimosvistos->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                        @elseif($ultimosvistos->points == 5)
                        <p style="font-size: 10px;"><span style="color: #ffc107"><i class="fa fa-star"></i></span>
                        <span style="color: #ffc107"><strong>{{round($ultimosvistos->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                        @endif
                    </div>

                    </div>
                    </div>
            </div>
    </div>
    </div>
@endif
    @endif
    <div class="responsive bg-white ml-2 mr-2 mt-2 mb-2" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="container">
			<div class="row">
				<div class="col-8" style="padding: 14px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;font-size: 14px;" class="font-weight-bold">¿Querés aparecer?</h6>
                        <p class="text-muted" style="font-size: 12px;">Registrate como profesional y que el trabajo te busque a vos!</p>
						<a style="font-size: 10px;font-weight: bold;color: #1886fc;padding: 5px;" href="/register">REGISTRARME COMO PROFESIONAL</a>
                </div>
                <div class="col-4">
                    <img src="img/nuevos.svg" style="margin-top:30px;">
                </div>
            </div>
    </div>
    </div>


    <div class="bg-white ml-2 mr-2 mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="padding: 14px;">
                        <h6 style="margin-top: 10px; margin-bottom: 0px;font-family: 'Lato', sans-serif;font-size: 14px;" class="font-weight-bold">¿Todavía no tenés experiencia laboral?</h6>
                        <p class="text-muted" style="font-size: 12px;">Pensamos en un espacio para que no te quedes afuera de nuestro sitio. Registrate como "Aspirante" y aparecé en la búsqueda de los empleadores de la ciudad o también como recomendación para las búsquedas de profesionales diarias.</p>
                        <a style="font-size: 10px;font-weight: bold;color: #1886fc;padding: 5px;" href="/register">REGISTRARME COMO ASPIRANTE</a>
                </div>
            </div>
    </div>
    </div>


    <section id="section-questions" class="home-one style2" style="background-size: cover; height: 100%;background: #fafafa">

		<div class="container">
			<div class="row home-content text-center">

				<div class="col-lg-12">
					<div class="home-text">
                        <h3 class="title-mdpwork">Mardeltrabaja.com<span style="font-size: 15px;">©</span></h3>
						<p class="ml4" style="color: #6f6f6f">
                            <span class="letters letters-1">¿Necesitás un profesional?</span>
                            <span class="letters letters-2">¿Necesitás un electricista?</span>
                            <span class="letters letters-3">¿Tenés un evento importante?</span>
                            <span class="letters letters-4">¿Se te rompió el auto? </span>
                            <span class="letters letters-5">¿Te estás mudando y buscas un flete?</span>
                            <span class="letters letters-6">¡Tu solución está en Mardeltrabaja.com!</span>
                        </p>

                    </div>
				</div>
                <div class="col-lg-12" style="margin-top: 20px;">
                    <p style="color: #999;font-size: 15px;line-height: 1.2">Encontrá a la persona que necesitás utilizando el <strong>buscador de Mar del Plata</strong>. Filtrá por palabras clave, el buscador te ayudará.</p>
                    <p style="color: #999;font-size: 15px;line-height: 1.2">¿Querés postularte gratis en el sitio? <a style="color: #007bff;text-decoration: none;font-weight: 600;" href="/register">¡Registrarme! </a></p>
					<div class="home-job-search-box mt20 mb20">

						<form action="{{route('User.search')}}" method="GET" class="form-inline">
							<div class="search_option_one">
							    <div class="form-group" style="background: #ffffff">
							    	<label for="exampleInputName"><i class="fa fa-search"></i></label>
							    	<input type="text" style="background: #ffffff" autocomplete="off" spellcheck="false" class="form-control h70" name="search" id="searchinput1" placeholder="Carpintero, Electricista, Uñas, Bebidas">
							    </div>
							</div>
							<div class="search_option_two">
							    <div class="form-group" style="background: #ffffff">
							    	<label for="exampleInputEmail"><span style="color:gray;"><i class="fa fa-location-arrow"></i></span></label>
							    	<input type="text" style="background: #ffffff" autocomplete="off" spellcheck="false" name="zone" class="form-control h70" id="zoneinput" placeholder="Busca por zona">
							    </div>
							</div>
							<div class="search_option_button">
							    <button type="submit" id="submit-busqueda" style="background: #00b7ff" class="btn btn-thm btn-secondary h70">Buscar</button>
							</div>
						</form>
					</div>
                    <p id="description-add" style="color: #999"><strong>Más buscados:</strong> Electricista,  Albañil,  Desarrollador Web,  Dentista,  Maquillaje,  Uñas,  Paseador de perros</p>
                    <a style="display:block;margin-top: 30px;color: #007bff;text-decoration: none;font-weight: 600;" href="/lista">¡Ver listado de profesionales!</a>
                </div>

			</div>
		</div>
    </section>
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

    <div class="bg-white ml-2 mr-2" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
		<div class="container">
			<div class="row responsive">
				<div class="col-12" style="padding: 12px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Profesionales recientes</h6>
                        <p class="text-muted" style="font-size: 12px;">Le damos la bienvenida a todos los nuevos ingresantes del sitio!</p>
                </div>
            </div>
            <div class="row no-responsive">
				<div class="col-12" style="padding: 25px;">
                        <h4 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Profesionales recientes</h6>
                        <p class="text-muted">Le damos la bienvenida a todos los nuevos ingresantes del sitio!</p>
                </div>
            </div>
			<div class="row">
                @for($i = 0; $i<3; $i++)
                    @if($lastest[$i]->rol == 'profesional')
				<div class="col-lg-4 mt-3" id="list-no-responsive">
					<div class="card"  style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
						<!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->
                            <img class="img-fluid" style="height: 200px" src="images/large/{{$lastest[$i]->img}}">
                            <div class="card-body">
                                    <!-- OPTIMIZACION DE CODIGO ESTO VA EN LA CONTROLADORA -->
                            @if($lastest[$i]->{'inhourafter'.$day} && $lastest[$i]->{'outhourafter'.$day})
                            @if($hour >= $lastest[$i]->{'inhourafter'.$day} && $hour <= $lastest[$i]->{'outhourafter'.$day})
                                 <small class="job_chedule text-success mt0"><strong>Disponible</strong></small>
                            @elseif($hour >= $lastest[$i]->{'inhourafter'.$day} && $hour <= $lastest[$i]->{'outhourafter'.$day})
                                <small class="job_chedule mt0 text-success"><strong>Disponible</strong></small>
                            @else
                                <small class="job_chedule text-danger mt0"><strong>No disponible</strong></small>
                            @endif
                        @else
                            @if($hour >= $lastest[$i]->{'inhour'.$day} && $hour <= $lastest[$i]->{'outhour'.$day})
                                <small class="job_chedule text-success  mt0"><strong>Disponible</strong></small>
                            @else
                                <small class="job_chedule text-danger mt0"><strong>No disponible</strong></small>
                            @endif
                        @endif
                            @php $cantComent = 0;$cantPoints = 0;$points = 0;@endphp
                            @foreach($coments as $coment) @if($coment->user_id == $lastest[$i]->id) @php $cantComent ++; $cantPoints += $coment->point; @endphp @endif @endforeach
                            @php if($cantPoints != 0){ $points = $cantPoints / $cantComent; }else{ $points = 4; } @endphp

                            <h6 style="font-weight; bold;">{{$lastest[$i]->name}}</h6>
                            <p style="width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"> <a href="/busqueda?search={{$lastest[$i]->job}}"><strong>{{ ucfirst($lastest[$i]->job) }}</strong> <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></a></p>
                                        <p id="horario">
											<img src="img-icons/horario.png" />
                                            <!-- TODOS  HORARIOS: -->
												<strong>Hoy: </strong>
												@if($lastest[$i]->{'inhourafter'.$day} && $lastest[$i]->{'outhourafter'.$day})
													@if($hour <= $lastest[$i]->{'outhour'.$day} && $hour >= $lastest[$i]->{'inhour'.$day})
														<span style="font-size: 14px">@php echo date('G:i',strtotime($lastest[$i]->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($lastest[$i]->{'outhour'.$day} )) @endphp hs</span>
													@elseif($hour >= $lastest[$i]->{'inhourafter'.$day} && $hour <= $lastest[$i]->{'outhourafter'.$day} )
														<span style="font-size: 14px">@php echo date('G:i',strtotime($lastest[$i]->{'inhourafter'.$day} ))@endphp hs - @php echo date('G:i',strtotime($lastest[$i]->{'outhourafter'.$day} )) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible hoy</span>
                                                    @endif
												@else
													@if($lastest[$i]->{'inhour'.$day} && $lastest[$i]->{'outhour'.$day})
                                                        @if($hour <= $lastest[$i]->{'outhour'.$day} && $hour >= $lastest[$i]->{'inhour'.$day})
															<span style="font-size: 14px">@php echo date('G:i',strtotime($lastest[$i]->{'inhour'.$day}))@endphp hs - @php echo date('G:i',strtotime($lastest[$i]->{'outhour'.$day} )) @endphp hs</span>
														@else
															<span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($lastest[$i]->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($lastest[$i]->{'outhour'.$day} )) @endphp hs</span>
														@endif
													@else
														<span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible hoy</span>
													@endif
												@endif
                                        </p>
                                        <p><ul style="margin-bottom: 0px;color: #17a2b8">
                                            <li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li>
                                            <li style="display: inline">
                                                <span style="margin-left: 5px;" class="text-muted">@if($cantComent == 0) Sin opiniones @elseif($cantComent == 1) 1 opinión @elseif($cantComent > 1) {{$cantComent}} opiniones @endif</span>
                                            </li>
                                        </ul>
                                        </p>
                                        <form action="{{route('User.perfil')}}" method="GET">
                                            <input type="hidden" value="{{$lastest[$i]->id}}" name="user_id">
                                            <input type="submit" class="text-primary font-weight-bold" value="Ver/Contactar" />
                                        </form>
                                </div>
					</div>
                </div>
                    @endif
                @endfor
                <div class="container no-responsive" style="padding: 17px; padding-left: 0px;">
                    <hr>
                    <a style="font-size: 16px;font-weight: bold;color: #1886fc;padding:10px;" href="/lista">Ver todos los profesionales<i class="fa fa-arrow-right" style="padding: 10px;float: right;margin-top: -3px;"></i></a>
                </div>
            </div>


                @foreach($lastest as $last)
                    @if($last->rol == 'profesional')
                <div id="list-responsive" class="mt-2">
                    <div class="row bg-white">
                        <div class="col-3">
                            <img style="border-radius: 4px;" class="img-fluid" src="images/large/{{$last->img}}" alt="1.jpg">
                        </div>
                        <div class="col-7">
                            @if($last->{'inhourafter'.$day} && $last->{'outhourafter'.$day})
                                @if($hour >= $last->{'inhour'.$day} && $hour <= $last->{'outhour'.$day})
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-success">Disponible</p>
                                @elseif($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day})
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-success">Disponible</p>
                                @elseif($hour > $last->{'outhour'.$day} && $hour < $last->{'inhourafter'.$day})
                                    <span style="margin-bottom: 0px;font-size: 10px;font-weight: bold;color: #eb6c0a">Disponible a las @php echo date('G:i',strtotime($last->{'inhourafter'.$day} ))@endphp hs </span>
                                @else
                                 <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-danger">No Disponible</p>
                                @endif
                             @else
                                @if($hour >= $last->{'inhour'.$day} && $hour <= $last->{'outhour'.$day})
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-success">Disponible</p>
                                @else
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-danger">No Disponible</p>
                                @endif
                            @endif
                            <h4 style="font-size: 14px; margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;font-weight: 600">@if($last->verify == 2)<img height="13px" src="img-icons/verify.webp"/>@endif {{$last->name}}</h4>
                            <p style="font-weight: 600;font-size: 12px;margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><a style="color: #7f7f7f" href="/busqueda?search={{$last->job}}">{{ ucfirst($last->job) }}</a></p>
                            <p style="margin-bottom: 0px;font-size: 12px;">
                                        @if($last->{'inhourafter'.$day} && $last->{'outhourafter'.$day})
                                            @if($hour <= $last->{'outhour'.$day} && $hour >= $last->{'inhour'.$day})
                                                <span style="font-size: 12px;">@php echo date('G:i',strtotime($last->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
                                            @elseif($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day} )
                                                <span style="font-size: 12px">@php echo date('G:i',strtotime($last->{'inhourafter'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhourafter'.$day} )) @endphp hs</span>
                                            @elseif($hour > $last->{'outhour'.$day} && $hour < $last->{'inhourafter'.$day})

                                            @else
                                                <span style="font-size: 12px;" class="text-danger">No disponible hoy {{$day}} </span>
                                            @endif
                                        @else
                                            @if($last->{'inhour'.$day} && $last->{'outhour'.$day})
                                                @if($hour <= $last->{'outhour'.$day} && $hour >= $last->{'inhour'.$day})
                                                    <span style="font-size: 12px">@php echo date('G:i',strtotime($last->{'inhour'.$day}))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
                                                @else
                                                    <span style="font-size: 12px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
                                                @endif
                                            @else
                                            <span style="font-size: 12px;" class="text-danger">No disponible hoy {{$day}} </span>
                                            @endif
                                        @endif
                            </p>
                            @if($last->presupuesto)<div class="text-success" style="font-size: 12px;">Presupuesto sin cargo</div>@endif
                            <a class="stretched-link" style="text-decoration: none;  color: #2e86fc;font-weight: bold;background: none;border: none;font-size: 11px;font-family: 'roboto', sans-serif;" href="{{Route('User.perfil', ['user_id' => $last->id])}}" >VER / CONTACTAR </a>
                            <hr>
                        </div>
                        <div class="col-2" style="padding:0px;">
                            @if($last->points < 2)
                            <p style="font-size: 11px;"><span style="color: #d84747;"><i class="fa fa-star"></i></span>
                            <span style="color: #d84747;"><strong>{{round($last->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                            @elseif($last->points >= 3 && $last->points < 4)
                            <p style="font-size: 11px;"><span style="color: #d66514;"><i class="fa fa-star"></i></span>
                            <span style="color: #d66514;"><strong>{{round($last->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                            @elseif($last->points >= 4 && $last->points < 5)
                            <p style="font-size: 11px;"><span style="color: #28af77"><i class="fa fa-star"></i></span>
                            <span style="color: #28af77"><strong>{{round($last->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                            @elseif($last->points == 5)
                            <p style="font-size: 11px;"><span style="color: #ffc107"><i class="fa fa-star"></i></span>
                            <span style="color: #ffc107"><strong>{{round($last->points, 1, PHP_ROUND_HALF_UP)}}</strong></span></p>
                            @endif
                        </div>

                    </div>
                    </div>



                @endif
                @endforeach
            </div>
            <div class="container responsive" style="padding: 17px; margin-top: -25px;padding-left: 0px;">
            <a style="font-size: 13px;font-weight: bold;color: #1886fc;padding:10px;" href="/lista">Ver todos los profesionales<i class="fa fa-arrow-right" style="padding: 10px;float: right;margin-top: -3px;"></i></a>
            </div>
		</div>


        <div class="ml-2 mr-2 mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #5a96c3">
            <div class="container">
                <div class="row">
                    <div class="col-8" style="padding: 25px;">
                            <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:white;" class="font-weight-bold">¡Quedate en casa!</h6>
                            <p class="text-white" style="font-size: 12px;">Consultá presupuestos desde tu hogar, mientras combatimos el COVID-19</strong></p>
                    </div>
                    <div class="col-4">
                        <img src="img/covid19.webp" style="margin-top:20px;">
                    </div>
                </div>
        </div>
        </div>

    <!-- Home Design -->

    <div class="bg-white ml-2 mr-2 mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="container">
			<div class="row">
				<div class="col-8" style="padding: 25px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Categorías Populares</h6>
                        <p class="text-muted" style="font-size: 12px;">Éstas son las categorías con más profesionales</strong></p>
                </div>
                <div class="col-4">
                    <img src="img/populares.webp" style="margin-top:15px;">
                </div>
            </div>
    </div>
    </div>



    <div class="ml-2 mr-2 mb-2 responsive" style="background: #ff3232;border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="container">
			<div class="row">
				<div class="col-8" style="padding: 20px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color: white" class="font-weight-bold">Cuidado Personal</h6>
                        <p class="text-white" style="font-size: 12px;">Estética en general, Uñas, Peluquería y mucho más..</strong></p>
                        <a style="font-size: 12px;font-weight: bold;color: white;" href="//busqueda?category=Cuidado">Ver categoría<i class="flaticon-right-arrow pl15"></i></a>
                </div>
                <div class="col-4">
                    <img src="img/cuidado.webp" style="margin-top:12px;">
                </div>
            </div>

    </div>
    </div>

    <div class="bg-white ml-2 mr-2 mb-2"  style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
		<div class="container">
			<div class="row responsive">
				<div class="col-12" style="padding: 12px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Lo último en <strong>cuidado personal</strong></h6>
                        <div class="container" style="padding: 10px;">
                            <div class="swiper-container3">
                                <div class="swiper-wrapper">
                                    @foreach($cuidados as $cuidado)
                                  <div class="swiper-slide">
                                      <div class="card" style="border-radius: 10px;">
                                    <a class="card-block stretched-link text-decoration-none" href="/perfil?user_id={{$cuidado->id}}"></a>
                                      <img style="height: 100px;border-radius: 10px 10px 0px 0px;" src="images/large/{{$cuidado->img}}" >
                                      <div class="card-body" style="padding: 10px;">
                                          <p style="color: black;font-size: 10px;font-weight: bold; margin: 0px;;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">@if($cuidado->verify == 2) <img height="13" src="img-icons/verify.webp"> @endif {{$cuidado->name}}</p>


                                        <p style="font-size: 10px; font-weight: bold; margin: 0px;;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{ ucfirst($cuidado->job)}}</p>
                                      </div>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                                <!-- Add Pagination -->
                              </div>
                        </div>
                </div>
            </div>
		</div>
    </div>


    <div class="ml-2 mr-2 mt-2 mb-2 responsive" style="background: #00b6fe;border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="container">
			<div class="row">
				<div class="col-8" style="padding: 20px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color: white" class="font-weight-bold">Hogar y Construcción</h6>
                        <p class="text-white" style="font-size: 12px;">Pintores, Electricistas, Albañiles y mucho más..</strong></p>
                        <a style="font-size: 12px;font-weight: bold;color: white;" href="/busqueda?category=Hogar">Ver categoría<i class="flaticon-right-arrow pl15"></i></a>
                </div>
                <div class="col-4">
                    <img src="img/pintor.webp" style="margin-top:15px;">
                </div>
            </div>
    </div>
    </div>

    <!-- Popular Job Categories -->

    <div class="bg-white ml-2 mr-2 mb-2"  style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
		<div class="container">
			<div class="row responsive">
				<div class="col-12" style="padding: 12px;">
                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Lo último en hogar y construcción</h6>
                        <div class="container" style="padding: 10px;">
                            <div class="swiper-container3">
                                <div class="swiper-wrapper">
                                    @foreach($hogares as $hogar)
                                  <div class="swiper-slide">
                                      <div class="card" style="border-radius: 10px;">
                                        <a class="card-block stretched-link text-decoration-none" href="/perfil?user_id={{$hogar->id}}"></a>
                                      <img style="height: 100px;border-radius: 10px 10px 0px 0px;" src="images/large/{{$hogar->img}}" >
                                      <div class="card-body" style="padding: 10px;">
                                          <p style="color: black;font-size: 10px;font-weight: bold; margin: 0px;;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">@if($hogar->verify == 2) <img height="13" src="img-icons/verify.webp"> @endif {{$hogar->name}}</p>


                                        <p style="font-size: 10px; font-weight: bold; margin: 0px;;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{ ucfirst($hogar->job)}}</p>
                                      </div>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                                <!-- Add Pagination -->
                              </div>
                        </div>
                </div>
            </div>
		</div>
    </div>

    <div class="ml-2 mr-2 mb-2 padding-no-responsive todas" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">

    <div class="row responsive">
        <div class="col-12" style="padding: 25px;">
                <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Todas las categorías</h6>
                <p class="text-muted" style="font-size: 12px;">Encontrá el profesional que necesitas en las categorías de Mardeltrabaja.com</p>
        </div>
    </div>
    <div class="container no-responsive">
        <div class="row">
            <div class="col-12" style="padding: 25px;">
                <h4 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Todas las categorías</h6>
                <p class="text-muted">Encontrá el profesional que necesitas en las categorías de Mardeltrabaja.com</p>
            </div>
        </div>
    </div>
    <div class="todas-container">
            <div class="styles__list___1uJCs" style="border-radius: 0px;font-size: 14px">
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Hogar" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Hogar">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M29.238 13.593A368.12 368.12 0 0 0 22.89 9.67V6.49c0-.95-1.511-.95-1.511 0V8.78c-.816-.476-1.632-.98-2.449-1.455-.846-.505-2.055-1.545-3.082-1.575-.967-.03-1.602.535-2.358 1.07-1.148.773-2.266 1.575-3.415 2.347-2.418 1.664-4.866 3.358-7.284 5.02-.786.536-.03 1.843.755 1.279.787-.535 1.572-1.07 2.358-1.634 0 3.001.03 5.973.06 8.973 0 1.693-.182 3.358 1.965 3.447 2.78.119 5.59 0 8.37 0 2.69 0 5.41.09 8.1-.03 1.874-.059 1.603-2.17 1.603-3.447.03-3.15.03-6.33.03-9.479.816.505 1.632 1.04 2.449 1.545.816.535 1.571-.741.756-1.247zM16.302 24.766H14.58c.03-.06.03-.149.03-.238a58.048 58.048 0 0 1-.03-3.953c.03-.742.06-1.515.12-2.258.06-1.07.635-1.189 1.572-1.189.786.001.937-.237.937.655V24.767l-.907-.001zm8.22-4.309c0 .625 0 1.278-.03 1.901 0 1.04.393 2.437-1.027 2.437H18.72V17.812c0-1.872-.695-2.17-2.478-2.14-1.36.031-2.78.06-2.991 1.694-.303 2.377-.272 4.814-.182 7.221 0 .09.03.149.06.238H9.714c-.998 0-2.236.356-2.236-.95V21.23c-.031-2.644-.031-5.259-.06-7.904a.846.846 0 0 0-.121-.416c.695-.476 1.39-.95 2.085-1.455.967-.684 1.934-1.337 2.931-2.021.786-.535 2.84-2.556 3.869-1.99 2.87 1.515 5.651 3.209 8.402 4.961a.859.859 0 0 0-.06.297l-.001 7.755z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Hogar</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Fiestas" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Eventos">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M27.825 14.115c0-4.805-3.463-8.701-7.697-8.701-.538 0-1.076.064-1.58.195-1.412-1.364-3.16-2.11-5.042-2.11-4.235 0-7.731 3.896-7.731 8.7 0 3.897 2.285 7.176 5.31 8.312v.617c0 .942.672 1.753 1.514 2.078-.1.129-.236.26-.438.422-.47.39-1.109.909-1.109 1.916 0 1.006.672 1.526 1.143 1.915.437.357.638.52.638.908 0 .357.302.65.672.65.369 0 .671-.293.671-.65 0-1.006-.638-1.526-1.109-1.915-.437-.357-.638-.52-.638-.908 0-.39.202-.552.638-.909.37-.292.84-.682 1.042-1.331.908-.228 1.614-1.007 1.714-1.915a7.343 7.343 0 0 0 1.983 1.071l.003.584c0 .942.605 1.754 1.445 2.078-.1.13-.27.26-.471.423-.471.389-1.143.908-1.143 1.915 0 1.104.572 1.656 1.042 2.11.303.293.572.552.774.975.1.227.37.357.605.357.1 0 .202-.033.302-.065a.683.683 0 0 0 .336-.876c-.303-.617-.707-1.007-1.042-1.331-.438-.423-.672-.65-.672-1.202 0-.39.202-.552.638-.909.37-.292.907-.682 1.11-1.33.975-.26 1.78-1.137 1.78-2.144v-.616c3.027-1.139 5.312-4.417 5.312-8.314zM7.187 12.2c0-4.09 2.823-7.403 6.32-7.403 1.613 0 3.125.715 4.302 1.98 1.278 1.396 2.016 3.377 2.016 5.422 0 .422-.033.843-.1 1.234-.403 2.825-2.218 5.195-4.639 5.94a5.151 5.151 0 0 1-1.58.228c-3.496.002-6.32-3.31-6.32-7.401zm12.907 9.318c-1.31 0-2.554-.455-3.596-1.299.033-.032.067-.032.1-.065.067-.032.169-.064.236-.129l.302-.195c.067-.032.134-.097.236-.13.1-.064.202-.128.302-.194.067-.065.134-.097.202-.163.1-.065.202-.163.302-.228.067-.064.134-.097.202-.162l.303-.293.168-.162c.1-.13.236-.26.336-.39.034-.032.034-.064.067-.096.134-.163.27-.325.37-.52.033-.064.066-.097.1-.163.067-.129.168-.26.235-.389a1.51 1.51 0 0 0 .1-.227c.068-.13.135-.228.203-.357.033-.065.067-.163.1-.227.067-.13.1-.228.169-.357.033-.097.067-.163.1-.26.033-.13.1-.26.134-.357.033-.096.067-.162.067-.26l.1-.388c.034-.097.034-.195.067-.26.033-.13.067-.26.067-.423 0-.097.033-.162.033-.26.034-.162.034-.292.067-.454 0-.065.034-.163.034-.228 0-.227.033-.455.033-.682 0-.228 0-.455-.033-.682v-.13c-.034-.227-.034-.422-.067-.649 0-.032 0-.064-.034-.129a4.437 4.437 0 0 0-.133-.649V9.93a4.03 4.03 0 0 0-.169-.616c0-.033-.033-.065-.033-.097l-.202-.584c0-.033-.034-.065-.034-.097-.067-.196-.169-.39-.269-.585v-.032c-.1-.195-.202-.357-.302-.552 0-.032-.034-.064-.034-.097-.1-.163-.235-.356-.336-.52l-.033-.032c.202-.032.403-.032.605-.032 3.496 0 6.32 3.311 6.32 7.403-.065 4.119-2.888 7.43-6.384 7.43z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Eventos</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Medicina" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Bienestar">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M10.696 7.2a5.883 5.883 0 0 0-4.162 10.047l8.948 8.94a.725.725 0 0 0 1.027 0l8.955-8.924a5.89 5.89 0 0 0 0-8.331 5.895 5.895 0 0 0-8.324 0l-1.134 1.13-1.148-1.138A5.883 5.883 0 0 0 10.696 7.2zm0 1.47a4.43 4.43 0 0 1 3.135 1.308l1.658 1.646a.725.725 0 0 0 1.027 0l1.652-1.638a4.423 4.423 0 0 1 6.27 0 4.358 4.358 0 0 1 0 6.223l-8.439 8.409-8.438-8.416a4.36 4.36 0 0 1 0-6.224 4.43 4.43 0 0 1 3.135-1.308z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Bienestar</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Otros" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Clases">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M9.714 4.8C8.334 4.8 7.2 5.91 7.2 7.262v17.23c0 1.351 1.134 2.462 2.514 2.462h11.817a.762.762 0 0 0 .54-.213.728.728 0 0 0 0-1.052.762.762 0 0 0-.54-.212H9.714c-.57 0-1.005-.426-1.005-.985V9.5c.31.135.647.223 1.005.223h5.532v5.662c.002.274.159.525.408.65a.768.768 0 0 0 .778-.05l2.082-1.431 2.082 1.43c.23.157.53.178.778.052a.737.737 0 0 0 .409-.651V9.723h1.508v16.492a.73.73 0 0 0 .217.53.76.76 0 0 0 .538.22.76.76 0 0 0 .537-.22.73.73 0 0 0 .217-.53V8.985a.747.747 0 0 0-.754-.739c-.57 0-1.006-.426-1.006-.984 0-.559.435-.985 1.006-.985a.746.746 0 0 0 .743-.738.746.746 0 0 0-.743-.739H9.714zm0 1.477h12.037c-.137.304-.22.634-.22.985s.083.68.22.984H9.714a.989.989 0 0 1-1.005-.915v-.07c0-.558.435-.984 1.005-.984zm7.04 3.446h3.52v4.239l-1.328-.908a.767.767 0 0 0-.864 0l-1.328.908V9.723zm-3.85 8.37a.763.763 0 0 0-.521.243.728.728 0 0 0 .055 1.044c.15.132.345.2.545.19h8.046a.762.762 0 0 0 .54-.213.728.728 0 0 0 0-1.052.762.762 0 0 0-.54-.213h-8.046a1.07 1.07 0 0 0-.079 0zm0 3.445a.763.763 0 0 0-.521.244.728.728 0 0 0 .055 1.044c.15.132.345.2.545.19h8.046a.762.762 0 0 0 .54-.213.728.728 0 0 0 0-1.052.762.762 0 0 0-.54-.213h-8.046a1.07 1.07 0 0 0-.079 0z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Otros servicios</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Asesoramiento" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Negocios">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M26.759 8.235h-5.27V7.061c0-.504-.336-1.03-.798-1.253l-1.123-.539A3.12 3.12 0 0 0 18.38 5l-3.773.001c-.361 0-.861.114-1.187.27l-1.12.537c-.462.222-.797.75-.797 1.253v1.174H6.234C5.554 8.235 5 8.78 5 9.448v7.637c0 .423.218.8.55 1.025v6.679c0 .7.556 1.288 1.266 1.341.038.003 3.903.285 9.68.285 5.775 0 9.64-.282 9.68-.285a1.361 1.361 0 0 0 1.265-1.341v-6.678c.334-.226.552-.603.552-1.026V9.448c0-.67-.555-1.213-1.234-1.213zM12.833 7.071a.225.225 0 0 1 .059-.092l1.114-.534c.14-.068.444-.137.602-.137h3.776c.158 0 .461.068.602.137l1.116.534c.02.017.05.065.058.092v1.164h-7.327V7.071zM10.65 9.653h11.692v7.462c-1.149.038-2.47.07-3.914.086a1.189 1.189 0 0 0-1.19-1.07h-1.485c-.623 0-1.136.47-1.19 1.07a186.19 186.19 0 0 1-3.914-.086V9.653zm6.662 7.652v1.234a.077.077 0 0 1-.074.073h-1.485c-.039 0-.076-.035-.076-.073v-1.234c0-.04.036-.073.076-.073h1.485c.04 0 .074.034.074.073zm-10.87-.38V9.653h2.804v7.412a134.966 134.966 0 0 1-2.804-.14zM26 24.72c-.543.037-4.202.275-9.503.275-5.296 0-8.96-.239-9.502-.275v-6.342c.528.03 1.298.068 2.254.106v1.276c0 .38.313.689.702.689a.696.696 0 0 0 .7-.689v-1.225c1.152.037 2.474.07 3.914.087.042.61.56 1.093 1.19 1.093h1.485c.631 0 1.148-.483 1.192-1.093 1.44-.016 2.761-.049 3.913-.087v1.225c0 .38.313.689.7.689a.696.696 0 0 0 .702-.689v-1.276c.955-.037 1.726-.077 2.253-.106v6.342zm.552-7.794c-.373.024-1.372.082-2.806.14V9.653h2.806v7.272z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Negocios</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Servicios%20para%20mascotas" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Animales">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M13.073 5c-.796 0-1.44.512-1.837 1.138-.397.627-.617 1.413-.617 2.278 0 .863.22 1.65.617 2.277.398.626 1.04 1.138 1.837 1.138.797 0 1.44-.512 1.837-1.138.397-.626.61-1.413.61-2.277 0-.864-.213-1.651-.61-2.278C14.513 5.512 13.87 5 13.073 5zm5.854 0c-.797 0-1.44.512-1.837 1.138-.397.627-.61 1.413-.61 2.278 0 .863.213 1.65.61 2.277.397.626 1.04 1.138 1.837 1.138.796 0 1.44-.512 1.837-1.138.397-.626.617-1.413.617-2.277 0-.864-.22-1.651-.617-2.278C20.366 5.512 19.724 5 18.927 5zm-5.854 1.452c.147 0 .36.097.58.443.22.347.388.899.388 1.522 0 .621-.168 1.173-.389 1.52-.22.347-.432.444-.579.444-.147 0-.351-.097-.571-.443-.22-.347-.39-.899-.39-1.521 0-.622.17-1.174.39-1.522.22-.346.424-.443.571-.443zm5.854 0c.147 0 .351.097.571.443.22.347.39.899.39 1.522 0 .621-.17 1.173-.39 1.52s-.424.444-.571.444c-.147 0-.36-.097-.58-.443-.22-.347-.388-.899-.388-1.521 0-.622.168-1.174.389-1.522.22-.346.432-.443.579-.443zM8.683 9.632c-.858 0-1.557.573-1.997 1.29C6.246 11.64 6 12.55 6 13.551c0 1 .246 1.911.686 2.629.44.717 1.139 1.29 1.997 1.29.858 0 1.564-.573 2.005-1.29.44-.718.678-1.628.678-2.63 0-1-.238-1.91-.678-2.628-.44-.717-1.147-1.29-2.005-1.29zm14.634 0c-.858 0-1.564.573-2.005 1.29-.44.718-.678 1.628-.678 2.629 0 1 .238 1.911.678 2.629.44.717 1.147 1.29 2.005 1.29.859 0 1.557-.573 1.997-1.29.44-.718.686-1.628.686-2.63 0-1-.246-1.91-.686-2.628-.44-.717-1.139-1.29-1.997-1.29zM8.683 11.113c.22 0 .489.148.755.58.265.433.464 1.102.464 1.858 0 .755-.199 1.423-.464 1.857-.266.433-.536.58-.755.58-.22 0-.496-.147-.762-.58-.266-.434-.458-1.103-.458-1.858 0-.755.192-1.424.458-1.857.266-.433.543-.581.762-.581v.001zm14.634 0c.22 0 .496.148.762.58.266.433.458 1.102.458 1.858 0 .755-.192 1.423-.458 1.857-.266.433-.543.58-.762.58-.219 0-.489-.147-.755-.58-.265-.434-.464-1.103-.464-1.858 0-.755.199-1.424.464-1.857.266-.433.536-.581.755-.581v.001zM16 11.84c-1.488 0-2.592.871-3.339 1.926-.746 1.053-1.243 2.318-1.722 3.4-.249.561-.972.94-1.852 1.529-.88.588-1.868 1.563-1.868 3.17 0 1.816.879 3.161 1.936 3.974 1.058.813 2.252 1.161 3.186 1.161 1.315 0 2.156-.685 2.66-1.214.252-.265.45-.478.602-.596.153-.119.223-.153.397-.153.173 0 .244.034.396.153.152.118.35.331.602.596.504.529 1.345 1.214 2.66 1.214.935 0 2.129-.348 3.186-1.161a4.923 4.923 0 0 0 1.936-3.973c0-1.608-.987-2.584-1.867-3.171-.88-.589-1.604-.967-1.852-1.53-.48-1.081-.977-2.346-1.723-3.4-.746-1.054-1.85-1.926-3.339-1.926H16zm0 1.467c.95 0 1.554.465 2.15 1.307.595.84 1.073 2.029 1.57 3.148.524 1.183 1.63 1.65 2.385 2.155.756.504 1.212.867 1.212 1.949 0 1.363-.585 2.211-1.357 2.804-.771.593-1.773.863-2.301.863-.88 0-1.17-.303-1.601-.756-.215-.226-.441-.5-.762-.748A2.138 2.138 0 0 0 16 23.57c-.518 0-.975.21-1.296.459-.32.25-.547.522-.762.748-.43.453-.72.756-1.6.756-.53 0-1.53-.27-2.302-.863-.772-.594-1.357-1.442-1.357-2.805 0-1.082.456-1.445 1.212-1.95.755-.503 1.86-.97 2.385-2.154.497-1.12.975-2.307 1.57-3.148.596-.842 1.2-1.307 2.15-1.307v.001z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Mascotas</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Comunicacion" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Creación">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M19.195 8.294h3.45c.892 0 1.082-.356.587-1.105l-.586-.889C21.533 4.615 22.39 3 24.396 3h3.668c.386 0 .699.316.699.706 0 .39-.313.706-.7.706h-3.668c-.888 0-1.078.359-.586 1.105l.586.888c1.115 1.689.257 3.301-1.75 3.301h-1.388a9.9 9.9 0 0 1 3.312 7.412c0 5.458-4.38 9.882-9.785 9.882C9.38 27 5 22.576 5 17.118c0-5.458 4.38-9.882 9.784-9.882 1.588 0 3.086.381 4.411 1.058zM18.41 24.76a12.423 12.423 0 0 0-4.032-8.967 12.606 12.606 0 0 0-.192 2.2c0 2.705.859 5.277 2.42 7.396a8.231 8.231 0 0 0 1.804-.63zm1.36-.83c.437-.325.84-.694 1.205-1.097A12.423 12.423 0 0 0 15.822 11.8c-.443.776-.802 1.6-1.07 2.458a13.827 13.827 0 0 1 5.019 9.673zm2.588-3.167a8.51 8.51 0 0 0 .813-3.644 8.471 8.471 0 0 0-5.376-7.909c-.439.44-.841.912-1.205 1.41a13.83 13.83 0 0 1 5.768 10.143zm-7.322 4.82a13.85 13.85 0 0 1-2.248-7.59A13.85 13.85 0 0 1 16.27 8.78a8.357 8.357 0 0 0-1.78-.128 12.421 12.421 0 0 0-4.2 9.34c0 2.673.839 5.215 2.368 7.322a8.323 8.323 0 0 0 2.377.269zm-4.607-1.224c-1-1.94-1.535-4.112-1.535-6.366a13.85 13.85 0 0 1 3.22-8.906c-3.322 1.126-5.716 4.296-5.716 8.032a8.483 8.483 0 0 0 4.031 7.24z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Creación</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Otros" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Personal">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M20.518 13.344a.679.679 0 0 1-.67-.687V7.469c0-.397-.3-.719-.67-.719-.37 0-.67.322-.67.719v5.187c0 .38-.299.687-.669.687a.679.679 0 0 1-.67-.687V7.469c0-1.155.902-2.094 2.01-2.094 1.107 0 2.009.94 2.009 2.094v5.187c0 .38-.3.688-.67.688z"></path>
                           <path d="M23.196 15.688a.679.679 0 0 1-.67-.688V9.531c0-.396-.299-.718-.669-.718-.37 0-.67.322-.67.718v3.594c0 .38-.3.687-.67.687a.679.679 0 0 1-.669-.687V9.53c0-1.154.902-2.093 2.01-2.093 1.107 0 2.008.939 2.008 2.093V15c0 .38-.3.688-.67.688z"></path>
                           <path d="M17.846 26h-2.692c-3.32 0-6.02-2.828-6.02-6.306v-3.757c0-.38.3-.688.67-.688.37 0 .67.308.67.688v3.757c0 2.719 2.1 4.931 4.68 4.931h2.692c2.58 0 4.68-2.212 4.68-4.931v-7.037c0-.38.3-.688.67-.688.37 0 .67.308.67.688v7.038c0 3.477-2.7 6.305-6.02 6.305z"></path>
                           <path d="M17.84 13.812a.679.679 0 0 1-.67-.687V6.094c0-.397-.3-.719-.67-.719-.37 0-.67.322-.67.719v7.03c0 .38-.3.688-.67.688a.679.679 0 0 1-.669-.687V6.094C14.491 4.939 15.393 4 16.5 4c1.107 0 2.009.94 2.009 2.094v7.03c0 .38-.3.688-.67.688z"></path>
                           <path d="M12.482 16.157a.679.679 0 0 1-.67-.688v-8c0-1.155.902-2.094 2.01-2.094 1.107 0 2.008.94 2.008 2.094v5.656c0 .38-.3.687-.67.687a.679.679 0 0 1-.669-.687V7.469c0-.397-.3-.719-.67-.719-.369 0-.67.322-.67.719v8c0 .38-.299.688-.669.688z"></path>
                           <path d="M16.5 21.188a.679.679 0 0 1-.67-.688c0-1.896-1.501-3.438-3.348-3.438a.679.679 0 0 1-.67-.687v-4.781c0-.397-.3-.719-.67-.719-.368 0-.669.322-.669.719v4.812c0 .38-.3.688-.67.688a.679.679 0 0 1-.67-.688v-4.812c0-1.155.902-2.094 2.01-2.094 1.107 0 2.009.94 2.009 2.094v4.143c2.268.334 4.018 2.342 4.018 4.763 0 .38-.3.688-.67.688z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Personal</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Fotografia" class="styles__photoSection___lqgzu styles__link___1Zdpv" data-test="service_item.redirect_to_Fotografía">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M4.367 9.801h.472c.425 0 .767-.349.767-.78V6.235a.773.773 0 0 0-.767-.781h-.472a.773.773 0 0 0-.767.78V9.02c0 .432.344.781.767.781zM15.597 17.07c3.632 0 6.592-3.015 6.592-6.715 0-3.702-2.96-6.719-6.592-6.719C11.964 3.636 9 6.651 9 10.356c0 3.7 2.964 6.714 6.597 6.714zm0-11.872c2.804 0 5.058 2.296 5.058 5.156 0 2.856-2.255 5.152-5.058 5.152-2.805 0-5.063-2.297-5.063-5.152 0-2.859 2.258-5.156 5.063-5.156z"></path>
                           <path d="M5.561.985H4.082c-.641 0-1.028.546-1.028 1.09v.791h-.436C1.177 2.866 0 4.088 0 5.563V16.8c0 1.473 1.175 2.696 2.618 2.696H24.07c1.444 0 2.617-1.226 2.617-2.696V5.563c0-1.474-1.174-2.697-2.617-2.697h-1.53v-.394C22.54 1.124 21.464 0 20.14 0l-9.183.001c-1.324 0-2.4 1.125-2.4 2.472v.394H6.592v-.79c0-.541-.408-1.092-1.031-1.092zm3.64 3.444a.765.765 0 0 0 .667-.217l.017-.016a.78.78 0 0 0 .21-.672v-1.05c0-.508.392-.909.865-.909h9.185c.473 0 .865.4.865.91v1.047a.805.805 0 0 0 .213.68c.005.006.011.01.016.017.085.085.19.149.304.187a.775.775 0 0 0 .355.027h2.175c.596 0 1.084.495 1.084 1.134v11.237c0 .635-.49 1.134-1.084 1.134H2.62c-.59 0-1.084-.501-1.084-1.134V5.567c0-.638.493-1.134 1.084-1.134L9.2 4.43V4.43z"></path>
                           <path d="M15.686 13.557c1.694 0 3.084-1.415 3.084-3.14 0-1.728-1.389-3.144-3.084-3.144-1.696 0-3.086 1.416-3.086 3.143-.001 1.726 1.39 3.141 3.086 3.141zm0-4.721c.866 0 1.55.695 1.55 1.58 0 .882-.684 1.579-1.55 1.579-.869 0-1.552-.697-1.552-1.579-.001-.885.683-1.58 1.552-1.58z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Fotografía</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Asesoramiento" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Legal">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M28.986 16.788V16.686a.656.656 0 0 0-.044-.142L25.62 9.166h.89c.343 0 .62-.285.62-.637a.629.629 0 0 0-.62-.638h-8.976v-2.23a1.62 1.62 0 0 0-.428-1.17A1.528 1.528 0 0 0 15.987 4c-.421 0-.826.177-1.118.492a1.62 1.62 0 0 0-.429 1.17v2.23H5.461a.629.629 0 0 0-.62.637c0 .352.278.637.62.637h.89l-3.308 7.378a.721.721 0 0 0-.043.142v.123-.001c0 1.593.827 3.065 2.167 3.86a4.226 4.226 0 0 0 4.333 0c1.341-.795 2.167-2.267 2.167-3.86V16.686a.601.601 0 0 0-.044-.142L8.287 9.166h6.15v12.74a2.16 2.16 0 0 0-1.999 1.358l-.785 1.974c-.16.395-.115.846.118 1.2.232.355.622.566 1.038.562h6.375c.416.004.805-.207 1.038-.562.233-.354.276-.805.118-1.2l-.806-1.974a2.163 2.163 0 0 0-2-1.373V9.166h6.151l-3.308 7.378a.721.721 0 0 0-.044.142v.122c0 1.592.827 3.065 2.167 3.86a4.226 4.226 0 0 0 4.333 0C28.174 19.874 29 18.4 29 16.809c0 0-.014-.011-.014-.02zM7.319 19.994c-1.47 0-2.737-1.065-3.033-2.546h6.066c-.295 1.48-1.563 2.545-3.033 2.546zm-2.747-3.822l2.747-6.123 2.747 6.122-5.494.001zM15.677 5.665c0-.176.138-.318.309-.318.171 0 .309.142.309.318v2.23h-.618v-2.23zm2.716 18.105l.794 1.958h-6.4l.795-1.958a.93.93 0 0 1 .867-.596h3.085c.377 0 .715.234.858.592l.001.004zm-2.094-1.86l-.622-.002V9.166h.619l.003 12.743zm8.353-11.861L27.4 16.17h-5.49l2.742-6.122zm0 9.945c-1.47 0-2.737-1.065-3.033-2.547h6.067c-.296 1.482-1.564 2.546-3.034 2.547z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Legal</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Comunicacion" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Diseño &amp; web">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M27.006 5H4.846C3.827 5 3 5.81 3 6.81v14.473c0 1 .826 1.81 1.847 1.81h7.866c-.33.528-.815.949-1.39 1.206-.567.338-1.109.651-1.232 1.206-.03.379.126.751.419 1a.62.62 0 0 0 .492.206h9.849a.619.619 0 0 0 .43-.181c.293-.25.448-.621.42-1.001-.075-.579-.616-.892-1.232-1.207a3.146 3.146 0 0 1-1.39-1.205h7.927a1.87 1.87 0 0 0 1.314-.538 1.79 1.79 0 0 0 .532-1.296V6.809c0-.998-.826-1.809-1.846-1.809zM4.846 6.207h22.16c.162 0 .32.063.435.176.115.113.18.267.18.426v12.665H4.23V6.809c0-.332.275-.602.616-.602zm15.045 19.141l.27.157h-8.47l.272-.157h-.001a3.718 3.718 0 0 0 2.056-2.256h3.829a3.713 3.713 0 0 0 2.044 2.256zm7.115-3.461H4.846a.609.609 0 0 1-.615-.604v-.603h23.391l-.001.603c0 .16-.065.313-.18.426a.624.624 0 0 1-.435.178z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Diseño &amp; web</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="styles__item___2pefo">
                  <a href="/busqueda?category=Tecnologia" class="styles__link___1Zdpv" data-test="service_item.redirect_to_Reparación y soporte técnico">
                     <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" class="" style="fill: currentcolor;">
                        <g fill="currentColor">
                           <path d="M18.63 4.554l-4.266-.075a.825.825 0 0 0-.246.034l-.712.212C13.058 4.243 12.393 4 11.414 4h-.138A2.279 2.279 0 0 0 9 6.276V9.21a2.279 2.279 0 0 0 2.276 2.277h.138c1.06 0 1.755-.287 2.074-.854l.466.045v7.424a1.811 1.811 0 0 0-.685 1.42v6.558c0 1 .814 1.814 1.814 1.814h2.627c1 0 1.815-.814 1.815-1.814v-6.558c0-.554-.25-1.052-.643-1.385v-8.043c.07-.053.186-.119.296-.169 2.055-.05 3.231.92 3.274.957a.81.81 0 0 0 1.341-.61c0-3.026-2.417-5.697-5.163-5.718zm-.722 21.524a.196.196 0 0 1-.197.196h-2.626a.196.196 0 0 1-.196-.196V19.52c0-.108.088-.196.196-.196h2.626c.109 0 .197.088.197.196v6.558zM18.97 8.312a.813.813 0 0 0-.236.047c-.344.125-1.47.604-1.47 1.584v7.72h-1.69v-7.72a.81.81 0 0 0-.73-.806l-1.883-.183a.81.81 0 0 0-.888.806l-.001.045c-.07.025-.243.062-.657.062h-.137a.658.658 0 0 1-.658-.658V6.275c0-.363.295-.658.658-.658h.137c.414 0 .586.037.657.062l.001.045a.809.809 0 0 0 1.04.776l1.348-.401 4.148.073c1.475.012 2.706 1.201 3.255 2.578a7.272 7.272 0 0 0-2.895-.438z"></path>
                        </g>
                     </svg>
                     <span class="styles__service___3GVMR">Reparación y soporte técnico</span>
                     <div class="styles__nextIcon___2r-Lb show-sm icon-next"></div>
                  </a>
               </div>
               <div class="container responsive" style="padding: 10px; margin-left:10px;;">
                <a style="font-size: 13px;font-weight: bold;color: #1886fc;padding:10px;" href="/lista">Ver todas las categorías<i class="fa fa-arrow-right" style="margin-right: 20px;padding: 10px;float: right;margin-top: -3px;"></i></a>
                </div>
                <div class="container no-responsive" style="padding: 17px; padding-left: 0px;">
                    <hr>
                    <a style="font-size: 16px;font-weight: bold;color: #1886fc;padding:10px;" href="/lista">Ver todas las categorías<i class="fa fa-arrow-right" style="padding: 10px;float: right;margin-top: -3px;"></i></a>
                </div>
            </div>
         </div>
    </div>


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
var input = document.getElementById("searchinput1");

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

<div class="ml-2 mr-2 mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-9" style="padding: 25px;">
                    <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:black;font-size: 14px;" class="font-weight-bold">¡Perfiles Verificados!</h6>
                    <p class="text-secondary" style="font-size: 12px;">Ahora vas a poder visualizar cuales son los profesionales que presentaron documentación sobre su identidad. </strong></p>
            </div>
            <div class="col-3">
                <img src="img-icons/verify.webp" style="margin-top:50px;">
            </div>
        </div>
</div>
</div>

<section class="bg-white no-responsive">
<div class="container ">
    <div class="row">
        <div class="col-md-4 info-slide">
            <div class="card" style="border: none;">
            <div class="card-body text-center">
                <img src="img/slider1.png">
                <h4 style="font-size: 20px;font-weight: 500;line-height: 1.4;color: #4b4b4b;margin: 16px 0 0;">Utilizá el buscador</h4>
                <p style="color: #999;font-size: 15px;line-height: 1.2;">Si estás necesitando de alguien para solucionar un problema específico, ¡Acá lo vas a encontrar!</p>
                <a href="/lista" class="btn-cards" style="text-decoration: none;color: #3483fa; font-weight: bold;" >Quiero utilizar el buscador</a>
            </div>
            </div>
            <hr class="responsive" style="width: 50%; text-align: center;">
        </div>
        <div class="col-md-4 info-slide">
            <div class="card" style="border: none;">
            <div class="card-body text-center">
                <img src="img/slider2.png">
                <h4 style="font-size: 20px;font-weight: 500;line-height: 1.4;color: #4b4b4b;margin: 16px 0 0;">Contactá rápidamente</h4>
                <p style="color: #999;font-size: 15px;line-height: 1.2;">Ponete en contacto directo con la persona que necesitas de manera fácil, rápida, segura y gratuita!</p>
                <a href="/lista" class="btn-cards" style="text-decoration: none;color: #3483fa;font-weight: bold;" >Quiero encontrar lo que necesito</a>
            </div>
            </div>
            <hr class="responsive" style="width: 50%; text-align: center;">
        </div>
        <div class="col-md-4">
            <div class="card" style="border: none;">
                <div class="card-body text-center">
                    <img src="img/slider3.png">
                    <h4 style="font-size: 20px;font-weight: 500;line-height: 1.4;color: #4b4b4b;margin: 16px 0 0;">¿Realizas alguna actividad?</h4>
                    <p style="color: #999;font-size: 15px;line-height: 1.2;">Si tenés algún tipo de profesión, practicás un oficio o trabajas de manera autónoma, registrate!</p>
                    <a href="/lista" class="btn-cards" style="text-decoration: none;color: #3483fa; font-weight: bold;" >Quiero participar del sitio</a>
                </div>
                </div>
        </div>
    </div>
</div>
</section>
	<!-- Features Job List Design -->
<div class="ml-2 mr-2 mb-2 responsive bg-white" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
        <div class="swiper-container" >
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-8" style="padding: 25px;">
                                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Utilizá el buscador</h6>
                                        <p class="text-muted" style="font-size: 12px;">Si estás necesitando de alguien para un problema específico, ¡acá lo vas a encontrar!</strong></p>
                                        <a href="/lista" class="btn-cards" style="text-decoration: none;color: #3483fa;font-weight: bold;" >Quiero utilizar el buscador</a>
                                </div>
                                <div class="col-4">
                                    <img src="img/slider1.png" style="margin-top:30px;">
                                </div>
                            </div>
                    </div>
                    </div>
                <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-8" style="padding: 25px;">
                                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">Contactá rápidamente</h6>
                                        <p class="text-muted" style="font-size: 12px;">Contacto directo con lo que necesitás de manera fácil y gratis.</strong></p>
                                        <a href="/lista" class="btn-cards" style="text-decoration: none;color: #3483fa; font-weight: bold;" >Quiero encontrar</a>
                                </div>
                                <div class="col-4">
                                    <img src="img/slider2.png" style="margin-top:30px;">
                                </div>
                            </div>
                    </div>
                    </div>
                <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-8" style="padding: 25px;">
                                        <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;" class="font-weight-bold">¿Realizás actividad?</h6>
                                        <p class="text-muted" style="font-size: 12px;">Si practicás un oficio o trabajas de manera autónoma, ¡registrate!</strong></p>
                                        <a href="/lista" class="btn-cards" style="text-decoration: none;color: #3483fa;font-weight: bold;" >Quiero aparecer</a>
                                </div>
                                <div class="col-4">
                                    <img src="img/slider3.png" style="margin-top:30px;">
                                </div>
                            </div>
                    </div>
                    </div>
            </div>
        </div>
</div>

</div>
<!-- Wrapper End -->


<script>
        var countries = ["9 de Julio","Aeropuerto","Aeroparque","Alfar","Ameghino","Antártida Argentina","Barrio 180","Lomas del Golf","Bernardino Rivadavia","Belgrano","Belisario Roldán","Bosque Alegre","Bosque Peralta Ramos","Caisamar","Centenario","Cerrito","Cerrito Sur","Cerrito San Salvador","Colina Alegre","Constitución","Coronel Dorrego","Costa Azul","Don Bosco","Don Emilio","Dorrego","El Grosellar","El Martillo","El Progreso","Estrada","Etchepare","Faro","Juramento","Las Américas","Las Avenidas","Colinas de Peralta Ramos","Las Heras","La Florida","La Perla","La Zulema","Libertad","Los Acantilados","Los Pinares","Los Troncos","Malvinas Argentinas","Newbery","Nueva Pompeya","Montemar","Parque Hermoso","Parque La Florida","Parque Luro","Parque Palermo","Parque Peña","Peralta Ramos Oeste","Pinos de Anchorena","Chapadmalal","Playa Grande","Punta Mogotes","San Antonio","San Carlos","San Eduardo","San Geronimo","San Jacinto","San José","San Patricio","San Salvador","Santa Mónica","Sarmiento","Stella Maris","Jardín Stella Maris","Jardín","Alfar","Nuevo Golf","Zacagnini", "Otra zona", "Todo Mar del Plata"];
    </script>

<script>
    function autocomplete(inp, arr, arr2) {
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
              b.setAttribute("class", "ayudadorlistaporuno");
              /*make the matching letters bold:*/
              b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
              b.innerHTML += arr[i].substr(val.length);
              /*insert a input field that will hold the current array item's value:*/
              b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
              b.innerHTML += "<hr>";
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
    var cantidadesarray = @json($cantidadesarray);
    autocomplete(document.getElementById("searchinput1"), subcategoriesArray, cantidadesarray);
    //autocomplete(document.getElementById("zoneinput"), countries);
</script>

@endsection
