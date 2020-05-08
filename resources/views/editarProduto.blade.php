@extends('layouts.master')

@section('title', 'Cadastro de Produto')

@section('content')
<div class="container my-5 py-5">
  <h1>Editar produto</h1>
  <form method="post" enctype="multipart/form-data" action="/admin/produto/{{$produto->id_produto}}">
    @csrf
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="{{$produto->nome}}">
    </div>
    <div class="form-group">
      <label for="sinopse">Sinopse</label>
      <textarea name="sinopse" id="sinopse" class="form-control" rows=5>{{$produto->sinopse}}</textarea>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor" class="form-control" value="{{$produto->autor}}">
    </div>
    <div class="form-group">
        <label for="isbn">Isbn</label>
        <input type="text" name="isbn" id="isbn" class="form-control" value="{{$produto->isbn}}">
    </div>
    <div class="form-group">
        <label for="numero_paginas">Número de Páginas</label>
        <input type="text" name="numero_paginas" id="numero_paginas" class="form-control" value="{{$produto->numero_paginas}}">
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano da publicação</label>
        <input type="text" name="ano_publicacao" id="ano_publicacao" class="form-control" value="{{$produto->ano_publicacao}}">
    </div>
    <div class="form-group">
        <label for="edicao">Edição</label>
        <input type="text" name="edicao" id="edicao" class="form-control" value="{{$produto->edicao}}">
    </div>
    <div class="form-group">
        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora" class="form-control" value="{{$produto->editora}}">
    </div>
    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" name="preco" id="preco" class="form-control" value="{{$produto->preco}}">
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select name="categoria" id="id_categoria" class="form-control" value="{{$produto->id_categoria}}">
            <option disabled selected>Selecione uma opção</option>
            @if(isset($categorias))
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id_categoria }}"{{($categoria->id_categoria == $produto->id_categoria) ? 'selected' : ''}}>
              {{ $categoria->nome_categoria }}
            </option>
            @endforeach
            @endif
        </select>
    </div>
    <div class="form-group col-md-4">
      <img src="{{ asset($produto->imagem) }}" class="img-thumbnail" alt="capa de {{ $produto->nome }}">
    </div>
    <div class="form-group">
      <label for="imagem">Imagem</label> <br>
      <input type="file" name="imagem" id="imagem">
    </div>
    <div class="form-group">
      <button class="btn btn-success">Enviar</button>
    </div>
  </form>
</div>
@stop