@extends('layouts.app')

@section('content')
<div class="preloader"></div>

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

</style>

<section class="our-dashbord dashbord" style="background: #ffffff">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
					<div id="user_profile" class="user_profile">
						<div class="media" id="contenedor-img">
						<div id="img-contenedor">
                        <img id="img-perfil-panel" src="img-perfil/{{ Auth::user()->img }}" class="align-self-start mr-3 rounded-circle" alt="8.jpg">
						</div>
						  	<div class="media-body">
						    	<h5 class="mt-0" style="font-size: 13px;">{{ Auth::user()->name }}</h5>
                                @if(Auth::user()->rol == 'profesional')
                                <p style="font-size: 11px;color: #949494;"><img style="width: 16px;" src="icons/location.png">{{ Auth::user()->zone}} </p>
                                       <p style="font-style: italic;font-size: 13px;"><img src="icons/profesion.png" style="width:16px;"> {{ Auth::user()->job }}</p>
                                @else
                                    <p style="font-style: italic;font-size: 13px;"> Usuario MDP </p>
                                @endif
                            </div>
                        </div>
                        <div id="showUpdateImg" style="font-size: 11px;" class="text-secondary">Editar imagen</div>
                        <form id="formUpdateImg" style="display:none;margin-top:5px;" method="POST" action="{{ route('User.updateImg') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            <input data-multiple-caption="{count} files selected" multiple id="file" type="file" name="img-perfil" class="inputfile">
                            <label id="labelImg" style="font-size:11px;" class="text-secondary" for="file">Elegir archivo</label>
                            <button style="font-size:12px;" type="submit" class="btn b">Guardar</button>
                            <label style="font-size:12px;" id="cancelUpdateImg" class="text-danger font-weight-bold">Cancelar</label>
                      </form>
					</div>
					<div class="dashbord_nav_list">
						<ul>
							<li class="active">
                                <a href="page-candidates-profile.html"><img src="icons/perfil.png" class="mr-1" /> Información</a>
                            </li>
                            <li>
                                <a href="/contraseña"><img src="icons/password.png" class="mr-1" /> Cambiar Contraseña</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                <img src="icons/logout.png" class="mr-1" /> Cerrar Sesion</a>
                            </li>
							<li>
                                <a href="#" class="text-danger font-weight-bold"><img src="icons/delete.png" class="mr-1" /> Eliminar Perfil</a>
                            </li>
						</ul>
                    </div>
                    @if(Auth::user()->rol == 'profesional')
					<div class="skill_sidebar_widget" id="bar-mobile">
						<h4>Perfil Completado un <span class="float-right font-weight-bold">85%</span></h4>
						<p>Mandá tu perfil a verficicación para aumentar un 15%</p>
				        <ul class="skills">
				            <div class="sonny_progressbar animate" data-width="85"><p class="title"></p><div class="bar-container " style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar loader" style="width:85%;background-color:#CCC;"></span><span class="bar" style="background-color:#79b530;"></span></div></div>
				        </ul>
                    </div>
                    @endif
				</div>
				<div class="col-sm-12 col-lg-8 col-xl-9">
					<div class="my_profile_form_area">
                            <form action="{{route('User.edit')}}" method="GET">
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
						    <div class="row">
							    <div class="col-lg-12">
                                    <h4 class="fz20 mb20">Mis datos</h4>
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
                                    <input type="email" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="{{Auth::user()->phone}}">
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
                                        <label for="formGroupExampleInput2">Profesion <img id="unselected" style="display:none;" src="icons/alert.png"><img id="selected" style="display:none;" src="icons/check.png"></label>
                                        <select id="subcategory" name="subcategory_id" class="form-control">
                                            @if(Auth::user()->job)
                                                <option value="{{ Auth::user()->job }}">{{ Auth::user()->job }}</option>
                                            @endif
                                        </select>
                                        <input type="text" name="subcategory_id" class="form-control" id="otrosServicios" minlength=6 placeholder="Nombrá tu profesión..." style="display: none;" >
                                    </div>
                                </div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleInputPhone">WhatsApp</label>
                                        <input type="email" name="whatsapp"  class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" @if(Auth::user()->whatsapp)placeholder="{{Auth::user()->whatsapp}}"@else placeholder="Ejemplo: 2235646567"@endif>
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
                                    <label for="exampleFormControlInput5">Experience</label>
                                   <select name="experience" class="form-control" >
                                        <option value="{{Auth::user()->experience}}">{{Auth::user()->experience}} Año/s</option>
										<option value="2">2-3 Año/s</option>
										<option value="4" >4-5 Año/s</option>
										<option value="6" >6-7 Año/s</option>
										<option value="10" >8-10 Año/s</option>
										<option value="1">None</option>
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
										<div class="col-md-2">
                                    		<div class="custom-control custom-switch mt-1">
                                        		<input type="checkbox" name="isEfective" class="custom-control-input" id="switch1" @if(Auth::user()->isEfective) checked @endif>
                                        		<label class="custom-control-label" for="switch1"><span style="height: 25px;" class="payment">Efectivo</span></label>
											</div>
										</div>
										<div class="col-md-2">
											<div class="custom-control custom-switch mt-1">
												<input type="checkbox" name="isVisa" class="custom-control-input" id="switch2" @if(Auth::user()->isVisa) checked @endif>
												<label class="custom-control-label" for="switch2"> <span style="height: 25px;" class="payment"><img src="img/credit-card/visa.png" /></span></label>
											</div>
										</div>
										<div class="col-md-2">
												<div class="custom-control custom-switch mt-1">
													<input type="checkbox" name="isMercadoPago" class="custom-control-input" id="switch3" @if(Auth::user()->isMercadoPago) checked @endif>
													<label class="custom-control-label" for="switch3"> <span style="height: 25px;" class="payment"><img src="img/credit-card/mercado.png"/></span></label>
												</div>
											</div>
										<div class="col-md-2">
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
                                        <label class="form-check-label" for="martescheckbox">martes</label>
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
                                        <label class="form-check-label" for="miercolescheckbox">miercoles</label>
                                    </div>
                                    <div id="horariomiercoles" @if(!Auth::user()->inhourmiercoles) style="display: none;" @endif>
                                        <div id="horamiercoles" class="form-group form-inline">
                                        <input name="inhourmiercoles" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourmiercoles}}"> - <input name="outhourmiercoles" style="width: auto;" type="time" class="form-control ml-3 text-center" value="{{Auth::user()->outhourmiercoles}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horamiercoles2" class="form-group form-inline">
                                            <input name="inhouraftermiercoles" id="inhouraftermiercoles" @if(Auth::user()->inhouraftermiercoles) style="width: auto;" value="{{Auth::user()->inhouraftermiercoles}}" @else disabled @endif type="time" style="width: auto;" class="form-control mr-3 text-center"> - <input name="outhouraftermiercoles" id="outhouraftermiercoles" @if(Auth::user()->outhouraftermiercoles) value="{{Auth::user()->outhouraftermiercoles}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
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
                                        <label class="form-check-label" for="juevescheckbox">jueves</label>
                                    </div>
                                    <div id="horariojueves" @if(!Auth::user()->inhourjueves) style="display: none;" @endif>
                                        <div id="horajueves" class="form-group form-inline">
                                        <input name="inhourjueves" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourjueves}}"> - <input name="outhourjueves" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourjueves}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horajueves2" class="form-group form-inline">
                                            <input name="inhourafterjueves" id="inhourafterjueves" @if(Auth::user()->inhourafterjueves) style="width: auto;" value="{{Auth::user()->inhourafterjueves}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input  style="width: auto;" name="outhourafterjueves" id="outhourafterjueves" @if(Auth::user()->outhourafterjueves) value="{{Auth::user()->outhourafterjueves}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
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
                                        <label class="form-check-label" for="viernescheckbox">viernes</label>
                                    </div>
                                    <div id="horarioviernes" @if(!Auth::user()->inhourviernes) style="display: none;" @endif>
                                        <div id="horaviernes" class="form-group form-inline">
                                        <input name="inhourviernes" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourviernes}}"> - <input name="outhourviernes" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourviernes}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horaviernes2" class="form-group form-inline">
                                            <input name="inhourafterviernes" id="inhourafterviernes" @if(Auth::user()->inhourafterviernes) style="width: auto;" value="{{Auth::user()->inhourafterviernes}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input name="outhourafterviernes" style="width: auto;" id="outhourafterviernes" @if(Auth::user()->outhourafterviernes) value="{{Auth::user()->outhourafterviernes}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
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
                                        <label class="form-check-label" for="sabadocheckbox">sabado</label>
                                    </div>
                                    <div id="horariosabado" @if(!Auth::user()->inhoursabado) style="display: none;" @endif>
                                        <div id="horasabado" class="form-group form-inline">
                                        <input name="inhoursabado" style="width: auto;" type="time" class="form-control mr-3 text-center" value="{{Auth::user()->inhoursabado}}"> - <input name="outhoursabado" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhoursabado}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horasabado2" class="form-group form-inline">
                                            <input name="inhouraftersabado" id="inhouraftersabado" @if(Auth::user()->inhouraftersabado) style="width: auto;" value="{{Auth::user()->inhouraftersabado}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input name="outhouraftersabado" style="width: auto;" id="outhouraftersabado" @if(Auth::user()->outhouraftersabado) value="{{Auth::user()->outhouraftersabado}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
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
                                        <label class="form-check-label" for="domingocheckbox">domingo</label>
                                    </div>
                                    <div id="horariodomingo" @if(!Auth::user()->inhourdomingo) style="display: none;" @endif>
                                        <div id="horadomingo" class="form-group form-inline">
                                        <input name="inhourdomingo" type="time" class="form-control mr-3 text-center" style="width: auto;" value="{{Auth::user()->inhourdomingo}}"> - <input name="outhourdomingo" type="time" class="form-control ml-3 text-center" style="width: auto;" value="{{Auth::user()->outhourdomingo}}">
                                        </div>
                                        <div class="badge badge-warning">El siguiente horario es por si haces horario cortado. </div>
                                        <div id="horadomingo2" class="form-group form-inline">
                                            <input name="inhourafterdomingo" id="inhourafterdomingo" @if(Auth::user()->inhourafterdomingo) style="width: auto;" value="{{Auth::user()->inhourafterdomingo}}" @else disabled @endif type="time" class="form-control mr-3 text-center"> - <input name="outhourafterdomingo" style="width: auto;" id="outhourafterdomingo" @if(Auth::user()->outhourafterdomingo) value="{{Auth::user()->outhourafterdomingo}}" @else disabled @endif type="time" class="form-control ml-3 text-center">
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
							    		<label for="formGroupExampleInput1">Facebook</label>
							    		<input type="text" name="facebook" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->facebook) placeholder="{{Auth::user()->facebook}}" @else placeholder="Ej: http://facebook.com/mdpwork" @endif>
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
							      	<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Twitter</label>
							    		<input type="text" name="twitter" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->twitter) placeholder="{{Auth::user()->twitter}}" @else placeholder="Ej: http://twitter.com/mdpwork" @endif>
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    		<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Linkedin</label>
							    		<input type="text" name="linkedin" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->linkedin) placeholder="{{Auth::user()->linkedin}}" @else placeholder="Ej: http://linkedin.com/mdpwork"@endif>
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    		<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Instagram</label>
							    		<input type="text" name="instagram" class="form-control" id="formGroupExampleInput1" @if(Auth::user()->instagram) placeholder="{{Auth::user()->instagram}}" @else placeholder="Ej: http://instagram.com/mdpwork"@endif>
									</div>
                            </div>
                            @endif
                            <div class="col-lg-4">
                                    <div class="form-inline mt-2">
                                        <input type="submit" class="btn btn-lg btn-info mr-2" value="Guardar Cambios" />
                                        <a class="btn btn-lg btn-danger bg-danger" href="#">Cancelar</a>
                                    </div>
                            </div>

                        </form>
						</div>
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

                $("#file").change(function () {
                    $('#img-perfil-panel').hide();
                    filePreview(this);
                    $('#labelImg').hide('slow');
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
