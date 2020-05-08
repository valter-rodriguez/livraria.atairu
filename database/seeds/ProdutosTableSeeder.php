<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Produto;

class ProdutosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$produtos = collect([
			[
				'isbn' => '9788547000646',
				'nome' => 'Minha História',
				'autor' => 'Michelle Obama',
				'sinopse' => 'Um relato íntimo, poderoso e inspirador da ex-primeira-dama dos Estados Unidos. O livro que já vendeu mais de 10 milhões de exemplares no mundo e está há mais de 50 semanas na lista de mais vendidos da Veja. Com uma vida repleta de realizações significativas, Michelle Obama se consolidou como uma das mulheres mais icônicas e cativantes de nosso tempo. Como primeira-dama dos Estados Unidos — a primeira afro-americana a ocupar essa posição —, ela ajudou a criar a mais acolhedora e inclusiva Casa Branca da história. Ao mesmo tempo, se posicionou como uma poderosa porta-voz das mulheres e meninas nos Estados Unidos e ao redor do mundo, mudando drasticamente a forma como as famílias levam suas vidas em busca de um modelo mais saudável e ativo, e se posicionando ao lado de seu marido durante os anos em que Obama presidiu os Estados Unidos em alguns dos momentos mais angustiantes da história do país. Ao longo do caminho, ela nos ensinou alguns passos de dança, arrasou no Carpool Karaoke e criou duas filhas responsáveis e centradas, apesar do impiedoso olhar da mídia.Em suas memórias, um trabalho de profunda reflexão e com uma narrativa envolvente, Michelle Obama convida os leitores a conhecer seu mundo, recontando as experiências que a moldaram — da infância na região de South Side, em Chicago, e os seus anos como executiva tentando equilibrar as demandas da maternidade e do trabalho, ao período em que passou no endereço mais famoso do mundo. Com honestidade e uma inteligência aguçada, ela descreve seus triunfos e suas decepções, tanto públicas quanto privadas, e conta toda a sua história, conforme a viveu — em suas próprias palavras e em seus próprios termos. Reconfortante, sábio e revelador, Minha história traz um relato íntimo e singular, de uma mulher com alma e consistência que desafiou constantemente as expectativas — e cuja história nos inspira a fazer o mesmo.',
				'id_categoria' => 'Biografia',
				'numero_paginas' => '464',
				'ano_publicacao' => '2018',
				'edicao' => '1',
				'editora' => 'Objetiva',
				'preco' => '50,32',
				'imagem' => '../img/livros/9788547000646.jpg'
			],

			[
				'isbn' => '9788535923438',
				'nome' => 'Eu sou Malala',
				'autor' => 'Malala Yousafzai',
				'sinopse' => 'Quando o Talibã tomou controle do vale do Swat, uma menina levantou a voz. Malala Yousafzai recusou-se a permanecer em silêncio e lutou pelo seu direito à educação. Mas em 9 de outubro de 2012, uma terça-feira, ela quase pagou o preço com a vida. Malala foi atingida na cabeça por um tiro à queima-roupa dentro do ônibus no qual voltava da escola. Poucos acreditaram que ela sobreviveria. Mas a recuperação milagrosa de Malala a levou em uma viagem extraordinária de um vale remoto no norte do Paquistão para as salas das Nações Unidas em Nova York. Aos dezesseis anos, ela se tornou um símbolo global de protesto pacífico e a candidata mais jovem da história a receber o Prêmio Nobel da Paz. Eu sou Malala é a história de uma família exilada pelo terrorismo global, da luta pelo direito à educação feminina e dos obstáculos à valorização da mulher em uma sociedade que valoriza filhos homens. O livro acompanha a infância da garota no Paquistão, os primeiros anos de vida escolar, as asperezas da vida numa região marcada pela desigualdade social, as belezas do deserto e as trevas da vida sob o Talibã. Escrito em parceria com a jornalista britânica Christina Lamb, este livro é uma janela para a singularidade poderosa de uma menina cheia de brio e talento, mas também para um universo religioso e cultural cheio de interdições e particularidades, muitas vezes incompreendido pelo Ocidente.',
				'id_categoria' => 'Biografia',
				'numero_paginas' => '360',
				'ano_publicacao' => '2013',
				'edicao' => '1',
				'editora' => 'Companhia Das Letras',
				'preco' => '44,90',
				'imagem' => '../img/livros/9788535923438.jpg'
			],

			[
				'isbn' => '9788576082675',
				'nome' => 'Código Limpo: Habilidades Práticas do Agile Software',
				'autor' => 'Robert C. Martin',
				'sinopse' => 'O renomado especialista em software, Robert C. Martin, apresenta um paradigma revolucionário com Código limpo: Habilidades Práticas do Agile Software. Martin se reuniu com seus colegas do Mentor Object para destilar suas melhores e mais ágeis práticas de limpar códigos “dinamicamente” em um livro que introduzirá gradualmente dentro de você os valores da habilidade de um profissional de softwares e lhe tornar um programador melhor –mas só se você praticar.',
				'id_categoria' => 'Informática',
				'numero_paginas' => '456',
				'ano_publicacao' => '2009',
				'edicao' => '1',
				'editora' => 'Alta Books',
				'preco' => '96,90',
				'imagem' => '../img/livros/9788576082675.jpg'
			],

			[
				'isbn' => '9788550800653',
				'nome' => 'Domain-Driven Design: Atacando as Complexidades no Coração do Software',
				'autor' => 'Eric Evans',
				'sinopse' => 'Reunindo práticas de design e implementação, este livro incorpora vários exemplos baseados em projetos que ilustram a aplicação do design dirigido por domínios no desenvolvimento de softwares na vida real.',
				'id_categoria' => 'Informática',
				'numero_paginas' => '528',
				'ano_publicacao' => '2016',
				'edicao' => '3',
				'editora' => 'Alta Books',
				'preco' => '63,00',
				'imagem' => '../img/livros/9788550800653.jpg'
			],

			[
				'isbn' => '9788584424573',
				'nome' => 'Drácula - Edição De Luxo',
				'autor' => 'Bram Stoker',
				'sinopse' => 'Bram Stoker é o criador genial de uma das mais famosas e horripilantes histórias de terror de todos os tempos. Drácula é uma história de vampiros e lobisomens, de criaturas que estando mortas permanecem vivas. Baseado no folclore da Transilvânia e num personagem real (o rei Vlad, o Empalador), redigiu um relato que tem assombrado gerações consecutivas de leitores, transformando-se num mito adaptado para o cinema, quadrinhos e TV, talvez o mais significativo destes últimos dois séculos. Na história, um jovem inglês é mantido em cativeiro, à espera de um destino terrível. Longe dele, sua noiva bela e jovem é atacada por uma doença misteriosa que parece extrair o sangue de suas veias. Por trás de tudo, a força sinistra que ameaça suas vidas: Conde Drácula, o vampiro vindo do fundo dos séculos.',
				'id_categoria' => 'Literatura Estrangeira',
				'numero_paginas' => '432',
				'ano_publicacao' => '2019',
				'edicao' => '1',
				'editora' => 'Pandorga',
				'preco' => '59,90',
				'imagem' => '../img/livros/9788584424573.jpg'
			],

			[
				'isbn' => '9788594318237',
				'nome' => 'O Morro Dos Ventos Uivantes',
				'autor' => 'Emily Brontë',
				'sinopse' => 'Único romance da escritora inglesa Emily Bronte, O morro dos ventos uivantes retrata uma trágica historia de amor e obsessão em que os personagens principais são a obstinada e geniosa Catherine Earnshaw e seu irmão adotivo, Heathcliff. Grosseiro, humilhado e rejeitado, ele guarda apenas rancor no coração, mas tem com Catherine um relaciona- mento marcado por amor e, ao mesmo tempo, ódio. Essa ligação perdura mesmo com o casamento de Catherine com Edgar Linton.',
				'id_categoria' => 'Literatura Estrangeira',
				'numero_paginas' => '368',
				'ano_publicacao' => '2019',
				'edicao' => '2',
				'editora' => 'Principis',
				'preco' => '19,90',
				'imagem' => '../img/livros/9788594318237.jpg'
			],

			[
				'isbn' => '9788525056009',
				'nome' => 'Admirável Mundo Novo',
				'autor' => 'Aldous Huxley',
				'sinopse' => 'Uma sociedade inteiramente organizada segundo princípios científicos, na qual a mera menção das antiquadas palavras “pai” e “mãe” produzem repugnância. Um mundo de pessoas programadas em laboratório, e adestradas para cumprir seu papel numa sociedade de castas biologicamente definidas já no nascimento. Um mundo no qual a literatura, a música e o cinema só têm a função de solidificar o espírito de conformismo. Um universo que louva o avanço da técnica, a linha de montagem, a produção em série, a uniformidade, e que idolatra Henry Ford. Essa é a visão desenvolvida no clarividente romance distópico de Aldous Huxley, que ao lado de 1984, de George Orwell, constituem os exemplos mais marcantes, na esfera literária, da tematização de estados autoritários. Se o livro de Orwell criticava acidamente os governos totalitários de esquerda e de direita, o terror do stalinismo e a barbárie do nazifascismo, em Huxley o objeto é a sociedade capitalista, industrial e tecnológica, em que a racionalidade se tornou a nova religião, em que a ciência é o novo ídolo, um mundo no qual a experiência do sujeito não parece mais fazer nenhum sentido, e no qual a obra de Shakespeare adquire tons revolucionários. Entretanto, o moderno clássico de Huxley não é um mero exercício de futurismo ou de ficção científica. Trata-se, o que é mais grave, de um olhar agudo acerca das potencialidades autoritárias do próprio mundo em que vivemos.',
				'id_categoria' => 'Literatura Estrangeira',
				'numero_paginas' => '312',
				'ano_publicacao' => '2014',
				'edicao' => '1',
				'editora' => 'Biblioteca Azul',
				'preco' => '44,90',
				'imagem' => '../img/livros/9788525056009.jpg'
			],

			[
				'isbn' => '9788532508126',
				'nome' => 'A Hora da Estrela',
				'autor' => 'Clarice Lispector',
				'sinopse' => 'Entre a realidade e o delírio, buscando o social enquanto sua alma a engolfava, Clarice escreveu um livro singular. "A Hora da Estrela" é um romance sobre o desamparo a que, apesar da linguagem, todos estamos entregues.',
				'id_categoria' => 'Literatura Nacional',
				'numero_paginas' => '88',
				'ano_publicacao' => '1998',
				'edicao' => '1',
				'editora' => 'Rocco',
				'preco' => '19,90',
				'imagem' => '../img/livros/9788532508126.jpg'
			],

			[
				'isbn' => '9788520927823',
				'nome' => 'O Cortiço',
				'autor' => 'Aluísio de Azevedo',
				'sinopse' => 'Publicado em 1890, é considerado uma obra-prima do Naturalismo brasileiro. Apesar da influência notável de Émile Zola, o vigor e a originalidade da narrativa que abordou os problemas sociais de fins do século XIX, possuindo como “cenário” principal um cortiço, são perceptíveis. Pintor de variada galeria de tipos e da representação do cotidiano, Aluísio Azevedo ficou conhecido por seu traço forte e principalmente por personificar a fase naturalista brasileira.',
				'id_categoria' => 'Literatura Nacional',
				'numero_paginas' => '272',
				'ano_publicacao' => '2016',
				'edicao' => '1',
				'editora' => 'Nova Fronteira',
				'preco' => '19,90',
				'imagem' => '../img/livros/9788520927823.jpg'
			],
		]);


		$produtos->map(function ($item) {
			$novoProduto = new Produto();
			$novoProduto->isbn = $item['isbn'];
			$novoProduto->nome = $item['nome'];
			$novoProduto->autor = $item['autor'];
			$novoProduto->sinopse = $item['sinopse'];
			$novoProduto->id_categoria = DB::table('produto_categoria')->where('nome_categoria', $item['id_categoria'])->value('id_categoria');
			$novoProduto->numero_paginas = $item['numero_paginas'];
			$novoProduto->ano_publicacao = $item['ano_publicacao'];
			$novoProduto->edicao = $item['edicao'];
			$novoProduto->editora = $item['editora'];
			$novoProduto->preco = $item['preco'];
			$novoProduto->imagem = $item['imagem'];
			$novoProduto->save();
		});
	}
}
