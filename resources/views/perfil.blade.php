@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<section class="bgc-lightgray pt80 mt-5 mbt45">
		<div class="container">
			<div class="row" id="row-text-description">
				<div class="col-md-6">
					<div class="candidate_personal_info style2">
						<div class="thumb text-center">
                        <img id="img-perfil" class="img-fluid rounded" style="height: 150px" src="img-perfil/{{$user->img}}" alt="cl1.jpg"><br><br>
						</div>
						<div class="details">
                        <span class="text-info"><strong>{{$user->job}}</strong></span>
							<h3>{{$user->name}}</h3>
							<p>De <strong>{{$user->age}} años</strong> en <a style="color: #00b7ff" href="#" >Mar del Plata</a></p>
							<ul class="address_list">
                                <li class="list-inline-item"><a href="#"><img src="icons/location.png" /> {{$user->zone}}, Mar del Plata</a></li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="col-md-2 ">
                        <hr id="lineavertical" style="border: none;border-left: 1px solid hsl(0, 0%, 76%);height: 15vh;width: 1px;">
                </div>
                <div class="col-md-4" id="contenedor-contacto">
                    <div class="row">
                        <p><strong>Contacto directo</strong></p>
                    </div>
                     <div class="row">
                        <ul>
                            @if($user->whatsapp)
                            <li style="display: inline" class="text-center">
                            <a href="https://wa.me/{{$user->whatsapp}}" target="_blank"> <img height="40px" class="mr-2" src="icons/whatsapp.png" /></a>
                            </li>
                            @endif
                            @if($user->facebook)
                            <li style="display: inline">
                            <a href="{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="icons/messenger.png" />
                            </li>
                            @endif
                            @if($user->phone)
                            <li style="display: inline">
                            <a href="tel:{{$user->phone}}"><img class="mr-2" height="40px" src="icons/phone.png" /></a>
                            </li>
                            @endif
                        </ul>
                     </div>

                     <div class="row">
                        <p><strong>Redes sociales</strong></p>
                    </div>
                     <div class="row">
                        <ul>
                            @if($user->facebook)
                            <li style="display: inline" class="text-center">
                            <a href="{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="img/facebook.png" /></a>
                            </li>
                            @endif
                            @if($user->instagram)
                            <li style="display: inline">
                                <a href="{{$user->instagram}}" target="_blank"><img height="40px" class="mr-2" src="img/instagram.png" /></a>
                            </li>
                            @endif
                            @if($user->twitter)
                            <li style="display: inline">
                                <a href="{{$user->twitter}}" target="_blank"><img class="mr-2" height="40px" src="img/twitter.png" /></a>
                            </li>
                            @endif
                            @if($user->linkedin)
                            <li style="display: inline">
                                <a href="{{$user->linkedin}}" target="_blank"><img height="40px" class="mr-2" src="img/linkedin.png" /></a>
                            </li>
                            @endif
                        </ul>
                     </div>

                </div>
			</div>
		</div>
    </section>
    <section class="bgc-white pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="candidate_about_info style2">
                                    <p class="fwb mb10"><img src="icons/descripcion.png"> Descripción del trabajo</p>
                                    <p>{{$user->description}}</p>
                                        <ul id="ulmetodos">
                                                <li id="txtmetodos" style="float: left; margin: 0 10px 0 0;">
                                                        <img src="icons/tarjeta.png" />  Métodos de pago aceptados:
                                                </li>
                                                <li  class="limetodos" @if($user->isEfective) style="border: solid 1px #e6e6e6;padding: 6px;border-radius: 4px; background: #f9f9f9;" @endif>
                                                    <img src="img/credit-card/money.png" style="height: 25px; float: left;" />
                                                </li>
                                                <li class="limetodos" @if($user->isVisa) style="border: solid 1px #e6e6e6;padding: 6px;border-radius: 4px; background: #f9f9f9;" @endif>
                                                    <img src="img/credit-card/visa.png" style="height: 25px; float: left;" />
                                                </li>
                                                <li class="limetodos" @if($user->isMasterCard) style="border: solid 1px #e6e6e6;padding: 6px;border-radius: 4px; background: #f9f9f9;" @endif>
                                                     <img src="img/credit-card/mastercard.png" style="height: 25px; float: left;" />
                                                </li>
                                                <li class="limetodos" @if($user->isMercadoPago) style="border: solid 1px #e6e6e6;padding: 6px;border-radius: 4px; background: #f9f9f9;" @endif>
                                                        <img src="img/credit-card/mercado.png" style="height: 25px; float: left;" />
                                                </li>
                                            </ul>

                                            <small class="text-secondary"><strong>*ACLARACIÓN:</strong> Los medios de pago aceptados tienen un borde y un fondo gris.</small>
                                <div class="table-responsive">
                                        <p class="fwb"><img src="icons/horario.png"> Horarios</p>
                                        <!--Table-->
                                        <table class="table">

                                          <!--Table head-->
                                          <thead>
                                            <tr>
                                              <th>*</th>
                                              <th class="th-lg">Mañana</th>
                                              <th class="th-lg">Tarde-Noche</th>
                                              <th class="th-lg">Día Completo</th>
                                            </tr>
                                          </thead>
                                          <!--Table head-->

                                          <!--Table body-->
                                          @php
                                          $carbon = Carbon::now();
                                        @endphp
                                          <tbody>
                                            <tr @if($carbon->isoFormat('dddd') == 'Monday') style="background: #ececec;" @endif>
                                              <th scope="row">Lunes</th>
                                              @if($user->inhourafterlunes)
                                                        <td>@php echo date('G:i',strtotime($user->inhourlunes))@endphp hs - @php echo date('G:i',strtotime($user->outhourlunes)) @endphp hs</td>
                                                        <td>@php echo date('G:i',strtotime($user->inhourafterlunes))@endphp hs - @php echo date('G:i',strtotime($user->outhourafterlunes)) @endphp hs</td>
                                                        <td>-</td>
                                              @else
                                                @if($user->inhourlunes && $user->outhourlunes)
                                                    <td> - </td>
                                                    <td> - </td>
                                                    <td>@php echo date('G:i',strtotime($user->inhourlunes))@endphp hs - @php echo date('G:i',strtotime($user->outhourlunes)) @endphp hs</td>
                                                @else
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                                @endif

                                              @endif
                                            </tr>
                                            <tr @if($carbon->isoFormat('dddd') == 'Tuesday') style="background: #ececec;" @endif>
                                              <th scope="row">Martes</th>
                                              @if($user->inhouraftermartes)
                                                <td>@php echo date('G:i',strtotime($user->inhourmartes))@endphp hs - @php echo date('G:i',strtotime($user->outhourmartes)) @endphp hs</td>
                                                <td>@php echo date('G:i',strtotime($user->inhouraftermartes))@endphp hs - @php echo date('G:i',strtotime($user->outhouraftermartes)) @endphp hs</td>
                                                <td>-</td>
                                             @else
                                            @if($user->inhourmartes && $user->outhourmartes)
                                            <td> - </td>
                                            <td> - </td>
                                            <td>@php echo date('G:i',strtotime($user->inhourmartes))@endphp hs - @php echo date('G:i',strtotime($user->outhourmartes)) @endphp hs</td>
                                            @else
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                                @endif
                                            @endif
                                            </tr>
                                            <tr @if($carbon->isoFormat('dddd') == 'Wednesday') style="background: #ececec;" @endif>
                                              <th scope="row">Miercoles</th>
                                              @if($user->inhouraftermiercoles)
                                              <td>@php echo date('G:i',strtotime($user->inhourmiercoles))@endphp hs - @php echo date('G:i',strtotime($user->outhourmiercoles)) @endphp hs</td>
                                              <td>@php echo date('G:i',strtotime($user->inhouraftermiercoles))@endphp hs - @php echo date('G:i',strtotime($user->outhouraftermiercoles)) @endphp hs</td>
                                              <td>-</td>
                                             @else
                                            @if($user->inhourmiercoles && $user->outhourmiercoles)
                                            <td> - </td>
                                            <td> - </td>
                                            <td>@php echo date('G:i',strtotime($user->inhourmiercoles))@endphp hs - @php echo date('G:i',strtotime($user->outhourmiercoles)) @endphp hs</td>
                                            @else
                                            <td> - </td>
                                            <td> - </td>
                                            <td> - </td>
                                            @endif
                                            @endif
                                            </tr>
                                            <tr @if($carbon->isoFormat('dddd') == 'Thursday') style="background: #ececec;" @endif>
                                              <th scope="row">Jueves</th>
                                              @if($user->inhourafterjueves)
                                                        <td>@php echo date('G:i',strtotime($user->inhourjueves))@endphp hs - @php echo date('G:i',strtotime($user->outhourjueves)) @endphp hs</td>
                                                        <td>@php echo date('G:i',strtotime($user->inhourafterjueves))@endphp hs - @php echo date('G:i',strtotime($user->outhourafterjueves)) @endphp hs</td>
                                                        <td>-</td>
                                              @else
                                                @if($user->inhourjueves && $user->outhourjueves)
                                                    <td> - </td>
                                                    <td> - </td>
                                                    <td>@php echo date('G:i',strtotime($user->inhourjueves))@endphp hs - @php echo date('G:i',strtotime($user->outhourjueves)) @endphp hs</td>
                                                    @else
                                                    <td> - </td>
                                                    <td> - </td>
                                                    <td> - </td>
                                                @endif
                                              @endif
                                            </tr>
                                            <tr @if($carbon->isoFormat('dddd') == 'Friday') style="background: #ececec;" @endif>
                                                    <th scope="row">Viernes</th>
                                                    @if($user->inhourafterviernes)
                                                    <td>@php echo date('G:i',strtotime($user->inhourviernes))@endphp hs - @php echo date('G:i',strtotime($user->outhourviernes)) @endphp hs</td>
                                                    <td>@php echo date('G:i',strtotime($user->inhourafterviernes))@endphp hs - @php echo date('G:i',strtotime($user->outhourafterviernes)) @endphp hs</td>
                                                    <td>-</td>
                                          @else
                                            @if($user->inhourviernes && $user->outhourviernes)
                                                <td> - </td>
                                                <td> - </td>
                                                <td>@php echo date('G:i',strtotime($user->inhourviernes))@endphp hs - @php echo date('G:i',strtotime($user->outhourviernes)) @endphp hs</td>
                                                @else
                                                <td> - </td>
                                                <td> - </td>
                                                <td> - </td>
                                            @endif
                                          @endif
                                                  </tr>
                                                  <tr @if($carbon->isoFormat('dddd') == 'Saturday') style="background: #ececec;" @endif>
                                                        <th scope="row">Sábado</th>
                                                        @if($user->inhouraftersabado)
                                                        <td>@php echo date('G:i',strtotime($user->inhoursabado))@endphp hs - @php echo date('G:i',strtotime($user->outhoursabado)) @endphp hs</td>
                                                        <td>@php echo date('G:i',strtotime($user->inhouraftersabado))@endphp hs - @php echo date('G:i',strtotime($user->outhouraftersabado)) @endphp hs</td>
                                                        <td>-</td>
                                              @else
                                                @if($user->inhoursabado && $user->outhoursabado)
                                                    <td> - </td>
                                                    <td> - </td>
                                                    <td>@php echo date('G:i',strtotime($user->inhoursabado))@endphp hs - @php echo date('G:i',strtotime($user->outhoursabado)) @endphp hs</td>
                                                    @else
                                                    <td> - </td>
                                                    <td> - </td>
                                                    <td> - </td>
                                                @endif
                                              @endif
                                                      </tr>
                                                      <tr @if($carbon->isoFormat('dddd') == 'Sunday') style="background: #ececec;" @endif>
                                                            <th scope="row" >Domingo</th>
                                                            @if($user->inhourafterdomingo)
                                                            <td>@php echo date('G:i',strtotime($user->inhourdomingo))@endphp hs - @php echo date('G:i',strtotime($user->outhourdomingo)) @endphp hs</td>
                                                            <td>@php echo date('G:i',strtotime($user->inhourafterdomingo))@endphp hs - @php echo date('G:i',strtotime($user->outhourafterdomingo)) @endphp hs</td>
                                                            <td>-</td>
                                                  @else
                                                    @if($user->inhourdomingo && $user->outhourdomingo)
                                                        <td> - </td>
                                                        <td> - </td>
                                                        <td>@php echo date('G:i',strtotime($user->inhourdomingo))@endphp hs - @php echo date('G:i',strtotime($user->outhourdomingo)) @endphp hs</td>
                                                        @else
                                                        <td> - </td>
                                                        <td> - </td>
                                                        <td> - </td>
                                                    @endif
                                                  @endif
                                                          </tr>

                                          </tbody>
                                          <!--Table body-->

                                        </table>
                                        <!--Table-->

                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <h4 class="fz20 mb30">Información adicional</h4>
                        <div class="candidate_working_widget style2 bgc-fa">
                            @if($user->website)<div class="icon text-thm"><img src="icons/website.png"> </span></div>
                            <div class="details">
                                <p class="color-black22">Sitio web</p>
                            <p>{{$user->website}}</p>
                            </div>
                            @endif
                            <div class="icon text-thm"><img src="icons/genero.png" /></span></div>
                            <div class="details">
                                <p class="color-black22">Profesión</p>
                            <p>{{$user->job}}</p>
                            </div>
                            <div class="icon text-thm"><img src="icons/experiencia.png" /></div>
                            <div class="details">
                                <p class="color-black22">Experiencia</p>
                            <p><strong>{{$user->experience}}</strong> @if($user->experience <= 1) Año @else Años @endif </p>
                            </div>
                            <div class="icon text-thm"><img src="icons/titulo.png" /> </div>
                            <div class="details">
                                <p class="color-black22">Título / Profesión</p>
                            <p>{{$user->level}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                        <div class="col-lg-8">

                        </div>
                    </div>
                </div>
        </section>
@endsection
