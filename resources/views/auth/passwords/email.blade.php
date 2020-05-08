@extends('layouts.master')

@section('content')
<main class="container-fluid" id="main-login">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-lg-6 container-email mt-5">
            <div class="card-header email-label">{{ __('Recuperar Senha') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form  method="POST" action="">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right email-label">{{ __('Digite seu E-mail:') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control input-email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" id="botao-email">
                                {{ __('Recuperar senha') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
</main>
@stop




