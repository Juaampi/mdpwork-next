@extends('layouts.app')
@section('content')

<div class="container mt-2 mb-3">
    <div class="card text-center">
        <div class="card-header">
            Bienvenidos a <strong>Mdp Work Inc.</strong>
        </div>
        <div class="card-body">
          <h5 class="card-title">En ésta nueva era tecnológica una nueva herramienta virtual llamada
              <div class="badge badge-info">MDP WORK INC. </div> te ofrece una solución a tus problemas, sin perder tiempo y desde la comodida de tu hogar.
        </h5>
        <h5><img src="img/dispositivos.png" class="mt-2 mb-2" style="height: 200px;"/></h5>
          <p class="card-text">La <strong><span class="text-info">tecnología</span></strong> hace años viene proponiendo un cambio en la vida de las personas que la utilizan. En éste caso éste sitio web ofrece 2 formas de ser utilizado que las explicamos a continuación.</p>
          <div class="bs-callout bs-callout-info"><p><strong>1. </strong>Si tenes alguna profesión, algun oficio o realizas algún tipo de trabajo en la zona, podés ingresar a la zona de <strong>profesionales</strong>, registrarte y automáticamente te encontrarás en nuestro listado. <a href="/register" class="btn btn-sm btn-info">Registrarme</a></p></div>
          <div class="bs-callout bs-callout-warning"><p><strong>2. </strong>Si tuviste algún problema en tu casa o con tu vehículo, judicial o simplemente necesitas hacerte las uñas, no dudes en utilizar el buscador que te ofrecemos y contactarte directamente, <strong>sin vueltas y sin publicidades</strong>, con la persona que te lo solucionará. Utilizá nuestros filtros especializados y no pierdas más tiempo! <a href="/lista" class="btn btn-sm btn-warning" >Ver listado</a></p></div>
        </div>
        <div class="card-footer text-muted">
          <strong>MDP WORK INC.</strong>. La nueva forma de solucionar tus problemas.
        </div>
      </div>
</div>

@endsection
