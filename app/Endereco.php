<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
        protected $primaryKey = 'id_endereco';
	protected $table = "endereco";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'logradouro',
		'numero',
		'complemento',
		'cidade',
                'bairro',
		'uf',
		'cep',
		'id_usuario'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
