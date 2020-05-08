<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = "produto";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $primaryKey = 'id_produto';

	protected $fillable = [
		'isbn',
		'nome',
		'autor',
		'sinopse',
		'id_categoria',
		'numero_paginas',
		'ano_publicacao',
		'edicao',
		'editora',
		'preco',
		'imagem'
	];

	public function categoria()
	{
		return $this->belongsTo('App\Produto_categoria', 'id_categoria', 'id_categoria');
	}

	public function pedido()
	{
		return $this->belongsToMany('App\Pedido' . 'produto_pedido', 'id_pedido', 'id_pedido');
	}
}
