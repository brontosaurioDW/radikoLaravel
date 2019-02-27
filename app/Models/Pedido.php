<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @var string El nombre de la tabla */
	protected $table = "pedidos";
	
	protected $fillable = [
		'id_estado_pedido'
	];
	
	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
	
	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}
	
	public function estado()
	{
		return $this->belongsTo(EstadoPedido::class, 'id_estado_pedido', 'id_estado_pedido');
	}
	
	public function pago()
	{
		return $this->belongsTo(TipoPago::class);
	}
	
	public function disponibilidad()
	{
		return $this->belongsTo(Disponibilidad::class, 'id_disponibilidad', 'id');
	}
	
	public function direccion()
	{
		return $this->belongsTo(Direccion::class);
	}
}
