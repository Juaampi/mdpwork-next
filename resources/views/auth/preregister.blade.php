@extends('layouts.app')
@php
use Carbon\Carbon;
@endphp
@section('content')
<div class="container mt-2">
<h4 style="font-family: 'roboto', sans-serif; margin-top: 15px;">Creá tu cuenta de Mardeltrabaja</h4>
<div class="col-md-12" style="margin-top: 15px;">
    <div class="my_profile_input form-group">
        <input type="text" name="name" class="form-control" required autocomplete="name" autofocus placeholder="Nombre Completo">
    </div>
</div>
<div class="col-md-12 mt-2">
    <div class="my_profile_input form-group">
        <input type="email" name="email" class="form-control" id="" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese su Email">
        <small>Puede usar letras, números y puntos. <span class="text-danger">Debe ser un E-mail real, ya que se utilizará para la activación.</span></small>
    </div>
</div>

<div class="col-md-12 mt-2">
        <div class="my_profile_input form-group">
            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Crear contraseña">
            <small>Utiliza una combinación de 8 o más caracteres entre números, letras y símbolos.</small>
        </div>
    </div>
<div class="col-md-12 mt-2">
    <div class="my_profile_input form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
        <small>Sólo repetí la contraseña creada anteriormente.</small>
    </div>
</div>

<div class="col-md-12" style="margin-bottom: 10px;">
    <a href="/">Cancelar</a>
    <a href="/" style="float: right;">Siguiente</a>
</div>

</div>
@endsection
