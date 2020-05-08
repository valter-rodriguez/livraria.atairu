@extends('layouts.master')

@section('title', 'Excluir produto')

@section('content')
@if(isset($produto))
<section id="produtos" class="mt-5">
    <div class="container my-5 py-5">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h1>Excluir {{$produto->nome}}?</h1>
            </div>

            <form action="/admin/produto/excluir/{{$produto->id_produto}}" enctype="multipart/form-data" method="POST" class="col-md-6 mt-1">
                {{csrf_field()}}
                <div class="form-group">
                    <input readonly disabled type="text" name="nome" id="nome" class="form-control" value="{{$produto->nome}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="autor" id="autor" class="form-control" value="{{$produto->autor}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="isbn" id="isbn" class="form-control" value="{{$produto->isbn}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="numero_paginas" id="numero_paginas" class="form-control" value="{{$produto->numero_paginas}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="ano_publicacao" id="ano_publicacao" class="form-control" value="{{$produto->ano_publicacao}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="edicao" id="edicao" class="form-control" value="{{$produto->edicao}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="editora" id="editora" class="form-control" value="{{$produto->editora}}">
                </div>
                <div class="form-group">
                    <input readonly disabled type="text" name="preco" id="preco" class="form-control" value="{{$produto->preco}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger"> Excluir</button>
                </div>
            </form>
            <div class="col-md-4">
                @if(isset($produto->imagem))
                    <img src="../../{{ $produto->imagem }}" class="img-thumbnail" alt="capa de {{ $produto->nome }}">
                @endif
            </div>
        </div>
    </div>
</section>
@else
<section class="container mt-5">
  <div class="alert alert-danger mt-5">Produto não encontrado</div>
  <a href="/admin" class="btn btn-primary">voltar</a>
</section>
@endif
@stop