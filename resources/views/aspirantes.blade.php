@extends('layouts.app')
@section('content')


<div class="bg-white ml-2 mr-2 mt-2 mb-2" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="padding: 14px;">
                    <h6 style="margin-top: 10px; margin-bottom: 0px;font-family: 'Lato', sans-serif;font-size: 14px;" class="font-weight-bold">¿Todavía no tenés experiencia laboral?</h6>
                    <p class="text-muted" style="font-size: 12px;">Pensamos en un espacio para que no te quedes afuera de nuestro sitio. Registrate como "Aspirante" y aparecé en la búsqueda de los empleadores de la ciudad o también como recomendación para las búsquedas de profesionales diarias.</p>
            </div>
        </div>
</div>
</div>

<div class="ml-2 mr-2 mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #3c9fea">
    <div class="container">
        <div class="row">
            <div class="col-8" style="padding: 25px;">
                    <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:white;" class="font-weight-bold">Posible candidato</h6>
                    <p class="text-white" style="font-size: 12px;">Siendo aspirante puedes ser un posible candidato de las búsquedas diarias de empleados.</strong></p>
            </div>
            <div class="col-4">
                <img src="img/candidato.webp" style="margin-top:20px;">
            </div>
        </div>
</div>
</div>


<div class="ml-2 mr-2 mt-2 mb-2 responsive" style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #fafafa">
    <div class="container">
        <div class="row">
            <div class="col-8" style="padding: 25px;">
                    <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:black;" class="font-weight-bold">Aparece en las búsquedas</h6>
                    <p class="text-black" style="font-size: 12px;">Puedes aparecer en las búsquedas diarias de profesionales como una posible recomendación.</strong></p>
            </div>
            <div class="col-4">
                <img src="img/aparece.webp" style="margin-top:20px;">
            </div>
        </div>
</div>
</div>

<div class="container no-responsive" >
    <div class="row">
        <div class="col-md-6">
            <div class="ml-2 mr-2 mt-2 mb-2 " style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #3c9fea">
                <div class="container">
                    <div class="row">
                        <div class="col-8" style="padding: 25px;">
                                <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:white;" class="font-weight-bold">Posible candidato</h6>
                                <p class="text-white" style="font-size: 12px;">Siendo aspirante puedes ser un posible candidato de las búsquedas diarias de empleados.</strong></p>
                        </div>
                        <div class="col-4">
                            <img src="img/candidato.webp" style="margin-top:20px;">
                        </div>
                    </div>
            </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="ml-2 mr-2 mt-2 mb-2 " style="border-radius: 6px; box-shadow: 0 1px 2px 0 rgba(0,0,0,.12);background: #fafafa">
                <div class="container">
                    <div class="row">
                        <div class="col-8" style="padding: 25px;">
                                <h6 style="margin-bottom: 0px;font-family: 'Lato', sans-serif;color:black;" class="font-weight-bold">Aparece en las búsquedas</h6>
                                <p class="text-black" style="font-size: 12px;">Puedes aparecer en las búsquedas diarias de profesionales como una posible recomendación.</strong></p>
                        </div>
                        <div class="col-4">
                            <img src="img/aparece.webp" style="margin-top:20px;">
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center responsive">
    <a class="text-center" style="font-size: 10px;font-weight: bold;color: #1886fc;padding: 5px;" href="/register">QUIERO SER UN ASPIRANTE</a>
</div>
<div class="container text-center no-responsive" style="margin-top: 15px;">
    <a class="text-center" style="font-size: 13px;font-weight: bold;color: #1886fc;padding: 10px;" href="/register">QUIERO SER UN ASPIRANTE</a>
</div>

<div class="container responsive" style="margin-top: 15px; margin-bottom: 15px;">
<p style="font-size: 12px;">¿Ya sos un aspirante? Ingresá y visualizá la lista de empleos solicitados. <a href="/login" class="text-primary font-weight-bold">Ingresar</a></p>

</div>

<div class="container no-responsive text-center" style="margin-top: 15px; margin-bottom: 15px;">
    <p style="font-size: 13px;">¿Ya sos un aspirante? Ingresá y visualizá la lista de empleos solicitados. <a href="/login" class="text-primary font-weight-bold">Ingresar</a></p>

    </div>
@endsection
