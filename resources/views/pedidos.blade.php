@extends('layouts.master')

@section('content')
<section id="lista-pedidos">
  <div class='container py-5'>
    <h1>Meus pedidos</h1>
    @if(count($pedidos)>=1)
    <div class='text-center my-5'>
      <span class="btn btn-dark">
        Total de pedidos: <span class="badge badge-light">{{ count($pedidos) }}</span>
      </span>
    </div>
    @foreach($pedidos as $pedido)
    <div>
      @switch($pedido['status'])

      @case('pagamento')
      <div class='lista-pedidos-item'>
        <div class='m-auto'>
          <img src={{ asset('img/orders/awaiting-payment.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Aguardando pagamento</span>
        </div>
        <div class='pedidos-botoes'>
          <a href='../pedido/{{ $pedido['id_pedido']}}' class='pedido-botao'><button type="button"
              class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
          <a href='../pedido/update/{{ $pedido['id_pedido']}}' class='pedido-botao'><button type="button"
              class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
          <form action="../pedido/delete/{{ $pedido['id_pedido']}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </div>
      @break

      @case('enviado')
      <div class='lista-pedidos-item'>
        <div class='m-auto'>
          <img src={{ asset('img/orders/shipped.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Pedido Enviado</span>
        </div>
        <div class='pedidos-botoes'>
          <a href='../pedido/{{ $pedido['id_pedido']}}' class='pedido-botao'><button type="button"
              class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
          <button type="button" class="btn btn-secondary" disabled><i class="fas fa-edit"></i></button>
          <button type="button" class="btn btn-secondary" disabled><i class="fas fa-trash"></i></button>
        </div>
      </div>
      @break

      @case('concluido')
      <div class='lista-pedidos-item'>
        <div class='m-auto'>
          <img src={{ asset('img/orders/complete.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Pedido Concluído</span>
        </div>
        <div class='pedidos-botoes'>
          <a href='../pedido/{{ $pedido['id_pedido']}}' class='pedido-botao'><button type="button"
              class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
          <button type="button" class="btn btn-secondary" disabled><i class="fas fa-edit"></i></button>
          <form action="../pedido/delete/{{ $pedido['id_pedido']}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </div>
      @break

      @case('cancelado')
      @default
      <div class='lista-pedidos-item'>
        <div class='m-auto'>
          <img src={{ asset('img/orders/cancelled.svg') }} class='status-pedido'>
        </div>

        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Pedido Cancelado</span>
        </div>
        <div class='pedidos-botoes'>
          <a href='../pedido/{{ $pedido['id_pedido']}}' class='pedido-botao'><button type="button"
              class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
          <button type="button" class="btn btn-secondary" disabled><i class="fas fa-edit"></i></button>
          <form action="../pedido/delete/{{ $pedido['id_pedido']}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </form>
        </div>
      </div>
      @break
      @endswitch

    </div>
    @endforeach
    @endif

    @if(count($pedidos)<1) <div class='text-center mt-5'>
      <img src={{ asset('img/orders/no-orders.svg') }}>
      <h3 class='mt-5'>Nenhum pedido feito até agora</h3>
  </div>
  @endif
  </div>
</section>

@stop