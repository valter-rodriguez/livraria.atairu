@extends('layouts.master')
@section('content')

<main id="altera-conta-principal" class="justify-content-center altera-conta-principal">
    <section>
        <h1>Alterar Dados de Login </h1>
        <div id="altera-conta" class="mb-3 hidden">
            <div class="container altera-container">
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif

                <form method="POST" action="{{route('conta.update')}}" >
                    {{csrf_field()}}
                    @forelse($enderecos as $endereco)
                    
                    @empty 
                      
                    @endforelse
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Nome Completo:</label>
                            <input id="nome" name="nome" class="altera-conta-nome" class="altera-conta-nome" value="{{ auth()->user()->name}}">        
                        </div>
                    </div>
            </div>
            <div class="container altera-container">
                <div class="row altera-conta-div-principal">
                    <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                        <label class="altera-conta-nome">E-mail:</label>
                        <input id="email" name="email" class="altera-conta-nome" class="altera-conta-nome" value="{{ auth()->user()->email}}"> 
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Senha:</label>
                            <input id="password" name="password" type="password" class="altera-conta-nome"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Telefone:</label>
                            <input id="telefone" name="telefone" type="text" class="altera-conta-nome" value="{{ auth()->user()->telefone}}"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">CPF:</label>
                            <input id="cpf" name="cpf" type="text" class="altera-conta-nome" value="{{ auth()->user()->cpf}}"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">CEP:</label>
                            <input id="cep" name="cep" type="text" class="altera-conta-nome" value="{{ isset($endereco->cep) ? $endereco->cep  : ''}}">        
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Logradouro:</label>
                            <input id="rua" name="logradouro" type="text" value="{{ isset($endereco->logradouro) ? $endereco->logradouro : '' }}"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Bairro:</label>
                            <input id="bairro" name="bairro"  type="text" value="{{ isset($endereco->bairro) ? $endereco->bairro : '' }}"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Estado:</label>
                            <input id="uf" name="uf" type="text" class="altera-conta-nome"  value="{{ isset($endereco->uf) ? $endereco->uf : '' }}"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Cidade:</label>
                            <input id="cidade" name="cidade" type="text" class="altera-conta-nome"  value="{{ isset($endereco->cidade) ? $endereco->cidade : ''}}"> 
                        </div>
                    </div>
                </div> 
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Número:</label>
                            <input id="numero" name="numero" type="number" class="altera-conta-nome" value="{{ isset($endereco->numero) ? $endereco->numero : '' }}"> 
                        </div>
                    </div>
                </div>
                <div class="container altera-container">
                    <div class="row altera-conta-div-principal">
                        <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                            <label class="altera-conta-nome">Complemento:</label>
                            <input id="complemento" name="complemento" type="text" class="altera-conta-nome"  value="{{ isset($endereco->complemento) ? $endereco->complemento : '' }}"> 
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary altera-conta-botao" >Alterar Cadastro</button>
            </div>
        </div>
        </form>
    </section>
    <section>
    <div class="form-group mt-5">
                    <label class="altera-conta-nome">Desejo excluir a conta</label>
                    <a class="btn btn-secondary btn-danger" href="{{ route('conta.delete') }}">
                        {{ __('Excluir cadastro') }}
                    </a>
                </div>
    </section>
</main>
@stop