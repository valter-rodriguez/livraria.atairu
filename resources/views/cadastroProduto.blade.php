@extends('layouts.master')

@section('title', 'Cadastro de Produto')

@section('content')
<div class="container my-5 py-5">
  <h1>Cadastro de produtos</h1>
  <form method="post" enctype="multipart/form-data" action="/admin/produto/insert">
    @csrf
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="sinopse">Sinopse</label>
        <textarea name="sinopse" id="sinopse" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor" class="form-control">
    </div>
    <div class="form-group">
        <label for="isbn">Isbn</label>
        <input type="text" name="isbn" id="isbn" class="form-control">
    </div>
    <div class="form-group">
        <label for="numero_paginas">Número de Páginas</label>
        <input type="text" name="numero_paginas" id="numero_paginas" class="form-control">
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano da publicação</label>
        <input type="text" name="ano_publicacao" id="ano_publicacao" class="form-control">
    </div>
    <div class="form-group">
        <label for="edicao">Edição</label>
        <input type="text" name="edicao" id="edicao" class="form-control">
    </div>
    <div class="form-group">
        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora" class="form-control">
    </div>
    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" name="preco" id="preco" class="form-control">
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select name="categoria" id="id_categoria" class="form-control">
            <option disabled selected>Selecione uma opção</option>
            @if(isset($categorias))
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id_categoria }}">
              {{ $categoria->nome_categoria }}
            </option>
            @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
      <label for="imagem">Imagem</label> <br>
      <input type="file" name="imagem" id="imagem">
    </div>
    <div class="form-group">
      <button class="btn btn-success">Cadastrar</button>
    </div>
  </form>
</div>
@stop