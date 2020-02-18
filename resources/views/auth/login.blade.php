@extends('layouts.app')

@section('content')
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Iniciar sesion en <strong>MDP WORK INC.</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                      Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Ingresar
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-primary" href="{{ route('password.request') }}">
                                        Olvidé mi contraseña
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-7 col-md-offset-4">
                              <p>Ingresar con <a href="{{ url('/auth/google') }}" class="btn btn-google btn-danger"><i class="fa fa-google"></i> Google</a></p>
                              <p>La cuenta de <span class="text-danger">google</span> es sólo para usuarios, si sos un profesional debes <a href="/register" class="text-info">registrarte</a></p>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
