@extends('layouts.master')

@section('content')
<section class="pedido">
  <div class='container py-5'>
    @if(count($resultado)>=1)
    <div class='d-flex flex-direction-column justify-content-center align-items-center'>
      <div>
        <img src={{ asset('img/orders/order.svg') }}>
      </div>
      <div class='ml-5'>
        <h1>Carrinho</h1>
      </div>
    </div>

    <div class='m-0 p-0 mt-5'>
      <span class="btn btn-pedido btn-dark">
        Total de produtos: <span class="badge badge-light">{{ count($resultado) }}</span>
      </span>
    </div>
    <div class='lista'>
      <?php $total = 0 ?>
      @foreach($resultado as $produto)

      <div class='pedido-lista'>
        <img src='{{ asset($produto->imagem) }}'>
        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>{{ $produto->titulo }}</span>
          <span class='font-italic'><small>{{ $produto->autor }}</small></span>
        </div>
        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>Quantidade</span>
          <form action="/carrinho/update/{{ $produto->id_cliente }}/{{ $produto->id_produto }}"
            enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <input type="number" id='quantidade' name="quantidade" value={{ $produto->quantidade }} min="1">
            <button class="btn btn-dark btn-sm">
              <i class="fas fa-sync"></i>
            </button>
          </form>
          <form action="/carrinho/delete/{{ $produto->id_cliente }}/{{ $produto->id_produto }}"
            enctype="multipart/form-data" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link">Remover</button>
          </form>
        </div>
        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>Preço</span>
          <span>R${{ number_format((((float)str_replace( ['.',','], ['','.'], $produto->preco )*1.0) * $produto->quantidade), 2, '.', '') }}</span>
        </div>
      </div>
      <?php $total = number_format((((float)str_replace( ['.',','], ['','.'], $produto->preco )*1.0) * $produto->quantidade), 2, '.', '') + $total; ?>
      @endforeach
    </div>
    @isset($total)
    <div class="m-0 p-0 float-right">
      <span class="btn btn-total btn-dark">
        Total: R$ {{ number_format($total, 2) ?? '' }}
      </span>
    </div>
    @endisset

    <div class='checkout'>
      <a href={{ url()->previous() }} class='btn btn-link mt-5 float-left'><i class="fas fa-arrow-left"></i> Voltar</a>
      <form action="../pedidos/new" class='float-right' enctype="multipart/form-data" method="post">
        @csrf
        <button class="btn btn-success btn-checkout">Checkout <i class="fas fa-shopping-basket"></i></button>
      </form>
    </div>
    @endif
    @if(count($resultado)<1) <div class='text-center mt-5'>
      <img src={{ asset('img/orders/no-orders.svg') }}>
      <h3 class='mt-5'>Carrinho vazio</h3>
  </div>
  @endif
  </div>
</section>

@stop