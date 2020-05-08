<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrinho extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinho', function (Blueprint $table) {
			$table->unsignedInteger('id_cliente');
			$table->foreign('id_cliente')->references('id')->on('users');
			$table->unsignedInteger('id_produto');
			$table->foreign('id_produto')->references('id_produto')->on('produto');
			$table->string('produto_nome');
			$table->string('quantidade');
			$table->string('preco');
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
		Schema::dropIfExists('carrinho');
	}
}
