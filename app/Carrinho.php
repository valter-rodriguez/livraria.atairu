<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
	protected $table = "carrinho";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'id_cliente',
		'id_produto',
		'produto_nome',
		'quantidade',
		'preco'
	];

	public function cliente()
	{
		return $this->belongsTo('App\Cliente');
	}

	public function produto()
	{
		return $this->belongsTo('App\Produto');
	}
}
