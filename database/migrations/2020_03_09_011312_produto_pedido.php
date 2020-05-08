<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdutoPedido extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto_pedido', function (Blueprint $table) {
			$table->unsignedInteger('id_pedido');
			$table->foreign('id_pedido')->references('id_pedido')->on('pedido');
			$table->unsignedInteger('id_produto');
			$table->foreign('id_produto')->references('id_produto')->on('produto');
			$table->string('nome');
			$table->string('autor');
			$table->string('quantidade');
			$table->string('preco');
			$table->string('imagem');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('produto_pedido');
	}
}
