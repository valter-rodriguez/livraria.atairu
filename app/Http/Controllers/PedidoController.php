<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\Produto_pedido;

class PedidoController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function insert()	//Envia o update
	{

		$id_user = auth()->user()->id;

		//Cria novo pedido
		$novoPedido = Pedido::create(
			[
				'id_cliente' => $id_user,
				'status' => 'pagamento',
			]
		);
		$novoPedido->save();

		//Pega produtos do carrinho
		$produtosPedido = DB::table('carrinho')
			->join('produto', 'carrinho.id_produto', '=', 'produto.id_produto')
			->where('carrinho.id_cliente', '=', $id_user)
			->select('carrinho.id_cliente', 'carrinho.id_produto AS id_produto', 'produto.imagem', 'carrinho.produto_nome AS titulo', 'produto.autor', 'carrinho.quantidade', 'carrinho.preco')
			->get();

		//Adiciona produtos do carrinho do cliente ao pedido
		$produtosPedido->map(function ($item) {
			$novoprodutosPedido = new Produto_pedido();
			$id_pedido = DB::table('pedido')->orderBy('id_pedido', 'desc')->select('id_pedido')->first();
			$novoprodutosPedido->id_pedido = $id_pedido->id_pedido;
			$novoprodutosPedido->id_produto = $item->id_produto;
			$novoprodutosPedido->nome = $item->titulo;
			$novoprodutosPedido->autor = $item->autor;
			$novoprodutosPedido->quantidade = $item->quantidade;
			$novoprodutosPedido->preco = $item->preco;
			$novoprodutosPedido->imagem = $item->imagem;
			$novoprodutosPedido->save();
		});

		//Limpa o carrinho
		DB::table('carrinho')
			->join('produto', 'carrinho.id_produto', '=', 'produto.id_produto')
			->where('carrinho.id_cliente', '=', $id_user)
			->delete();

		return redirect('pedidos');
	}

	public function index()	//Volta todos os pedidos do usuário logado
	{
		$id_user = auth()->user()->id;

		$pedidos = Pedido::all()->where('id_cliente', '=', $id_user)->sortByDesc('id_pedido');

		return view('pedidos', compact('pedidos'));
	}

	public function show($id_pedido)	//Mostra um pedido específico do usuário
	{
		$pedido = Pedido::where('id_pedido', '=', $id_pedido)->select('id_pedido', 'status')->get();
		$produtos_pedido = Produto_pedido::all()->where('id_pedido', '=', $id_pedido);

		return view('pedido', compact('produtos_pedido', 'pedido'));
	}

	public function update($id_pedido)	//Tela de update
	{
		$produtos_pedido = Produto_pedido::all()->where('id_pedido', '=', $id_pedido);

		return view('pedidoedit', compact('produtos_pedido'));
	}

	public function put($id_pedido, $id_produto, Request $request)	//Envia o update
	{

		DB::table('produto_pedido')
			->where('id_pedido', $id_pedido)
			->where('id_produto', $id_produto)
			->update(['quantidade' => $request->quantidade]);

		return back();
	}

	public function delete($id_pedido)	//Exclui o pedido
	{
		DB::table('produto_pedido')
			->where('id_pedido', $id_pedido)
			->delete();

		DB::table('pedido')
			->where('id_pedido', $id_pedido)
			->delete();

		return back();
	}
}
