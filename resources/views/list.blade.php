@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<style>
    #btn-filter-active{
    cursor: pointer;
    }
    #btn-cancel-filter{
    cursor: pointer;
    }
    #btnsubmitfilter{
    cursor: pointer;
    }
    </style>
<section class="text-no-responsive" style="background: #f1f1f1;padding: 10px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center mb2 text-no-responsive"><strong>MDP WORK INC.</strong> - Utilizá el buscador y los filtros para encontrar lo que necesitas.</p>
                <div class="home-job-search-box mt20">
                <form class="form-inline" method="GET" action="{{route('User.search')}}" >
                         <div class="search_option_one">
                            <div class="form-group">
                                <label for="exampleInputName"><i class="fa fa-search"></i></label>
                                    <input name="search" autocomplete="off" spellcheck="false" type="text" class="form-control h70" id="searchinput1" placeholder="Carpintero, electricista, plomero">
                            </div>
                        </div>
                        <div class="search_option_two">
                            <div class="form-group">
                                <label for="exampleInputEmail"><i class="fa fa-location-arrow"></i></label>
							    <input type="text" class="form-control h70" id="zoneinput" autocomplete="off" spellcheck="false" name="zone" id="zoneinput" placeholder="Busca por zona">
                            </div>
                        </div>
                        <div class="search_option_button">
                            <button id="submit-busqueda" style="background: #00b7ff" type="submit" class="btn btn-thm btn-secondary h70">Buscar</button>
                        </div>
                    </form>
                    <div class="mt-2 text-center">
                        <button style=" border:none; background: none;margin: 0 auto;" id="filtros-btn" class="text-center text-info btns db-991">Utilizar filtros especiales</button>
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
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div id="alerta-informacion" class="bs-callout bs-callout-info bg-white"><img src="img-icons/info.png" /> <small class="text-muted" style="font-style: italic;"> Debajo del buscador aparecerán los resultados de la búsqueda que realizó. Recomendamos utilizar los filtros especiales haciendo <a id="btn-filter-active" class="stretched-link text-danger"><strong> Click aquí</strong></a>. </small>
            </div>
            </div>
        </div>
        </div>
        <div class="container" id="filter-container" style="display:none;">
            <div class="row">
                <div class="col-lg-12 col-xl-12 dn-smd" id="filter-mobile-none">
                    <div class="card">
                        <div class="card-header">Filtros Especiales - <span class="text-muted"> Para que funcionen correctamente debe seleccionar primero <strong>"Categorías Generales"</strong></span></div>
                        <div class="card-body">
                        <form action="{{route('User.search')}}" method="GET">
                            <div class="form-row align-items-center">
                            <div class="cl_skill_checkbox">
                                <div class="col-auto">
                                    <label for="formGroupExampleInput2">Categorías generales</label>
                                    <select id="category" name="category_id" class="form-control">
                                         @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="cl_carrer_lever">
                                        <div class="col-auto">
                                            <label for="formGroupExampleInput2">Profesion <img id="unselected" style="display:none;" src="img-icons/alert.png"><img id="selected" style="display:none;" src="img-icons/check.png"></label>
                                            <select id="subcategory" name="search" class="form-control" style="display: inline;width: 100%;" >
                                            </select>
                                        </div>
                                </div>
                                <div class="form-inline mt-4 mr-3">
                                    <button id="btnsubmitfilter" disabled type="submit" class="btn btn-primary">Filtrar</button>
                                </div>
                                <div class="form-inline mt-4">
                                    <a id="btn-cancel-filter" class="text-danger"><strong>Cancelar</strong></a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="our-faq" style="margin-top:-20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="row" ><div class="container">
                    @if($busqueda)
                        <h1 style="font-size: 17px;font-weight: normal;margin-top: 10px; margin-bottom: 10px;"><strong>{{$busqueda}}</strong> en Mar del Plata </h1>
                    @endif
                    @if(!empty($empty))
                        <div class="alert alert-danger text-center" style="width: 100%">Lamentablemente no pudimos encontrar lo que busca, por favor intente nuevamente.</div>
                    @endif
                </div>
                    <div class="col-sm-12 col-lg-6" >
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
                                        <label for="formGroupExampleInput2">Profesion <img id="unselectedmobile" style="display:none;" src="img-icons/alert.png"><img id="selectedmobile" style="display:none;" src="img-icons/check.png"></label>
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
                    <div class="container">
                    <div class="row bg-white">

                                     <!-- LOS MÁS VISTOS, TAMBIÉN VAN A IR LOS DESTACADOS ACÁ  -->
                       
                        <p id="text-list-responsive" style="padding: 10px;"><strong>{{$lastest->total()}}</strong> Profesionales encontrados.</p>
                                <hr>
                            @foreach($lastest as $last)
                            @if($last->rol == 'profesional')
                            <div class="col-sm-12 col-lg-12" id="list-no-responsive" >
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
                                        <img class="img-fluid" style="height: 120px; width: 140px;" src="images/large/{{$last->img}}" alt="1.jpg">
                                        @php $cantComent = 0;$cantPoints = 0;$points = 0;@endphp
                                            @foreach($coments as $coment) @if($coment->user_id == $last->id) @php $cantComent ++; $cantPoints += $coment->point; @endphp @endif @endforeach
                                        @php if($cantPoints != 0){ $points = $cantPoints / $cantComent; }else{ $points = 4; } @endphp
                                        </div>
                                        <div class="row" id="perfil-responsive-div">
                                            <div class="col-md-4">
                                                <h5>{{$last->name}}</h5>
                                                <p style="width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" class="font-style-italic"><span style="color:gray;"><i class="fa fa-location-arrow"></i></span> @if($last->zone){{$last->zone}},@endif Mar del Plata</p>
                                                <p style="width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"> <a href="/busqueda?search={{$last->job}}"><strong>{{ ucfirst($last->job) }}</strong> <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></a></p>
                                            </div>
                                            <div class="col-md-6">
                                                    <p id="horario">
                                                        <img src="img-icons/horario.png" />
                                                        <!-- TODOS  HORARIOS: -->
                                                            <strong>Hoy: </strong>
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
                                                    <p><ul style="margin-bottom: 0px;color: #17a2b8">
                                                        <li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li><li style="display: inline"><i class="fa fa-star"></i></li>
                                                        <li style="display: inline">
                                                            <span style="margin-left: 5px;" class="text-muted">@if($cantComent == 0) Sin opiniones @elseif($cantComent == 1) 1 opinión @elseif($cantComent > 1) {{$cantComent}} opiniones @endif</span>
                                                        </li>
                                                    </ul>
                                                    </p>

                                            </div>
                                    </div>
                                    </div>
                                    <form action="{{route('User.perfil')}}" method="GET" class="text-center">
                                        <input type="hidden" value="{{$last->id}}" name="user_id">
                                        <input type="submit" class="btn btn-md btn-transparent float-right fn-smd btn-ver stretched-link" value="Ver/Contactar" />
                                    </form>
                                </div>
                            </div>
                            <div id="list-responsive" class="container">
                                <div class="row bg-white" style="padding: 5px;">
                                    <div class="col-3">
                                        <img style="border-radius: 10px;" class="img-fluid" src="images/large/{{$last->img}}" alt="1.jpg">
                                    </div>
                                    <div class="col-7">
                                        @if($last->{'inhourafter'.$day} && $last->{'outhourafter'.$day})
                                    @if($hour >= $last->{'inhour'.$day} && $hour <= $last->{'outhour'.$day})
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-success">Disponible</p>
                                    @elseif($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day})
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-success">Disponible</p>
                                    @else
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-danger">No Disponible</p>
                                    @endif
                                @else
                                    @if($hour >= $last->{'inhour'.$day} && $hour <= $last->{'outhour'.$day})
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-success">Disponible</p>
                                    @else
                                    <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-danger">No Disponible</p>                                @endif
                                @endif
                                        <h4 style="font-size: 14px; margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$last->name}}</h4>
                                        <p style="font-weight: 600;font-size: 12px;margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><a style="color: #7f7f7f" href="/busqueda?search={{$last->job}}">{{ ucfirst($last->job) }} <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></a></p>
                                        <p style="margin-bottom:0px;font-size: 12px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" class="font-style-italic"><i class="fa fa-location-arrow"></i> @if($last->zone){{$last->zone}},@endif Mar del Plata</p>
                                        <p style="margin-bottom: 0px;font-size: 12px;">
                                                    @if($last->{'inhourafter'.$day} && $last->{'outhourafter'.$day})
                                                        @if($hour <= $last->{'outhour'.$day} && $hour >= $last->{'inhour'.$day})
                                                            <span style="font-size: 12px;">@php echo date('G:i',strtotime($last->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
                                                        @elseif($hour >= $last->{'inhourafter'.$day} && $hour <= $last->{'outhourafter'.$day} )
                                                            <span style="font-size: 12px">@php echo date('G:i',strtotime($last->{'inhourafter'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhourafter'.$day} )) @endphp hs</span>
                                                        @else
                                                            <span style="font-size: 12px; font-style: italic;" class="text-danger font-weight-bold">No disponible hoy</span>
                                                        @endif
                                                    @else
                                                        @if($last->{'inhour'.$day} && $last->{'outhour'.$day})
                                                            @if($hour <= $last->{'outhour'.$day} && $hour >= $last->{'inhour'.$day})
                                                                <span style="font-size: 12px">@php echo date('G:i',strtotime($last->{'inhour'.$day}))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
                                                            @else
                                                                <span style="font-size: 12px" class="text-danger font-weight-bold">@php echo date('G:i',strtotime($last->{'inhour'.$day} ))@endphp hs - @php echo date('G:i',strtotime($last->{'outhour'.$day} )) @endphp hs</span>
                                                            @endif
                                                        @else
                                                            <span style="font-size: 12px; font-style: italic;" class="text-danger font-weight-bold">No disponible hoy</span>
                                                        @endif
                                                    @endif
                                                    </p>
                                                    <a class="stretched-link" style="text-decoration: none;  color: #3db39e;background: none;border: none;font-size: 12px;" href="{{Route('User.perfil', ['user_id' => $last->id])}}" >Ver / Contactar </a>
                                        <hr>
                                    </div>
                                    <div class="col-2" style="padding: 0;">
                                        @if($points < 2)
                                        <p style="font-size: 12px;"><span style="color: #d84747;"><i class="fa fa-star"></i></span>
                                        <span style="color: #d84747;"><strong>{{$points}}</strong></span></p>
                                        @elseif($points >= 3 && $points < 4)
                                        <p style="font-size: 12px;"><span style="color: #d66514;"><i class="fa fa-star"></i></span>
                                        <span style="color: #d66514;"><strong>{{$points}}</strong></span></p>
                                        @elseif($points >= 4 && $points < 5)
                                        <p style="font-size: 12px;"><span style="color: #28af77"><i class="fa fa-star"></i></span>
                                        <span style="color: #28af77"><strong>{{$points}}</strong></span></p>
                                        @elseif($points == 5)
                                        <p style="font-size: 12px;"><span style="color: #ffc107"><i class="fa fa-star"></i></span>
                                        <span style="color: #ffc107"><strong>{{$points}}</strong></span></p>
                                        @endif
                                    </div>

                                </div>
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mbp_pagination">
                           {{ $lastest->links() }}
                        </div>
                    </div>
                </div>
                <p id="text-list-responsive" style="padding: 10px;"><strong>Destacados</strong> en Mdp Work Inc.</p>
                @if($masvistos)
                @foreach($masvistos as $masvisto)
       <div id="list-responsive" class="container">
           <div class="row bg-white">
               <div class="col-3">
                   <img style="border-radius: 10px;" class="img-fluid" src="images/large/{{$masvisto->img}}" alt="1.jpg">
               </div>
               <div class="col-7">
               <p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-info">Más visitado</p>
                   <h4 style="font-size: 14px; margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$masvisto->name}}</h4>
                   <p style="font-weight: 600;font-size: 12px;margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><a style="color: #7f7f7f" href="/busqueda?search={{$masvisto->job}}">{{ ucfirst($masvisto->job) }} <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></a></p>
                               <a class="stretched-link" style="text-decoration: none;  color: #3db39e;background: none;border: none;font-size: 12px;" href="{{Route('User.perfil', ['user_id' => $masvisto->id])}}" ></a>
                   <hr>
               </div>
               @php $cantComent = 0;$cantPoints = 0;$points = 0;@endphp
                       @foreach($coments as $coment) @if($coment->user_id == $masvisto->id) @php $cantComent ++; $cantPoints += $coment->point; @endphp @endif @endforeach
                   @php if($cantPoints != 0){ $points = $cantPoints / $cantComent; }else{ $points = 4; } @endphp
               <div class="col-2" style="padding: 0;">
                   @if($points < 2)
                   <p style="font-size: 12px;"><span style="color: #d84747;"><i class="fa fa-star"></i></span>
                   <span style="color: #d84747;"><strong>{{$points}}</strong></span></p>
                   @elseif($points >= 3 && $points < 4)
                   <p style="font-size: 12px;"><span style="color: #d66514;"><i class="fa fa-star"></i></span>
                   <span style="color: #d66514;"><strong>{{$points}}</strong></span></p>
                   @elseif($points >= 4 && $points < 5)
                   <p style="font-size: 12px;"><span style="color: #28af77"><i class="fa fa-star"></i></span>
                   <span style="color: #28af77"><strong>{{$points}}</strong></span></p>
                   @elseif($points == 5)
                   <p style="font-size: 12px;"><span style="color: #ffc107"><i class="fa fa-star"></i></span>
                   <span style="color: #ffc107"><strong>{{$points}}</strong></span></p>
                   @endif
               </div>

           </div>
           </div>
           @endforeach
           @endif


<!-- LOS MÁS COMENTADOS, TAMBIÉN VAN A IR LOS DESTACADOS ACÁ  -->
@if($mascomentados)
@foreach($mascomentados as $mascomentado)
<div id="list-responsive" class="container">
<div class="row bg-white">
<div class="col-3">
<img style="border-radius: 10px;" class="img-fluid" src="images/large/{{$mascomentado->img}}" alt="1.jpg">
</div>
<div class="col-7">
<p style="margin-bottom: 0px;font-size: 10px;font-weight: bold;" class="text-info">Más comentado</p>
<h4 style="font-size: 14px; margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$mascomentado->name}}</h4>
<p style="font-weight: 600;font-size: 12px;margin-bottom: 0px;width: 100%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><a style="color: #7f7f7f" href="/busqueda?search={{$mascomentado->job}}">{{ ucfirst($mascomentado->job) }} <span style="color: #28af77"><i class="fa fa-check-circle"></i></span></a></p>
      <a class="stretched-link" style="text-decoration: none;  color: #3db39e;background: none;border: none;font-size: 12px;" href="{{Route('User.perfil', ['user_id' => $mascomentado->id])}}" ></a>
<hr>
</div>
@php $cantComent = 0;$cantPoints = 0;$points = 0;@endphp
@foreach($coments as $coment) @if($coment->user_id == $mascomentado->id) @php $cantComent ++; $cantPoints += $coment->point; @endphp @endif @endforeach
@php if($cantPoints != 0){ $points = $cantPoints / $cantComent; }else{ $points = 4; } @endphp
<div class="col-2" style="padding: 0;">
@if($points < 2)
<p style="font-size: 12px;"><span style="color: #d84747;"><i class="fa fa-star"></i></span>
<span style="color: #d84747;"><strong>{{$points}}</strong></span></p>
@elseif($points >= 3 && $points < 4)
<p style="font-size: 12px;"><span style="color: #d66514;"><i class="fa fa-star"></i></span>
<span style="color: #d66514;"><strong>{{$points}}</strong></span></p>
@elseif($points >= 4 && $points < 5)
<p style="font-size: 12px;"><span style="color: #28af77"><i class="fa fa-star"></i></span>
<span style="color: #28af77"><strong>{{$points}}</strong></span></p>
@elseif($points == 5)
<p style="font-size: 12px;"><span style="color: #ffc107"><i class="fa fa-star"></i></span>
<span style="color: #ffc107"><strong>{{$points}}</strong></span></p>
@endif
</div>

</div>
</div>
@endforeach
@endif
            </div>
        </div>

@if(!empty($relacionadas) && $busqueda)
<p id="text-list-responsive" style="padding: 10px;">Búsquedas <strong>relacionadas</strong></p>
        <div id="list-responsive" class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($relacionadas as $relacionada)
                    @if($relacionada->search != $busqueda)
                         <a href="/busqueda?search={{$relacionada->search}}"><p style="font-size: 14px"> {{$relacionada->search}} <i class="fa fa-arrow-right" style="float: right; "></i></p></a>
                    <hr>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif

    </div>
</section>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
      $(document).ready(function(){

          $('#btn-filter-active').on('click', function(){
            $('#filter-container').show('slow');
          });

          $('#btn-cancel-filter').on('click', function(){
            $('#filter-container').hide('slow');
          });

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
