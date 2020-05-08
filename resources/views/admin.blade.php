@extends('layouts.master')

@section('title', 'Admin')

@section('content')
<div class="container my-5" id='admin'>
  <h1 class='mb-5'>Produtos
    <a href="/admin/produto/create" class="btn btn-success mb-2">Novo produto <i class="fas fa-plus"></i></a>
  </h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Categoria</td>
        <td>Ações</td>
      </tr>
    </thead>
    <tbody>
      @if(isset($produto) && count($produto) > 0)
      @foreach($produto as $produto)
      <tr>
        <td>
          {{$produto->id_produto}}
        </td>
        <td>
          {{$produto->nome}}
        </td>
        <td>
          {{$produto->categoria->nome_categoria}}
        </td>
        <td>
          <a href="/admin/produto/{{ $produto->id_produto }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
          <a href="/admin/produto/excluir/{{ $produto->id_produto }}" class="btn btn-danger"><i
              class="fas fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
      @else

      <tr class="alert alert-info">
        <td>Nenhum produto para exibir</td>
      </tr>

      @endif
    </tbody>
  </table>
</div>
@stop