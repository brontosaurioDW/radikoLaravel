<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
   	protected $table = "estados_pedidos";
	
	public function pedidos()
	{
		return $this->hasMany(Pedido::class);
	}
	
}
