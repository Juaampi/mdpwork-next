@extends('layouts.app')

@section('content')
<?php
require_once '../vendor/autoload.php';
MercadoPago\SDK::setAccessToken("TEST-997859865585449-062421-23b68fe2a8fb9a9647715b67c79ce110-216363986");
$preference = new MercadoPago\Preference();

if(Auth::user()){
$user_id = Auth::user()->id;
$items[]= array
        (
        "title"         =>  'Destacado para Mardeltrabaja.com',
        "description"   =>  'Checkout creado para adquirir su membresía destacada por 15 dias',
        "quantity"      =>   1,
        "currency_id"   =>  "ARS",
        "unit_price"        =>  1000,
);

$payer = new MercadoPago\Payer();
$payer->name = Auth::user()->id;
$payer->email = Auth::user()->email;
$preference->payer = $payer;
$preference->items = $items;
$preference->back_urls = array(
    "success" => "https://mardeltrabaja.com/success",
    "failure" => "https://mardeltrabaja.com/failure",
    "pending" => "https://mardeltrabaja.com/pending"
);
$preference->auto_return = "approved";
$preference->save();
}
?>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ¿Cómo ser destacado?
                </div>
                <div class="body">
                    <div style="text-align: center">
                        <img style="height: 150px;
                        margin-top: 10px;
                        margin-bottom: 10px;" src="img/top.png">
                    </div>
                    <p style="padding: 10px;">Para ser un profesional destacado de Mardeltrabaja.com y aparecer en el top de las búsquedas deberá seguir lo siguientes pasos: </p>
                    <p style="padding: 10px;">1. Deberá contar con una cuenta de profesional, si no la tiene deberá registrarse como tal, y completar los datos solicitados. </p>
                    <p style="padding: 10px;">2. Deberá abonar $1000 ARS (Pesos Argentinos) por Mercado Pago. </p>
                    <p style="padding: 10px;">Una vez que realice esos 2 únicos pasos, el sistema automáticamente lo pondrá como destacado y empezará a beneficiarse por las visitas de los usuarios.</p>
                    <p style="padding: 10px;">La duración del destacado es de 15 días, sin excepción. De pasar esos 15 días y querer volver a ser un profesional destacado, deberá realizar el paso 2 nuevamente. </p>
                    <div style="text-align: center; margin-bottom: 10px;">
                        @if(Auth::user())
                        @if(Auth::user()->rol == 'profesional')
                        <a class="btn btn-info" href="{{$preference->init_point}}">Entendí y quiero ser un destacado.</a>
                        @else
                        <div class="alert alert-danger">
                            Debe iniciar sesion como un profesional para poder adquirir la membresía de destacado.
                        </div>
                        @endif
                        @else
                        <div class="alert alert-danger">
                            Debe iniciar sesion como un profesional para poder adquirir la membresía de destacado. <a href="/login">Iniciar sesion</a>
                        </div>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
