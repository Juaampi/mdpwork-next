@extends('layouts.app')

@section('content')
<div class="wrapper">
	<div class="preloader"></div>
	<!-- Modal -->
	<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="#">
								<div class="heading">
									<h3 class="text-center">Quick Login</h3>
									<p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Remember me</label>
									<a class="tdu text-thm float-right" href="#">Forgot Password?</a>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Login</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Create New Account</h3>
								<p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
							</div>
							<form action="#">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="User Name">
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
								</div>
								<div class="form-group">
							    	<input type="number" class="form-control" id="exampleInputPhone1" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<select id="inputState1" class="form-control">
								        <option selected>Select Sector</option>
								        <option>Web Developer</option>
								        <option>Ui/Ux Designer</option>
								        <option>Photoeditor</option>
								        <option>Graphics Designer</option>
								    </select>
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck2">
									<label class="form-check-label" for="exampleCheck2">By Registering You Confirm That You Accept <a class="text-thm" href="page-terms-and-policies.html">Terms & Conditions</a> And <a class="text-thm" href="page-terms-and-policies.html">Privacy Policy</a></label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-dark">Register</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  	</div>
	</div>

	<!-- Home Design -->
	<section class="home-one style2 bgc-lightgray">
		<div class="container">
			<div class="row home-content text-center">
				<div class="col-lg-12">
					<div class="find-cand-sec">
						<div class="mockup-top"><img class="animute" src="images/home/home2_bg.png" alt="" /></div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="home-text">
                        <h3 class="title-mdpwork">MDP WORK</h3>
						<h2 class="fz40">Encontrá el profesional que necesitas!</h2>
						<p>Cada mes, miles de personas resuelven sus problemas cotidianos utilizando el buscador de <strong>MDP WORK®</strong>. ¿Vos cómo vas a encontrar tu solución?</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="home-job-search-box mt20 mb20">
						<form class="form-inline">
							<div class="search_option_one">
							    <div class="form-group">
							    	<label for="exampleInputName"><img src="icons/search-icon.png"></label>
							    	<input type="text" class="form-control h70" id="exampleInputName" placeholder="Escribe lo que buscas.. EJ:Carpintero, electricista">
							    </div>
							</div>
							<div class="search_option_two">
							    <div class="form-group">
							    	<label for="exampleInputEmail"><img src="icons/location.png"/></label>
							    	<input type="text" class="form-control h70" id="exampleInputEmail" placeholder="Busca por zona">
							    </div>
							</div>
							<div class="search_option_button">
							    <button type="submit" class="btn btn-thm btn-secondary h70">Buscar</button>
							</div>
						</form>
					</div>
					<p><span class="color-black22"><strong>Más buscados:</strong></span> Electricista,  Albañil,  Desarrollador Web,  Dentista,  Maquillaje,  Uñas,  Paseador de perros</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Popular Job Categories -->
	<section class="popular-job bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="ulockd-main-title">
						<h3 class="mt0">Categorías Populares</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg1">
						<div class="overlay">
							<div class="icon"><img src="img/construccion.png" /></div>
							<div class="details">
								<h5>Hogar y Construcción</h5>
								<p><strong>22</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg2">
						<div class="overlay">
							<div class="icon"><img src="img/mecanico.png" /></div>
							<div class="details">
								<h5>Mantenimiento de Vehículos</h5>
								<p><strong>60</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg3">
						<div class="overlay">
							<div class="icon"><img src="img/nail.png" /></div>
							<div class="details">
								<h5>Belleza y Cuidado Personal</h5>
								<p><strong>24</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg4">
						<div class="overlay">
							<div class="icon"><img src="img/fotografia.png" /></span></div>
							<div class="details">
								<h5>Fotografía, música y cine</h5>
								<p><strong>17</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg5">
						<div class="overlay">
							<div class="icon"><img src="img/medicina.png" /></div>
							<div class="details">
								<h5>Medicina y Salud</h5>
								<p><strong>60</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg6">
						<div class="overlay">
							<div class="icon"><img src="img/fiesta.png" /></div>
							<div class="details">
								<h5>Fiestas y Eventos</h5>
								<p><strong>22</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg7">
						<div class="overlay">
							<div class="icon"><img src="img/oficina.png" /></div>
							<div class="details">
								<h5>Servicios de Oficina</h5>
								<p><strong>5</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg8">
						<div class="overlay">
							<div class="icon"><img src="img/contable.png" /></div>
							<div class="details">
								<h5>Asesoramiento Contable y Legal</h5>
								<p><strong>10</strong> Profesionales</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-6 offset-lg-3">
					<div class="pjc_all_btn text-center">
						<a class="btn btn-thm" href="#">Ver todas las categorías</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Features Job List Design -->
	<section class="popular-job bgc-lightgray pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Últimos profesionales agregados</h3>
						<a class="text-thm float-right" href="#">Ver todos<i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-lg-12">
					<div class="fj_post">
						<div class="details">
							<h5 class="job_chedule text-thm mt0"><strong>Disponible</strong></h5>
							<div class="thumb fn-smd">
								<img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
							</div>
							<h4>Ricardo Alfredo Rodriguez</h4>
                            <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                            <p class="font-style-italic" ><a href="#"><strong>Electricista </strong> - <span style="font-style: italic">Cierra en <span style="color: #e44d4d"><strong>01:27hs</strong></span></span></a></p>

                        </div>
                        <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Ver</a>
					</div>
                </div>
                <div class="col-sm-12 col-lg-12">
                        <div class="fj_post">
                            <div class="details">
                                <h5 class="job_chedule mt0"  style="color:#e44d4d;"><strong>No Disponible</strong></h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
                                </div>
                                <h4>Juan pablo Garcia</h4>
                                <p class="font-style-italic"><img src="icons/location.png" /> Centro, Mar del Plata</p>
                                <p class="font-style-italic" ><a  style="color:#e44d4d;" href="#"><strong>Peluquero</strong></a></p>

                            </div>
                            <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                        </div>
                    </div>
				<div class="col-sm-12 col-lg-12">
                        <div class="fj_post">
                            <div class="details">
                                <h5 class="job_chedule text-thm mt0"><strong>Disponible</strong></h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
                                </div>
                                <h4>Ricardo Alfredo Rodriguez</h4>
                                <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                                <p class="font-style-italic" ><a  style="color:#e44d4d;" href="#"><strong>Electricista</strong></a></p>

                            </div>
                            <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                        </div>
                    </div>

                        <div class="col-sm-12 col-lg-12">
                                <div class="fj_post">
                                    <div class="details">
                                        <h5 class="job_chedule text-thm mt0"><strong>Disponible</strong></h5>
                                        <div class="thumb fn-smd">
                                            <img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
                                        </div>
                                        <h4>Ricardo Alfredo Rodriguez</h4>
                                        <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                                        <p class="font-style-italic" ><a  style="color:#e44d4d;" href="#"><strong>Electricista</strong></a></p>

                                    </div>
                                    <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
                                </div>
                        </div>
			</div>
		</div>
	</section>

	<!-- Browse Local Jobs -->
	<section class="job-location pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Browse Local Jobs</h3>
						<a class="text-thm float-right" href="#">Browse All Local Jobs <i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/9.jpg" alt="9.jpg"></div>
						<div class="details">
							<h4>London</h4>
							<h5>152,141</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/10.jpg" alt="10.jpg"></div>
						<div class="details">
							<h4>Manchester</h4>
							<h5>586,478</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/11.jpg" alt="11.jpg"></div>
						<div class="details">
							<h4>Liverpool</h4>
							<h5>15,258</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/12.jpg" alt="12.jpg"></div>
						<div class="details">
							<h4>Istanbul</h4>
							<h5>152,141</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/13.jpg" alt="13.jpg"></div>
						<div class="details">
							<h4>New York</h4>
							<h5>586,478</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/14.jpg" alt="14.jpg"></div>
						<div class="details">
							<h4>Los Angeles</h4>
							<h5>15,258</h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Expert Freelancer List -->
	<section class="expert-freelancer bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Hire Expert Freelancer</h3>
						<a class="text-thm float-right" href="#">Browse All Freelancers <i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ef_slider">
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/1.jpg" alt="1.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Ali TUFAN</h4>
									<p>App Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">100%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$85</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/2.jpg" alt="2.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Dominikus YURI</h4>
									<p>Front-end Developer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>United States</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/usa.png" alt="usa.png"></li>
										</ul>

									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">100%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$200</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/3.jpg" alt="3.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Deanna ROSE</h4>
									<p>UI - UX Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Brazil</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/brazil.png" alt="brazil.png"></li>
										</ul>

									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">100%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/4.jpg" alt="4.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Lori Ramos</h4>
									<p>UX/UI Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/5.jpg" alt="5.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Michele Snyder</h4>
									<p>Front-End Developer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/6.jpg" alt="6.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Randall Warren</h4>
									<p>Graphics Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/7.jpg" alt="7.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Peter Hawkins</h4>
									<p>Magento Certified Developer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/8.jpg" alt="8.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Martha Griffin</h4>
									<p>Medical Professed</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/9.jpg" alt="9.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Kathleen Moreno</h4>
									<p>Marketing Expert</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Top Area -->
	<section class="footer_top_area p0">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-2 pb25 pt25">
					<div class="logo-widget">
						<img class="img-fluid" src="images/header-logo.png" alt="header-logo.png">
					</div>
				</div>
				<div class="col-sm-12 col-lg-6 pb25 pt25 pl60 pr40 brdr_left_right">
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">2,395</div>
								<p>Jobs Added</p>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">1,267</div>
								<p>Jobs Posted</p>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">1,095</div>
								<p>Companies</p>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">7,348</div>
								<p>Freelancer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-4 pb25 pt25 pl30">
					<div class="footer_social_widget mt15">
						<p class="float-left mt10">Follow Us</p>
						<ul>
							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="quick_link_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="#">Job Packages</a></li>
							<li><a href="#">Post New Job</a></li>
							<li><a href="#">Jobs Listing</a></li>
							<li><a href="#">Jobs Style Grid</a></li>
							<li><a href="#">Employer Listing</a></li>
							<li><a href="#">Employers Grid</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
					<div class="candidate_widget">
						<h4>For Candidates</h4>
						<ul class="list-unstyled">
							<li><a href="#">User Dashboard</a></li>
							<li><a href="#">CV Packages</a></li>
							<li><a href="#">Candidate Listing</a></li>
							<li><a href="#">Candidates Grid</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-md-3 col-lg-3">
					<div class="employe_widget">
						<h4>For Employers</h4>
						<ul class="list-unstyled">
							<li><a href="#">Post New</a></li>
							<li><a href="#">Job Employer Listing</a></li>
							<li><a href="#">Employers Grid</a></li>
							<li><a href="#">Job Packages</a></li>
							<li><a href="#">Jobs Listing</a></li>
							<li><a href="#">Jobs Style Grid</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-8 col-md-6 col-md-3 col-lg-4">
					<div class="newsletter_widget">
						<h4>Newsletter</h4>
						<p>Subscribe to CareerUp Pacific newsletter to get the latest jobs posted, candidates ,and other latest news stay updated.</p>
						<form class="form-inline mailchimp_form">
							<label class="sr-only" for="inlineFormInputMail2">Name</label>
							<input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Enter your email address">
							<button type="submit" class="btn btn-primary mb-2"><span class="fa fa-paper-plane-o"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_bottom_area p0">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 pb10 pt10">
					<div class="copyright-widget tac-smd mt20">
						<p>© 2019 CareerUp. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-lg-8 pb10 pt10">
					<div class="footer_menu text-right mt10">
						<ul>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Site Map</a></li>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Privacy Policy</a></li>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Terms of Service</a></li>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Security & Privacy</a></li>
							<li class="list-inline-item">
								<select class="selectpicker show-tick">
									<option>English</option>
									<option>Frenc</option>
									<option>Italian</option>
									<option>Spanish</option>
									<option>Turkey</option>
								</select>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
</div>
<!-- Wrapper End -->
@endsection
