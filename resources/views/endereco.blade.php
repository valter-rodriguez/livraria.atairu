@extends('layouts.master')
@section('content')

<main id="altera-conta-principal" class="justify-content-center altera-conta-principal">
    <section>
        <h1>Completar Dados do Cadastro </h1>
        <div id="altera-conta" class="mb-3 hidden">
            <div class="container altera-container">
                <form method="POST" action="{{route('cliente.index')}}" >
                    {{csrf_field()}}
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">CEP:</label>
                                <input id="cep" name="cep" class="altera-conta-nome" value="">        
                            </div>
                        </div>
                    </div>
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">Logradouro:</label>
                                <input id="rua" name="logradouro"  value=""> 
                            </div>
                        </div>
                    </div>
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">Bairro:</label>
                                <input id="bairro" name="bairro"  value=""> 
                            </div>
                        </div>
                    </div>
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">Estado:</label>
                                <input id="uf" name="uf" class="altera-conta-nome"  value=""> 
                            </div>
                        </div>
                    </div>
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">Cidade:</label>
                                <input id="cidade" name="cidade" class="altera-conta-nome"  value=""> 
                            </div>
                        </div>
                    </div> 
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">Número:</label>
                                <input id="numero" name="numero" class="altera-conta-nome" value=""> 
                            </div>
                        </div>
                    </div>
                    <div class="container altera-container">
                        <div class="row altera-conta-div-principal">
                            <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
                                <label class="altera-conta-nome">Complemento:</label>
                                <input name="complemento" class="altera-conta-nome"  value=""> 
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary altera-conta-botao" >Finalizar Cadastro</button>
            </div>

            </form>
    </section>
</main>
@stop