@extends('layouts.master')

@section('content')
<section class="pedido">
  <div class='container py-5'>

    @isset($produtos_pedido)
    <div class='d-flex flex-direction-column justify-content-center align-items-center'>
      <div>
        <img src={{ asset('img/orders/order.svg') }}>
      </div>
      <div class='ml-5'>
        <h1>ID do Pedido: #{{ $produtos_pedido->first->id_pedido->id_pedido }}</h1>
        <h2>Editar Pedido</h2>
      </div>
    </div>

    <div class='m-0 p-0 mt-5'>
      <span class="btn btn-pedido btn-dark">
        Total de produtos: <span class="badge badge-light">{{ count($produtos_pedido) }}</span>
      </span>
    </div>
    <div class='lista'>
      @foreach($produtos_pedido as $produto)
      <div class='pedido-lista'>
        <img src={{ asset($produto['imagem']) }}>
        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>{{ $produto['nome'] }}</span>
          <span class='font-italic'><small>{{ $produto['autor'] }}</small></span>
        </div>
        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>Quantidade</span>
          <form action="/pedido/update/{{ $produto['id_pedido'] }}/{{ $produto['id_produto'] }}"
            enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <input type="number" id='quantidade' name="quantidade" value={{ $produto['quantidade'] }} min="1">
            <button class="btn btn-dark btn-sm">
              <i class="fas fa-sync"></i>
            </button>
        </div>
        </form>

        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>Preço</span>
          <span>R${{ number_format((((float)str_replace( ['.',','], ['','.'], $produto->preco )*1.0) * $produto->quantidade), 2, '.', '') }}</span>
        </div>
      </div>
      @endforeach
    </div>
    @endisset

    <a href={{ route('pedidos') }} class='btn btn-link mt-5'><i class="fas fa-arrow-left"></i> Voltar</a>
  </div>
</section>

@stop