<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Carrinho;
use App\User;

class CarrinhoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Criando um admin
		$novoUsuario = new User();
		$novoUsuario->name = 'Admin';
		$novoUsuario->cpf = '12345678910';
		$novoUsuario->email = 'admin@atairu.com.br';
		$novoUsuario->password = bcrypt('password');
		$novoUsuario->auth = 1;
		$novoUsuario->save();

		//Criando um cliente normal
		$novoUsuario = new User();
		$novoUsuario->name = 'Carla de Souza';
		$novoUsuario->cpf = '98765432198';
		$novoUsuario->email = 'carlasouza@gmail.com.br';
		$novoUsuario->password = bcrypt('password');
		$novoUsuario->save();

		//Criando um carrinho novo
		$novoCarrinho = new Carrinho();
		$novoCarrinho->id_cliente = DB::table('users')->where('name', 'Admin')->value('id');
		$novoCarrinho->id_produto = DB::table('produto')->where('isbn', '9788520927823')->value('id_produto');
		$novoCarrinho->produto_nome = DB::table('produto')->where('isbn', '9788520927823')->value('nome');
		$novoCarrinho->quantidade = '1';
		$novoCarrinho->preco = DB::table('produto')->where('isbn', '9788520927823')->value('preco');
		$novoCarrinho->save();
	}
}
