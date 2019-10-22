@extends('layouts.app')

@section('content')
<div class="preloader"></div>

<section class="our-dashbord dashbord" style="background: #ffffff">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">
					<div class="user_profile">
						<div class="media">
						  	<img src="img/logo.png" class="align-self-start mr-3 rounded-circle" alt="8.jpg">
						  	<div class="media-body">
						    	<h5 class="mt-0" style="font-size: 13px;">Hi, Juan Pablo Garcia</h5>
						    	<p style="font-size: 10px">Lomas del Golf, Mar del Plata</p>
							</div>
						</div>
					</div>
					<div class="dashbord_nav_list">
						<ul>
							<li class="active"><a href="page-candidates-profile.html"><span class="flaticon-profile"></span> Información</a></li>
							<li><a href="page-candidates-change-password.html"><span class="flaticon-locked"></span> Cambiar Contraseña</a></li>
							<li><a href="page-log-reg.html"><span class="flaticon-logout"></span> Cerrar Sesion</a></li>
							<li><a href="#" class="text-danger font-weight-bold"><span class="flaticon-rubbish-bin"></span> Eliminar Perfil</a></li>
						</ul>
					</div>
					<div class="skill_sidebar_widget">
						<h4>Perfil Completado un <span class="float-right font-weight-bold">85%</span></h4>
						<p>Mandá tu perfil a verficicación para aumentar un 15%</p>
				        <ul class="skills">
				            <div class="sonny_progressbar animate" data-width="85"><p class="title"></p><div class="bar-container " style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar loader" style="width:85%;background-color:#CCC;"></span><span class="bar" style="background-color:#79b530;"></span></div></div>
				        </ul>
					</div>
				</div>
				<div class="col-sm-12 col-lg-8 col-xl-9">
					<div class="my_profile_form_area">
						<div class="row">
							<div class="col-lg-12">
								<h4 class="fz20 mb20">Mi Perfil</h4>
							</div>
							<div class="col-lg-12">
								<div class="my_profile_thumb_edit"></div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput1">Nombre Completo</label>
							    	<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Martha Griffin">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="formGroupExampleInput2">Profesion</label>
							    	<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="UX/UI Desginer">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleInputPhone">Teléfono</label>
							    	<input type="email" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="+90 587 658 96 32">
								</div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleInputPhone">WhatsApp</label>
                                        <input type="email" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="+90 587 658 96 32">
                                    </div>
                                </div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput1">Email</label>
							    	<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput2">Sitio Web</label>
							    	<input type="email" class="form-control" id="exampleFormControlInput2" placeholder="www.careerup.com">
								</div>
							</div>

							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput5">Experience</label><br>
							    	<div class="dropdown bootstrap-select"><select class="selectpicker" tabindex="-98">
										<option>4-6 Years</option>
										<option>4-5 Years</option>
										<option>3-4 Years</option>
										<option>2-3 Years</option>
										<option>0-1 Years</option>
										<option>None</option>
									</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="4-6 Years"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">4-6 Years</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput6">Fecha de Nacimiento</label><br>
							    	<div class="dropdown bootstrap-select"><select class="selectpicker" tabindex="-98">
										<option>04.01.1991</option>
										<option>04.01.1991</option>
										<option>04.01.1991</option>
										<option>04.01.1991</option>
										<option>04.01.1991</option>
										<option>04.01.1991</option>
									</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="04.01.1991"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">04.01.1991</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput7">Nivel de Profesion</label><br>
							    	<div class="dropdown bootstrap-select"><select class="selectpicker" tabindex="-98">
										<option>Certificate</option>
										<option>Masters In Fine Arts</option>
										<option>Bachlors in Fine Arts</option>
										<option>Diploma In Fine Arts</option>
									</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Certificate"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Certificate</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>

							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput2">Métodos de Pago</label><br>
							    	<div class="dropdown bootstrap-select show-tick"><select class="selectpicker" multiple="" data-actions-box="true" tabindex="-98">
										<option>Banking</option>
										<option>Digital&amp;Creative</option>
										<option>Retail</option>
										<option>Business</option>
									</select><button type="button" class="btn dropdown-toggle bs-placeholder btn-light" data-toggle="dropdown" role="button" title="Nothing selected"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn btn-light">Select All</button><button type="button" class="actions-btn bs-deselect-all btn btn-light">Deselect All</button></div></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput2">Allow In Search &amp; Listing</label><br>
							    	<div class="dropdown bootstrap-select"><select class="selectpicker" tabindex="-98">
										<option>Yes</option>
										<option>No</option>
									</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Yes"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Yes</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="my_resume_textarea mt20">
									 <div class="form-group">
									    <label for="exampleFormControlTextarea1">Descripción</label>
									    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9">Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present
									    </textarea>
									  </div>
								</div>
							</div>
							<div class="col-lg-12">
								<h4 class="fz18 mb20">Redes Sociales</h4>
							</div>
						    <div class="col-md-6 col-lg-6">
							      	<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Facebook</label>
							    		<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
							      	<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Twitter</label>
							    		<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    		<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Linkedin</label>
							    		<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
									</div>
						    </div>
						    <div class="col-md-6 col-lg-6">
						    		<div class="my_profile_input form-group">
							    		<label for="formGroupExampleInput1">Instagram</label>
							    		<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="#">
									</div>
						    </div>
							<div class="col-lg-12">
								<h4 class="fz18 mb20">Información Territorial</h4>
							</div>
						    <div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput9">Ciudad</label><br>
							    	<div class="dropdown bootstrap-select"><select class="selectpicker" tabindex="-98">
										<option>United Kingdom</option>
										<option>United State</option>
										<option>Ukraine</option>
										<option>Uruguay</option>
										<option>UK</option>
										<option>Uzbekistan</option>
										<option>Uganda</option>
									</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="United Kingdom"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">United Kingdom</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>
						    <div class="col-md-6 col-lg-6">
								<div class="my_profile_select_box form-group">
							    	<label for="exampleFormControlInput9">Barrio - Zona</label><br>
							    	<div class="dropdown bootstrap-select"><select class="selectpicker" tabindex="-98">
										<option>London</option>
										<option>Manchester</option>
										<option>Birmingham</option>
										<option>Liverpool England</option>
										<option>Bristol</option>
										<option>City of London</option>
										<option>Leeds</option>
									</select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="London"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">London</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="my_profile_input">
									<a class="btn btn-lg btn-thm" href="#">Save Changes</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
