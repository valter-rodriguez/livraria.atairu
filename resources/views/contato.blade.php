@extends('layouts.master')

@section('content')

<main>
	<section> 
	<h1 class="text-center itulo-contato">Fale Conosco</h1>

		<div class="container container-contato">
			<div class="row mt-5">
				<div class="col- col-sm-6 col-md-6 col-lg-6 col-xl-6 contato-form">
					<form class="bg-ligt rounded p-4 box-shadow" action="">
						<div class="form-group">
							<label for="clienteNome">Nome</label>
							<input type="text" class="form-control" id="clienteNome">
						</div>
						<div class="form-group">
							<label for="clienteEmail">E-mail</label>
							<input type="email" class="form-control" id="clienteEmail">
						</div>
						<div class="form-group">
							<label for="clienteMensagem">Mensagem</label>
							<textarea id="clienteMensagem" class="form-control" rows="4"></textarea>
						</div>
						<button type="submit" class="btn">Enviar</button>
					</form>
				</div>

				<div class="col- col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<p class="endereco-contato">Nosso Endereço</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.051229883106!2d-46.67744548531717!3d-23.60249558466244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1574647251106!5m2!1spt-BR!2sbr" width="500" height="300" class="d-flex justify-content-left mb-3" frameborder="0" style="border:0;" allowfullscreen="" ;></iframe>

					<p class="endereco-contato">Dados do Contato</p>
					<ul class="list-unstyled text-left">
						<li class="text-contato"> E-mail: contato@atairu.com.br</li>
						<li class="text-contato"> Telefone: 11 2233 4455</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

@stop