@extends('layouts.master')

@section('content')
<main>
    <section> 
        <div class="forma">
             <h1 id="main-cadastro">{{ __('Cadastro de Cliente') }}</h1>
            <div class="container-cadastro p-1 m-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">  
                        <label class="cadastro-label" for="nome">{{ __('Nome Completo:') }}</label> 
                        <div class="col-md-10">
                            <input id="nome" type="text" class="form-control cadastro-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label class="cadastro-label" for="login-email">{{ __('Digite seu E-Mail:') }}</label> 
                        <div class="col-md-10">
                            <input id="login-email" type="email" class="form-control cadastro-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label class="cadastro-label" for="login-cpf">{{ __('Digite seu  CPF:') }}</label> 
                        <div class="col-md-10">
                            <input id="cpf" type="text" class="form-control cadastro-input @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" max="11">

                            @error('cpf')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                     <div class="form-group row"> 
                        <label class="cadastro-label" for="login-telefone">{{ __('Digite seu  Telefone:') }}</label> 
                        <div class="col-md-10">
                            <input id="telefone" type="text" class="form-control cadastro-input @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" max="10">

                            @error('telefone')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">                    
                        <label class="cadastro-label" for="password" >{{ __('Digite sua Senha') }}</label>
                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control cadastro-senha @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="cadastro-label">{{ __('Confirme a Senha') }}</label>

                        <div class="col-md-10">
                            <input id="password-confirm" type="password" class="form-control cadastro-senha" name="password_confirmation" required autocomplete="new-password">
                        </div> 
                    </div>
                    </div>
                    <div class="container-cadastro mt-5">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn botao-cadastro" id="cadastrar" name="cadastrar">
                                    {{ __('Cadastrar') }}
                                </button> 
                            </div>
                        </div>
                 </div>
        </div>  

    </section>
</main>

@endsection