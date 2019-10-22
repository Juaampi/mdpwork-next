@extends('layouts.app')

@section('content')
<section class="bgc-lightgray pt80 mt-5 mbt45">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="candidate_personal_info style2">
						<div class="thumb text-center">
							<img class="img-fluid rounded" style="height: 150px" src="img/logo.png" alt="cl1.jpg"><br><br>
						</div>
						<div class="details">
							<small class="text-success"><strong>Disponible</strong></small>
							<h3>Juan Pablo Garcia</h3>
							<p>Hace 26 días en <a style="color: #00b7ff" href="#" >Hogar y Construcción</a></p>
							<ul class="address_list">
                                <li class="list-inline-item"><a href="#"><img src="icons/location.png" /> Jardín Stella Maris, Mar del Plata</a></li>
                            </ul>

						</div>
					</div>
				</div>
				<div class="col-md-2 ">
                        <hr style="border: none;border-left: 1px solid hsl(0, 0%, 76%);height: 15vh;width: 1px;">
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <p><strong>Contacto</strong></p>
                    </div>
                     <div class="row">
                        <ul>
                            <li class="text-center">
                                <p><img style="height: 25px;" class="mr-2" src="icons/wpp.png" /></p><p style="font-size: 14px;">Whatsapp </p>
                            </li>
                            <li>
                                <p style="font-size: 14px;"><img style="height: 25px;" class="mr-2" src="icons/ms.png" />Messenger </p>
                            </li>
                            <li>
                                <p style="font-size: 14px;"><img style="height: 25px;" class="mr-2" src="icons/telefono.png" />Teléfono </p>
                            </li>
                        </ul>
                     </div>
                </div>
			</div>
		</div>
    </section>
    <section class="bgc-white pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="candidate_about_info style2">
                                    <p class="fwb mb10"><img src="icons/descripcion.png"> Descripción del trabajo</p>
                                    <p>Due to ongoing growth, this fun &amp; energetic International corporate based on the outskirts of Oxford, is seeking a UX/UI Designer to join an innovative team, focused on delivering exciting User Experiences and great functionality, across both Web &amp; Mobile platforms.</p>
                                    <p class="mt-3 mb-4 fwb"><img src="icons/tarjeta.png" />
                                        <strong>Métodos de Pago</strong>
                                        <span class="payment">Efectivo</span>
                                        <span class="payment"><span class="payment-visa"></span></span>
                                        <span class="payment"><span class="payment-mercado"></span></span>
                                    </p>
                                        <p class="fwb"><img src="icons/horario.png"> Horarios</p>
                                <div class="table-responsive">

                                        <!--Table-->
                                        <table class="table">

                                          <!--Table head-->
                                          <thead>
                                            <tr>
                                              <th>*</th>
                                              <th class="th-lg">Mañana</th>
                                              <th class="th-lg">Tarde-Noche</th>
                                              <th class="th-lg">Día Completo</th>
                                            </tr>
                                          </thead>
                                          <!--Table head-->

                                          <!--Table body-->
                                          <tbody>
                                            <tr>
                                              <th scope="row">Lunes</th>
                                              <td>11:00hs - 15:30hs</td>
                                              <td>20:00hs - 23:00hs</td>
                                              <td>-</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">Martes</th>
                                              <td>11:00hs - 15:30hs</td>
                                              <td>20:00hs - 23:00hs</td>
                                              <td>-</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">Miercoles</th>
                                              <td>11:00hs - 15:30hs</td>
                                              <td>20:00hs - 23:00hs</td>
                                              <td>-</td>
                                            </tr>
                                            <tr style="background: #ececec;">
                                              <th scope="row">Jueves</th>
                                              <td>-</td>
                                              <td>-</td>
                                              <td>08:00hs - 23:00hs</td>
                                            </tr>
                                            <tr>
                                                    <th scope="row">Viernes</th>
                                                    <td>11:00hs - 15:30hs</td>
                                                    <td>20:00hs - 23:00hs</td>
                                                    <td>-</td>
                                                  </tr>
                                                  <tr>
                                                        <th scope="row">Sábado</th>
                                                        <td>11:00hs - 15:30hs</td>
                                                        <td>20:00hs - 23:00hs</td>
                                                        <td>-</td>
                                                      </tr>
                                                      <tr style="background: #ff1b1b; color: white;">
                                                            <th scope="row" >Domingo</th>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                          </tr>

                                          </tbody>
                                          <!--Table body-->

                                        </table>
                                        <!--Table-->

                                      </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <h4 class="fz20 mb30">Información adicional</h4>
                        <div class="candidate_working_widget style2 bgc-fa">
                            <div class="icon text-thm"><img src="icons/dinero.png"> </span></div>
                            <div class="details">
                                <p class="color-black22">Promedio Presupuesto</p>
                                <p>$450 - $1500</p>
                            </div>
                            <div class="icon text-thm"><img src="icons/genero.png" /></span></div>
                            <div class="details">
                                <p class="color-black22">Género</p>
                                <p>Masculino</p>
                            </div>
                            <div class="icon text-thm"><img src="icons/experiencia.png" /></div>
                            <div class="details">
                                <p class="color-black22">Experiencia</p>
                                <p>Alta</p>
                            </div>
                            <div class="icon text-thm"><img src="icons/titulo.png" /> </div>
                            <div class="details">
                                <p class="color-black22">Título / Profesión</p>
                                <p>Técnico electricista</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                        <div class="col-lg-8">

                        </div>
                    </div>
                </div>
        </section>
@endsection
