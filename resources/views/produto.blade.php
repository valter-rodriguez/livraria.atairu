@extends('layouts.master')

@section('content')
<section id='produto' class="container my-5 py-5">
    @if(isset($produto))
    <div class="row">
        <div class="col text-right">
            <img src="{{ $produto->imagem }}" class="img-thumbnail">
        </div>
        <div class="col">
            <h1>{{ $produto['nome']}}</h1>
            <p>Editora: {{ $produto['editora'] }}</p>
            <p>Autor(a): {{ $produto['autor'] }}</p>
            <p class="preco">R$ {{ $produto['preco'] }}</p>
            <form action="../carrinho/add/{{ $produto['id_produto'] }}" enctype="multipart/form-data" method="post">
                @csrf
                <button class="btn btn-success">Adicionar ao carrinho <i class="fas fa-cart-plus"></i></button>
            </form>
        </div>
    </div>
    <div class="sinopse mt-5 p-3">
        <h3 class='mb-3'>Descrição</h3>
        <div>
            <p>{{ $produto['sinopse'] }}</p>
        </div>
    </div>

    <div class="sinopse mt-5 p-3">
        <h3 class='mb-3'>Características</h3>
        <div>
            <p>ISBN: {{ $produto['isbn'] }}</p>
            <p>Editora: {{ $produto['editora'] }}</p>
            <p>Número de páginas: {{ $produto['numero_paginas'] }}</p>
            <p>Ano de publicação: {{ $produto['ano_publicacao'] }}</p>
            <p>Edição: {{ $produto['edicao'] }}</p>
        </div>
    </div>


    <div class="row">
        <div class="col mt-5">
            <a href="/produtos" class="btn btn-success">Voltar</a>
        </div>
    </div>

    @endif
</section>

@stop