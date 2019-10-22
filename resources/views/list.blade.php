@extends('layouts.app')

@section('content')
<div class="preloader"></div>
<section class="bgc-fa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt10">
                <div class="bg_png">
                    <img class="img-fluid" src="images/resource/cl1.png" alt="cl1.png">
                </div>
                <p class="text-center mb2"><strong>MDP WORK</strong> - Utilizá el buscador y los filtros para encontrar lo que necesitas</p>
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
            </div>
        </div>
    </div>
</section>

<section class="our-faq">
    <div class="container" style="max-width: 94%;">
        <div class="row">
            <div class="col-lg-3 col-xl-3 dn-smd">

                <div class="cl_skill_checkbox mb30">
                    <h4 class="fz20 mb20">Categorías</h4>
                    <div class="content ui_kit_checkbox h250">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Asesoramiento Contable</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Belleza y Cuidado</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Comunicación y Diseño</label>
                            <span class="float-right mr10">(3)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Cursos y Clases</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">Fiestas y Eventos</label>
                            <span class="float-right mr10">(3)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">Fotografía y Música</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">Hogar y Construcción</label>
                            <span class="float-right mr10">(6)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">Vehículos</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                            <label class="custom-control-label" for="customCheck9">Medicina y Salud</label>
                            <span class="float-right mr10">(5)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                            <label class="custom-control-label" for="customCheck10">Ropa y Moda</label>
                            <span class="float-right mr10">(3)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">Mascotas</label>
                            <span class="float-right mr10">(2)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                            <label class="custom-control-label" for="customCheck12">Servicio de Oficinas</label>
                            <span class="float-right mr10">(1)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                            <label class="custom-control-label" for="customCheck13">Tecnología</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                            <label class="custom-control-label" for="customCheck14">Transporte</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                            <label class="custom-control-label" for="customCheck15">Viajes y Turismo</label>
                            <span class="float-right mr10">(4)</span>
                        </div>
                    </div>
                    <a class="text-thm2 pl25" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
                </div>
                <div class="cl_carrer_lever mb30">
                        <div id="accordion" class="accordion">
                            <div class="link mb10">Subcategorías<i class="fa fa-caret-up"></i></div>
                            <div class="cl_submenu">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck27">
                                        <label class="custom-control-label" for="customCheck27">Intermediate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck28">
                                        <label class="custom-control-label" for="customCheck28">Normal</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck29">
                                        <label class="custom-control-label" for="customCheck29">Special</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck30">
                                        <label class="custom-control-label" for="customCheck30">Experienced</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cl_carrer_lever mb30">
                        <div id="accordion2" class="accordion">
                            <div class="link mb10">Específica<i class="fa fa-caret-up"></i></div>
                            <div class="cl_submenu">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck31">
                                        <label class="custom-control-label" for="customCheck31">1Year to 2Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck32">
                                        <label class="custom-control-label" for="customCheck32">2Year to 3Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck33">
                                        <label class="custom-control-label" for="customCheck33">3Year to 4Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck34">
                                        <label class="custom-control-label" for="customCheck34">4Year to 5Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
            <div class="col-lg-9 col-xl-9">

                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="candidate_job_alart_btn">
                            <button class="btn btn-thm btns dn db-991" style="margin: 0 auto;">Ver filtros</button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="content_details">
                            <div class="details">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Hide Filter</span><i>×</i></a>
                                <div class="faq_search_widget mb30">
                                    <h4 class="fz20 mb15">Category</h4>
                                    <div class="candidate_revew_select">
                                        <div class="dropdown bootstrap-select w100 show-tick"><select class="selectpicker w100 show-tick" tabindex="-98">
                                            <option>All Categories</option>
                                            <option>Recent</option>
                                            <option>Old Review</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="All Categories"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Categories</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                    </div>
                                </div>
                                <div class="cl_latest_activity mb30">
                                    <h4 class="fz20 mb15">Últimos publicados</h4>
                                    <div class="ui_kit_radiobox">
                                        <div class="radio">
                                            <input id="radio_six" name="radio" type="radio" checked="">
                                            <label for="radio_six"><span class="radio-label"></span> Last Hour</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_seven" name="radio" type="radio">
                                            <label for="radio_seven"><span class="radio-label"></span> Last 24 hours</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_eight" name="radio" type="radio">
                                            <label for="radio_eight"><span class="radio-label"></span> Last 7 days</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_nine" name="radio" type="radio">
                                            <label for="radio_nine"><span class="radio-label"></span> Last 14 days</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio_ten" name="radio" type="radio">
                                            <label for="radio_ten"><span class="radio-label"></span> Last 30 days</label>
                                        </div>
                                        <a class="text-thm2 pl30" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
                                    </div>
                                </div>
                                <div class="cl_latest_activity mb30">
                                    <h4 class="fz20 mb15">Estado</h4>
                                    <div class="ui_kit_whitchbox">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                            <label class="custom-control-label" for="customSwitch6">Disponible</label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                            <label class="custom-control-label" for="customSwitch7">No Disponible</label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                            <label class="custom-control-label" for="customSwitch8">Todos</label>
                                        </div>
                                    </div>
                                </div>


                            </div>
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
                    <div class="col-lg-12">
                        <div class="mbp_pagination">
                            <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">45</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next <span class="flaticon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
