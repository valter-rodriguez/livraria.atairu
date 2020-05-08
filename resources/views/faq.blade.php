@extends('layouts.master')

@section('content')

<main>
	<h1 class="text-center">FAQ</h1>

	<div class="container-faq">
		<div class="accordion">
			<div class="accordion-item">
				<a>O que é Ataîru?</a>
				<div class="content-faq">
					<p>A Ataîru é uma livraria online. Seu nome tem raízes tupi guarani e significa companheiro de viagem.</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Onde está meu pedido?</a>
				<div class="content-faq">
					<p>Você consegue acompanhar todos os passos do seu pedido em nosso site. Faça seu login e você terá todas as informações sobre os seus pedidos.</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Meu pedido veio incompleto</a>
				<div class="content-faq">
					<p>O seu pedido pode ter sido enviado parcialmente para agilizarmos a entrega dos produtos reservados. Faça seu login para conferir quantas remessas enviamos ao seu endereço, pois sendo enviado em remessas separadas a entrega ocorrerá em momentos diferentes.</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Como alterar meu endereço de entrega?</a>
				<div class="content-faq">
					<p>Para alterar seu endereço de entrega, entre em sua conta. É importante ressaltar que após o fechamento da compra não será possível alterar o endereço do destinatário, incluir/substituir produtos do pedido, serviços de entrega ou a modalidade de pagamento.</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Esqueci minha senha, como posso recuperá-la?</a>
				<div class="content-faq">
					<p>Entre na página de login e escolha a opção "Esqueceu a senha?".</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Quais são as formas de pagamento?</a>
				<div class="content-faq">
					<p>Cartões de Créditos
						Visa, Mastercard, e Elo
						Boleto Bancário
						Disponível para compras acima de R$ 30,00, o boleto bancário é aceito para pagamento à vista e pode ser pago em qualquer banco. O prazo para pagamento é de até 2 dias úteis, caso o pagamento não seja efetuado até a data do vencimento, o pedido será automaticamente cancelado. O prazo de compensação bancária é de 1 até 3 dias úteis, e o tempo de entrega informado no processo de compra, começa a contar apenas após a confirmação do pagamento.</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Como efetuar uma devolução de um produto?</a>
				<div class="content-faq">
					<p>Após efetuar o login, selecione o item e finalize clicando em "Fazer Devolução". Será gerado um documento de habilitação que deve ser enviado junto ao produto em uma agência própria dos Correios (não haverá custos para o envio).</p>
				</div>
			</div>
			<div class="accordion-item">
				<a>Vocês possuem loja física?</a>
				<div class="content-faq">
					<p>Infelizmente, até o presente momento só efetuamos a venda de produtos online. Porém, temos planos de expansão para lojas físicas.</p>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
	const items = document.querySelectorAll(".accordion a");

	function toggleAccordion() {
		this.classList.toggle('active');
		this.nextElementSibling.classList.toggle('active');
	}

	items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

@stop