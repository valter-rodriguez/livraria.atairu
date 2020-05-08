@extends('layouts.master')

@section('content')
<section class="pedido">
  <div class='container py-5'>
    @isset($pedido)
    <div class='d-flex flex-direction-column justify-content-center align-items-center'>
      <div>
        <img src={{ asset('img/orders/order.svg') }}>
      </div>
      <div class='ml-5'>
        <h1>ID do Pedido: #{{ $pedido[0]->id_pedido }}</h1>
        <h2>Visualizar Pedido</h2>
      </div>
    </div>

    <div class="wrapper mt-5 d-flex justify-content-center">
      <div class="arrow-steps clearfix">
        @switch($pedido[0]->status)

        @case('pagamento')
        @default
        <div class="step current done"><span>Aguardando Pagamento</span></div>
        <div class="step"><span>Enviado</span></div>
        <div class="step"><span>Concluído</span></div>
        @break

        @case('enviado')
        <div class="step current done"><span>Aguardando Pagamento</span></div>
        <div class="step current done"><span>Enviado</span></div>
        <div class="step"><span>Concluído</span></div>
        @break

        @case('concluido')
        <div class="step current done"><span>Aguardando Pagamento</span></div>
        <div class="step current done"><span>Enviado</span></div>
        <div class="step current done"><span>Concluído</span></div>
        @break

        @case('cancelado')
        <div class="step current-cancel"><span>Aguardando Pagamento</span></div>
        <div class="step current-cancel"><span>Enviado</span></div>
        <div class="step current-cancel"><span>Cancelado</span></div>
        @break
        @endswitch
      </div>
    </div>

    @endif

    @isset($produtos_pedido)
    <?php $total = 0 ?>
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
          <span>{{ $produto['quantidade'] }}</span>
        </div>
        <div class='d-flex flex-column'>
          <span class='font-weight-bold'>Preço</span>
          <span>R${{ number_format((((float)str_replace( ['.',','], ['','.'], $produto['preco'] )*1.0) * $produto['quantidade']), 2, '.', '') }}</span>
          <?php $total = number_format((((float)str_replace( ['.',','], ['','.'], $produto['preco'] )*1.0) * $produto['quantidade']), 2, '.', '') + $total; ?>
        </div>
      </div>
      @endforeach
    </div>
    <div class="m-0 p-0 float-right">
      <span class="btn btn-total btn-dark">
        Total: R$ {{ number_format($total, 2) ?? '' }}
      </span>
    </div>
    @endisset

    <a href={{ route('pedidos') }} class='btn btn-link mt-5'><i class="fas fa-arrow-left"></i> Voltar</a>
  </div>
</section>

@stop