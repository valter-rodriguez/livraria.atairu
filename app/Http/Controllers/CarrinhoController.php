<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use App\Carrinho;

class CarrinhoController extends Controller
{
	//Apenas acessível aos usuários logados
	public function __construct()
	{
		$this->middleware('auth');
	}

	// Carrinho: Read produtos (R)
	public function index()
	{
		$id_user = auth()->user()->id;
		if ($id_user) {
			$resultado = DB::table('carrinho')
				->join('produto', 'carrinho.id_produto', '=', 'produto.id_produto')
				->where('carrinho.id_cliente', '=', $id_user)
				->select('carrinho.id_cliente', 'carrinho.id_produto AS id_produto', 'produto.imagem', 'carrinho.produto_nome AS titulo', 'produto.autor', 'carrinho.quantidade', 'carrinho.preco')
				->get();

			return view('carrinho', compact('resultado'));
		} else {
			return redirect()
				->back()
				->with('error', 'Não foi possível acessar seu carrinho. Por favor, tente novamente');
		}
	}

	//Carrinho: Add produto (C)
	public function insert($id_produto)
	{
		$id_user = auth()->user()->id;
		$produto = Produto::find($id_produto);

		$carrinho = new Carrinho();
		$carrinho->id_cliente = $id_user;
		$carrinho->id_produto = $produto->id_produto;
		$carrinho->produto_nome = $produto->nome;
		$carrinho->quantidade = '1';
		$carrinho->preco = $produto->preco;
		$carrinho->save();

		return redirect('/carrinho');
	}

	// Carrinho: Update quantidade (U)
	public function update($id_cliente, $id_produto, Request $request)
	{
		DB::table('carrinho')
			->where('id_cliente', $id_cliente)
			->where('id_produto', $id_produto)
			->update(['quantidade' => $request->quantidade]);

		return back();
	}

	//Carrinho: Delete produto
	public function remove($id_cliente, $id_produto)
	{
		DB::table('carrinho')
			->where('id_cliente', $id_cliente)
			->where('id_produto', $id_produto)
			->delete();

		return back();
	}
}
