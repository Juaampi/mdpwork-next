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
                            <div class="row">
                                <div class="col-md-4">
							        <h4>Ricardo Alfredo Rodriguez</h4>
                                    <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                                    <p class="font-style-italic" ><a href="#"><strong>Electricista </strong> - <span style="font-style: italic">Cierra en <span style="color: #e44d4d"><strong>01:27hs</strong></span></span></a></p>
                                </div>
                                <div class="col-md-7">
                                        <p>
                                            <img src="icons/horario.png" />
                                            <strong>Miercoles</strong></span>
                                            <span style="font-size: 14px">08:00 hs - 12:00 hs</span>
                                        </p>
                                        <p class="mt-1"><img src="icons/tarjeta.png" />
                                            <strong>Métodos</strong>
                                            <span class="payment">Efectivo</span>
                                            <span class="payment"><span class="payment-visa"></span></span>
                                            <span class="payment"><span class="payment-mercado"></span></span>
                                        </p>
                                </div>
                        </div>
                        </div>
                        <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Ver</a>
					</div>
                </div>
                <div class="col-sm-12 col-lg-12">
                        <div class="fj_post">
                            <div class="details">
                                <h5 class="job_chedule text-thm mt0"><strong>Disponible</strong></h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Ricardo Alfredo Rodriguez</h4>
                                        <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                                        <p class="font-style-italic" ><a href="#"><strong>Electricista </strong> - <span style="font-style: italic">Cierra en <span style="color: #e44d4d"><strong>01:27hs</strong></span></span></a></p>
                                    </div>
                                    <div class="col-md-7">
                                            <p>
                                                <img src="icons/horario.png" />
                                                <strong>Miercoles</strong></span>
                                                <span style="font-size: 14px">08:00 hs - 12:00 hs</span>
                                            </p>
                                            <p class="mt-1"><img src="icons/tarjeta.png" />
                                                <strong>Métodos</strong>
                                                <span class="payment">Efectivo</span>
                                                <span class="payment"><span class="payment-visa"></span></span>
                                                <span class="payment"><span class="payment-mercado"></span></span>
                                            </p>
                                    </div>
                            </div>
                            </div>
                            <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Ver</a>
                        </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                            <div class="fj_post">
                                <div class="details">
                                    <h5 class="job_chedule text-thm mt0"><strong>Disponible</strong></h5>
                                    <div class="thumb fn-smd">
                                        <img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Ricardo Alfredo Rodriguez</h4>
                                            <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                                            <p class="font-style-italic" ><a href="#"><strong>Electricista </strong> - <span style="font-style: italic">Cierra en <span style="color: #e44d4d"><strong>01:27hs</strong></span></span></a></p>
                                        </div>
                                        <div class="col-md-7">
                                                <p>
                                                    <img src="icons/horario.png" />
                                                    <strong>Miercoles</strong></span>
                                                    <span style="font-size: 14px">08:00 hs - 12:00 hs</span>
                                                </p>
                                                <p class="mt-1"><img src="icons/tarjeta.png" />
                                                    <strong>Métodos</strong>
                                                    <span class="payment">Efectivo</span>
                                                    <span class="payment"><span class="payment-visa"></span></span>
                                                    <span class="payment"><span class="payment-mercado"></span></span>
                                                </p>
                                        </div>
                                </div>
                                </div>
                                <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Ver</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12">
                                <div class="fj_post">
                                    <div class="details">
                                        <h5 class="job_chedule text-thm mt0"><strong>Disponible</strong></h5>
                                        <div class="thumb fn-smd">
                                            <img class="img-fluid" style="height: 120px" src="img/logo.png" alt="1.jpg">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>Ricardo Alfredo Rodriguez</h4>
                                                <p class="font-style-italic"><img src="icons/location.png" /> Lomás del Golf, Mar del Plata</p>
                                                <p class="font-style-italic" ><a href="#"><strong>Electricista </strong> - <span style="font-style: italic">Cierra en <span style="color: #e44d4d"><strong>01:27hs</strong></span></span></a></p>
                                            </div>
                                            <div class="col-md-7">
                                                    <p>
                                                        <img src="icons/horario.png" />
                                                        <strong>Miercoles</strong></span>
                                                        <span style="font-size: 14px">08:00 hs - 12:00 hs</span>
                                                    </p>
                                                    <p class="mt-1"><img src="icons/tarjeta.png" />
                                                        <strong>Métodos</strong>
                                                        <span class="payment">Efectivo</span>
                                                        <span class="payment"><span class="payment-visa"></span></span>
                                                        <span class="payment"><span class="payment-mercado"></span></span>
                                                    </p>
                                            </div>
                                    </div>
                                    </div>
                                    <a class="btn btn-md btn-transparent float-right fn-smd" href="#">Ver</a>
                                </div>
                            </div>

			</div>
		</div>
	</section>


	<!-- Our Footer Bottom Area -->

<a class="scrollToHome text-thm" href="#"><img src="icons/coete.png" /></a>
</div>
<!-- Wrapper End -->
@endsection
