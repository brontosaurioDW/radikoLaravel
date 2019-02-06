<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @var string El nombre de la tabla */
	protected $table = "pedidos";
	
	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'id_cliente', 'id_cliente');
	}
	
	public function huerta()
	{
		return $this->belongsTo(Huerta::class, 'id_huerta', 'id_huerta');
	}
	
	public function estado()
	{
		return $this->belongsTo(EstadoPedido::class);
	}
	
	public function pago()
	{
		return $this->belongsTo(TipoPago::class);
	}
}
