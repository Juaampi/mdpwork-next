@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<div class="preloader"></div>
<section class="bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt10">
                <div class="bg_png">
                    <img class="img-fluid" src="icons/coete.png" alt="cl1.png">
                </div>
                <p class="text-center mb2"><strong>MDP WORK INC.</strong> - Utilizá el buscador y los filtros para encontrar lo que necesitas</p>
                @if(session()->has('response'))
                    <div class="alert alert-danger text-center">Lamentablemente no pudimos encontrar lo que busca, pruebe utilizando los filtros especiales de <strong>MDPWORK</strong></div>
                @endif
                <div class="home-job-search-box mt20 mb20">
                <form class="form-inline" method="GET" action="{{route('User.search')}}">
                         <div class="search_option_one">
                            <div class="form-group">
                                <label for="exampleInputName"><img src="icons/search-icon.png"></label>
							    	<input name="search" autocomplete="off" spellcheck="false" type="text" class="form-control h70" id="searchinput" placeholder="Escribe lo que buscas.. EJ:Carpintero, electricista">
                            </div>
                        </div>
                        <div class="search_option_two">
                            <div class="form-group">
                                <label for="exampleInputEmail"><img src="icons/location.png"/></label>
							    <input type="text" class="form-control h70" id="zoneinput" autocomplete="off" spellcheck="false" name="zone" placeholder="Busca por zona">
                            </div>
                        </div>
                        <div class="search_option_button">
                            <button type="submit" class="btn btn-thm btn-secondary h70">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-faq">
    <div class="container" style="max-width: 94%;">
        <div class="row">
            <div class="col-lg-3 col-xl-3 dn-smd card-header" id="filter-mobile-none">
<form action="{{route('User.search')}}" method="GET">
                <div class="cl_skill_checkbox mb30">
                        <div class="my_profile_input form-group">
                                <label for="formGroupExampleInput2">Categorías generales</label>
                                <select id="category" name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                </div>
                <div class="cl_carrer_lever mb30">
                            <div class="my_profile_input form-group">
                                <label for="formGroupExampleInput2">Profesion <img id="unselected" style="display:none;" src="icons/alert.png"><img id="selected" style="display:none;" src="icons/check.png"></label>
                                <select id="subcategory" name="search" class="form-control">
                                </select>
                            </div>
                    </div>
                    <div class="cl_carrer_lever mb30">
                        <button id="btnsubmitfilter" disabled type="submit" class="btn btn-danger btn-secondary">Filtrar</button>
                    </div>
</form>

            </div>
            <div class="col-lg-9 col-xl-9">

                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="candidate_job_alart_btn">
                            <button class="btn btn-thm btns dn db-991" style="margin: 0 auto;">Ver filtros</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="content_details">
                            <div class="details">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Esconder Filtro</span><i>×</i></a>
                        <form action="{{route('User.search')}}" method="GET">
                                <div class="my_profile_input form-group text-center">
                                        <label for="formGroupExampleInput2">Categorías generales</label>
                                        <select id="categorymobile" name="category_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="my_profile_input form-group text-center">
                                        <label for="formGroupExampleInput2">Profesion <img id="unselectedmobile" style="display:none;" src="icons/alert.png"><img id="selectedmobile" style="display:none;" src="icons/check.png"></label>
                                        <select id="subcategorymobile" name="search" class="form-control">
                                        </select>
                                </div>
                                <div class="cl_latest_activity mb30 text-center">
                                        <button id="btnsubmitfiltermobile" disabled type="submit" class="btn btn-danger btn-secondary">Filtrar</button>
                                    </div>
                        </form>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                            @foreach($lastest as $last)
                            @if($last->rol = 'profesional')
                            <div class="col-sm-12 col-lg-12">
                                <div class="fj_post">
                                    <div class="details">
                                        @php
                                            $carbon = Carbon::now();
                                        @endphp

                                        <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        @if($carbon->isoFormat('dddd')=='Monday')
                                            @if($last->inhourafterlunes && $last->outhourafterlunes)
                                                @if($carbon->format('H:i:s') >= $last->inhourlunes && $carbon->format('H:i:s') <= $last->outhourlunes)
                                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                                @endif
                                                @if($carbon->format('H:i:s') >= $last->inhourafterlunes && $carbon->format('H:i:s') <= $last->outhourafterlunes)
                                                    <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                                @endif
                                            @else
                                                @if($carbon->format('H:i:s') >= $last->inhourlunes && $carbon->format('H:i:s') <= $last->outhourlunes)
                                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                                @else
                                                    <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                                @endif
                                            @endif
                                        @endif

                                        <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                          <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                          @if($carbon->isoFormat('dddd')=='Tuesday')
                                          @if($last->inhouraftermartes && $last->outhouraftermartes)
                                              @if($carbon->format('H:i:s') >= $last->inhourmartes && $carbon->format('H:i:s') <= $last->outhourmartes)
                                                  <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                              @endif
                                              @if($carbon->format('H:i:s') >= $last->inhouraftermartes && $carbon->format('H:i:s') <= $last->outhouraftermartes)
                                                  <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                              @endif
                                          @else
                                              @if($carbon->format('H:i:s') >= $last->inhourmartes && $carbon->format('H:i:s') <= $last->outhourmartes)
                                                  <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                              @else
                                                  <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                              @endif
                                          @endif
                                      @endif

                                      <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        @if($carbon->isoFormat('dddd')=='Wednesday')
                                            @if($last->inhouraftermiercoles && $last->outhouraftermiercoles)
                                                @if($carbon->format('H:i:s') >= $last->inhourmiercoles && $carbon->format('H:i:s') <= $last->outhourmiercoles)
                                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                                @endif
                                                @if($carbon->format('H:i:s') >= $last->inhouraftermiercoles && $carbon->format('H:i:s') <= $last->outhouraftermiercoles)
                                                    <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                                @endif
                                            @else
                                                @if($carbon->format('H:i:s') >= $last->inhourmiercoles && $carbon->format('H:i:s') <= $last->outhourmiercoles)
                                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                                @else
                                                    <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                                @endif
                                            @endif
                                        @endif

                                        <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                          <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                          @if($carbon->isoFormat('dddd')=='Thursday')
                                          @if($last->inhourafterjueves && $last->outhourafterjueves)
                                              @if($carbon->format('H:i:s') >= $last->inhourjueves && $carbon->format('H:i:s') <= $last->outhourjueves)
                                                  <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                              @endif
                                              @if($carbon->format('H:i:s') >= $last->inhourafterjueves && $carbon->format('H:i:s') <= $last->outhourafterjueves)
                                                  <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                              @endif
                                          @else
                                              @if($carbon->format('H:i:s') >= $last->inhourjueves && $carbon->format('H:i:s') <= $last->outhourjueves)
                                                  <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                              @else
                                                  <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                              @endif
                                          @endif
                                      @endif

                                      <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        @if($carbon->isoFormat('dddd')=='Friday')
                                            @if($last->inhourafterviernes && $last->outhourafterviernes)
                                                @if($carbon->format('H:i:s') >= $last->inhourviernes && $carbon->format('H:i:s') <= $last->outhourviernes)
                                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                                @endif
                                                @if($carbon->format('H:i:s') >= $last->inhourafterviernes && $carbon->format('H:i:s') <= $last->outhourafterviernes)
                                                    <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                                @endif
                                            @else
                                                @if($carbon->format('H:i:s') >= $last->inhourviernes && $carbon->format('H:i:s') <= $last->outhourviernes)
                                                    <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                                @else
                                                    <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                                @endif
                                            @endif
                                        @endif

                                        <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                          <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                          @if($carbon->isoFormat('dddd')=='Saturday')
                                          @if($last->inhouraftersabado && $last->outhouraftersabado)
                                              @if($carbon->format('H:i:s') >= $last->inhoursabado && $carbon->format('H:i:s') <= $last->outhoursabado)
                                                  <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                              @endif
                                              @if($carbon->format('H:i:s') >= $last->inhouraftersabado && $carbon->format('H:i:s') <= $last->outhouraftersabado)
                                                  <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                              @endif
                                          @else
                                              @if($carbon->format('H:i:s') >= $last->inhoursabado && $carbon->format('H:i:s') <= $last->outhoursabado)
                                                  <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                              @else
                                                  <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                              @endif
                                          @endif
                                      @endif

                                      <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        <!-- ACA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        @if($carbon->isoFormat('dddd')=='Sunday')
                                        @if($last->inhourafterdomingo && $last->outhourafterdomingo)
                                            @if($carbon->format('H:i:s') >= $last->inhourdomingo && $carbon->format('H:i:s') <= $last->outhourdomingo)
                                                <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                            @endif
                                            @if($carbon->format('H:i:s') >= $last->inhourafterdomingo && $carbon->format('H:i:s') <= $last->outhourafterdomingo)
                                                <h5 class="job_chedule mt0 badge badge-success text-white"><strong>Disponible</strong></h5>
                                            @endif
                                        @else
                                            @if($carbon->format('H:i:s') >= $last->inhourdomingo && $carbon->format('H:i:s') <= $last->outhourdomingo)
                                                <h5 class="job_chedule badge badge-success text-white mt0"><strong>Disponible</strong></h5>
                                            @else
                                                <h5 class="job_chedule badge badge-danger text-white mt0"><strong>No disponible</strong></h5>
                                            @endif
                                        @endif
                                    @endif

                                    <!-- ACA FINALIZA ESTA CADA DÍA EL HORARIO DISPONIBLE -->

                                        <div class="thumb fn-smd">
                                        <img class="img-fluid" style="height: 120px" src="img-perfil/{{$last->img}}" alt="1.jpg">
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
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                @endif
                                                @if($points > 1 && $points <= 2)
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                @endif
                                                @if($points > 2 && $points <= 3)
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                @endif
                                                @if($points > 3 && $points <= 4)
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/vacia.png">
                                                </li>
                                                @endif
                                                @if($points > 4 && $points <= 5)
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                <li style="display: inline">
                                                    <img height="18px;" src="icons/llena.png">
                                                </li>
                                                @endif
                                            </ul>

                                                <span class="badge badge-warning"><strong>{{$points}}</strong></span>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>{{$last->name}}</h4>
                                                <p style="width: 204px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" class="font-style-italic"><img src="icons/location.png" /> {{$last->zone}}, Mar del Plata</p>
                                            <p class="font-style-italic" ><a href="/busqueda?search={{$last->job}}"><strong>{{ $last->job }}</strong></a></p>
                                            </div>
                                            <div class="col-md-6">
                                                    <p>
                                                        <img src="icons/horario.png" />
                                                        	<!-- LUNES HORARIOS: -->
											@if($carbon->isoFormat('dddd') == 'Monday')
                                            <strong>Lunes: </strong>
                                            @if($last->inhourafterlunes && $last->outhourafterlunes)
                                                @if($carbon->format('H:i:s') < $last->outhourlunes)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourlunes))@endphp hs - @php echo date('G:i',strtotime($last->outhourlunes)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhourlunes && $carbon->format('H:i:s') < $last->outhourafterlunes)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourafterlunes))@endphp hs - @php echo date('G:i',strtotime($last->outhourafterlunes)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhourlunes && $last->outhourlunes)
                                                    @if($carbon->format('H:i:s') < $last->outhourlunes && $carbon->format('H:i:s') > $last->inhourlunes)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourlunes))@endphp hs - @php echo date('G:i',strtotime($last->outhourlunes)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhourlunes))@endphp hs - @php echo date('G:i',strtotime($last->outhourlunes)) @endphp hs</span>
                                                    @endif
                                                @else
                                                    <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif
                                            @endif
                                        @endif
                                    <!-- CIERRE martes HORARIOS -->

                                        <!-- martes HORARIOS: -->
                                        @if($carbon->isoFormat('dddd') == 'Tuesday')
                                            <strong>Martes: </strong>
                                            @if($last->inhouraftermartes && $last->outhouraftermartes)
                                                @if($carbon->format('H:i:s') < $last->outhourmartes)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourmartes))@endphp hs - @php echo date('G:i',strtotime($last->outhourmartes)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhourmartes && $carbon->format('H:i:s') < $last->outhouraftermartes)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhouraftermartes))@endphp hs - @php echo date('G:i',strtotime($last->outhouraftermartes)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhourmartes && $last->outhourmartes)
                                                    @if($carbon->format('H:i:s') < $last->outhourmartes && $carbon->format('H:i:s') > $last->inhourmartes)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourmartes))@endphp hs - @php echo date('G:i',strtotime($last->outhourmartes)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhourmartes))@endphp hs - @php echo date('G:i',strtotime($last->outhourmartes)) @endphp hs</span>
                                                    @endif
                                                @else
                                                        <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif

                                            @endif
                                        @endif
                                    <!-- CIERRE martes HORARIOS -->

                                        <!-- MIERCOLES HORARIOS: -->
                                        @if($carbon->isoFormat('dddd') == 'Wednesday')
                                            <strong>Miércoles: </strong>
                                            @if($last->inhouraftermiercoles && $last->outhouraftermiercoles)
                                                @if($carbon->format('H:i:s') < $last->outhourmiercoles)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourmiercoles))@endphp hs - @php echo date('G:i',strtotime($last->outhourmiercoles)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhourmiercoles && $carbon->format('H:i:s') < $last->outhouraftermiercoles)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhouraftermiercoles))@endphp hs - @php echo date('G:i',strtotime($last->outhouraftermiercoles)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhourmiercoles && $last->outhourmiercoles)
                                                    @if($carbon->format('H:i:s') < $last->outhourmiercoles && $carbon->format('H:i:s') > $last->imhourmiercoles)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourmiercoles))@endphp hs - @php echo date('G:i',strtotime($last->outhourmiercoles)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhourmiercoles))@endphp hs - @php echo date('G:i',strtotime($last->outhourmiercoles)) @endphp hs</span>
                                                    @endif
                                                @else
                                                    <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif
                                            @endif
                                        @endif
                                    <!-- CIERRE miercoles HORARIOS -->

                                        <!-- LUNES HORARIOS: -->
                                        @if($carbon->isoFormat('dddd') == 'Thursday')
                                            <strong>Jueves: </strong>
                                            @if($last->inhourafterjueves && $last->outhourafterjueves)
                                                @if($carbon->format('H:i:s') < $last->outhourjueves)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourjueves))@endphp hs - @php echo date('G:i',strtotime($last->outhourjueves)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhourjueves && $carbon->format('H:i:s') < $last->outhourafterjueves)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourafterjueves))@endphp hs - @php echo date('G:i',strtotime($last->outhourafterjueves)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhourjueves && $last->outhourjueves)
                                                    @if($carbon->format('H:i:s') < $last->outhourjueves && $carbon->format('H:i:s') > $last->inhourjueves)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourjueves))@endphp hs - @php echo date('G:i',strtotime($last->outhourjueves)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhourjueves))@endphp hs - @php echo date('G:i',strtotime($last->outhourjueves)) @endphp hs</span>
                                                    @endif
                                                @else
                                                    <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif
                                            @endif
                                        @endif
                                    <!-- CIERRE jueves HORARIOS -->

                                        <!-- Viernes HORARIOS: -->
                                        @if($carbon->isoFormat('dddd') == 'Friday')
                                            <strong>Viernes: </strong>
                                            @if($last->inhourafterviernes && $last->outhourafterviernes)
                                                @if($carbon->format('H:i:s') < $last->outhourviernes)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourviernes))@endphp hs - @php echo date('G:i',strtotime($last->outhourviernes)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhourviernes && $carbon->format('H:i:s') < $last->outhourafterviernes)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourafterviernes))@endphp hs - @php echo date('G:i',strtotime($last->outhourafterviernes)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhourviernes && $last->outhourviernes)
                                                    @if($carbon->format('H:i:s') < $last->outhourviernes && $carbon->format('H:i:s') > $last->inhourviernes)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourviernes))@endphp hs - @php echo date('G:i',strtotime($last->outhourviernes)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhourviernes))@endphp hs - @php echo date('G:i',strtotime($last->outhourviernes)) @endphp hs</span>
                                                    @endif
                                                @else
                                                    <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif
                                            @endif
                                        @endif
                                    <!-- CIERRE viernes HORARIOS -->

                                        <!-- Sabado HORARIOS: -->
                                        @if($carbon->isoFormat('dddd') == 'Saturday')
                                            <strong>Sábado: </strong>
                                            @if($last->inhouraftersabado && $last->outhouraftersabado)
                                                @if($carbon->format('H:i:s') < $last->outhoursabado)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhoursabado))@endphp hs - @php echo date('G:i',strtotime($last->outhoursabado)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhoursabado && $carbon->format('H:i:s') < $last->outhouraftersabado)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhouraftersabado))@endphp hs - @php echo date('G:i',strtotime($last->outhouraftersabado)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhoursabado && $last->outhoursabado)
                                                    @if($carbon->format('H:i:s') < $last->outhoursabado && $carbon->format('H:i:s') > $last->inhoursabado)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhoursabado))@endphp hs - @php echo date('G:i',strtotime($last->outhoursabado)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhoursabado))@endphp hs - @php echo date('G:i',strtotime($last->outhoursabado)) @endphp hs</span>
                                                    @endif
                                                @else
                                                    <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif
                                            @endif
                                        @endif
                                    <!-- CIERRE sabado HORARIOS -->

                                        <!-- LUNES HORARIOS: -->
                                        @if($carbon->isoFormat('dddd') == 'Sunday')
                                            <strong>Domingo: </strong>
                                            @if($last->inhourafterdomingo && $last->outhourafterdomingo)
                                                @if($carbon->format('H:i:s') < $last->outhourdomingo)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourdomingo))@endphp hs - @php echo date('G:i',strtotime($last->outhourdomingo)) @endphp hs</span>
                                                @endif
                                                @if($carbon->format('H:i:s') > $last->outhourdomingo && $carbon->format('H:i:s') < $last->outhourafterdomingo)
                                                    <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourafterdomingo))@endphp hs - @php echo date('G:i',strtotime($last->outhourafterdomingo)) @endphp hs</span>
                                                @endif
                                            @else
                                                @if($last->inhourdomingo && $last->outhourdomingo)
                                                    @if($carbon->format('H:i:s') < $last->outhourdomingo && $carbon->format('H:i:s') > $last->inhourdomingo)
                                                        <span style="font-size: 14px">@php echo date('G:i',strtotime($last->inhourdomingo))@endphp hs - @php echo date('G:i',strtotime($last->outhourdomingo)) @endphp hs</span>
                                                    @else
                                                        <span style="font-size: 14px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->inhourdomingo))@endphp hs - @php echo date('G:i',strtotime($last->outhourdomingo)) @endphp hs</span>
                                                    @endif
                                                @else
                                                    <span style="font-size: 14px; font-style: italic;" class="text-danger font-weight-bold">No disponible por hoy</span>
                                                @endif
                                            @endif
                                        @endif
                                    <!-- CIERRE domingo HORARIOS -->


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
                                                        <img src="icons/coments.png" /> <strong>Comentarios: <span class="badge badge-secondary">{{$cantidadComentarios}}</span> </strong>
                                                        </p>
                                            </div>
                                            <ul id="ulmetodos">
                                                <li id="txtmetodos" style="float: left; margin: 0 10px 0 0;">
                                                    Métodos de pago aceptados:
                                                </li>
                                                <li  class="limetodos" @if($last->isEfective) style="border: solid 1px #a5a5a5;padding: 6px;border-radius: 4px; background: #f7f7f7;" @endif>
                                                    <img src="img/credit-card/money.png" style="height: 25px; float: left;" title="Efectivo" />
                                                </li>
                                                <li class="limetodos" @if($last->isVisa) style="border: solid 1px #a5a5a5;padding: 6px;border-radius: 4px; background: #f7f7f7;" @endif>
                                                    <img src="img/credit-card/visa.png" style="height: 25px; float: left;" title="Tarjeta de crédito VISA" />
                                                </li>
                                                <li class="limetodos" @if($last->isMasterCard) style="border: solid 1px #a5a5a5;padding: 6px;border-radius: 4px; background: #f7f7f7;" @endif>
                                                     <img src="img/credit-card/mastercard.png" style="height: 25px; float: left;" title="Tarjeta de crédito MASTER CARD" />
                                                </li>
                                                <li class="limetodos" @if($last->isMercadoPago) style="border: solid 1px #a5a5a5;padding: 6px;border-radius: 4px; background: #f7f7f7;" @endif>
                                                        <img src="img/credit-card/mercado.png" style="height: 25px; float: left;" title="Mercado Pago" />
                                                   </li>
                                            </ul>

                                    </div>


                                    </div>
                                    <form action="{{route('User.perfil')}}" method="GET">
                                        <input type="hidden" value="{{$last->id}}" name="user_id">
                                        <input type="submit"  id="btn-ver" class="btn btn-md btn-transparent float-right fn-smd" value="Ver/Contactar" />
                                    </form>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    <div class="col-lg-12">
                        <div class="mbp_pagination">
                           {{ $lastest->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
      $(document).ready(function(){

        $('#category').on('change', function(){
                    var category_id = $(this).val();
                    if($.trim(category_id) != ''){
                        $.get('subcategories', {category_id: category_id}, function(subcategories){
                            $('#subcategory').empty();
                            $('#subcategory').append("<option value=''>Seleccione Oficio</option>");
                            $.each(subcategories, function(index, subcategory){
                                $('#subcategory').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                $('#selected').hide('slow');
                                $('#unselected').show('slow');
                                $('#subcategory').css({"border":"1px solid #e46359"});
                                $('#btnsubmitfilter').prop('disabled', true);
                            })
                        });
                    }
                });
                $('#subcategory').on('change',function(){
                    if($('#subcategory').val()==''){
                        $('#selected').hide('slow');
                        $('#unselected').show('slow');
                        $('#subcategory').css({"border":"1px solid #e46359"}).show('slow');
                        $('#btnsubmitfilter').prop('disabled', true);

                    }else{
                        $('#unselected').hide('slow');
                        $('#subcategory').css({"border":"1px solid #ddd"});
                        $('#selected').show('slow');
                        $('#btnsubmitfilter').prop('disabled', false);
                    }
                });



                $('#categorymobile').on('change', function(){
                    var category_id = $(this).val();
                    if($.trim(category_id) != ''){
                        $.get('subcategories', {category_id: category_id}, function(subcategories){
                            $('#subcategorymobile').empty();
                            $('#subcategorymobile').append("<option value=''>Seleccione Oficio</option>");
                            $.each(subcategories, function(index, subcategory){
                                $('#subcategorymobile').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                $('#selectedmobile').hide('slow');
                                $('#unselectedmobile').show('slow');
                                $('#subcategorymobile').css({"border":"1px solid #e46359"});
                                $('#btnsubmitfiltermobile').prop('disabled', true);
                            })
                        });
                    }
                });
                $('#subcategorymobile').on('change',function(){
                    if($('#subcategorymobile').val()==''){
                        $('#selectedmobile').hide('slow');
                        $('#unselectedmobile').show('slow');
                        $('#subcategorymobile').css({"border":"1px solid #e46359"}).show('slow');
                        $('#btnsubmitfiltermobile').prop('disabled', true);

                    }else{
                        $('#unselectedmobile').hide('slow');
                        $('#subcategorymobile').css({"border":"1px solid #ddd"});
                        $('#selectedmobile').show('slow');
                        $('#btnsubmitfiltermobile').prop('disabled', false);
                    }
                });
      });

</script>


@endsection
