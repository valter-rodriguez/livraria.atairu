<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = "pedido";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'id_cliente',
		'status'
	];

	// Tipos de status:
	// 'pagamento': aguardando pagamento
	// 'enviado': produto enviado
	// 'concluido': pedido concluido
	// 'cancelado': cancelado por falta de pagamento ou cancelado pelo próprio usuário

	public function produto()
	{
		return $this->belongsToMany('App\Produto' . 'produto_pedido', 'id_produto', 'id_produto');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
