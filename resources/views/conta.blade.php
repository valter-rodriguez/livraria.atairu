@extends('layouts.master')

@section('content')

<main id="conta-principal">
  <section class="container">
    <h1>Conta</h1>
    <div class="container conta-div-principal">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="form-group">
            <img src="../img/id-card.svg" alt="logotipo de uma caixa aberta">
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6">
          <h2 class="title-conta-2  titulo-conta-2">Alterar Conta</h2>
          <p class="paraf-conta"><a href="{{route ('conta.alteraConta')}}">Modificar senha e Informações pessoais</a></p>
        </div>
      </div>
    </div>
    <div class="container conta-div-principal">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="form-group">
                        <img src="../img/portfolio.svg" alt="logotipo de uma caixa aberta">
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <h2 class="title-conta-2  titulo-conta-2">Finalizar Cadastro</h2>
                    <p class="paraf-conta"><a href="{{route ('cliente.index')}}">Completar Informações pessoais</a></p>
                </div>
            </div>
        </div>
  </section>
</main>

@stop