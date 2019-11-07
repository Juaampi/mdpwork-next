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
							    	<input type="text" class="form-control h70" id="searchinput" placeholder="Escribe lo que buscas.. EJ:Carpintero, electricista">
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


        <script type="text/javascript">
                var subcategories = @json_decode($subcategories);
                autocomplete(document.getElementById("searchinput"), subcategories);

        </script>





@endsection
