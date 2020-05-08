<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_categoria extends Model
{
	protected $table = "produto_categoria";
	protected $dates = [
		'created_at',
		'updated_at'
	];
	protected $primaryKey = 'id_categoria';

	protected $fillable = [
			'nome_categoria'
	];

	public function produto()
	{
		return $this->hasMany('App\Produto', 'id_categoria', 'id_categoria');
	}
}
