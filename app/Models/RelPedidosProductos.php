<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelPedidosProductos extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "rel_pedidos_productos";

	public function productos()
	{
		return $this->hasMany(Producto::class);
	}

	public function pedido()
	{
		return $this->hasMany(Pedido::class);
	}
}

