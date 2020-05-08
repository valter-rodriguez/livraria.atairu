<?php

use Illuminate\Database\Seeder;
use App\Produto_categoria;

class ProdutoCategoriaTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{
		$categorias = ['Biografia', 'Informática', 'Literatura Estrangeira', 'Literatura Nacional'];
		foreach ($categorias as $categoria) {
			$novaCategoria = new Produto_categoria();
			$novaCategoria->nome_categoria = $categoria;
			$novaCategoria->save();
		}
	}
}
