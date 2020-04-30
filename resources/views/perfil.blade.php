@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')

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

                                    <!-- Algoritmo para saber si esta disponible el profesional -->

                                    @if($user->{'inhourafter'.$day} && $user->{'outhourafter'.$day})
                                        @if($hour >= $user->{'inhourafter'.$day} && $hour <= $user->{'outhourafter'.$day})
                                            @php $disponible = true; @endphp
                                        @elseif($hour >= $user->{'inhourafter'.$day} && $hour <= $user->{'outhourafter'.$day})
                                            @php $disponible = true; @endphp
                                        @else
                                            @php $disponible = false; @endphp
                                        @endif
                                    @else
                                    @if($hour >= $user->{'inhour'.$day} && $hour <= $user->{'outhour'.$day})
                                        @php $disponible = true; @endphp
                                    @else
                                        @php $disponible = false; @endphp
                                    @endif
                                    @endif

                                    <!-- FIN DE ALGORITMO PARA DISPONOBILIDAD -->

                                    <!-- OPTIMIZACION DE CODIGO ESTO VA EN LA CONTROLADORA -->
                                    @if($user->{'inhourafter'.$day} && $user->{'outhourafter'.$day})
                                        @if($hour >= $user->{'inhourafter'.$day} && $hour <= $user->{'outhourafter'.$day})
                                             <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                        @elseif($hour >= $user->{'inhourafter'.$day} && $hour <= $user->{'outhourafter'.$day})
                                            <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                        @else
                                            <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                        @endif
                                    @else
                                        @if($hour >= $user->{'inhour'.$day} && $hour <= $user->{'outhour'.$day})
                                            <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                        @else
                                            <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                        @endif
                                    @endif

                                        <h5 class="text-black">{{$user->name}}</h5>
                                        <ul class="address_list">
                                            <li class="list-inline-item" style="font-style: italic;"><i class="fa fa-location-arrow"></i> @if($user->zone){{$user->zone}},@endif Mar del Plata</li>
                                        </ul>
                                        <h6> {{ ucfirst($user->job) }} <i class="fa fa-check-circle"></i></h6>
                                        <p>De <strong>{{$user->age}} años</strong></p>
                                        <p class="text-muted"> @php
                                            $cantidadComentarios = 0;
                                            @endphp
                                                @foreach($coments as $coment)
                                                @if($coment->user_id == $user->id)
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
                                        <a href="https://facebook.com/{{$user->facebook}}" target="_blank"><img height="40px" class="mr-2" src="img/facebook.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                            <img height="40px" class="mr-2" src="img/facebookno.png" />
                                        </li>
                                        @endif
                                        @if($user->instagram)
                                        <li style="display: inline">
                                            <a href="https://instagram.com/{{$user->instagram}}" target="_blank"><img height="40px" class="mr-2" src="img/instagram.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                            <img height="40px" class="mr-2" src="img/instagramno.png" />
                                        </li>
                                        @endif
                                        @if($user->twitter)
                                        <li style="display: inline">
                                            <a href="https://twitter.com/{{$user->twitter}}" target="_blank"><img class="mr-2" height="40px" src="img/twitter.png" /></a>
                                        </li>
                                        @else
                                        <li style="display: inline" class="text-center">
                                                <img height="40px" class="mr-2" src="img/twitterno.png" />
                                            </li>
                                        @endif
                                        @if($user->linkedin)
                                        <li style="display: inline">
                                            <a href="https://linkedin.com/{{$user->linkedin}}" target="_blank"><img height="40px" class="mr-2" src="img/linkedin.png" /></a>
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
                        <div class="text-center">
                            <img class="img-fluid rounded" style="height: 150px" src="img-perfil/{{$user->img}}" alt="cl1.jpg">
                            <hr>
                        </div>
                        <div class="container" style="font-family: 'Roboto', sans-serif;">
                        @if($user->{'inhourafter'.$day} && $user->{'outhourafter'.$day})
                            @if($hour >= $user->{'inhourafter'.$day} && $hour <= $user->{'outhourafter'.$day})
                                <p style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;" class="text-success">Disponible</p>
                            @elseif($hour >= $user->{'inhourafter'.$day} && $hour <= $user->{'outhourafter'.$day})
                                <p style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;" class="text-success">Disponible</p>
                            @else
                                <p style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;" class="text-danger">No disponible</p>
                            @endif
                        @else
                            @if($hour >= $user->{'inhour'.$day} && $hour <= $user->{'outhour'.$day})
                            <p style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;" class="text-success">Disponible</p>
                            @else
                            <p style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;" class="text-danger">No disponible</p>
                            @endif
                        @endif
                        <h5 class="card-title mt-1" style="margin-bottom: -2px;font-family: 'Roboto', sans-serif;font-weight: bold;">{{$user->name}}</h5>
                        <p style="font-size: 12px;">En <span class="text-info"> @if($user->zone){{$user->zone}},@endif Mar del Plata </span></p>
                        <p style="font-size: 14px;"><span style="color: #bbbbbb"></span> {{ucfirst($user->job)}} <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></p>
                        @if($user->job2)<p style="font-size: 14px;"> - <strong>Secundaria:</strong> <span style="color: #bbbbbb"></span> {{ucfirst($user->job2)}} <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></p>@endif
                        @if($user->job3)<p style="font-size: 14px;"> - <strong>Alterna:</strong> <span style="color: #bbbbbb"></span> {{ucfirst($user->job3)}} <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></p>@endif
                        @php $cantComent = 0; $cantPoints = 0; $points = 0; @endphp @foreach($coments as $coment) @if($coment->user_id == $user->id) @php $cantComent ++;$cantPoints += $coment->point;@endphp @endif @endforeach
                        @php if($cantPoints != 0){ $points = $cantPoints / $cantComent; }else{ $points = 4;}@endphp
                        <ul style="margin-bottom: 10px;color: #17a2b8">
                            <li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li>
                            <li style="display: inline">
                            <span style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;margin-left: 5px;" class="text-muted">@if($cantComent == 0) Sin opiniones @elseif($cantComent == 1) 1 opinión @elseif($cantComent > 1) {{$cantComent}} opiniones @endif - {{$user->views()->count()}} visitas</span>
                            </li>
                        </ul>

                        <p style="font-size: 14px;">Contacto directo</p>
                    <ul style="margin-top: -5px">
                            @if($user->whatsapp)
                            <li style="display: inline" class="text-center">
                                <a href="https://wa.me/{{$user->whatsapp}}" target="_blank"> <img height="30px" class="mr-2" src="img-icons/whatsapp.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                 <img height="30px" class="mr-2" src="img-icons/whatsappno.png" />
                            </li>
                            @endif
                            @if($user->facebook)
                            <li style="display: inline">
                            <a href="http://m.me/{{$user->facebook}}" target="_blank"><img height="30px" class="mr-2" src="img-icons/messenger.png" />
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="30px" class="mr-2" src="img-icons/messengerno.png" />
                            </li>
                            @endif
                            @if($user->phone)
                            <li style="display: inline">
                            <a href="tel:{{$user->phone}}"><img class="mr-2" height="30px" src="img-icons/phone.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="30px" class="mr-2" src="img-icons/phoneno.png" />
                            </li>
                            @endif
                        </ul>
                        <p style="font-size: 14px;">Redes sociales</p>
                        <ul style="margin-top: -5px; margin-bottom: 30px;">
                            @if($user->facebook)
                            <li style="display: inline" class="text-center">
                            <a href="https://facebook.com/{{$user->facebook}}" target="_blank"><img height="30px" class="mr-2" src="img/facebook.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="30px" class="mr-2" src="img/facebookno.png" />
                            </li>
                            @endif
                            @if($user->instagram)
                            <li style="display: inline">
                                <a href="https://instagram.com/{{$user->instagram}}" target="_blank"><img height="30px" class="mr-2" src="img/instagram.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                <img height="30px" class="mr-2" src="img/instagramno.png" />
                            </li>
                            @endif
                            @if($user->twitter)
                            <li style="display: inline">
                                <a href="https://twitter.com/{{$user->twitter}}" target="_blank"><img class="mr-2" height="30px" src="img/twitter.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                    <img height="30px" class="mr-2" src="img/twitterno.png" />
                                </li>
                            @endif
                            @if($user->linkedin)
                            <li style="display: inline">
                                <a href="https://linkedin.com/{{$user->linkedin}}" target="_blank"><img height="30px" class="mr-2" src="img/linkedin.png" /></a>
                            </li>
                            @else
                            <li style="display: inline" class="text-center">
                                    <img height="30px" class="mr-2" src="img/linkedinno.png" />
                                </li>
                            @endif
                        </ul>
                        @php $namemail = str_replace(" ","%20",$user->name); @endphp
                        <a href="mailto:soporte@mdpworkinc.com?Subject=Quiero%20reclamar%20el%20perfil%20{{$namemail}}" style="font-size: 13px;"><span style="color: #bbbbbb"><i class="fa fa-shield"></i> Reclamar éste perfil</span></a>

                        </div>


                    </div>
                  </div>
		</div>
    <div class="bgc-white pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12 mt10">
                                <div class="candidate_about_info style2">
                                    @if($user->description)<h6 class="mb10" style="font-size: 17px;">Descripción del trabajo</h6>
                                    <p class="text-muted" style="font-size: 15px">{{$user->description}}</p>
                                    @endif
                                    <h6 class="mb10 mt10" style="font-size: 17px;">Medios de pago</h6>
                                    <ul id="ulmetodos">
                                        @if($user->isEfective)
                                            <li  class="limetodos">
                                                <img src="img/credit-card/moneysi.png" style="height: 40px; float: left;"  title="Efectivo" />
                                            </li>
                                        @else
                                            <li  class="limetodos">
                                                <img src="img/credit-card/money.png" style="height: 40px; float: left;"  title="Efectivo" />
                                            </li>
                                        @endif
                                        @if($user->isVisa)
                                        <li class="limetodos">
                                            <img src="img/credit-card/visasi.png" style="height: 40px; float: left;" title="Tarjeta de crédito VISA" />
                                        </li>
                                        @else
                                        <li class="limetodos">
                                            <img src="img/credit-card/visa.png" style="height: 40px; float: left;" title="Tarjeta de crédito VISA" />
                                        </li>
                                        @endif
                                        @if($user->isMasterCard)
                                        <li class="limetodos">
                                             <img src="img/credit-card/mastercardsi.png" style="height: 40px; float: left;" title="Tarjeta de crédito MASTER CARD" />
                                        </li>
                                        @else
                                        <li class="limetodos">
                                            <img src="img/credit-card/mastercard.png" style="height: 40px; float: left;" title="Tarjeta de crédito MASTER CARD" />
                                       </li>
                                        @endif
                                        @if($user->isMercadoPago)
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
                                <div class="table-responsive">
                                <h6 class="mb10 mt10" style="font-size: 17px;">Horarios de atención</h6>
                                        @php
                                        $carbon = Carbon::now('America/Argentina/Buenos_Aires');
                                        $day = $carbon->isoFormat('dddd');
                                        $hour = $carbon->format('H:i:s');
                                        if($day == 'Monday'){  $day = 'lunes'; } if($day == 'Tuesday'){ $day = 'martes'; } if($day == 'Wednesday'){ $day = 'miercoles';}
                                        if($day == 'Thursday'){ $day = 'jueves';}if($day == 'Friday'){$day = 'viernes';}if($day == 'Saturday'){$day ='sabado';}if($day == 'Sunday'){$day = 'domingo';}
                                        @endphp
                                        <p @if($day == 'lunes') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px" @endif ><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Lunes</span>
                                        @if($user->inhourafterlunes)@php echo date('G:i',strtotime($user->inhourlunes))@endphp hs - @php echo date('G:i',strtotime($user->outhourlunes)) @endphp hs y de
                                            @php echo date('G:i',strtotime($user->inhourafterlunes))@endphp - @php echo date('G:i',strtotime($user->outhourafterlunes)) @endphp

                                        @elseif($user->inhourlunes && $user->outhourlunes)
                                            @php echo date('G:i',strtotime($user->inhourlunes))@endphp - @php echo date('G:i',strtotime($user->outhourlunes)) @endphp
                                        @else
                                        <span class="text-danger">-- --</span>
                                        @endif
                                        </p>

                                        <p @if($day == 'martes') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px" @endif><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Martes</span>
                                            @if($user->inhouraftermartes)@php echo date('G:i',strtotime($user->inhourmartes))@endphp - @php echo date('G:i',strtotime($user->outhourmartes)) @endphp hs y de
                                                @php echo date('G:i',strtotime($user->inhouraftermartes))@endphp - @php echo date('G:i',strtotime($user->outhouraftermartes)) @endphp

                                            @elseif($user->inhourmartes && $user->outhourmartes)
                                                @php echo date('G:i',strtotime($user->inhourmartes))@endphp - @php echo date('G:i',strtotime($user->outhourmartes)) @endphp
                                            @else
                                            <span class="text-danger">-- --</span>
                                            @endif
                                            </p>

                                            <p @if($day == 'miercoles') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px;" @endif><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Miércoles</span>
                                                @if($user->inhouraftermiercoles)@php echo date('G:i',strtotime($user->inhourmiercoles))@endphp - @php echo date('G:i',strtotime($user->outhourmiercoles)) @endphp y de
                                                    @php echo date('G:i',strtotime($user->ihouraftermiercoles))@endphp - @php echo date('G:i',strtotime($user->outhouraftermiercoles)) @endphp

                                                @elseif($user->inhourmiercoles && $user->outhourmiercoles)
                                                    @php echo date('G:i',strtotime($user->inhourmiercoles))@endphp - @php echo date('G:i',strtotime($user->outhourmiercoles)) @endphp
                                                @else
                                                <span class="text-danger">-- --</span>
                                                @endif
                                                </p>

                                                <p @if($day == 'jueves') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px;" @endif><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Jueves</span>
                                                    @if($user->inhourafterjueves)@php echo date('G:i',strtotime($user->inhourjueves))@endphp - @php echo date('G:i',strtotime($user->outhourjueves)) @endphp y de
                                                        @php echo date('G:i',strtotime($user->inhourafterjueves))@endphp - @php echo date('G:i',strtotime($user->outhourafterjueves)) @endphp

                                                    @elseif($user->inhourjueves && $user->outhourjueves)
                                                        @php echo date('G:i',strtotime($user->inhourjueves))@endphp - @php echo date('G:i',strtotime($user->outhourjueves)) @endphp
                                                    @else
                                                    <span class="text-danger">-- --</span>
                                                    @endif
                                                    </p>

                                                    <p @if($day == 'viernes') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px;" @endif><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Viernes</span>
                                                        @if($user->inhourafterviernes)@php echo date('G:i',strtotime($user->inhourviernes))@endphp - @php echo date('G:i',strtotime($user->outhourviernes)) @endphp y de
                                                            @php echo date('G:i',strtotime($user->inhourafterviernes))@endphp - @php echo date('G:i',strtotime($user->outhourafterviernes)) @endphp

                                                        @elseif($user->inhourviernes && $user->outhourviernes)
                                                            @php echo date('G:i',strtotime($user->inhourviernes))@endphp - @php echo date('G:i',strtotime($user->outhourviernes)) @endphp
                                                        @else
                                                        <span class="text-danger">-- --</span>
                                                        @endif
                                                        </p>

                                                        <p @if($day == 'sabado') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px;" @endif><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Sábado</span>
                                                            @if($user->inhouraftersabado)@php echo date('G:i',strtotime($user->inhoursabado))@endphp - @php echo date('G:i',strtotime($user->outhoursabado)) @endphp y de
                                                                @php echo date('G:i',strtotime($user->inhouraftersabado))@endphp - @php echo date('G:i',strtotime($user->outhouraftersabado)) @endphp

                                                            @elseif($user->inhoursabado && $user->outhoursabado)
                                                                @php echo date('G:i',strtotime($user->inhoursabado))@endphp - @php echo date('G:i',strtotime($user->outhoursabado)) @endphp
                                                            @else
                                                            <span class="text-danger">-- --</span>
                                                            @endif
                                                            </p>

                                                            <p @if($day == 'domingo') style="font-size: 15px;background: #f7f7f7;border-radius: 20px;padding: 10px;" @else style="font-size: 15px;" @endif><span style="margin-left: 5px; font-weight: 600;margin-right: 10px;">Domingo</span>
                                                                @if($user->inhourafterdomingo)@php echo date('G:i',strtotime($user->inhourdomingo))@endphp - @php echo date('G:i',strtotime($user->outhourdomingo)) @endphp y de
                                                                    @php echo date('G:i',strtotime($user->inhourafterdomingo))@endphp - @php echo date('G:i',strtotime($user->outhourafterdomingo)) @endphp

                                                                @elseif($user->inhourdomingo && $user->outhourdomingo)
                                                                    @php echo date('G:i',strtotime($user->inhourdomingo))@endphp - @php echo date('G:i',strtotime($user->outhourdomingo)) @endphp
                                                                @else
                                                                <span class="text-danger">-- --</span>
                                                                @endif
                                                            </p>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <h6 style="margin-top: 20px; font-size: 17px;margin-bottom: 20px;">Información adicional</h6>
                        <div class="candidate_working_widget style2 bgc-fa">
                            @if($user->website)<p style="font-size:15px;"><i class="fa fa-window-restore"></i> <span style="font-weight: 600">Sitio Web:</span>  {{$user->website}}</p>@endif<hr>
                            @if($user->job)<p style="font-size:15px;"><i class="fa fa-briefcase"></i> <span style="font-weight: 600">Profesión: </span>  {{ ucfirst($user->job) }}</p>@endif<hr>
                            @if($user->experience)<p style="font-size:15px;"><i class="fa fa-address-card"></i> <span style="font-weight: 600">Experiencia: </span> @if($user->experience == 0 )Menos de 1 año @elseif($user->experience == 1) 1 Año @elseif($user->experience > 1)  {{$user->experience}} años @endif  </p>@endif<hr>
                            @if($user->level)<p style="font-size:15px;"><i class="fa fa-graduation-cap"></i> <span style="font-weight: 600">Titulo / Certificado: </span>  {{$user->level}}</p>@endif<hr>
                        </div>
                    </div>
                </div>
            </div>
            @if($user->img1 || $user->img2 || $user->img3)
            <div class="container">
            <div class="row" style="margin-left: 10px;">
                <h6 style="margin-top: 20px; font-size: 17px;margin-bottom: 20px;">Imágenes del profesional</h6>
            </div>
            <div class="row responsive">
                <div class="swiper-container" >
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                            @if($user->img1)
                                <div class="swiper-slide">
                                    <img src="img-jobs/{{$user->img1}}" />
                                </div>
                            @endif
                            @if($user->img2)
                                <div class="swiper-slide">
                                    <img src="img-jobs/{{$user->img2}}" />
                                </div>
                            @endif
                            @if($user->img3)
                                <div class="swiper-slide">
                                    <img src="img-jobs/{{$user->img3}}" />
                                </div>
                            @endif
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="row no-responsive">
                <div class="col-lg-4 mt-2 mb-2">
                    @if($user->img1)
                    <img src="img-jobs/{{$user->img1}}" />
                    @endif
                </div>
                <div class="col-lg-4 mt-2 mb-2">
                    @if($user->img2)
                    <img src="img-jobs/{{$user->img2}}" />
                    @endif
                </div>
                <div class="col-lg-4 mt-2 mb-2">
                    @if($user->img3)
                    <img src="img-jobs/{{$user->img3}}" />
                    @endif
                </div>
            </div>
            </div>
            @endif
            <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mt-3">
                            @if(Auth::user())
                            @if(Auth::user()->rol == 'usuario')
                            <div id="comentario">
                                <form action="{{route('Coment.add')}}" method="GET">
                                    <h6 style="margin-top: 20px; font-size: 17px;margin-bottom: 20px;">Comentá y puntuá</h6>
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
                                </form>
                            </div>
                            @endif
                            @endif
                            @if(!empty($coments))
                            <h6 style="margin-top: 20px; font-size: 17px;margin-bottom: 20px;">Opiniones de usuarios</h6>
                            @if(!auth::user())
                            <p class="alert alert-info">Para comentar debes iniciar sesión como un usuario.</p>
                            <p>Si tenés cuenta <a class="mt-2" href="/login" style="color: #3483fa;font-size: 14px;text-decoration: none;font-weight: 600">Ingresá</a>. Si todavía no tenés cuenta <a class="mt-2" href="/register" style="color: #c51928;font-size: 14px;text-decoration: none;font-weight: 600">Registrate</a>.</p>

                            @endif
                            @foreach($coments as $coment)
                            <div class="container">
                            <div class="row">
                                    @foreach ( $users as $guest )
                                        @if($guest->id == $coment->guest_id)
                                            <img class="img-fluid" style="height: 35px; border-radius: 35px" @if($guest->avatar) src="{{$guest->avatar}}" @else src="img-perfil/{{ $guest->img }}" @endif alt="{{$guest->name}}.jpg">
                                            <h6 style="margin-top: 8px; margin-left: 10px;font-size: 14px; font-weight: 600">{{$guest->name}}
                                            @if($coment->point <=2)
                                                <span class="text-danger"> +{{$coment->point}}</span></h6>
                                            @elseif($coment->point > 2 && $coment->point <= 3)
                                                <span class="text-warning"> +{{$coment->point}}</span></h6>
                                            @elseif($coment->point > 3 && $coment->point <= 4)
                                                <span class="text-info"> +{{$coment->point}}</span></h6>
                                            @elseif($coment->point > 4 && $coment->point <= 5)
                                                <span class="text-success"> +{{$coment->point}}</span></h6>
                                            @endif
                                        @endif
                                    @endforeach
                            </div>
                            <div class="row">
                                <ul style="margin-bottom: 7px;margin-top: 7px;color: #17a2b8">
                                    <li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li>
                                    <li style="display: inline">
                                        <span style="font-size: 12px; margin-bottom: -5px; margin-top: 10px;margin-left: 5px;" class="text-muted">@php echo date("d/m/Y",strtotime($coment->created_at))@endphp</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                               <h6 style="font-size: 15px" class="text-muted"> {{$coment->coment}}</h6>
                            </div>
                            </div>
                            <hr>
                            @endforeach
                            @endif
                        </div>
            </div>
                    </div>
                </div>
            </div>
@endsection
