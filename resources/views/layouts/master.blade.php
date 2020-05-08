<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Carousel Glide.js -->
	<link rel="stylesheet" href={{ asset('js/slick-master/slick/slick.css') }}>
	<link rel="stylesheet" href={{ asset('js/slick-master/slick/slick-theme.css') }}>
	<link rel="stylesheet" href={{ asset('css/alterarConta.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/cadastro.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/carrinho.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/conta.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/contato.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/faq.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/index.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/login.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/pedido.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/produtos.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/sobre.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/vizprod.css') }} type="text/css">
	<link rel="stylesheet" href={{ asset('css/email-reset.css') }} type="text/css">
	<title>Livraria Ataîru | Seu companheiro de viagem</title>
</head>

<body>

	<header>
		<div id="menu">
			<div class="logo">
				<a href="/"><img src={{ asset('img/LivrariaAtairu-logo-Courier_New.png') }} alt="Logo Livraria Ataîru"></a>
			</div>
			<div class="busca">
				<form action="/busca" method="POST" enctype="multipart/form-data" role="search">
					@csrf
					<input class="search" type="text" name='busca' id='busca' placeholder="Buscar...">
					<button class="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="login">
				<div>
					<i class="fas fa-user icon"></i>
				</div>
				<!-- Authentication Links -->
				@guest
				<div id="texto_cadastro">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</div>
				@endguest
				@auth
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false" v-pre>
					<?php 
					$nomeCompleto = Auth::user()->name;
					$primeiroNome = explode(' ', $nomeCompleto);
					?>
					{{ $primeiroNome[0] }} <span class="caret"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					@if(Auth::user()->auth === 1)
					<a class="dropdown-item" href="{{ route('admin') }}">
						{{ __('Painel Admin') }}
					</a>
					@endif
					<a class="dropdown-item" href="{{ route('conta.index') }}">
						{{ __('Minha conta') }}
					</a>
					<a class="dropdown-item" href="{{ route('pedidos') }}">
						{{ __('Meus pedidos') }}
					</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
						{{ __('Sair') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
				@endauth
			</div>
			<div class="carrinho">
				<a href="{{ route('carrinho') }}">
					<i class="fas fa-shopping-cart icon"></i>
				</a>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light p-0">
			<button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				aria-controls="navbarDropdownMenuLink" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="dropdown-item" href="/produtos">Todos</a>
					</li>
					<li class="nav-item">
						<a class="dropdown-item" href="/produtos/categoria/1">Biografia</a>
					</li>
					<li class="nav-item">
						<a class="dropdown-item" href="/produtos/categoria/2">Informática</a>
					</li>
					<li class="nav-item">
						<a class="dropdown-item" href="/produtos/categoria/3">Literatura Estrangeira</a>
					</li>
					<li class="nav-item">
						<a class="dropdown-item" href="/produtos/categoria/4">Literatura Nacional</a>
					</li>
				</ul>
			</div>
		</nav>

	</header>
	<div class="page-container">



		@yield('content')


		<footer>
			<div class="seta">
				<a href="#menu">
					<img src={{ asset('img/up.svg') }} alt="">
				</a>
			</div>
			<div class="container-footer">
				<div class="atairu">
					<h3>Sobre</h3>
					<ul>
						<li><a href="/sobre">Quem somos</a></li>
						<li><a href="/contato">Contato</a></li>
					</ul>
				</div>
				<div class="atendimento">
					<h3>Atendimento</h3>
					<ul>
						<li><a href="/faq">FAQ</a></li>
					</ul>
				</div>
				<div class="pagamento">
					<h3>Formas de pagamentos</h3>
					<ul>
						<li><img src={{ asset('img/payment-mastercard.svg') }} alt=""></li>
						<li><img src={{ asset('img/payment-visa.svg') }} alt=""></li>
						<li><img src={{ asset('img/payment-paypal.svg') }} alt=""></li>
					</ul>
					<div class="social_midia">
						<h3>Mídias Sociais</h3>
						<ul class="social-media">
							<li><a href="#" class="footer_fb"><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#" class="footer_twitter"><i class="fab fa-twitter-square"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
			<div class="msg">2019 | Livraria Ataîru | Projeto Integrador - Grupo 4 | Digital House </div>
		</footer>
	</div>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src={{ asset('js/jQuery-Mask-Plugin-master/dist/jquery.mask.js') }}></script>
	<script src={{ asset('js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js') }}></script>
	<script src={{ asset('js/preenche_cep.js') }} type="text/javascript"></script>
	<script src={{ asset('js/validacoes_cliente.js') }} type="text/javascript"></script>
	<!-- Bootstrap -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

	<!-- Optional Slick slides -->
	<?php if (isset($show_glide) && ($show_glide)) { ?>
	<script src={{ asset('js/slick-master/slick/slick.js') }}></script>
	<script src={{ asset('js/index.js') }}></script>
	<?php } ?>


</body>

</html>