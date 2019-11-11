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
                    <img class="img-fluid" src="images/resource/cl1.png" alt="cl1.png">
                </div>
                <p class="text-center mb2"><strong>MDP WORK</strong> - Utilizá el buscador y los filtros para encontrar lo que necesitas</p>
                <div class="home-job-search-box mt20 mb20">
                <form class="form-inline" method="GET" action="{{route('User.search')}}">
                         <div class="search_option_one">
                            <div class="form-group">
                                <label for="exampleInputName"><img src="icons/search-icon.png"></label>
							    	<input name="search" type="text" class="form-control h70" id="searchinput" placeholder="Escribe lo que buscas.. EJ:Carpintero, electricista">
                            </div>
                        </div>
                        <div class="search_option_two">
                            <div class="form-group">
                                <label for="exampleInputEmail"><img src="icons/location.png"/></label>
							    <input type="text" class="form-control h70" id="zoneinput" placeholder="Busca por zona">
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
            <div class="col-lg-3 col-xl-3 dn-smd">

                <div class="cl_skill_checkbox mb30">
                    <h4 class="fz20 mb20">Categorías</h4>
                    <div class="content ui_kit_checkbox h250">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Asesoramiento Contable</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Belleza y Cuidado</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Comunicación y Diseño</label>
                            <span class="float-right mr10">(3)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Cursos y Clases</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">Fiestas y Eventos</label>
                            <span class="float-right mr10">(3)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">Fotografía y Música</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">Hogar y Construcción</label>
                            <span class="float-right mr10">(6)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">Vehículos</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                            <label class="custom-control-label" for="customCheck9">Medicina y Salud</label>
                            <span class="float-right mr10">(5)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                            <label class="custom-control-label" for="customCheck10">Ropa y Moda</label>
                            <span class="float-right mr10">(3)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">Mascotas</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                            <label class="custom-control-label" for="customCheck12">Servicio de Oficinas</label>
                            <span class="float-right mr10">(1)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                            <label class="custom-control-label" for="customCheck13">Tecnología</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                            <label class="custom-control-label" for="customCheck14">Transporte</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                            <label class="custom-control-label" for="customCheck15">Viajes y Turismo</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                    </div>
                    <a class="text-thm2 pl25" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
                </div>
                <div class="cl_carrer_lever mb30">
                        <div id="accordion" class="accordion">
                            <div class="link mb10">Subcategorías<i class="fa fa-caret-up"></i></div>
                            <div class="cl_submenu">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck27">
                                        <label class="custom-control-label" for="customCheck27">Intermediate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck28">
                                        <label class="custom-control-label" for="customCheck28">Normal</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck29">
                                        <label class="custom-control-label" for="customCheck29">Special</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck30">
                                        <label class="custom-control-label" for="customCheck30">Experienced</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl_carrer_lever mb30">
                        <div id="accordion2" class="accordion">
                            <div class="link mb10">Específica<i class="fa fa-caret-up"></i></div>
                            <div class="cl_submenu">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck31">
                                        <label class="custom-control-label" for="customCheck31">1Year to 2Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck32">
                                        <label class="custom-control-label" for="customCheck32">2Year to 3Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck33">
                                        <label class="custom-control-label" for="customCheck33">3Year to 4Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck34">
                                        <label class="custom-control-label" for="customCheck34">4Year to 5Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



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
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Hide Filter</span><i>×</i></a>
                                <div class="faq_search_widget mb30">
                                    <h4 class="fz20 mb15">Category</h4>
                                    <div class="candidate_revew_select">
                                        <div class="dropdown bootstrap-select w100 show-tick"><select class="selectpicker w100 show-tick" tabindex="-98">
                                            <option>All Categories</option>
                                            <option>Recent</option>
                                            <option>Old Review</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                    </div>
                                </div>
                                <div class="cl_latest_activity mb30">
                                    <h4 class="fz20 mb15">Últimos publicados</h4>
                                    <div class="ui_kit_radiobox">
                                        <div class="radio">
                                            <input id="radio_six" name="radio" type="radio" checked="">
                                            <label for="radio_six"><span class="radio-label"></span> Last Hour</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_seven" name="radio" type="radio">
                                            <label for="radio_seven"><span class="radio-label"></span> Last 24 hours</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_eight" name="radio" type="radio">
                                            <label for="radio_eight"><span class="radio-label"></span> Last 7 days</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_nine" name="radio" type="radio">
                                            <label for="radio_nine"><span class="radio-label"></span> Last 14 days</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_ten" name="radio" type="radio">
                                            <label for="radio_ten"><span class="radio-label"></span> Last 30 days</label>
                                        </div>
                                        <a class="text-thm2 pl30" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
                                    </div>
                                </div>
                                <div class="cl_latest_activity mb30">
                                    <h4 class="fz20 mb15">Estado</h4>
                                    <div class="ui_kit_whitchbox">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                            <label class="custom-control-label" for="customSwitch6">Disponible</label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                            <label class="custom-control-label" for="customSwitch7">No Disponible</label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                            <label class="custom-control-label" for="customSwitch8">Todos</label>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                            @foreach($lastest as $last)
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
                                                @if($carbon->format('H:i:s') >= $last->inhourlunes && $carbon->format('H:i:s') <= $last->outhourlunes)
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

                                            <ul style="margin-bottom: 0px;">
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
                                            </ul>

                                                <span class="badge badge-warning"><strong>4.5</strong></span>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>{{$last->name}}</h4>
                                                <p class="font-style-italic"><img src="icons/location.png" /> {{$last->zone}}, Mar del Plata</p>
                                                <p class="font-style-italic" ><a href="#">
                                                @foreach($subcategories as $subcategory)
                                                    @if($subcategory->id == $last->job)
                                                        <strong>{{$subcategory->name}}</strong>
                                                    @endif
                                                @endforeach
                                                </a></p>
                                            </div>
                                            <div class="col-md-6">
                                                    <p>
                                                        <img src="icons/horario.png" />
                                                        <!-- LUNES HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Monday')
                                                            <strong>Lunes: </strong>
                                                            @if($last->inhourafterlunes && $last->outhourafterlunes)
                                                                @if($carbon->format('H:i:s') < $last->outhourlunes)
                                                                    <span style="font-size: 14px">{{$last->inhourlunes}} hs - {{$last->outhourlunes}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhourlunes && $carbon->format('H:i:s') < $last->outhourafterlunes)
                                                                    <span style="font-size: 14px">{{$last->inhourafterlunes}} hs - {{$last->outhourafterlunes}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhourlunes)
                                                                    <span style="font-size: 14px">{{$last->inhourlunes}} hs - {{$last->outhourlunes}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhourlunes}} hs - {{$last->outhourlunes}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE martes HORARIOS -->

                                                        <!-- martes HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Tuesday')
                                                            <strong>Martes: </strong>
                                                            @if($last->inhouraftermartes && $last->outhouraftermartes)
                                                                @if($carbon->format('H:i:s') < $last->outhourmartes)
                                                                    <span style="font-size: 14px">{{$last->inhourmartes}} hs - {{$last->outhourmartes}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhourmartes && $carbon->format('H:i:s') < $last->outhouraftermartes)
                                                                    <span style="font-size: 14px">{{$last->inhouraftermartes}} hs - {{$last->outhouraftermartes}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhourmartes)
                                                                    <span style="font-size: 14px">{{$last->inhourmartes}} hs - {{$last->outhourmartes}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhourmartes}} hs - {{$last->outhourmartes}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE martes HORARIOS -->

                                                        <!-- LUNES HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Wednesday')
                                                            <strong>Miércoles: </strong>
                                                            @if($last->inhouraftermiercoles && $last->outhouraftermiercoles)
                                                                @if($carbon->format('H:i:s') < $last->outhourmiercoles)
                                                                    <span style="font-size: 14px">{{$last->inhourmiercoles}} hs - {{$last->outhourmiercoles}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhourmiercoles && $carbon->format('H:i:s') < $last->outhouraftermiercoles)
                                                                    <span style="font-size: 14px">{{$last->inhouraftermiercoles}} hs - {{$last->outhouraftermiercoles}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhourmiercoles)
                                                                    <span style="font-size: 14px">{{$last->inhourmiercoles}} hs - {{$last->outhourmiercoles}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhourmiercoles}} hs - {{$last->outhourmiercoles}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE miercoles HORARIOS -->

                                                        <!-- LUNES HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Thursday')
                                                            <strong>Jueves: </strong>
                                                            @if($last->inhourafterjueves && $last->outhourafterjueves)
                                                                @if($carbon->format('H:i:s') < $last->outhourjueves)
                                                                    <span style="font-size: 14px">{{$last->inhourjueves}} hs - {{$last->outhourjueves}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhourjueves && $carbon->format('H:i:s') < $last->outhourafterjueves)
                                                                    <span style="font-size: 14px">{{$last->inhourafterjueves}} hs - {{$last->outhourafterjueves}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhourjueves)
                                                                    <span style="font-size: 14px">{{$last->inhourjueves}} hs - {{$last->outhourjueves}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhourjueves}} hs - {{$last->outhourjueves}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE jueves HORARIOS -->

                                                        <!-- Viernes HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Friday')
                                                            <strong>Viernes: </strong>
                                                            @if($last->inhourafterviernes && $last->outhourafterviernes)
                                                                @if($carbon->format('H:i:s') < $last->outhourviernes)
                                                                    <span style="font-size: 14px">{{$last->inhourviernes}} hs - {{$last->outhourviernes}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhourviernes && $carbon->format('H:i:s') < $last->outhourafterviernes)
                                                                    <span style="font-size: 14px">{{$last->inhourafterviernes}} hs - {{$last->outhourafterviernes}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhourviernes)
                                                                    <span style="font-size: 14px">{{$last->inhourviernes}} hs - {{$last->outhourviernes}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhourviernes}} hs - {{$last->outhourviernes}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE viernes HORARIOS -->

                                                        <!-- Sabado HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Saturday')
                                                            <strong>Sábado: </strong>
                                                            @if($last->inhouraftersabado && $last->outhouraftersabado)
                                                                @if($carbon->format('H:i:s') < $last->outhoursabado)
                                                                    <span style="font-size: 14px">{{$last->inhoursabado}} hs - {{$last->outhoursabado}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhoursabado && $carbon->format('H:i:s') < $last->outhouraftersabado)
                                                                    <span style="font-size: 14px">{{$last->inhouraftersabado}} hs - {{$last->outhouraftersabado}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhoursabado)
                                                                    <span style="font-size: 14px">{{$last->inhoursabado}} hs - {{$last->outhoursabado}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhoursabado}} hs - {{$last->outhoursabado}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE sabado HORARIOS -->

                                                        <!-- LUNES HORARIOS: -->
                                                        @if($carbon->isoFormat('dddd') == 'Sunday')
                                                            <strong>Domingo: </strong>
                                                            @if($last->inhourafterdomingo && $last->outhourafterdomingo)
                                                                @if($carbon->format('H:i:s') < $last->outhourdomingo)
                                                                    <span style="font-size: 14px">{{$last->inhourdomingo}} hs - {{$last->outhourdomingo}} hs</span>
                                                                @endif
                                                                @if($carbon->format('H:i:s') > $last->outhourdomingo && $carbon->format('H:i:s') < $last->outhourafterdomingo)
                                                                    <span style="font-size: 14px">{{$last->inhourafterdomingo}} hs - {{$last->outhourafterdomingo}} hs</span>
                                                                @endif
                                                            @else
                                                                @if($carbon->format('H:i:s') < $last->outhourdomingo)
                                                                    <span style="font-size: 14px">{{$last->inhourdomingo}} hs - {{$last->outhourdomingo}} hs</span>
                                                                @else
                                                                    <span style="font-size: 14px" class="text-danger font-weight-bold">{{$last->inhourdomingo}} hs - {{$last->outhourdomingo}} hs</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    <!-- CIERRE domingo HORARIOS -->



                                                    </p>
                                                    <p>
                                                        <img src="icons/coments.png" /> <strong>Comentarios: <span class="badge badge-secondary">35</span> <a style="font-size: 12px;" href="#" class="text-primary">Ver comentarios</a></strong>
                                                    </p>
                                            </div>

                                    </div>
                                    <div class="row">
                                        <ul style="float: left; margin: 20px 0 0 0;">
                                            <li style="float: left; margin: 0 10px 0 0;">
                                                Métodos de pago aceptados:
                                            </li>
                                            <li style="float: left; margin: 0 10px 0 0;">
                                                <img src="img/credit-card/money.png" style="height: 25px; float: left;" />
                                            </li>
                                            <li style="float: left; margin: 0 10px 0 0;">
                                                <img src="img/credit-card/visa.png" style="height: 25px; float: left;" />
                                            </li>
                                            <li style="float: left; margin: 0 10px 0 0;">
                                                 <img src="img/credit-card/mastercard.png" style="height: 25px; float: left;" />
                                            </li>
                                            <li style="float: left; margin: 0 10px 0 0;">
                                                    <img src="img/credit-card/mercado.png" style="height: 25px; float: left;" />
                                               </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Ver</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    <div class="col-lg-12">
                        <div class="mbp_pagination">
                            <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">45</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next <span class="flaticon-right-arrow"></span></a>
                                </li>
                            </ul>
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




@endsection
