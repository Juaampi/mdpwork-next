@extends('layouts.app')

@section('content')
<?php use Carbon\Carbon; ?>
<?php if(session()->has('success')){        ?>

    <script>
        swal({
          title: "¡Felicitaciones!",
          text: "A partir de hoy conocerás los beneficios de la membresía de profesional destacado. Recuerda que la duración es de 15 días comenzando a partir del día siguiente a las 00:00hs. ¡Gracias por confiar en nosotros!",
          icon: "success",
          button: "Gracias",
        });
    </script>
<?php } ?>
<?php session()->forget('success'); ?>

<style>
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
    z-index: -1;
}
.inputfile + label {
    display: inline-block;
    font-size: 14px;
}
.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}
.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}
#cancelUpdateImg {
	cursor: pointer; /* "hand" cursor */
}
#showUpdateImg {
    cursor: pointer; /* "hand" cursor */
}
#btnagregarlunes{
    cursor: pointer;
}
#button-add-img1{
    cursor: pointer;
}
#button-add-img1:hover{
    -webkit-filter: brightness(50%);
filter: brightness(50%);
}
#button-add-img2{
    cursor: pointer;
}
#button-add-img2:hover{
    -webkit-filter: brightness(50%);
filter: brightness(50%);
}
#button-add-img3{
    cursor: pointer;
}
#button-add-img3:hover{
    -webkit-filter: brightness(50%);
filter: brightness(50%);
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@if(session()->has('registrado'))
<script>
       $(document).ready(function(){
            $('#modalprueba').modal('toggle');
        });
</script>
@endif

<section style="background: #fafafa;padding: 30px 0;">
		<div class="container" style="max-width: 1200px;">
			<div class="row">
				<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
					<div id="user_profile" class="user_profile">
						<div class="media" id="contenedor-img">
						<div id="img-contenedor">
                        <img id="img-perfil-panel" @if(Auth::user()->avatar) src="{{Auth::user()->avatar}}" @else src="img-perfil/{{ Auth::user()->img }}" @endif class="align-self-start mr-3 rounded-circle" alt="8.jpg">
						</div>
						  	<div class="media-body">
						    	<h5 class="mt-0" style="font-size: 13px;">{{ Auth::user()->name }}</h5>
                                @if(Auth::user()->rol == 'profesional')
                                <p style="font-size: 11px;color: #949494;"><img style="width: 16px;" src="img-icons/location.png">@if(!Auth::user()->zone) Mar del Plata @else {{ Auth::user()->zone}} @endif</p>
                                <p style="font-style: italic;font-size: 13px;"><img src="img-icons/profesion.png" style="width:16px;"> {{ Auth::user()->job }}</p>

                                @endif
                                @if(Auth::user()->rol == 'usuario')
                                    <p style="font-style: italic;font-size: 13px;"> Usuario </p>
                                @endif
                                @if(Auth::user()->rol == 'aspirante')
                                    <p style="font-style: italic;font-size: 13px;"> Aspirante </p>
                                @endif
                            </div>
                        </div>

                        <div id="showUpdateImg" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif">ACTUALIZAR IMAGEN DE PERFIL</div>
                        <form id="formUpdateImg" style="display:none;margin-top:5px;" method="POST" action="{{ route('User.updateImg') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            <input data-multiple-caption="{count} files selected" multiple id="file" type="file" name="img-perfil" class="inputfile" accept="image/*">
                            <label id="labelImg" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" for="file">SUBIR IMAGEN</label>
                            <button style="font-size:12px;" type="submit" class="btn b">Guardar</button>
                            <label style="font-size:12px;" id="cancelUpdateImg" class="text-danger font-weight-bold">Cancelar</label>
                         </form>
                    </div>

                    @if(Auth::user()->destacado == 1)
                    <div class="mt-2 mb-2" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: white; padding: 25px;">

                        <p style="font-size: 12px;">Membresía destacado activa hasta:
                            <?php
                            $date = Auth::user()->created_destacado;
                            $date = Carbon::createFromFormat('Y-m-d', $date);
                            $date = $date->addDays(15);
                            $date = $date->format('Y-m-d');
                            echo '<span class="text-success" style="font-size: 12px;">' . $date . '</span>';
                            ?>
                           </p>
                    </div>
                    @endif

                        <div class=" mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: white">
                            <div class="container">
                                <div class="row">
                                    @if(Auth::user()->verify)
                                                @if(Auth::user()->verify == 1)
                                    <div class="col-8" style="padding: 25px;">
                                            <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:black;" class="font-weight-bold">Estado de perfil</h6>
                                                    <p class="text-secondary" style="font-size: 12px;">En verificación..</p>
                                                    <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar" id="progressbar1" role="progressbar" style="width: 33%;background: #00b7ff" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar" id="progressbar2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 33%;background: #00b7ff;border-right: 1px solid #a5a5a5;border-left: 1px solid #a5a5a5;">
                                                    </div>
                                                    <div class="progress-bar" id="progressbar3" role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 34%;background: #f1f1f1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img src="img-icons/verify.webp" style="margin-top: 40px;">
                                        </div>
                                         @endif
                                         @if(Auth::user()->verify == 2)
                                            <div class="col-8" style="padding: 25px;">
                                                <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:black;" class="font-weight-bold">Estado de perfil</h6>
                                                        <p class="text-secondary" style="font-size: 12px;">Perfil Verificado</p>
                                                        <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar" id="progressbar1" role="progressbar" style="width: 33%;background: #00b7ff" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar" id="progressbar2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 33%;background: #00b7ff;border-right: 1px solid #a5a5a5;border-left: 1px solid #a5a5a5;">
                                                        </div>
                                                        <div class="progress-bar" id="progressbar3" role="progressbar" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100" style="width: 34%;background: #00b7ff">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <img src="img-icons/verify.webp" style="margin-top: 40px;">
                                            </div>
                                         @endif
                                        @else
                                        <div class="col-8" style="padding: 25px;padding-bottom: 10px;">
                                            <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:black;" class="font-weight-bold">Estado de perfil</h6>
                                            <p class="text-secondary" style="font-size: 12px;">Sin verificar</p>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" id="progressbar1" role="progressbar" style="width: 33%;background: #00b7ff" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar" id="progressbar2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 33%;background: #f1f1f1;border-right: 1px solid #a5a5a5;border-left: 1px solid #a5a5a5;">
                                                </div>
                                                <div class="progress-bar" id="progressbar3" role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 34%;background: #f1f1f1">
                                                </div>
                                            </div>
                                            <p style="margin-top: 20px;"><a id="verificar" style="font-size: 14px;font-weight: bold;color: #1886fc;"  data-toggle="modal" data-target="#modalverify" href="/lista">Verificar perfil<i class="fa fa-arrow-right" style="padding: 5px;float: right;"></i></a></p>
                                             </div>
                                        <div class="col-4">
                                            <img src="img/personalizar.png" style="margin-top: 25px;">
                                        </div>
                                            @endif


                                </div>
                        </div>
                        </div>

					<div class="dashbord_nav_list">
						<ul>
							<li class="active">
                                <a href="/panel"><i class="fa fa-user-circle mr-1"></i> Información</a>
                            </li>
                            <li>
                                <a href="/contraseña"><i class="fa fa-key mr-1"></i> Cambiar Contraseña</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                <i class="fa fa-arrow-left mr-1"></i> Salir</a>
                            </li>
						</ul>
                    </div>
                </div>





				<div class="col-sm-12 col-lg-8 col-xl-9">

					<div class="my_profile_form_area">
                        <form id="form-user-edit" action="{{route('User.edit')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">

						    <div class="row">
							    <div class="col-lg-12">
                                    <h4 class="fz20 mb20">Mis datos</h4>
                                    @if(session()->has('verify'))
                                    <div class="alert alert-success text-center">Haz enviado tu perfil a verificación. Verifica el estado en el panel de "Estado de Perfil".</div>
                                    @endif
                                    @if(session()->has('lunes'))
                                    <div class="alert alert-danger text-center">Ingresaste de forma incorreta el horario del <strong>LUNES</strong>. Si el día esta activado, debes completar mínimo el horario de corrido.</div>
                                    @endif
                                    @if(session()->has('response'))
                                    <div class="alert alert-success text-center">Los datos se actualizaron correctamente</div>
                                    @endif
                                    @if(session()->has('noresponse'))
                                    <div class="alert alert-danger text-center">Ocurrió un error al guardar, intente nuevamente.</div>
                                    @endif
							    </div>
							<div class="col-lg-12">
								<div class="my_profile_thumb_edit"></div>
                            </div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput1">Nombre Completo</label>
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput1" placeholder="{{Auth::user()->name}}">
								</div>
                            </div>
                            @if(Auth::user()->rol == 'profesional')
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleInputPhone">Teléfono</label>
                                    <input type="number" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="{{Auth::user()->phone}}">
                                </div>
                            </div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
                                    <label for="formGroupExampleInput2">Categoría</label>
                                    <select id="category" name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option @if(Auth::user()->category == $category->id) selected class="alert alert-danger" @endif value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="formGroupExampleInput2">Profesion Principal<img id="unselected" style="display:none;" src="img-icons/alert.png"><img id="selected" style="display:none;" src="img-icons/check.png"></label>
                                        <select id="subcategory" name="subcategory_id" class="form-control">
                                            @if(Auth::user()->job)
                                                <option value="{{ Auth::user()->job }}">{{ Auth::user()->job }}</option>
                                            @endif
                                        </select>
                                        <input type="text" name="subcategory_id" class="form-control" id="otrosServicios" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                    </div>
                                    @if(!Auth::user()->job2)
                                    <a id="btn-show-job2" class="text-info btn btn-outline-info btn-small btn-sm">Agregar Profesión Secundaria</a>
                                    @endif
                                </div>

                                @if(Auth::user()->job2)
                                <div id="container-job2" class="row col-md-12">
                                        <div id="" class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="">Categoría secundaria</label>
                                                <select id="category2" name="category_id2" class="form-control">
                                                        @foreach($categories as $category)
                                                            <option @if(Auth::user()->category2 == $category->id) selected class="alert alert-danger" @endif value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label>Profesión alternativa<img id="unselected2" style="display:none;" src="img-icons/alert.png"><img id="selected2" style="display:none;" src="img-icons/check.png"></label>
                                                <select id="job2" name="job2" class="form-control">
                                                    @if(Auth::user()->job2)
                                                        <option value="{{ Auth::user()->job2 }}">{{ Auth::user()->job2 }}</option>
                                                    @endif
                                                </select>
                                                <input type="text" name="job2" class="form-control" id="otrosServicios2" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                            </div>

                                        </div>

                                        <div class="row" style="margin-left: 25px;">
                                        <a id="btn-hide-job2" class="btn text-danger btn-outline-danger btn-sm">Cancelar Profesión (x)</a>
                                        <a id="btn-show-job3" class="btn text-white btn-info btn-sm">Agregar Profesión Alterna</a>
                                        </div>
                                </div>
                                @else
                                <div id="container-job2-non" class="row col-md-12" style="display: none;">
                                    <div id="" class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label for="">Categoría secundaria</label>
                                            <select id="category2-non" name="category_id2-non" class="form-control">
                                                    <option selected class="alert alert-danger" value="">Seleccione Categoría</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label for="formGroupExampleInput2">Profesión alternativa<img id="unselected2-non" style="display:none;" src="img-icons/alert.png"><img id="selected2-non" style="display:none;" src="img-icons/check.png"></label>
                                            <select id="job2-non" name="job2-non" class="form-control">
                                            </select>
                                            <input type="text" name="job2-otro-non" class="form-control" id="otrosServicios2" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                        </div>

                                    </div>
                                    <div class="row" style="margin-left: 25px;">
                                    <a id="btn-hide-job2-non" class="btn text-danger btn-outline-danger btn-sm">Cancelar Profesión (x)</a>
                                    <a id="btn-show-job3-non" class="btn text-white btn-info btn-sm">Agregar Profesión</a>
                                    </div>
                            </div>
                                @endif

                                @if(Auth::user()->job3)
                                <div id="container-job3" class="row col-md-12">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label>Tercera categoría</label>
                                                <select id="category3" name="category3" class="form-control">
                                                    @foreach($categories as $category)
                                                        <option @if(Auth::user()->category3 == $category->id) selected class="alert alert-danger" @endif value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label>Profesión alternativa adjunta<img id="unselected3" style="display:none;" src="img-icons/alert.png"><img id="selected3" style="display:none;" src="img-icons/check.png"></label>
                                                <select id="job3" name="job3" class="form-control">
                                                        @if(Auth::user()->job3)
                                                            <option value="{{ Auth::user()->job3 }}">{{ Auth::user()->job3 }}</option>
                                                        @endif
                                                </select>
                                                <input type="text" name="job3-otro" class="form-control" id="otrosServicios3" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                            </div>
                                        </div>
                                        <div class="row" style="margin-left: 25px;">
                                                <a id="btn-hide-job3" class="btn text-danger btn-outline-danger btn-sm">Cancelar profesión (x)</a>
                                        </div>
                                </div>
                                @else
                                <div id="container-job3-non" class="row col-md-12" style="display:none;">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label>Tercera categoría</label>
                                            <select id="category3-non" name="category_id3-non" class="form-control">
                                                    <option selected class="alert alert-danger" value="">Seleccione Categoría</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="my_profile_input form-group">
                                            <label>Profesión alternativa adjunta<img id="unselected3-non" style="display:none;" src="img-icons/alert.png"><img id="selected3-non" style="display:none;" src="img-icons/check.png"></label>
                                            <select id="job3-non" name="job3-non" class="form-control">
                                            </select>
                                            <input type="text" name="job3-otro-non" class="form-control" id="otrosServicios3-non" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 25px;">
                                            <a id="btn-hide-job3-non" class="btn text-danger btn-outline-danger btn-sm">Cancelar profesión (x)</a>
                                    </div>
                            </div>
                                @endif
                                <div class="col-md-12 col-12" style="width: 100%;margin-top: 15px;">
                                    <div class="my_profile_input form-group card">
                                        <div class="card-body">
                                        <label>Si realizás presupuestos online sin cargo a través de whatsapp o algún medio de comunicación selecciona ésta opción.</label>
                                        <div class="custom-control custom-checkbox" style="margin-top: 10px;">
                                            <input type="checkbox" name="presupuesto"  class="custom-control-input" id="presupuesto" @if(Auth::user()->presupuesto) checked @endif >
                                            <label class="custom-control-label" for="presupuesto"> Presupuesto sin Cargo</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleInputPhone">WhatsApp</label>
                                        <input type="number" name="whatsapp"  class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" @if(Auth::user()->whatsapp)placeholder="{{Auth::user()->whatsapp}}"@else placeholder="Ejemplo: 2235646567"@endif>
                                    </div>
                                </div>
                            @endif
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput1">Email</label>
							    	<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->email}}">
								</div>
                            </div>
                            @if(Auth::user()->rol == 'profesional')
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput2">Sitio Web</label>
                                <input type="text" name="website" class="form-control" id="exampleFormControlInput2" placeholder="{{Auth::user()->website}}">
								</div>
							</div>

							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
                                    <label for="exampleFormControlInput5">Experiencia</label>
                                   <select name="experience" class="form-control" >
                                        <option value="{{Auth::user()->experience}}">{{Auth::user()->experience}} Año/s</option>
										<option value="2">2-3 Año/s</option>
										<option value="4" >4-5 Año/s</option>
										<option value="6" >6-7 Año/s</option>
										<option value="10" >8-10 Año/s</option>
										<option value="0">Menos de 1 año</option>
                                    </select>
                                </div>
							</div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleFormControlInput2">Edad</label>
                                    <input type="number" name="age" class="form-control" id="exampleFormControlInput2" placeholder="{{Auth::user()->age}} años">
                                    </div>
                                </div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput7">Nivel de Profesion</label><br>
							    	<select name="level" class="form-control">
										<option>{{Auth::user()->level}}</option>
										<option value="Bachillerato">Bachillerato</option>
										<option value="Tecnicatura">Tecnicatura</option>
										<option value="Carrera de Grado">Carreras de Grado</option>
										<option value="Maestria">Maestria</option>
										<option value="Doctorado">Doctorado</option>
										<option value="Titulo en Curso">Título en Curso</option>
									</select>
								</div>
                            </div>
                            <div class="col-lg-12">
                                    <h4 class="fz18 mb20 mt-4">Información Territorial</h4>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleFormControlInput9">Ciudad</label><br>
                                        <select name="city" class="form-control">
                                            <option value="Mar del Plata">Mar del Plata</option>
                                            <option value="Miramar">Miramar</option>
                                            <option value="Batán">Batán</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="myInput">Barrio - Zona</label><br>
                                    <input autocomplete="off" spellcheck="false"class="form-control" name="zone" id="myInput" type="text" name="barrio" placeholder="{{Auth::user()->zone}}">
                                    </div>
                                </div>
							<div class="col-lg-12">
								<div class="my_resume_textarea mt20">
									 <div class="form-group">
									    <label for="exampleFormControlTextarea1">Descripción</label>
									    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">{{Auth::user()->description}}
									    </textarea>
									  </div>
								</div>
                            </div>
                            <div class="col-lg-12">
								<h4>Métodos de Pago</h4>
									<div class="row text-center">
										<div class="col-md-2 col-4">
                                    		<div class="custom-control custom-switch mt-1">
                                        		<input type="checkbox" name="isEfective" class="custom-control-input" id="switch1" @if(Auth::user()->isEfective) checked @endif>
                                        		<label class="custom-control-label" for="switch1"><span style="height: 25px;" class="payment">Efectivo</span></label>
											</div>
										</div>
										<div class="col-md-2 col-4">
											<div class="custom-control custom-switch mt-1">
												<input type="checkbox" name="isVisa" class="custom-control-input" id="switch2" @if(Auth::user()->isVisa) checked @endif>
												<label class="custom-control-label" for="switch2"> <span style="height: 25px;" class="payment"><img src="img/credit-card/visa.png" /></span></label>
											</div>
										</div>
										<div class="col-md-2 col-4">
												<div class="custom-control custom-switch mt-1">
													<input type="checkbox" name="isMercadoPago" class="custom-control-input" id="switch3" @if(Auth::user()->isMercadoPago) checked @endif>
													<label class="custom-control-label" for="switch3"> <span style="height: 25px;" class="payment"><img src="img/credit-card/mercado.png"/></span></label>
												</div>
											</div>
										<div class="col-md-2 col-4">
											<div class="custom-control custom-switch mt-1">
												<input type="checkbox" name="isMasterCard" class="custom-control-input" id="switch4" @if(Auth::user()->isMasterCard) checked @endif>
												<label class="custom-control-label" for="switch4"> <span style="height: 25px;" class="payment"><img src="img/credit-card/mastercard.png"></span></label>
											</div>
										</div>
									</div>
							</div>
                            <div class="col-lg-12">
                                <h4 class="fz18 mb20 mt-4">Horarios de atención</h4>
                            </div>

                            <!-- TODO LO QUE TENGA QUE VER CON EL LUNES -->

                            <div id="lunes" class="col-lg-12">
                                <div class="form-check">
                                    <input name="islunes" type="checkbox" class="form-check-input" id="lunescheckbox" @if(Auth::user()->inhourlunes) checked @endif>
                                    <label class="form-check-label" for="lunescheckbox">Lunes</label>
                                </div>
                                <div id="horariolunes" @if(!Auth::user()->inhourlunes) style="display: none;" @endif>
                                    <div id="horalunes" class="form-group form-inline">
                                    <input name="inhourlunes" type="time" class="form-control mr-3 text-center" value="{{Auth::user()->inhourlunes}}" style="width: auto;"> - <input style="width: auto;" name="outhourlunes" type="time" class="form-control ml-3 text-center" value="{{Auth::user()->outhourlunes}}">
                                    </div>
                                    <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                    <div id="horalunes2" class="form-group form-inline">
                                        <input name="inhourafterlunes" id="inhourafterlunes" style="width: auto;" @if(Auth::user()->inhourafterlunes) value="{{Auth::user()->inhourafterlunes}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input style="width: auto;" name="outhourafterlunes" id="outhourafterlunes" @if(Auth::user()->outhourafterlunes) value="{{Auth::user()->outhourafterlunes}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                    </div>
                                    <div class="form-group form-inline">
                                    <span id="btnagregarhorariolunes" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                    <span id="btncancelarhorariolunes" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                    </div>
                                    <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                </div>
                                <hr>
                            </div>

                            <!-- FIN DEL QUERIDO LUNES -->

                               <!-- TODO LO QUE TENGA QUE VER CON EL martes -->

                               <div id="martes" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="ismartes" type="checkbox" class="form-check-input" id="martescheckbox" @if(Auth::user()->inhourmartes) checked @endif>
                                        <label class="form-check-label" for="martescheckbox">Martes</label>
                                    </div>
                                    <div id="horariomartes" @if(!Auth::user()->inhourmartes) style="display: none;" @endif>
                                        <div id="horamartes" class="form-group form-inline">
                                        <input name="inhourmartes" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourmartes}}"> - <input name="outhourmartes" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourmartes}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horamartes2" class="form-group form-inline">
                                            <input name="inhouraftermartes" id="inhouraftermartes" @if(Auth::user()->inhouraftermartes) value="{{Auth::user()->inhouraftermartes}}" @else disabled @endif type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input style="width: auto;" name="outhouraftermartes" id="outhouraftermartes" @if(Auth::user()->outhouraftermartes) value="{{Auth::user()->outhouraftermartes}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="form-group form-inline">
                                        <span id="btnagregarhorariomartes" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                        <span id="btncancelarhorariomartes" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                        </div>
                                        <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                    </div>
                                    <hr>
                                </div>

                                <!-- FIN DEL QUERIDO LUNES -->

                                   <!-- TODO LO QUE TENGA QUE VER CON EL miercoles -->

                            <div id="miercoles" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="ismiercoles" type="checkbox" class="form-check-input" id="miercolescheckbox" @if(Auth::user()->inhourmiercoles) checked @endif>
                                        <label class="form-check-label" for="miercolescheckbox">Miércoles</label>
                                    </div>
                                    <div id="horariomiercoles" @if(!Auth::user()->inhourmiercoles) style="display: none;" @endif>
                                        <div id="horamiercoles" class="form-group form-inline">
                                        <input name="inhourmiercoles" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourmiercoles}}"> - <input name="outhourmiercoles" style="width: auto;" type="time" class="form-control ml-3 text-center" value="{{Auth::user()->outhourmiercoles}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horamiercoles2" class="form-group form-inline">
                                            <input name="inhouraftermiercoles" id="inhouraftermiercoles" @if(Auth::user()->inhouraftermiercoles) style="width: auto;" value="{{Auth::user()->inhouraftermiercoles}}" @else disabled @endif type="time" style="width: auto;" class="form-control mr-3 text-center"> - <input style="width: auto;" name="outhouraftermiercoles" id="outhouraftermiercoles" @if(Auth::user()->outhouraftermiercoles) value="{{Auth::user()->outhouraftermiercoles}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="form-group form-inline">
                                        <span id="btnagregarhorariomiercoles" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                        <span id="btncancelarhorariomiercoles" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                        </div>
                                        <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                    </div>
                                    <hr>
                                </div>

                                <!-- FIN DEL QUERIDO miercoles -->

                                   <!-- TODO LO QUE TENGA QUE VER CON EL jueves -->

                            <div id="jueves" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="isjueves" type="checkbox" class="form-check-input" id="juevescheckbox" @if(Auth::user()->inhourjueves) checked @endif>
                                        <label class="form-check-label" for="juevescheckbox">Jueves</label>
                                    </div>
                                    <div id="horariojueves" @if(!Auth::user()->inhourjueves) style="display: none;" @endif>
                                        <div id="horajueves" class="form-group form-inline">
                                        <input name="inhourjueves" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourjueves}}"> - <input name="outhourjueves" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourjueves}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horajueves2" class="form-group form-inline">
                                            <input name="inhourafterjueves" id="inhourafterjueves" style="width: auto;" @if(Auth::user()->inhourafterjueves) value="{{Auth::user()->inhourafterjueves}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input  style="width: auto;" name="outhourafterjueves" id="outhourafterjueves" @if(Auth::user()->outhourafterjueves) value="{{Auth::user()->outhourafterjueves}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="form-group form-inline">
                                        <span id="btnagregarhorariojueves" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                        <span id="btncancelarhorariojueves" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                        </div>
                                        <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                    </div>
                                    <hr>
                                </div>

                                <!-- FIN DEL QUERIDO jueves -->

                                   <!-- TODO LO QUE TENGA QUE VER CON EL viernes -->

                            <div id="viernes" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="isviernes" type="checkbox" class="form-check-input" id="viernescheckbox" @if(Auth::user()->inhourviernes) checked @endif>
                                        <label class="form-check-label" for="viernescheckbox">Viernes</label>
                                    </div>
                                    <div id="horarioviernes" @if(!Auth::user()->inhourviernes) style="display: none;" @endif>
                                        <div id="horaviernes" class="form-group form-inline">
                                        <input name="inhourviernes" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourviernes}}"> - <input name="outhourviernes" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourviernes}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horaviernes2" class="form-group form-inline">
                                            <input name="inhourafterviernes" id="inhourafterviernes" style="width: auto;" @if(Auth::user()->inhourafterviernes) value="{{Auth::user()->inhourafterviernes}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input name="outhourafterviernes" style="width: auto;" id="outhourafterviernes" @if(Auth::user()->outhourafterviernes) value="{{Auth::user()->outhourafterviernes}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="form-group form-inline">
                                        <span id="btnagregarhorarioviernes" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                        <span id="btncancelarhorarioviernes" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                        </div>
                                        <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                    </div>
                                    <hr>
                                </div>

                                <!-- FIN DEL QUERIDO viernes -->

                                   <!-- TODO LO QUE TENGA QUE VER CON EL sabado -->

                            <div id="sabado" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="issabado" type="checkbox" class="form-check-input" id="sabadocheckbox" @if(Auth::user()->inhoursabado) checked @endif>
                                        <label class="form-check-label" for="sabadocheckbox">Sábado</label>
                                    </div>
                                    <div id="horariosabado" @if(!Auth::user()->inhoursabado) style="display: none;" @endif>
                                        <div id="horasabado" class="form-group form-inline">
                                        <input name="inhoursabado" style="width: auto;" type="time" class="form-control mr-3 text-center" value="{{Auth::user()->inhoursabado}}"> - <input name="outhoursabado" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhoursabado}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horasabado2" class="form-group form-inline">
                                            <input name="inhouraftersabado" id="inhouraftersabado"  style="width: auto;"  @if(Auth::user()->inhouraftersabado) value="{{Auth::user()->inhouraftersabado}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input name="outhouraftersabado" style="width: auto;" id="outhouraftersabado" @if(Auth::user()->outhouraftersabado) value="{{Auth::user()->outhouraftersabado}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="form-group form-inline">
                                        <span id="btnagregarhorariosabado" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                        <span id="btncancelarhorariosabado" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                        </div>
                                        <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                    </div>
                                    <hr>
                                </div>

                                <!-- FIN DEL QUERIDO sabado -->

                                    <!-- TODO LO QUE TENGA QUE VER CON EL domingo -->

                            <div id="domingo" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="isdomingo" type="checkbox" class="form-check-input" id="domingocheckbox" @if(Auth::user()->inhourdomingo) checked @endif>
                                        <label class="form-check-label" for="domingocheckbox">Domingo</label>
                                    </div>
                                    <div id="horariodomingo" @if(!Auth::user()->inhourdomingo) style="display: none;" @endif>
                                        <div id="horadomingo" class="form-group form-inline">
                                        <input name="inhourdomingo" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourdomingo}}"> - <input name="outhourdomingo" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourdomingo}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horadomingo2" class="form-group form-inline">
                                            <input name="inhourafterdomingo" id="inhourafterdomingo" style="width: auto;"  @if(Auth::user()->inhourafterdomingo) value="{{Auth::user()->inhourafterdomingo}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input name="outhourafterdomingo" style="width: auto;" id="outhourafterdomingo" @if(Auth::user()->outhourafterdomingo) value="{{Auth::user()->outhourafterdomingo}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="form-group form-inline">
                                        <span id="btnagregarhorariodomingo" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                        <span id="btncancelarhorariodomingo" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                        </div>
                                        <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                    </div>
                                    <hr>
                                </div>

                                <!-- FIN DEL QUERIDO domingo -->




							<div class="col-lg-12">
								<h4 class="fz18 mb20 mt-4">Redes Sociales</h4>
							</div>
						    <div class="col-md-6 col-lg-6">
							      	<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput8"><img src="img/facebookej.png"></label>
                                        <input type="text" name="facebook" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->facebook) placeholder="{{Auth::user()->facebook}}" @else placeholder="Ej: mardeltrabaja" @endif>
                                        @if(Auth::user()->facebook)<a href="https://facebook.com/{{Auth::user()->facebook}}" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" target="blank">PROBAR FACEBOOK</a>@endif
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
							      	<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput8"><img src="img/twitterej.png"></label>
                                        <input type="text" name="twitter" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->twitter) placeholder="{{Auth::user()->twitter}}" @else placeholder="Ej: mardeltrabaja" @endif>
                                        @if(Auth::user()->twitter)<a href="https://twitter.com/{{Auth::user()->twitter}}" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" target="blank">PROBAR TWITTER</a>@endif
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    		<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput8"><img src="img/linkedinej.png"></label>
                                        <input type="text" name="linkedin" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->linkedin) placeholder="{{Auth::user()->linkedin}}" @else placeholder="Ej: mardeltrabaja"@endif>
                                        @if(Auth::user()->linkedin)<a href="https://facebook.com/{{Auth::user()->linkedin}}" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" target="blank">PROBAR LINKEDIN</a>@endif
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    		<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput8"><img src="img/instagramej.png"></label>
                                        <input type="text" name="instagram" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->instagram) placeholder="{{Auth::user()->instagram}}" @else placeholder="Ej: mardeltrabaja"@endif>
                                        @if(Auth::user()->instagram)<a href="https://facebook.com/{{Auth::user()->instagram}}" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" target="blank">PROBAR INSTAGRAM</a>@endif
									</div>
                            </div>
                            <div class="col-lg-12">
								<h4 class="fz18 mb20 mt-4">Imágenes de trabajos realizados.</h4>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <div class="card">
                                <div class="card-header"><h4>Imagen 1</h4></div>
                                <div class="card-body">
                                @if(Auth::user()->img1)
                                    <img id="img1-selected-db" style="width: 80px;height: 80px" src="img-jobs/{{Auth::user()->img1}}">
                                    <p><a id="delete-img1-selected" class="btn btn-outline-danger text-danger btn-sm">Eliminar <img src="img-icons/basura.png"></a></p>
                                @endif
                                <div id="select-img1">
                                    <label id="button-add-img1" for="file-img1"><img src="img/addimg.png"></label>
                                    <input name="img1" id="file-img1" type="file" accept="image/*" style="display: none"/>
                                </div>
                                <div id="div-img1-selected" class="mt-3">
                                </div>
                                <a id="delete-img1" style="color: red;text-decoration: none;font-weight: 600;display:none;"><img  class="mt-3" src="img/delete.png"></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <div class="card">
                                <div class="card-header"><h4>Imagen 2</h4></div>
                                <div class="card-body">
                                @if(Auth::user()->img2)
                                    <img id="img2-selected-db" style="width: 80px;height: 80px" src="img-jobs/{{Auth::user()->img2}}">
                                    <p><a id="delete-img2-selected" class="btn btn-outline-danger text-danger btn-sm">Eliminar <img src="img-icons/basura.png"></a></p>
                                @endif
                                <div id="select-img2">
                                <label id="button-add-img2" for="file-img2"><img src="img/addimg.png"></label>
                                    <input name="img2" id="file-img2" type="file" accept="image/*" style="display: none"/>
                                </div>
                                <div id="div-img2-selected" class="mt-3">
                                </div>
                                <a id="delete-img2" style="color: red;text-decoration: none;font-weight: 600;display:none;"><img class="mt-3" src="img/delete.png"></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <div class="card">
                                <div class="card-header"><h4>Imagen 3</h4></div>
                                <div class="card-body">
                                @if(Auth::user()->img3)
                                    <img id="img3-selected-db" style="width: 80px;height: 80px" src="img-jobs/{{Auth::user()->img3}}">
                                    <p><a id="delete-img3-selected" class="btn btn-outline-danger text-danger btn-sm">Eliminar <img src="img-icons/basura.png"></a></p>
                                @endif
                                <div id="select-img3">
                                    <label id="button-add-img3" for="file-img3"><img src="img/addimg.png"></label>
                                    <input name="img3" id="file-img3" type="file" accept="image/*" style="display: none"/>
                                </div>
                                <div id="div-img3-selected" class="mt-3">
                                </div>
                                <a id="delete-img3" style="color: red;text-decoration: none;font-weight: 600;display:none;"><img class="mt-3" src="img/delete.png"></a>
                                </div>
                                </div>
                            </div>


                            @endif
                            @if(Auth::user()->rol == 'aspirante')
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleInputPhone">WhatsApp</label>
                                    <input type="number" name="whatsappas"  class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" @if(Auth::user()->whatsapp)placeholder="{{Auth::user()->whatsapp}}" @else placeholder="Ejemplo: +5492235646567" @endif>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleInputPhone">Teléfono</label>
                                    <input type="number" name="telefonoas"  class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" @if(Auth::user()->phone)placeholder="{{Auth::user()->whatsapp}}" @else placeholder="Ejemplo: 2235646567" @endif>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="fz18 mb20 mt-4">Información personal laboral</h4>
                            </div>
                            <div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
                                    <label for="formGroupExampleInput1">Aptitudes</label>
                                <input type="text" name="aptitudes" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->aptitudes) placeholder="{{Auth::user()->aptitudes}}" @else placeholder="cocinero, camarero, panadero, etc" @endif>
								</div>
                            </div>
                            <div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
                                    <label for="formGroupExampleInput1">Experiencia en</label>
                                <input type="text" name="experienciaen" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->experienciaen) placeholder="{{Auth::user()->experienciaen}}" @else placeholder="Limpieza doméstica, armado de muebles" @endif>
								</div>
                            </div>
                            <div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
                                    <label for="formGroupExampleInput1">Describete</label>
                                <textarea type="text" name="descripcionas" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->description) placeholder="{{Auth::user()->description}}" @else placeholder="Explica brevemente que es lo que sabes, como eres y que tienes pensado a futuro." @endif></textarea>
								</div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="fz18 mb20 mt-4">Información Territorial</h4>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="exampleFormControlInput9">Ciudad</label><br>
                                    <select name="cityas" class="form-control">
                                        <option value="Mar del Plata">Mar del Plata</option>
                                        <option value="Miramar">Miramar</option>
                                        <option value="Batán">Batán</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="my_profile_input form-group">
                                    <label for="myInput">Barrio - Zona</label><br>
                                <input autocomplete="off" spellcheck="false"class="form-control" name="zoneas" id="myInput" type="text" name="barrio" placeholder="{{Auth::user()->zone}}">
                                </div>
                            </div>

                            @endif<!-- si es profesional es esto -->

                            <div class="col-lg-8 mt-4">
                                    <div class="form-inline mt-2">
                                        <input type="submit" class="btn btn-lg btn-info mr-2" value="Guardar Cambios" />
                                        <a class="btn btn-lg btn-danger bg-danger" href="#">Cancelar</a>
                                    </div>
                            </div>
                        </form>
                        </div>

                    </div>

                    <div style="margin-top: 40px;">
                        <a href="#" class="text-danger font-weight-bold"><img src="img-icons/delete.png" class="mr-1" /> Eliminar Perfil</a>
                    </div>
				</div>
			</div>
		</div>
    </section>

<script>
    var countries = ["9 de Julio","Aeropuerto","Aeroparque","Alfar","Ameghino","Antártida Argentina","Barrio 180","Lomas del Golf","Bernardino Rivadavia","Belgrano","Belisario Roldán","Bosque Alegre","Bosque Peralta Ramos","Caisamar","Centenario","Cerrito","Cerrito Sur","Cerrito San Salvador","Colina Alegre","Constitución","Coronel Dorrego","Costa Azul","Don Bosco","Don Emilio","Dorrego","El Grosellar","El Martillo","El Progreso","Estrada","Etchepare","Faro","Juramento","Las Américas","Las Avenidas","Colinas de Peralta Ramos","Las Heras","La Florida","La Perla","La Zulema","Libertad","Los Acantilados","Los Pinares","Los Troncos","Malvinas Argentinas","Newbery","Nueva Pompeya","Montemar","Parque Hermoso","Parque La Florida","Parque Luro","Parque Palermo","Parque Peña","Peralta Ramos Oeste","Pinos de Anchorena","Chapadmalal","Playa Grande","Punta Mogotes","San Antonio","San Carlos","San Eduardo","San Geronimo","San Jacinto","San José","San Patricio","San Salvador","Santa Mónica","Sarmiento","Stella Maris","Jardín Stella Maris","Jardín","Alfar","Nuevo Golf","Zacagnini"];
</script>

<script>
        function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-contenedor + img').remove();
                $('#img-contenedor').append('<img id="img-perfil-panel" src="'+e.target.result+'" class="align-self-start mr-3 rounded-circle" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
        }

        function filePreviewDni(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-dni-contenedor').append('<img id="img-dni-preview" src="'+e.target.result+'" class="align-self-start mr-3 rounded-circle" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
        }

        function filePreviewimg1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#div-img1-selected').append('<img height="200px" width="200px" id="img1-selected" src="'+e.target.result+'" class="text-center" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
        }

        function filePreviewimg2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#div-img2-selected').append('<img height="200px" width="200px" id="img2-selected" src="'+e.target.result+'" class="text-center" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
        }

        function filePreviewimg3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#div-img3-selected').append('<img height="200px" width="200px" id="img3-selected" src="'+e.target.result+'" class="text-center" />');
            }
            reader.readAsDataURL(input.files[0]);
            }
        }
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
<script>

        autocomplete(document.getElementById("myInput"), countries);
        </script>


<div class="modal fade" id="modalprueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
            <button style="position: absolute; float: right;margin-top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
              </button>
        </div>
        <div class="modal-body text-center" style="margin-top: 40px;">
            <img src="img/logo.png" style="height: 50px;border-radius: 10px;margin-bottom: 10px;">
              <h4 class="text-black">Bienvenido, {{Auth::user()->name}}</h4>
              <h6 class="text-secondary">Administrá tu información y personalizá tu perfil con las opciones que para vos son más relevantes. </h6>
              <div class="responsive bg-white" style="margin-top: 20px; border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
                    <div class="row">
                        <div class="col-8 text-left" >
                                <p style="padding: 10px;font-size: 20px;color: black;margin-bottom: -8px;">Completá tu perfil</p>
                                <p class="text-muted" style="font-size: 14px;padding:  10px;">Personalizá tu experiencia en Mardeltrabaja.com, completando las diferentes configuraciones disponibles.</p>
                        </div>
                        <div class="col-4">
                            <img src="img/personalizar.png" style="margin-top:30px;margin-left: -40px;">
                        </div>
                    </div>
            </div>
            <div class="no-responsive bg-white" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);margin-top: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-8" style="padding: 14px;margin-top: 50px;">
                            <p style="padding: 7px;font-size: 20px;color: black;margin-bottom: -8px;">Completá tu perfil</p>
                                <p class="text-muted" style="font-size: 15px;">Desde tu panel vas a poder personalizar tu experiencia en Mardeltrabaja.com, completando las diferentes configuraciones disponibles.</p>
                        </div>
                        <div class="col-4">
                            <img src="img/personalizar.png" style="margin-top:80px;">
                        </div>
                    </div>
            </div>
            </div>

        <div class="responsive" style="margin-top: 10px; border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #0f7778">
            <div class="container">
                <div class="row">
                    <div class="col-8" style="padding: 25px;">
                            <h6 style="margin-bottom: 0px;color:white;">¡Quedate en casa!</h6>
                    </div>
                    <div class="col-4">
                        <img src="img/covid.jpg" style="margin-top:20px;">
                    </div>
                </div>
        </div>
        </div>
        </div>




        <div class="modal-footer" style="border: none">
          <button style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" type="button" data-dismiss="modal">COMPLETAR PERFIL</button>
        </div>
      </div>
    </div>
  </div>










  <div class="modal fade" id="modalverify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
            <button style="position: absolute; float: right;margin-top: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
              </button>
        </div>
        <div class="modal-body text-center" style="margin-top: 40px;">
            <img src="img-icons/verify.webp" style="height: 50px;border-radius: 10px;margin-bottom: 10px;">
              <h4 class="text-black">Hola, {{Auth::user()->name}}</h4>
              <h6 class="text-secondary">Para verificar tu perfil por favor, ingresá tu número de DNI y una foto clara que verifique el mismo. </h6>
              <div class="responsive bg-white" style="margin-top: 20px; border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my_profile_input form-group" style="padding: 15px;">
                                <form id="form-verify" style="margin-top:5px;" method="POST" action="{{ route('User.verify') }}" enctype="multipart/form-data">
                                    @csrf
                                    <label for="exampleInputPhone">Ingrese su número de DNI <span class="text-danger">*</span></label>
                                    <input type="number" name="dni" class="form-control" id="dni" aria-describedby="DNI" placeholder="EJ: 38545324">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                    <label style="margin-top: 10px;" for="img">Ingrese una imagen clara de su DNI:</label>
                                    <input type="file" id="img-dni" name="img-dni" accept="image/*">
                                 </form>
                            </div>
                        </div>
                    </div>
            </div>

            <h6 class="text-secondary" style="margin-top: 10px;">En un máximo de 48hs obtendrás la validación de los documentos y podrás disfrutar de tu perfil verificado</h6>

        </div>
        <div class="modal-footer" style="border: none">
          <a id="btn-verify-1" style="font-size: 13px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif" >ENVIAR PERFIL A VERIFICACIÓN</a>
        </div>
      </div>
    </div>
  </div>











<script>

            $(document).ready(function(){

                $('#btn-verify-1').click(function (){
                    var r = confirm("¿Estás seguro que completaste todos los datos?");
                        if (r == true) {
                            var dni = true;
                            var img = true;
                            if($('#dni').val().length != 0){
                                dni = true;
                                $("#dni").css('border', '1px solid #e7e7e7');
                            }else{
                                $("#dni").css('border', '1px solid #ff8e8e');
                                dni = false;
                             }
                            if($('#img-dni').get(0).files.length === 0){
                                $("#img-dni").css('border', '1px solid #ff8e8e');
                                img = false;
                            }else{
                                img = true;
                                $("#img-dni").css('border', '1px solid #e7e7e7');
                            }

                            var consulta = $("#dni").val();
                                $.ajax({
                                    type: "POST",
                                    url: "/comprobation-dni.php",
                                    data: "b="+consulta,
                                    dataType: "html",
                                    error: function(){
                                },
                                    success: function(data){
                                    if(data == 'yes'){
                                        dni = false;
                                        $("#dni").css('border', '1px solid #ff8e8e');
                                    }else{
                                        dni = true;
                                        if(dni === true && img === true){
                                            $('#form-verify').submit();
                                        }
                                    }
                                }
                            });
                        }else{

                        }
                });


            $("#file").change(function () {
                    $('#img-perfil-panel').hide();
                    filePreview(this);
                    $('#labelImg').hide('slow');
            });

            $("#file-img1").change(function () {
                    $('#select-img1').hide();
                    $('#div-img1-selected').show('slow');
                    filePreviewimg1(this);
                    $('#delete-img1').show('slow');
         });
            $("#delete-img1").click(function () {
                    $('#div-img1-selected').hide('slow');
                    $('#select-img1').show('slow');
                    $("#file-img1").val('');
                    $('#img1-selected').remove();
                    $('#delete-img1').hide('slow');
            });


            $("#file-img2").change(function () {
                    $('#select-img2').hide();
                    $('#div-img2-selected').show('slow');
                    filePreviewimg2(this);
                    $('#delete-img2').show('slow');
            });
            $("#delete-img2").click(function () {
                    $('#div-img2-selected').hide('slow');
                    $('#select-img2').show('slow');
                    $("#file-img2").val('');
                    $('#img2-selected').remove();
                    $('#delete-img2').hide('slow');
            });



            $("#file-img3").change(function () {
                    $('#select-img3').hide();
                    $('#div-img3-selected').show('slow');
                    filePreviewimg3(this);
                    $('#delete-img3').show('slow');
            });
            $("#delete-img3").click(function () {
                    $('#div-img3-selected').hide('slow');
                    $('#select-img3').show('slow');
                    $("#file-img3").val('');
                    $('#img3-selected').remove();
                    $('#delete-img3').hide('slow');
            });

            $("#delete-img1-selected").click(function(){
                var text = 'delete';
                var type = 'text';
                if (confirm('¿Estás seguro de Eliminar la Imagen 1?')){
                    $("#file-img1").attr({ type: type, value: text});
                    $("#form-user-edit").submit();
                }
            });

            $("#delete-img2-selected").click(function(){
                var text = 'delete';
                var type = 'text';
                if (confirm('¿Estás seguro de Eliminar la Imagen 2?')){
                    $("#file-img2").attr({ type: type, value: text});
                    $("#form-user-edit").submit();
                }

            });

            $("#delete-img3-selected").click(function(){
                var text = 'delete';
                var type = 'text';
                if (confirm('¿Estás seguro de Eliminar la Imagen 3?')){
                    $("#file-img3").attr({ type: type, value: text});
                    $("#form-user-edit").submit();
                }

            });

                //comienzo del formulario de editar imagen
                $("#showUpdateImg").click(function () {
                    $('#formUpdateImg').show('slow');
                    $('#showUpdateImg').hide('slow');
                    $('#labelImg').show('slow');
                });
                $("#cancelUpdateImg").click(function () {
                    $('#formUpdateImg').hide('slow');
                    $('#showUpdateImg').show('slow');
                    $('#labelImg').hide('slow');
                });
                //fin formulario de editar imagen
                //inicio del filtro de categorias
                $('#category').on('change', function(){
                            var category_id = $(this).val();
                            if($.trim(category_id) == 16){
                                $('#subcategory').hide("slow");
                                $('#otrosServicios').show('slow');
                                $('#unselected').show('slow');
                                $('#otrosServicios').css({"border":"1px solid #e46359"});
                            }else if($.trim(category_id) != ''){
                                $.get('subcategories', {category_id: category_id}, function(subcategories){
                                    $('#subcategory').empty();
                                    $('#subcategory').append("<option value=''>Seleccione Oficio</option>");
                                    $.each(subcategories, function(index, subcategory){
                                        $('#subcategory').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                        $('#selected').hide('slow');
                                        $('#unselected').show('slow');
                                        $('#subcategory').css({"border":"1px solid #e46359"});
                                    })
                                });
                            }
                        });
                        $('#subcategory').on('change',function(){
                            if($('#subcategory').val()==''){
                                $('#selected').hide('slow');
                                $('#unselected').show('slow');
                                $('#subcategory').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected').hide('slow');
                                $('#subcategory').css({"border":"1px solid #ddd"});
                                $('#selected').show('slow');
                            }
                        });

                        $('#otrosServicios').on('change',function(){
                            if($('#otrosServicios').val()==''){
                                $('#selected').hide('slow');
                                $('#unselected').show('slow');
                                $('#otrosServicios').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected').hide('slow');
                                $('#otrosServicios').css({"border":"1px solid #ddd"});
                                $('#selected').show('slow');
                            }
                        });

                        $('#category2').on('change', function(){
                            var category_id = $(this).val();
                            if($.trim(category_id) == 16){
                                $('#job2').hide("slow");
                                $('#otrosServicios2').show('slow');
                                $('#unselected2').show('slow');
                                $('#otrosServicios2').css({"border":"1px solid #e46359"});
                            }else if($.trim(category_id) != ''){
                                $.get('subcategories', {category_id: category_id}, function(subcategories){
                                    $('#job2').empty();
                                    $('#job2').append("<option value=''>Seleccione Oficio</option>");
                                    $.each(subcategories, function(index, subcategory){
                                        $('#job2').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                        $('#selected2').hide('slow');
                                        $('#unselected2').show('slow');
                                        $('#job2').css({"border":"1px solid #e46359"});
                                    })
                                });
                            }
                        });
                        $('#job2').on('change',function(){
                            if($('#job2').val()==''){
                                $('#selected2').hide('slow');
                                $('#unselected2').show('slow');
                                $('#job2').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected2').hide('slow');
                                $('#job2').css({"border":"1px solid #ddd"});
                                $('#selected2').show('slow');
                            }
                        });


                        $('#category2-non').on('change', function(){
                            var category_id = $(this).val();
                            if($.trim(category_id) == 16){
                                $('#job2-non').hide("slow");
                                $('#otrosServicios2-non').show('slow');
                                $('#unselected2-non').show('slow');
                                $('#otrosServicios2-non').css({"border":"1px solid #e46359"});
                            }else if($.trim(category_id) != ''){
                                $.get('subcategories', {category_id: category_id}, function(subcategories){
                                    $('#job2-non').empty();
                                    $('#job2-non').append("<option value=''>Seleccione Oficio</option>");
                                    $.each(subcategories, function(index, subcategory){
                                        $('#job2-non').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                        $('#selected2-non').hide('slow');
                                        $('#unselected2-non').show('slow');
                                        $('#job2-non').css({"border":"1px solid #e46359"});
                                    })
                                });
                            }
                        });
                        $('#job2-non').on('change',function(){
                            if($('#job2-non').val()==''){
                                $('#selected2-non').hide('slow');
                                $('#unselected2-non').show('slow');
                                $('#job2-non').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected2-non').hide('slow');
                                $('#job2-non').css({"border":"1px solid #ddd"});
                                $('#selected2-non').show('slow');
                            }
                        });


                        $('#otrosServicios2').on('change',function(){
                            if($('#otrosServicios2').val()==''){
                                $('#selected2').hide('slow');
                                $('#unselected2').show('slow');
                                $('#otrosServicios2').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected2').hide('slow');
                                $('#otrosServicios2').css({"border":"1px solid #ddd"});
                                $('#selected2').show('slow');
                            }
                        });

                         /////////

                         $('#category3-non').on('change', function(){
                            var category_id = $(this).val();
                            if($.trim(category_id) == 16){
                                $('#job3-non').hide("slow");
                                $('#otrosServicios3-non').show('slow');
                                $('#unselected3-non').show('slow');
                                $('#otrosServicios3-non').css({"border":"1px solid #e46359"});
                            }else if($.trim(category_id) != ''){
                                $.get('subcategories', {category_id: category_id}, function(subcategories){
                                    $('#job3-non').empty();
                                    $('#job3-non').append("<option value=''>Seleccione Oficio</option>");
                                    $.each(subcategories, function(index, subcategory){
                                        $('#job3-non').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                        $('#selected3-non').hide('slow');
                                        $('#unselected3-non').show('slow');
                                        $('#job3-non').css({"border":"1px solid #e46359"});
                                    })
                                });
                            }
                        });
                        $('#job3-non').on('change',function(){
                            if($('#job3-non').val()==''){
                                $('#selected3-non').hide('slow');
                                $('#unselected3-non').show('slow');
                                $('#job2-non').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected3-non').hide('slow');
                                $('#job3-non').css({"border":"1px solid #ddd"});
                                $('#selected3-non').show('slow');
                            }
                        });

                        $('#otrosServicios3-non').on('change',function(){
                            if($('#otrosServicios3-non').val()==''){
                                $('#selected3-non').hide('slow');
                                $('#unselected3-non').show('slow');
                                $('#otrosServicios3-non').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected3-non').hide('slow');
                                $('#otrosServicios3-non').css({"border":"1px solid #ddd"});
                                $('#selected3-non').show('slow');
                            }
                        });


                        $('#category3').on('change', function(){
                            var category_id = $(this).val();
                            if($.trim(category_id) == 16){
                                $('#job3').hide("slow");
                                $('#otrosServicios3').show('slow');
                                $('#unselected3').show('slow');
                                $('#otrosServicios3').css({"border":"1px solid #e46359"});
                            }else if($.trim(category_id) != ''){
                                $.get('subcategories', {category_id: category_id}, function(subcategories){
                                    $('#job3').empty();
                                    $('#job3').append("<option value=''>Seleccione Oficio</option>");
                                    $.each(subcategories, function(index, subcategory){
                                        $('#job3').append("<option value= '"+ subcategory.name +"'>"+ subcategory.name +"</option>");
                                        $('#selected3').hide('slow');
                                        $('#unselected3').show('slow');
                                        $('#job3').css({"border":"1px solid #e46359"});
                                    })
                                });
                            }
                        });
                        $('#job3').on('change',function(){
                            if($('#job3').val()==''){
                                $('#selected3').hide('slow');
                                $('#unselected3').show('slow');
                                $('#job2').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected3').hide('slow');
                                $('#job3').css({"border":"1px solid #ddd"});
                                $('#selected3').show('slow');
                            }
                        });

                        $('#otrosServicios3').on('change',function(){
                            if($('#otrosServicios3').val()==''){
                                $('#selected3').hide('slow');
                                $('#unselected3').show('slow');
                                $('#otrosServicios3').css({"border":"1px solid #e46359"}).show('slow');
                            }else{
                                $('#unselected3').hide('slow');
                                $('#otrosServicios3').css({"border":"1px solid #ddd"});
                                $('#selected3').show('slow');
                            }
                        });


                        $('#btn-show-job2').click(function(){
                            $('#btn-show-job2').hide('slow');
                            $('#container-job2-non').show('slow');
                        });
                        $('#btn-hide-job2').click(function(){
                            $('#container-job2').hide('slow');
                            $('#btn-show-job2').show('slow');
                            $('#container-job3').hide('slow');
                            $('#job3').val() = null;
                            $('#job2').val() = null;
                            $('#job3-otros').val() = null;
                            $('#job2-otros').val() = null;
                        });
                        $('#btn-show-job3').click(function(){
                            $('#container-job3-non').show('slow');
                        });
                        $('#btn-hide-job3').click(function(){
                            $('#container-job3').hide('slow');
                            $('#job3').val() = null;
                            $('#job3-otros').val() = null;
                        });

                        $('#btn-hide-job2-non').click(function(){
                            $('#container-job2-non').hide('slow');
                            $('#btn-show-job2').show('slow');
                            $('#container-job3-non').hide('slow');
                            $('#job3-non').val() = null;
                            $('#job2-non').val() = null;
                            $('#job3-otros').val() = null;
                            $('#job2-otros').val() = null;
                        });
                        $('#btn-show-job3-non').click(function(){
                            $('#container-job3-non').show('slow');
                        });
                        $('#btn-hide-job3-non').click(function(){
                            $('#container-job3-non').hide('slow');
                            $('#job3-non').val() = null;
                            $('#job3-otros-non').val() = null;
                        });




                   //TODO ESTO TIENE QUE VER CON EL LUNES NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                if($('#inhourafterlunes').val() != ""){
                    $('#btnagregarhorariolunes').hide();
                    $('#btncancelarhorariolunes').show();
                }
                //Lunes checkbox
                $('#lunescheckbox').change(function(){
                    if($('#lunescheckbox').is(':checked')){
                        $('#horariolunes').show('slow');
                    }else{
                        $('#horariolunes').hide('slow');
                    }
                });

                //Lunes Agregar Horario
                $('#btnagregarhorariolunes').click(function(){
                    $('#inhourafterlunes').prop('disabled', false);
                    $('#outhourafterlunes').prop('disabled', false);
                    $('#btnagregarhorariolunes').hide('slow');
                    $('#btncancelarhorariolunes').show('slow');
                });

                $('#btncancelarhorariolunes').click(function(){
                    $('#inhourafterlunes').prop('disabled', true);
                    $('#outhourafterlunes').prop('disabled', true);
                    $('#inhourafterlunes').val("");
                    $('#outhourafterlunes').val("");
                    $('#btncancelarhorariolunes').hide('slow');
                    $('#btnagregarhorariolunes').show('slow');
                });

                //FIN DEL LUNES


                   //TODO ESTO TIENE QUE VER CON EL martes NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                   if($('#inhouraftermartes').val() != ""){
                    $('#btnagregarhorariomartes').hide();
                    $('#btncancelarhorariomartes').show();
                }
                //martes checkbox
                $('#martescheckbox').change(function(){
                    if($('#martescheckbox').is(':checked')){
                        $('#horariomartes').show('slow');
                    }else{
                        $('#horariomartes').hide('slow');
                    }
                });

                //martes Agregar Horario
                $('#btnagregarhorariomartes').click(function(){
                    $('#inhouraftermartes').prop('disabled', false);
                    $('#outhouraftermartes').prop('disabled', false);
                    $('#btnagregarhorariomartes').hide('slow');
                    $('#btncancelarhorariomartes').show('slow');
                });

                $('#btncancelarhorariomartes').click(function(){
                    $('#inhouraftermartes').prop('disabled', true);
                    $('#outhouraftermartes').prop('disabled', true);
                    $('#inhouraftermartes').val("");
                    $('#outhouraftermartes').val("");
                    $('#btncancelarhorariomartes').hide('slow');
                    $('#btnagregarhorariomartes').show('slow');
                });

                //FIN DEL MARTES



                   //TODO ESTO TIENE QUE VER CON EL miercoles NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                   if($('#inhouraftermiercoles').val() != ""){
                    $('#btnagregarhorariomiercoles').hide();
                    $('#btncancelarhorariomiercoles').show();
                }
                //miercoles checkbox
                $('#miercolescheckbox').change(function(){
                    if($('#miercolescheckbox').is(':checked')){
                        $('#horariomiercoles').show('slow');
                    }else{
                        $('#horariomiercoles').hide('slow');
                    }
                });

                //miercoles Agregar Horario
                $('#btnagregarhorariomiercoles').click(function(){
                    $('#inhouraftermiercoles').prop('disabled', false);
                    $('#outhouraftermiercoles').prop('disabled', false);
                    $('#btnagregarhorariomiercoles').hide('slow');
                    $('#btncancelarhorariomiercoles').show('slow');
                });

                $('#btncancelarhorariomiercoles').click(function(){
                    $('#inhouraftermiercoles').prop('disabled', true);
                    $('#outhouraftermiercoles').prop('disabled', true);
                    $('#inhouraftermiercoles').val("");
                    $('#outhouraftermiercoles').val("");
                    $('#btncancelarhorariomiercoles').hide('slow');
                    $('#btnagregarhorariomiercoles').show('slow');
                });

                //FIN DEL miercoles

                 //TODO ESTO TIENE QUE VER CON EL jueves NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                 if($('#inhourafterjueves').val() != ""){
                    $('#btnagregarhorariojueves').hide();
                    $('#btncancelarhorariojueves').show();
                }
                //jueves checkbox
                $('#juevescheckbox').change(function(){
                    if($('#juevescheckbox').is(':checked')){
                        $('#horariojueves').show('slow');
                    }else{
                        $('#horariojueves').hide('slow');
                    }
                });

                //jueves Agregar Horario
                $('#btnagregarhorariojueves').click(function(){
                    $('#inhourafterjueves').prop('disabled', false);
                    $('#outhourafterjueves').prop('disabled', false);
                    $('#btnagregarhorariojueves').hide('slow');
                    $('#btncancelarhorariojueves').show('slow');
                });

                $('#btncancelarhorariojueves').click(function(){
                    $('#inhourafterjueves').prop('disabled', true);
                    $('#outhourafterjueves').prop('disabled', true);
                    $('#inhourafterjueves').val("");
                    $('#outhourafterjueves').val("");
                    $('#btncancelarhorariojueves').hide('slow');
                    $('#btnagregarhorariojueves').show('slow');
                });

                //FIN DEL jueves


                   //TODO ESTO TIENE QUE VER CON EL viernes NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                   if($('#inhourafterviernes').val() != ""){
                    $('#btnagregarhorarioviernes').hide();
                    $('#btncancelarhorarioviernes').show();
                }
                //viernes checkbox
                $('#viernescheckbox').change(function(){
                    if($('#viernescheckbox').is(':checked')){
                        $('#horarioviernes').show('slow');
                    }else{
                        $('#horarioviernes').hide('slow');
                    }
                });

                //viernes Agregar Horario
                $('#btnagregarhorarioviernes').click(function(){
                    $('#inhourafterviernes').prop('disabled', false);
                    $('#outhourafterviernes').prop('disabled', false);
                    $('#btnagregarhorarioviernes').hide('slow');
                    $('#btncancelarhorarioviernes').show('slow');
                });

                $('#btncancelarhorarioviernes').click(function(){
                    $('#inhourafterviernes').prop('disabled', true);
                    $('#outhourafterviernes').prop('disabled', true);
                    $('#inhourafterviernes').val("");
                    $('#outhourafterviernes').val("");
                    $('#btncancelarhorarioviernes').hide('slow');
                    $('#btnagregarhorarioviernes').show('slow');
                });

                //FIN DEL viernes

                   //TODO ESTO TIENE QUE VER CON EL sabado NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                   if($('#inhouraftersabado').val() != ""){
                    $('#btnagregarhorariosabado').hide();
                    $('#btncancelarhorariosabado').show();
                }
                //sabado checkbox
                $('#sabadocheckbox').change(function(){
                    if($('#sabadocheckbox').is(':checked')){
                        $('#horariosabado').show('slow');
                    }else{
                        $('#horariosabado').hide('slow');
                    }
                });

                //sabado Agregar Horario
                $('#btnagregarhorariosabado').click(function(){
                    $('#inhouraftersabado').prop('disabled', false);
                    $('#outhouraftersabado').prop('disabled', false);
                    $('#btnagregarhorariosabado').hide('slow');
                    $('#btncancelarhorariosabado').show('slow');
                });

                $('#btncancelarhorariosabado').click(function(){
                    $('#inhouraftersabado').prop('disabled', true);
                    $('#outhouraftersabado').prop('disabled', true);
                    $('#inhouraftersabado').val("");
                    $('#outhouraftersabado').val("");
                    $('#btncancelarhorariosabado').hide('slow');
                    $('#btnagregarhorariosabado').show('slow');
                });

                //FIN DEL sabado

                   //TODO ESTO TIENE QUE VER CON EL domingo NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                   if($('#inhourafterdomingo').val() != ""){
                    $('#btnagregarhorariodomingo').hide();
                    $('#btncancelarhorariodomingo').show();
                }
                //domingo checkbox
                $('#domingocheckbox').change(function(){
                    if($('#domingocheckbox').is(':checked')){
                        $('#horariodomingo').show('slow');
                    }else{
                        $('#horariodomingo').hide('slow');
                    }
                });

                //domingo Agregar Horario
                $('#btnagregarhorariodomingo').click(function(){
                    $('#inhourafterdomingo').prop('disabled', false);
                    $('#outhourafterdomingo').prop('disabled', false);
                    $('#btnagregarhorariodomingo').hide('slow');
                    $('#btncancelarhorariodomingo').show('slow');
                });

                $('#btncancelarhorariodomingo').click(function(){
                    $('#inhourafterdomingo').prop('disabled', true);
                    $('#outhourafterdomingo').prop('disabled', true);
                    $('#inhourafterdomingo').val("");
                    $('#outhourafterdomingo').val("");
                    $('#btncancelarhorariodomingo').hide('slow');
                    $('#btnagregarhorariodomingo').show('slow');
                });

                //FIN DEL domingo

            });

        </script>

@endsection
