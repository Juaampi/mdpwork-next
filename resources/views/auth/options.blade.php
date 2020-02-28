@extends('layouts.app')

@section('content')

    <div class="container" id="registroOpciones">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Quiero ser un <strong>Profesional</strong>
                        </div>
                        <div class="card-body" >
                                <img src="img/profesional.png" />
                                <p style="color: #999;font-size: 15px;line-height: 1.2;">Si queres aparecer en la lista de profesionales del sitio, éste es el registro que estás buscando ! </p>
                                <a class="text-primary" href="/register?profesional=1">Quiero ofrecer un servicio!</a>
                         </div>
                    </div>
                 </div>
            <div class="col-md-4">
                <div id="registroUsuarioCard" class="card text-center mb-5">
                    <div class="card-header">
                        Quiero ser un <strong>Usuario</strong>
                    </div>
                    <div class="card-body">
                        <img src="img/usuario.png" />
                        <p style="color: #999;font-size: 15px;line-height: 1.2;">Si querés registrarte como un usuario, puntuar y dejar tu opinión sobre un profesional, éste es el registro que buscas!</p>
                        <div id="btnusuario" style="color: #3483fa;font-size: 14px;text-decoration: none;font-weight: 600">¡Quiero ser un usuario!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
