<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_pedido extends Model
{
	protected $table = "produto_pedido";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'id_pedido',
		'id_produto',
		'nome',
		'autor',
		'quantidade',
		'preco',
		'imagem'
	];
}
