@extends('layouts.master')

@section('content')
<section id="produtos" class="new-products mt-5">
	<div class="container text-center">
		@if(isset($nomeCategoria))
		<div class="row mb-5">
			<div class="col-xs-12">
				<img src={{ asset('img/orders/category.svg') }} class='category-image'>
				<h1 class='ml-5 text-center'>Categoria: {{$nomeCategoria}}</h1>
			</div>
		</div>
		@endif
		<div class="row main-produtos">

			@if(count($produtos)>=1)

			@foreach($produtos as $produto)

			<div class="livro col-sm-12 col-lg-4 my-4">
				<div class="card p-4">
					<img class="card-img-top produto-imagem" src="{{ asset($produto['imagem']) }}">
					<div class="card-body">
						<h5 class="card-title text-center mb-0">{{ $produto['nome'] }}</h5>
						<small class="card-title text-center font-italic">{{ $produto['autor'] }}</small>
						<h3 class='my-1'>R$ {{ $produto['preco'] }}</h3>
						<a href="/produto/{{ $produto['id_produto'] }}"
							class="d-flex btn btn-success mt-3 justify-content-center comprar">Saiba mais</a>
					</div>
				</div>
			</div>
			@endforeach

			{{-- {{ $produtos->render() }} --}}

			@else

			<div class="col-md-12 alert alert-danger">
				Nenhum produto para exibir
			</div>

			@endif

		</div>
	</div>
</section>

@stop