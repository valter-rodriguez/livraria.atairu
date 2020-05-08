@extends('layouts.master')
@include('home_carousel')

@section('content')

<main id='home'>

	@yield('home_carousel')

	<section id='section-editoras'>
		<h2>BUSCA POR EDITORAS</h2>
		<div class="row py-5 editoras">
			<div class="col-lg-3">
				<!-- Item -->
				<a href='../alta'>
					<figure class="caption-3 mb-0 shadow-sm p-3">
						<img src="../img/alta-books-bg.jpg" alt="" class="w-100 editora-imagem">
						<figcaption class="px-3 py-3 bg-white shadow-sm">
							<h2 class="h5 m-0 font-weight-bold font-italic"><img src="../img/Alta-Books.jpg"></h2>
						</figcaption>
					</figure>
				</a>

			</div>

			<div class="col-lg-3">
				<!-- Item -->
				<a href='../rocco'>
					<figure class="caption-3 mb-0 shadow-sm p-3">
						<img src="../img/rocco-bg.jpg" alt="" class="w-100 editora-imagem">
						<figcaption class="px-3 py-3 bg-white shadow-sm">
							<h2 class="h5 m-0 font-weight-bold font-italic"><img src="../img/rocco.jpg"></h2>
						</figcaption>
					</figure>
				</a>

			</div>
			<div class="col-lg-3">
				<!-- Item -->
				<a href='../ciadasletras'>
					<figure class="caption-3 mb-0 shadow-sm p-3">
						<img src="../img/companhia-das-letras-bg.jpg" alt="" class="w-100 editora-imagem">
						<figcaption class="px-3 py-3 bg-white shadow-sm">
							<h2 class="h5 m-0 font-weight-bold font-italic"><img src="../img/companhia-das-letras.jpg"></h2>
						</figcaption>
					</figure>
				</a>

			</div>
	</section>

	<!-- Formulário de newsletter -->
	<section class="home-newsletter">
		<div class="newsletter-info">
			<h1>Newsletter</h1>
			<p>Assine e fique por dentro das novidades</p>
		</div>
		<form class="newsletter-form">
			<input type="text" placeholder="Digite seu e-mail">
			<button type="submit">Assinar</button>
		</form>
		
		
	</section>

</main>

<?php $show_glide = TRUE; ?>
@stop