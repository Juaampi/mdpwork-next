@extends('layouts.app')

@section('content')
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <p class="text-center" style="font-family:'Bowlby One SC', cursive;color:#00b7ff;font-size:25px;text-shadow:2px 2px #616161">Mardeltrabaja.com<span style="font-size: 10px;">©</span></p>
                <p class="text-muted text-center" style="font-size: 15px; font-family: 'roboto', sans-serif">Iniciar sesion en Mardeltrabaja.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="email" type="email" class="input-responsive-login form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Introduzca el correo electrónico" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="password" type="password" class="input-responsive-login form-control @error('password') is-invalid @enderror" name="password" required placeholder="Introduzca la contraseña" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info input-responsive-login">
                                   Ingresar
                                </button>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center" style="margin: 0px;">
                                <div class="col-md-6">
                                    <p class="text-center"> O </p>                               </div>
                            </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                              <p><a href="{{ url('/auth/google') }}" class="btn btn-white input-responsive-login"><span class="icon-google"></span> <span style="margin-left: 30px;">Acceder con Google</span></a></p>
                              <p style="font-size: 15px; text-align: center;margin-top: 30px;">La cuenta de <span class="text-danger">google</span> es sólo para usuarios, si sos un profesional debes <a href="/register" class="text-info">registrarte</a> o iniciar sesión con tu cuenta de Mardeltrabaja.</p>
                            </div>
                         </div>

                         @if (Route::has('password.request'))
                         <div class="form-group row justify-content-center">
                            <a class="text-primary text-center" href="{{ route('password.request') }}">
                                 ¿Olvidaste tu contraseña?
                            </a>
                         </div>
                     @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
