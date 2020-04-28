@extends('layouts.app')

@section('content')

<div class="container">
    <div  id="registroProfesional" class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-4" style="margin-bottom: 20px;">
                <div class="card-header text-center" style="background:#00b7ff; color:white;"><p>Formulario de registro para <strong>Mardeltrabaja.com</strong>.</p>

                </div>

                <div class="card-body" style="padding: 10px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" value="profesional" name="rol">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="my_profile_form_area">
                                        <div class="row">

                                        <div class="col-lg-12">
                                            <div class="my_profile_thumb_edit"></div>
                                        </div>
                                        <div class="col-md-12">
                                                <p class="text-secondary"><img src="img-icons/login.png"/> Ingresa tus datos personales para inicio de sesion.</p>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="formGroupExampleInput9">Nombre Completo <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" id="formGroupExampleInput9"  @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ej: Juan Perez">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="exampleFormControlInput1">Email <span class="text-danger">*</span><span class="text-secondary font-style-italic">(Para iniciar sesion)</span></label>
                                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ej: mardeltrabaja@gmail.com">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>

                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label>Contraseña</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="exampleFormControlInput1">Confirmar Contraseña</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <hr >
                                        </div>
                                        <div class="col-md-12">
                                            <p class="text-secondary"><img src="img-icons/information.png"/> Ingresa tus datos personales para contacto e información para el usuario.</p>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label>Buscá tu profesión <span class="text-danger">*</span><small class="text-secondary">(Si no está, poné "otros servicios")</small></label>
                                                <select id="category" name="category_id" class="form-control" required>
                                                        <option selected class="alert alert-danger" value="">Seleccione Categoría</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="formGroupExampleInput2">Profesión Principal <span class="text-danger">*</span><img id="unselected" style="display:none;" src="img-icons/alert.png"> <img id="selected" style="display:none;" src="img-icons/check.png"></label>
                                                <select id="subcategory" name="subcategory_id" class="form-control">
                                                </select>
                                                <input type="text" name="subcategory_id-otro" class="form-control" id="otrosServicios" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                                <a id="btn-show-job2" class="text-info btn btn-outline-info btn-small btn-sm">Agregar Profesión Secundaria</a>
                                        </div>

                                 <div id="container-job2" class="row col-md-12" style="display: none;">
                                        <div id="" class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="">Categoría secundaria<span class="text-secondary">(Ésta aparecerá como secundaria)</span></label>
                                                <select id="category2" name="category_id2" class="form-control">
                                                        <option selected class="alert alert-danger" value="">Seleccione Categoría</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="formGroupExampleInput2">Profesión alternativa <img id="unselected2" style="display:none;" src="img-icons/alert.png"> <img id="selected2" style="display:none;" src="img-icons/check.png"></label>
                                                <select id="job2" name="job2" class="form-control">
                                                </select>
                                                <input type="text" name="job2-otro" class="form-control" id="otrosServicios2" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                            </div>

                                        </div>
                                        <div class="row" style="margin-left: 25px;">
                                        <a id="btn-hide-job2" class="btn text-danger btn-outline-danger btn-sm">Cancelar Profesión (x)</a>
                                        <a id="btn-show-job3" class="btn text-white btn-info btn-sm">Agregar Profesión Alterna</a>
                                        </div>
                                </div>
                                <div id="container-job3" class="row col-md-12" style="display:none;">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label>Tercera categoría<span class="text-secondary">(Con menos visibilidad)</span></label>
                                                <select id="category3" name="category_id3" class="form-control">
                                                        <option selected class="alert alert-danger" value="">Seleccione Categoría</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label>Profesión alternativa adjunta <img id="unselected3" style="display:none;" src="img-icons/alert.png"> <img id="selected3" style="display:none;" src="img-icons/check.png"></label>
                                                <select id="job3" name="job3" class="form-control">
                                                </select>
                                                <input type="text" name="job3-otro" class="form-control" id="otrosServicios3" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                            </div>
                                        </div>
                                        <div class="row" style="margin-left: 25px;">
                                                <a id="btn-hide-job3" class="btn text-danger btn-outline-danger btn-sm">Cancelar profesión (x)</a>
                                        </div>
                                </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                            <label >WhatsApp <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text form-control mb-0" id="basic-addon1"><img height="30px" src="img-icons/whatsapp.png" /></span>
                                                </div>
                                                <input type="number" name="whatsapp"  class="form-control mb-0" aria-describedby="phoneNumber" placeholder="Ej: Mdq. 223587851, Cap. 115325253 (Sin el 0 y sin el 15)">
                                            </div>
                                            </div>

                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                    <div class="my_profile_input form-group">
                                                        <label for="exampleInputPhone">Teléfono <span class="text-danger">*</span></label>
                                                        <input type="number" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="EJ: +5492234675858">
                                                    </div>
                                                </div>

                                        <div class="col-md-6 <col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="exampleFormControlInput2">Sitio Web</label>
                                            <input type="text" name="website" class="form-control" id="exampleFormControlInput2" placeholder="EJ: http://mardeltrabaja.com">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="exampleFormControlInput5">Experiencia <span class="text-secondary">(En su profesión)</span></label>
                                               <select name="experience" class="form-control" >
                                                    <option value="0"> Menos de 1 año</option>
                                                    <option value="1"> 1 Año</option>
                                                    <option value="2">2-3 Año/s</option>
                                                    <option value="4" >4-5 Año/s</option>
                                                    <option value="6" >6-7 Año/s</option>
                                                    <option value="10" >8-10 Año/s</option>
                                                    <option value="20" >10-20 Año/s</option>
                                                    <option value="30" >20-30 Año/s</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="exampleFormControlInput5">Edad</label>
                                                <input type="number" name="age" class="form-control" id="exampleFormControlInput5" placeholder="años">
                                                </div>
                                            </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="exampleFormControlInput7">Nivel de Profesion</label><br>
                                                <select name="level" class="form-control">
                                                    <option></option>
                                                    <option value="Bachillerato">Bachillerato</option>
                                                    <option value="Tecnicatura">Tecnicatura</option>
                                                    <option value="Carrera de Grado">Carreras de Grado</option>
                                                    <option value="Maestria">Maestria</option>
                                                    <option value="Doctorado">Doctorado</option>
                                                    <option value="Titulo en Curso">Título en Curso</option>
                                                    <option value="Titulo en Curso">Formación Profesional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                                <h4 class="fz18 mb20 mt-4">Información Territorial</h4>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="exampleFormControlInput9">Ciudad <span class="text-danger">*</span></label><br>
                                                    <select name="city" class="form-control">
                                                        <option value="Mar del Plata">Mar del Plata</option>
                                                        <option value="Miramar">Miramar</option>
                                                        <option value="Batán">Batán</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="myInput">Barrio - Zona <span class="text-danger">*</span></label><br>
                                                    <input class="form-control" autocomplete="off" spellcheck="false" name="zone" id="myInput" type="text" name="barrio" placeholder="Escriba el  Barrio">
                                                </div>
                                            </div>
                                        <div class="col-lg-12">
                                            <div class="my_resume_textarea mt20">
                                                 <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">
                                                    </textarea>
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                                <h4 class="fz18 mb20 mt-4">Horarios de atención <span class="text-secondary">al cliente</span></h4>
                                        </div>

                                        <div class="col-md-12 col-lg-12 mt-2">
                                            <div class="my_profile_input form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="lunesaviernescheckbox"  class="custom-control-input" id="lunesaviernescheckbox" >
                                                    <label class="custom-control-label" for="lunesaviernescheckbox"> Lunes a Viernes</label>
                                                </div>
                                                <div id="horariolunesaviernes" style="display: none;">
                                                    <div id="horalunesaviernes" class="form-group form-inline">
                                                    <input name="inhourlunesaviernes" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input style="width: auto;" name="outhourlunesaviernes" type="time" class="form-control ml-3 text-center">
                                                    </div>
                                                    <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                                    <div id="horalunesaviernes2" class="form-group form-inline">
                                                        <input name="inhourafterlunesaviernes" id="inhourafterlunesaviernes" style="width: auto;" disabled type="time" class="form-control mr-3 text-center"> - <input style="width: auto;" name="outhourafterlunesaviernes" id="outhourafterlunesaviernes" disabled type="time" class="form-control ml-3 text-center">
                                                    </div>
                                                    <div class="form-group form-inline">
                                                    <span id="btnagregarhorariolunesaviernes" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                                    <span id="btncancelarhorariolunesaviernes" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                                    </div>
                                                    <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                                </div>
                                            </div>
                                    </div>


                                    <div class="col-md-12 col-lg-12 mt-2">
                                        <div class="my_profile_input form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="lunesasabadocheckbox"  class="custom-control-input" id="lunesasabadocheckbox" >
                                                <label class="custom-control-label" for="lunesasabadocheckbox"> Lunes a Sábado</label>
                                            </div>
                                            <div id="horariolunesasabado" style="display: none;">
                                                <div id="horalunesasabado" class="form-group form-inline">
                                                <input name="inhourlunesasabado" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input style="width: auto;" name="outhourlunesasabado" type="time" class="form-control ml-3 text-center">
                                                </div>
                                                <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                                <div id="horalunesasabado2" class="form-group form-inline">
                                                    <input name="inhourafterlunesasabado" id="inhourafterlunesasabado" style="width: auto;" disabled type="time" class="form-control mr-3 text-center"> - <input style="width: auto;" name="outhourafterlunesasabado" id="outhourafterlunesasabado" disabled type="time" class="form-control ml-3 text-center">
                                                </div>
                                                <div class="form-group form-inline">
                                                <span id="btnagregarhorariolunesasabado" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                                <span id="btncancelarhorariolunesasabado" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                                </div>
                                                <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-12 col-lg-12 mt-2">
                                    <div class="my_profile_input form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="lunesadomingocheckbox"  class="custom-control-input" id="lunesadomingocheckbox" >
                                            <label class="custom-control-label" for="lunesadomingocheckbox"> Lunes a Domingo</label>
                                        </div>
                                        <div id="horariolunesadomingo" style="display: none;">
                                            <div id="horalunesadomingo" class="form-group form-inline">
                                            <input name="inhourlunesadomingo" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input style="width: auto;" name="outhourlunesadomingo" type="time" class="form-control ml-3 text-center">
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horalunesadomingo2" class="form-group form-inline">
                                                <input name="inhourafterlunesadomingo" id="inhourafterlunesadomingo" style="width: auto;" disabled type="time" class="form-control mr-3 text-center"> - <input style="width: auto;" name="outhourafterlunesadomingo" id="outhourafterlunesadomingo" disabled type="time" class="form-control ml-3 text-center">
                                            </div>
                                            <div class="form-group form-inline">
                                            <span id="btnagregarhorariolunesadomingo" style="font-size: 12px; font-style: italic" class="btn text-primary">Horario cortado</span>
                                            <span id="btncancelarhorariolunesadomingo" style="font-size: 12px; font-style: italic; display: none;" class="btn text-danger">Horario corrido</span>
                                            </div>
                                            <span class="text-danger" style="font-size: 12px; font-style: italic">Si trabajas de corrido sólo completá el primer horario</span>
                                        </div>
                                    </div>
                            </div>


                                         <!-- TODO LO QUE TENGA QUE VER CON EL LUNES -->
                                         <div class="col-lg-12" id="lunesaviernestexto">
                                            <h5 class="mb20 mt-4">Horarios personalizados <span class="text-secondary">para cargar de a un día.</span></h5>
                                         </div>

                            <div id="lunes" class="col-lg-12">
                                    <div class="form-check">
                                        <input name="islunes" type="checkbox" class="form-check-input" id="lunescheckbox">
                                        <label class="form-check-label" for="lunescheckbox">Lunes</label>
                                    </div>
                                    <div id="horariolunes" style="display: none;">
                                        <div id="horalunes" class="form-group form-inline">
                                        <input name="inhourlunes" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input style="width: auto;" name="outhourlunes" type="time" class="form-control ml-3 text-center">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horalunes2" class="form-group form-inline">
                                            <input name="inhourafterlunes" id="inhourafterlunes" style="width: auto;" disabled type="time" class="form-control mr-3 text-center"> - <input style="width: auto;" name="outhourafterlunes" id="outhourafterlunes" disabled type="time" class="form-control ml-3 text-center">
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
                                            <input name="ismartes" type="checkbox" class="form-check-input" id="martescheckbox">
                                            <label class="form-check-label" for="martescheckbox">martes</label>
                                        </div>
                                        <div id="horariomartes" style="display: none;">
                                            <div id="horamartes" class="form-group form-inline">
                                            <input name="inhourmartes" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input name="outhourmartes" type="time" class="form-control ml-3 text-center" style="width: auto;">
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horamartes2" class="form-group form-inline">
                                                <input name="inhouraftermartes" id="inhouraftermartes" disabled type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input style="width: auto;" name="outhouraftermartes" id="outhouraftermartes" disabled type="time" class="form-control ml-3 text-center">
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
                                            <input name="ismiercoles" type="checkbox" class="form-check-input" id="miercolescheckbox">
                                            <label class="form-check-label" for="miercolescheckbox">miercoles</label>
                                        </div>
                                        <div id="horariomiercoles" style="display: none;">
                                            <div id="horamiercoles" class="form-group form-inline">
                                            <input name="inhourmiercoles" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input name="outhourmiercoles" style="width: auto;" type="time" class="form-control ml-3 text-center">
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horamiercoles2" class="form-group form-inline">
                                                <input name="inhouraftermiercoles" id="inhouraftermiercoles" disabled type="time" style="width: auto;" class="form-control mr-3 text-center"> - <input name="outhouraftermiercoles" id="outhouraftermiercoles" disabled type="time" class="form-control ml-3 text-center" style="width: auto;">
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
                                            <input name="isjueves" type="checkbox" class="form-check-input" id="juevescheckbox">
                                            <label class="form-check-label" for="juevescheckbox">jueves</label>
                                        </div>
                                        <div id="horariojueves" style="display: none;">
                                            <div id="horajueves" class="form-group form-inline">
                                            <input name="inhourjueves" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input name="outhourjueves" type="time" class="form-control ml-3 text-center" style="width: auto;">
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horajueves2" class="form-group form-inline">
                                                <input name="inhourafterjueves" id="inhourafterjueves" disabled type="time" style="width: auto;" class="form-control mr-3 text-center"> - <input  style="width: auto;" name="outhourafterjueves" id="outhourafterjueves" disabled type="time" class="form-control ml-3 text-center">
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
                                            <input name="isviernes" type="checkbox" class="form-check-input" id="viernescheckbox">
                                            <label class="form-check-label" for="viernescheckbox">viernes</label>
                                        </div>
                                        <div id="horarioviernes" style="display: none;">
                                            <div id="horaviernes" class="form-group form-inline">
                                            <input name="inhourviernes" type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input name="outhourviernes" type="time" class="form-control ml-3 text-center" style="width: auto;">
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horaviernes2" class="form-group form-inline">
                                                <input name="inhourafterviernes" id="inhourafterviernes" disabled type="time" style="width: auto;" class="form-control mr-3 text-center"> - <input name="outhourafterviernes" style="width: auto;" id="outhourafterviernes" disabled type="time" class="form-control ml-3 text-center">
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
                                            <input name="issabado" type="checkbox" class="form-check-input" id="sabadocheckbox">
                                            <label class="form-check-label" for="sabadocheckbox">sabado</label>
                                        </div>
                                        <div id="horariosabado"style="display: none;">
                                            <div id="horasabado" class="form-group form-inline">
                                            <input name="inhoursabado" style="width: auto;" type="time" class="form-control mr-3 text-center"> - <input name="outhoursabado" type="time" class="form-control ml-3 text-center" style="width: auto;">
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horasabado2" class="form-group form-inline">
                                                <input name="inhouraftersabado" id="inhouraftersabado" disabled type="time" class="form-control mr-3 text-center" style="width: auto;"> - <input name="outhouraftersabado" style="width: auto;" id="outhouraftersabado" disabled type="time" class="form-control ml-3 text-center">
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
                                            <input name="isdomingo" type="checkbox" class="form-check-input" id="domingocheckbox">
                                            <label class="form-check-label" for="domingocheckbox">domingo</label>
                                        </div>
                                        <div id="horariodomingo" style="display: none;">
                                            <div id="horadomingo" class="form-group form-inline">
                                            <input name="inhourdomingo" type="time" class="form-control mr-3 text-center" style="width: auto;" > - <input name="outhourdomingo" type="time" class="form-control ml-3 text-center" style="width: auto;" >
                                            </div>
                                            <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                            <div id="horadomingo2" class="form-group form-inline">
                                                <input name="inhourafterdomingo" id="inhourafterdomingo" style="width: auto;" disabled type="time" class="form-control mr-3 text-center"> - <input name="outhourafterdomingo" style="width: auto;" id="outhourafterdomingo" disabled type="time" class="form-control ml-3 text-center">
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
                                            <h4>Métodos de Pago <span class="text-secondary">que le ofreces al cliente</span></h4>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" name="isEfective" class="custom-control-input" id="switch1">
                                                            <label class="custom-control-label" for="switch1"><span style="height: 25px;" class="payment"><img src="img/credit-card/moneysi.png" height="40px;"></span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" name="isVisa" class="custom-control-input" id="switch2">
                                                            <label class="custom-control-label" for="switch2"> <span style="height: 25px;" class="payment"><img src="img/credit-card/visa.png" height="40px;"/></span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                            <div class="custom-control custom-switch mt-1">
                                                                <input type="checkbox" name="isMercadoPago" class="custom-control-input" id="switch3">
                                                                <label class="custom-control-label" for="switch3"> <span style="height: 25px;" class="payment"><img src="img/credit-card/mercado.png" height="40px"/></span></label>
                                                            </div>
                                                        </div>
                                                    <div class="col-4">
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" name="isMasterCard" class="custom-control-input" id="switch4">
                                                            <label class="custom-control-label" for="switch4"> <span style="height: 25px;" class="payment"><img src="img/credit-card/mastercard.png" height="40px"></span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="col-lg-12" style="margin-bottom: 15px;">
                                            <h4 class="fz18 mb20 mt-4">Redes Sociales</h4>
                                            <p>El ID de su respectiva cuenta es el texto que se encuentra luego de la dirección de su navegador. Por Ejemplo si cuando ingresa a su perfil de Facebook la URL es: https://facebook.com/ricardoalberto la <strong>URL</strong> es https://facebook.com y su <strong>ID</strong> es <strong>ricardoalberto</strong>.</p>
<br>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                  <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput8"><img src="img/facebookej.png"></label>
                                                    <input type="text" name="facebook" class="form-control" id="formGroupExampleInput8"  placeholder="Ej: mardeltrabaja" pattern="[A-Za-z0-9]+">
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                  <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput8"><img src="img/twitterej.png"></label>
                                                    <input type="text" name="twitter" class="form-control" id="formGroupExampleInput2" placeholder="Ej: mardeltrabaja" pattern="[A-Za-z0-9]+">
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput8"><img src="img/linkedinej.png"></label>
                                                    <input type="text" name="linkedin" class="form-control" id="formGroupExampleInput3" placeholder="Ej: mardeltrabaja" pattern="[A-Za-z0-9]+">
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput8"><img src="img/instagramej.png"></label>
                                                    <input type="text" name="instagram" class="form-control" id="formGroupExampleInput4" placeholder="Ej: mardeltrabaja" pattern="[A-Za-z0-9]+" >
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 mt-2">
                                                <div class="my_profile_input form-group text-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required oninvalid="this.setCustomValidity('Debes aceptar los términos y condiciones de Mardeltrabaja.com')"
                                                        oninput="this.setCustomValidity('')">
                                                        <label class="custom-control-label" for="customCheck1">Acepto los <strong><a href="/legales/terms">Términos y Condiciones de Mardeltrabaja.com</a></strong></label>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-2">
                                                    <button type="submit" style="font-size: 14px;font-weight: bold;color: #1886fc;border:none;background: none;font-family: 'roboto', sans-serif">
                                                        CONFIRMAR REGISTRO
                                                    </button>
                                                    <a href="/" style="margin-left: 40px; font-size: 14px;font-weight: bold;color: red;border:none;background: none;font-family: 'roboto', sans-serif">
                                                            CANCELAR
                                                    </a>
                                            </div>
                                        </form>
                                    </div>

                </div>
            </div>
        </div>
</div>
</div>


<script>
    var countries = ["9 de Julio","Aeropuerto","Aeroparque","Alfar","Ameghino","Antártida Argentina","Barrio 180","Lomas del Golf","Bernardino Rivadavia","Belgrano","Belisario Roldán","Bosque Alegre","Bosque Peralta Ramos","Caisamar","Centenario","Cerrito","Cerrito Sur","Cerrito San Salvador","Colina Alegre","Constitución","Coronel Dorrego","Costa Azul","Don Bosco","Don Emilio","Dorrego","El Grosellar","El Martillo","El Progreso","Estrada","Etchepare","Faro","Juramento","Las Américas","Las Avenidas","Colinas de Peralta Ramos","Las Heras","La Florida","La Perla","La Zulema","Libertad","Los Acantilados","Los Pinares","Los Troncos","Malvinas Argentinas","Newbery","Nueva Pompeya","Montemar","Parque Hermoso","Parque La Florida","Parque Luro","Parque Palermo","Parque Peña","Peralta Ramos Oeste","Pinos de Anchorena","Chapadmalal","Playa Grande","Punta Mogotes","San Antonio","San Carlos","San Eduardo","San Geronimo","San Jacinto","San José","San Patricio","San Salvador","Santa Mónica","Sarmiento","Stella Maris","Jardín Stella Maris","Jardín","Alfar","Nuevo Golf","Zacagnini"];
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>

                    $(document).ready(function(){

                        $("#btnprofesional").click(function () {
                            $('#registroOpciones').hide('slow');
                            $('#registroProfesional').show('slow');
                        });

                        $("#btnusuario").click(function () {
                            $('#registroOpciones').hide('slow');
                            $('#registroUsuario').show('slow');
                        });

                        $("#btncancelregistroprofesional").click(function () {
                            $('#registroOpciones').show('slow');
                            $('#registroProfesional').hide('slow');
                        });
                        $("#btncancelregistrousuario").click(function () {
                            $('#registroOpciones').show('slow');
                            $('#registroUsuario').hide('slow');
                        });


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


                        /////////

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
                            $('#container-job2').show('slow');
                        });
                        $('#btn-hide-job2').click(function(){
                            $('#container-job2').hide('slow');
                            $('#btn-show-job2').show('slow');
                            $('#container-job3').hide('slow');
                        });
                        $('#btn-show-job3').click(function(){
                            $('#container-job3').show('slow');
                        });
                        $('#btn-hide-job3').click(function(){
                            $('#container-job3').hide('slow');
                        });




            //TODO ESTO TIENE QUE VER CON EL LUNES NADA MAS LA PUTA MADRE QUE ME PARIO ES UNA BANDA DE CODIGO ESTA MAL HECHO

                  //Lunes a Sabado checkbox
                  $('#lunesasabadocheckbox').change(function(){
                    if($('#lunesasabadocheckbox').is(':checked')){
                        $('#horariolunesasabado').show('slow');
                        $('#lunes').hide('slow');
                        $('#martes').hide('slow');
                        $('#miercoles').hide('slow');
                        $('#jueves').hide('slow');
                        $('#viernes').hide('slow');
                        $('#sabado').hide('slow');
                        $('#domingo').hide('slow');
                        $('#lunesaviernestexto').hide('slow');
                        $("#lunesaviernescheckbox").prop("checked", false);
                        $("#lunesadomingocheckbox").prop("checked", false);
                        $("#horariolunesaviernes").hide("slow");
                        $("#horariolunesadomingo").hide("slow");
                    }else{
                        $('#horariolunesasabado').hide('slow');
                        $('#lunes').show('slow');
                        $('#martes').show('slow');
                        $('#miercoles').show('slow');
                        $('#jueves').show('slow');
                        $('#viernes').show('slow');
                        $('#sabado').show('slow');
                        $('#domingo').show('slow');
                        $('#lunesaviernestexto').show('slow');
                    }
                });

                //Lunes a Sabado Agregar Horario
                $('#btnagregarhorariolunesasabado').click(function(){
                    $('#inhourafterlunesasabado').prop('disabled', false);
                    $('#outhourafterlunesasabado').prop('disabled', false);
                    $('#btnagregarhorariolunesasabado').hide('slow');
                    $('#btncancelarhorariolunesasabado').show('slow');
                });


                   //Lunes a Domingo checkbox
                   $('#lunesadomingocheckbox').change(function(){
                    if($('#lunesadomingocheckbox').is(':checked')){
                        $('#horariolunesadomingo').show('slow');
                        $('#lunes').hide('slow');
                        $('#martes').hide('slow');
                        $('#miercoles').hide('slow');
                        $('#jueves').hide('slow');
                        $('#viernes').hide('slow');
                        $('#sabado').hide('slow');
                        $('#domingo').hide('slow');
                        $('#lunesaviernestexto').hide('slow');
                        $("#lunesaviernescheckbox").prop("checked", false);
                        $("#lunesasabadocheckbox").prop("checked", false);
                        $("#horariolunesaviernes").hide("slow");
                        $("#horariolunesasabado").hide("slow");
                    }else{
                        $('#horariolunesadomingo').hide('slow');
                        $('#lunes').show('slow');
                        $('#martes').show('slow');
                        $('#miercoles').show('slow');
                        $('#jueves').show('slow');
                        $('#viernes').show('slow');
                        $('#sabado').show('slow');
                        $('#domingo').show('slow');
                        $('#lunesaviernestexto').show('slow');
                    }
                });

                //Lunes a Domingo Agregar Horario
                $('#btnagregarhorariolunesadomingo').click(function(){
                    $('#inhourafterlunesadomingo').prop('disabled', false);
                    $('#outhourafterlunesadomingo').prop('disabled', false);
                    $('#btnagregarhorariolunesadomingo').hide('slow');
                    $('#btncancelarhorariolunesadomingo').show('slow');
                });





                 //Lunes a Viernes checkbox
                 $('#lunesaviernescheckbox').change(function(){
                    if($('#lunesaviernescheckbox').is(':checked')){
                        $('#horariolunesaviernes').show('slow');
                        $('#lunes').hide('slow');
                        $('#martes').hide('slow');
                        $('#miercoles').hide('slow');
                        $('#jueves').hide('slow');
                        $('#viernes').hide('slow');
                        $('#sabado').hide('slow');
                        $('#domingo').hide('slow');
                        $('#lunesaviernestexto').hide('slow');
                        $("#lunesasabadocheckbox").prop("checked", false);
                        $("#lunesadomingocheckbox").prop("checked", false);
                        $("#horariolunesasabado").hide("slow");
                        $("#horariolunesadomingo").hide("slow");
                    }else{
                        $('#horariolunesaviernes').hide('slow');
                        $('#lunes').show('slow');
                        $('#martes').show('slow');
                        $('#miercoles').show('slow');
                        $('#jueves').show('slow');
                        $('#viernes').show('slow');
                        $('#sabado').show('slow');
                        $('#domingo').show('slow');
                        $('#lunesaviernestexto').show('slow');
                    }
                });

                //Lunes a Viernes Agregar Horario
                $('#btnagregarhorariolunesaviernes').click(function(){
                    $('#inhourafterlunesaviernes').prop('disabled', false);
                    $('#outhourafterlunesaviernes').prop('disabled', false);
                    $('#btnagregarhorariolunesaviernes').hide('slow');
                    $('#btncancelarhorariolunesaviernes').show('slow');
                });

                $('#btncancelarhorariolunesaviernes').click(function(){
                    $('#inhourafterlunesaviernes').prop('disabled', true);
                    $('#outhourafterlunesaviernes').prop('disabled', true);
                    $('#inhourafterlunesaviernes').val("");
                    $('#outhourafterlunesaviernes').val("");
                    $('#btncancelarhorariolunesaviernes').hide('slow');
                    $('#btnagregarhorariolunesaviernes').show('slow');
                });

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
