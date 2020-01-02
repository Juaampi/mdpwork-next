@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<div class="preloader"></div>
<div class="bgc-lightgray mt-4 mb-4">
		<div class="container">
			<div class="row" id="row-text-description">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Información de Contacto</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid rounded" style="height: 150px" src="img-perfil/{{$user->img}}" alt="cl1.jpg">
                                    </div>
                                    <div class="card-footer text-center">
                                        @php
                                        $cantComent = 0;
                                        $cantPoints = 0;
                                        $points = 0;
                                    @endphp
                                    @foreach($coments as $coment)
                                        @if($coment->user_id == $user->id)
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
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="details" style="padding: 33px;">
                                        <h4 class="text-secondary"><strong>{{$user->name}}</strong></h4>
                                        <ul class="address_list">
                                            <li class="list-inline-item" style="font-style: italic;"><img src="img-icons/location.png" /> {{$user->zone}}, Mar del Plata</li>
                                        </ul>
                                        <h5><img src="img-icons/experiencia.png"> {{$user->job}} <img src="img-icons/check.png"></h5>
                                        <p>De <strong>{{$user->age}} años</strong></p>
                                        <p class="text-muted"> @php
                                            $cantidadComentarios = 0;
                                            @endphp
                                                @foreach($coments as $coment)
                                                @if($coment->user_id == $$user->id)
                                                    @php
                                                        $cantidadComentarios ++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        <img src="img-icons/coments.png" /> <strong>Comentarios: <span class="badge badge-secondary">{{$cantidadComentarios}}</span> </strong>
                                    </p>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <hr id="lineavertical" style="border: none;border-left: 1px solid hsl(0, 0%, 76%);height: 25vh;width: 1px; margin-top: 40px;">
                                </div>
                                <div class="col-md-3" style="margin-top: 33px;">
                                    <div class="row">
                                        <p><strong>Contacto Directo</strong></p>
                                    </div>
                                    <ul>
                                @if($user->whatsapp)
                                <li style="display: inline" class="text-center">
                                    <a href="https://wa.me/{{$user->whatsapp}}" target="_blank"> <img height="40px" class="mr-2" src="img-icons/whatsapp.png" /></a>
                                </li>
                                @else
                                <li style="display: inline" class="text-center">
                                     <img height="40px" class="mr-2" src="img-icons/whatsappno.png" />
                                </li>
                                @endif
                                @if($user->facebook)
                                <li style="display: inline">
                                <a href="{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="img-icons/messenger.png" />
                                </li>
                                @else
                                <li style="display: inline" class="text-center">
                                    <img height="40px" class="mr-2" src="img-icons/messengerno.png" />
                                </li>
                                @endif
                                @if($user->phone)
                                <li style="display: inline">
                                <a href="tel:{{$user->phone}}"><img class="mr-2" height="40px" src="img-icons/phone.png" /></a>
                                </li>
                                @else
                                <li style="display: inline" class="text-center">
                                    <img height="40px" class="mr-2" src="img-icons/phoneno.png" />
                                </li>
                                @endif
                                </ul>
                                <div class="row">
                                    <p><strong>Redes sociales</strong></p>
                                </div>
                                 <div class="row">
                                    <ul>
                                        @if($user->facebook)
                                        <li style="display: inline" class="text-center">
                                        <a href="{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="img/facebook.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                            <img height="40px" class="mr-2" src="img/facebookno.png" />
                                        </li>
                                        @endif
                                        @if($user->instagram)
                                        <li style="display: inline">
                                            <a href="{{$user->instagram}}" target="_blank"><img height="40px" class="mr-2" src="img/instagram.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                            <img height="40px" class="mr-2" src="img/instagramno.png" />
                                        </li>
                                        @endif
                                        @if($user->twitter)
                                        <li style="display: inline">
                                            <a href="{{$user->twitter}}" target="_blank"><img class="mr-2" height="40px" src="img/twitter.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                                <img height="40px" class="mr-2" src="img/twitterno.png" />
                                            </li>
                                        @endif
                                        @if($user->linkedin)
                                        <li style="display: inline">
                                            <a href="{{$user->linkedin}}" target="_blank"><img height="40px" class="mr-2" src="img/linkedin.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                                <img height="40px" class="mr-2" src="img/linkedinno.png" />
                                            </li>
                                        @endif
                                    </ul>
                                 </div>
                            </div>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    Fecha de Ingreso: {{$user->created_at}}
                </div>
            </div>
        </div>
	</div>



                </div>
            </div>
            <div class="row mb-2" id="row-description-responsive">
                <div class="col-md-12">
                    <div class="card text-center">
                    <div class="card-header">
                        <strong>Información de Contacto</strong>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid rounded" style="height: 150px" src="img-perfil/{{$user->img}}" alt="cl1.jpg">
                            <div class="thumb fn-smd">
                                @php
                                $cantComent = 0;
                                $cantPoints = 0;
                                $points = 0;
                            @endphp
                            @foreach($coments as $coment)
                                @if($coment->user_id == $user->id)
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
                        </div>
                      <h4 class="card-title mt-1">{{$user->name}}</h4>
                    <ul class="address_list card-text">
                        <li class="list-inline-item"><a href="#"><h5 style="font-size: 15px; font-style: italic;"><img src="img-icons/location.png" /> {{$user->zone}}, Mar del Plata</a></h5></li>
                       <h5><img src="img-icons/experiencia.png" /> {{$user->job}} <img src="img-icons/check.png"></h5></li>
                       @if($user->job2)
                            <h6 class="text-secondary">- {{$user->job2}} <img src="img-icons/check.png"></h6></li>
                       @endif
                       @if($user->job3)
                            <h6 class="text-secondary">- {{$user->job3}} <img src="img-icons/check.png"></h6></li>
                        @endif
                    </ul>
                    <p><strong>Contacto directo</strong></p>
                    <ul>
                            @if($user->whatsapp)
                            <li style="display: inline" class="text-center">
                                <a href="https://wa.me/{{$user->whatsapp}}" target="_blank"> <img height="40px" class="mr-2" src="img-icons/whatsapp.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                 <img height="40px" class="mr-2" src="img-icons/whatsappno.png" />
                            </li>
                            @endif
                            @if($user->facebook)
                            <li style="display: inline">
                            <a href="{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="img-icons/messenger.png" />
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="40px" class="mr-2" src="img-icons/messengerno.png" />
                            </li>
                            @endif
                            @if($user->phone)
                            <li style="display: inline">
                            <a href="tel:{{$user->phone}}"><img class="mr-2" height="40px" src="img-icons/phone.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="40px" class="mr-2" src="img-icons/phoneno.png" />
                            </li>
                            @endif
                        </ul>
                        <p><strong>Redes sociales</strong></p>
                        <ul>
                            @if($user->facebook)
                            <li style="display: inline" class="text-center">
                            <a href="{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="img/facebook.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="40px" class="mr-2" src="img/facebookno.png" />
                            </li>
                            @endif
                            @if($user->instagram)
                            <li style="display: inline">
                                <a href="{{$user->instagram}}" target="_blank"><img height="40px" class="mr-2" src="img/instagram.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="40px" class="mr-2" src="img/instagramno.png" />
                            </li>
                            @endif
                            @if($user->twitter)
                            <li style="display: inline">
                                <a href="{{$user->twitter}}" target="_blank"><img class="mr-2" height="40px" src="img/twitter.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                    <img height="40px" class="mr-2" src="img/twitterno.png" />
                                </li>
                            @endif
                            @if($user->linkedin)
                            <li style="display: inline">
                                <a href="{{$user->linkedin}}" target="_blank"><img height="40px" class="mr-2" src="img/linkedin.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                    <img height="40px" class="mr-2" src="img/linkedinno.png" />
                                </li>
                            @endif
                        </ul>



                    </div>
                    <div class="card-footer text-muted">
                        Fecha de Ingreso: {{$user->created_at}}
                    </div>
                  </div>
            </div>
            </div>
		</div>
    <section class="bgc-white pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="candidate_about_info style2">
                                    <p class="fwb mb10"><img src="img-icons/descripcion.png"> Descripción del trabajo</p>
                                    <p>{{$user->description}}</p>
                                    <div class="alert alert-warning"><small class="text-secondary"><strong>*ACLARACIÓN:</strong> Los medios de pago aceptados tienen un borde y un fondo gris.</small></div>
                                        <ul id="ulmetodos">
                                                <li id="txtmetodos" style="float: left; margin: 0 10px 0 0;">
                                                        <img src="img-icons/tarjeta.png" />  Métodos de pago aceptados:
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
                                <div class="table-responsive">

                                        <p class="fwb"><img src="img-icons/horario.png"> Horarios del Profesional</p>
                                        <small class="text-danger mb-2" style="display: block;"><strong>*IMPORTANTE:</strong> Si el profesional no se encuentra disponible, es posible que no responda su comunicación. Por eso es importante verificar el siguiente cuadro. Ante cualquier inconveniente no dude comunicarse con nosotros.</small>
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
                            @if($user->website)<div class="icon text-thm"><img src="img-icons/website.png"> </span></div>
                            <div class="details">
                                <p class="color-black22">Sitio web</p>
                            <p>{{$user->website}}</p>
                            </div>
                            @endif
                            <div class="icon text-thm"><img src="img-icons/genero.png" /></span></div>
                            <div class="details">
                                <p class="color-black22">Profesión</p>
                            <ul><li><strong> {{$user->job}} </strong><li>
                            <li style="font-style: italic;">@if($user->job2)- {{ ($user->job2) }}@endif
                            </li>
                            <li style="font-style: italic;">@if($user->job3)- {{ ($user->job3) }}@endif
                            </li>
                             </div>
                            <div class="icon text-thm"><img src="img-icons/experiencia.png" /></div>
                            <div class="details">
                                <p class="color-black22">Experiencia</p>
                            <p><strong>{{$user->experience}}</strong> @if($user->experience <= 1) Año @else Años @endif </p>
                            </div>
                            <div class="icon text-thm"><img src="img-icons/titulo.png" /> </div>
                            <div class="details">
                                <p class="color-black22">Título / Profesión</p>
                            <p>{{$user->level}}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
            </div>

            <div class="container">
                        <div class="col-lg-8">
                            @if(Auth::user())
                            @if(Auth::user()->rol == 'usuario')
                            <div id="comentario">
                                <form action="{{route('Coment.add')}}" methos="GET">
                                <h4 class="text-secondary">Comentá y puntuá a <strong>{{$user->name}}</strong></h4>
                                @if(session()->has('response'))
                                <div class="alert alert-success text-center">El profesional fue puntuado correctamente.</div>
                                @endif
                                @if(session()->has('noresponse'))
                                <div class="alert alert-danger text-center">Ocurrió un error, por favor completa el puntaje y el comentario e intenta nuevamente.</div>
                                @endif
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input type="hidden" name="guest_id" value="{{Auth::user()->id}}">
                                <select name="point" class="form-control mb-2">
                                    <option value="">Selecciona puntaje..</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <textarea name="coment" class="form-control mb-2" placeholder="Comentanos por qué el puntaje y si tuviste alguna experiencia con el profesional..."></textarea>
                                @php $bandera = 0; @endphp
                                @foreach($coments as $coment)
                                    @if($coment->guest_id == Auth::user()->id)
                                        @php $bandera = 1; @endphp
                                    @endif
                                @endforeach
                                    @if($bandera == 1)
                                    <input disabled value="No puedes puntuar 2 veces!" type="submit"  class="btn btn-info">
                                    @else
                                    <input value="Enviar puntuación" type="submit"  class="btn btn-info">
                                    @endif

                            <hr>
                                </form>
                            </div>
                            @endif
                            @endif
                            @if(!empty($coments))
                            <h4 class="text-secondary"> Comentarios y puntuaciones: </h4>
                            @foreach($coments as $coment)
                            <div class="candidate_personal_info style2">
                                    <div class="thumb text-center">
                                    @foreach ( $users as $guest )
                                        @if($guest->id == $coment->guest_id)
                                            <img class="img-fluid rounded" style="height: 80px; border-radius: " src="img-perfil/{{$guest->img}}" alt="{{$guest->name}}.jpg"><br><br>
                                        @endif
                                    @endforeach
                                    </div>
                                    <div class="details">
                                    <span class="text-info"><strong>Puntuación:
                                        @if($coment->point <= 2)
                                            <span class="badge badge-danger">{{$coment->point}}</span>
                                        @endif
                                        @if($coment->point > 2 && $coment->point <= 4)
                                            <span class="badge badge-info">{{$coment->point}}</span>
                                        @endif
                                        @if($coment->point == 5)
                                            <span class="badge badge-warning">{{$coment->point}}</span>
                                        @endif
                                    </strong></span>
                                    @foreach($users as $guest)
                                        @if($guest->id == $coment->guest_id)
                                        <h5><strong>{{$guest->name}}</strong> - <small class="text-secondary">{{$coment->created_at}}</small></h5>
                                        @endif
                                    @endforeach
                                        <ul class="address_list">
                                        <li class="list-item"><img src="img-icons/coment.png" /> {{$coment->coment}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
        </section>
@endsection
