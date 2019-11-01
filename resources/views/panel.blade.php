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
                            <form action="{{route('User.edit')}}" method="GET">
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
						    <div class="row">
							    <div class="col-lg-12">
                                    <h4 class="fz20 mb20">Mi Perfil</h4>
                                    @if(session()->has('response'))<div class="alert alert-success text-center">Los datos se actualizaron correctamente</div>@endif
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
                                                @foreach($subcategories as $subcategory)
                                                    @if($subcategory->id == Auth::user()->job)
                                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            <div class="col-md-6 col-lg-6">
                                    <div class="my_profile_input form-group">
                                        <label for="exampleInputPhone">WhatsApp</label>
                                        <input type="email" name="whatsapp"  class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" @if(Auth::user()->whatsapp)placeholder="{{Auth::user()->whatsapp}}"@else placeholder="Ejemplo: +5492235646567"@endif>
                                    </div>
                                </div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput1">Email</label>
							    	<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->email}}">
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
							    	<label for="exampleFormControlInput2">Sitio Web</label>
                                <input type="email" name="website" class="form-control" id="exampleFormControlInput2" placeholder="{{Auth::user()->website}}">
								</div>
							</div>

							<div class="col-md-6 col-lg-6">
								<div class="my_profile_input form-group">
                                    <label for="exampleFormControlInput5">Experience</label>
                                   <select name="experience" class="form-control" >
                                       <option>{{Auth::user()->experience}} Año/s</option>
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
                                        <input class="form-control" name="zone" id="myInput" type="text" name="barrio" placeholder="Escriba el  Barrio">
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
                $('#category').on('change', function(){
                    var category_id = $(this).val();
                    if($.trim(category_id) != ''){
                        $.get('subcategories', {category_id: category_id}, function(subcategories){
                            $('#subcategory').empty();
                            $('#subcategory').append("<option value=''>Seleccione Oficio</option>");
                            $.each(subcategories, function(index, subcategory){
                                $('#subcategory').append("<option value= '"+ subcategory.id +"'>"+ subcategory.name +"</option>");
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
            });

        </script>

@endsection
