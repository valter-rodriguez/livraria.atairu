@extends('layouts.master')

@section('content')
<main class="container-fluid" id="main-login">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-lg-6">
            <form class="form-container-login justify-content-center mt-5" method="POST" action="{{ route('login') }}">
                 @csrf
                <!-- <h1 class="text-center mt-2">Login</h1> -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" name="login-email" id="login-email" placeholder="Digite seu E-mail" aria-describedby="login-email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-prepend login-div-icones">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control login-senha @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Digite sua Senha">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row text-left">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                <div class="form-group" id="login-links">
                    <a href="{{ route('register') }}" class="">Ainda não sou cadastrado</a>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a Senha?') }}
                                    </a>
                                @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="botao-login">
                   {{ __('Enviar') }}
                </button>
                
            </form>
        </section>
    </section>
</main>

@stop




