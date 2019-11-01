@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header">Formulario de registro para <strong>Mdp Work</strong>. Por favor complete todos los datos del formulario.</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="my_profile_form_area">
                                        <div class="row">

                                        <div class="col-lg-12">
                                            <div class="my_profile_thumb_edit"></div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="formGroupExampleInput1">Nombre Completo</label>
                                            <input type="text" name="name" class="form-control" id="formGroupExampleInput1"  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ej: Juan Perez">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="exampleFormControlInput1">Email</label>
                                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ej: mdpwork@gmail.com">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>

                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="exampleInputPhone">Contraseña</label>
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
                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="formGroupExampleInput2">Categoría <span class="text-secondary">(Encuentre su sección)</span></label>
                                                <select id="category" name="category_id" class="form-control">
                                                        <option selected class="alert alert-danger" value="">Seleccione Categoría</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput2">Profesion <img id="unselected" style="display:none;" src="icons/alert.png"><img id="selected" style="display:none;" src="icons/check.png"></label>
                                                    <select id="subcategory" name="subcategory_id" class="form-control">
                                                    </select>
                                                </div>
                                            </div>

                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="exampleInputPhone">WhatsApp</label>
                                                    <input type="email" name="whatsapp"  class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="EJ: +549223534445">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                    <div class="my_profile_input form-group">
                                                        <label for="exampleInputPhone">Teléfono</label>
                                                        <input type="email" name="phone" class="form-control" id="exampleInputPhone" aria-describedby="phoneNumber" placeholder="EJ: +5492234675858">
                                                    </div>
                                                </div>

                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="exampleFormControlInput2">Sitio Web</label>
                                            <input type="email" name="website" class="form-control" id="exampleFormControlInput2" placeholder="EJ: http://mdpwork.com.ar">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6">
                                            <div class="my_profile_input form-group">
                                                <label for="exampleFormControlInput5">Experiencia <span class="text-secondary">(En su profesión)</span></label>
                                               <select name="experience" class="form-control" >
                                                   <option> Año/s</option>
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
                                                <input type="number" name="age" class="form-control" id="exampleFormControlInput2" placeholder="años">
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
                                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="9">
                                                    </textarea>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <h4>Métodos de Pago <span class="text-secondary">que le ofreces al cliente</span></h4>
                                                <div class="row text-center">
                                                    <div class="col-md-2">
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" name="isEfective" class="custom-control-input" id="switch1">
                                                            <label class="custom-control-label" for="switch1"><span style="height: 25px;" class="payment">Efectivo</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" name="isVisa" class="custom-control-input" id="switch2">
                                                            <label class="custom-control-label" for="switch2"> <span style="height: 25px;" class="payment"><img src="img/credit-card/visa.png" /></span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                            <div class="custom-control custom-switch mt-1">
                                                                <input type="checkbox" name="isMercadoPago" class="custom-control-input" id="switch3">
                                                                <label class="custom-control-label" for="switch3"> <span style="height: 25px;" class="payment"><img src="img/credit-card/mercado.png"/></span></label>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-2">
                                                        <div class="custom-control custom-switch mt-1">
                                                            <input type="checkbox" name="isMasterCard" class="custom-control-input" id="switch4">
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
                                                    <input type="text" name="facebook" class="form-control" id="formGroupExampleInput1"  placeholder="Ej: http://facebook.com/mdpwork">
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                  <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput1">Twitter</label>
                                                    <input type="text" name="twitter" class="form-control" id="formGroupExampleInput1" placeholder="Ej: http://twitter.com/mdpwork" >
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput1">Linkedin</label>
                                                    <input type="text" name="linkedin" class="form-control" id="formGroupExampleInput1" placeholder="Ej: http://linkedin.com/mdpwork">
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                                <div class="my_profile_input form-group">
                                                    <label for="formGroupExampleInput1">Instagram</label>
                                                    <input type="text" name="instagram" class="form-control" id="formGroupExampleInput1" placeholder="Ej: http://instagram.com/mdpwork" >
                                                </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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
