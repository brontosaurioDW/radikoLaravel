<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model
{
   	/** @var string Nombre de la tabla */
	protected $table = "estados_pedidos";
	
	/** @var string El nombre de la PK */
    protected $primaryKey = 'id_estado_pedido';
	
	public function pedidos()
	{
		// El formato es el mismo que el belongsTo().
    	// Pero en este caso, como es la tabla de 
    	// referencia, el método se llama "hasMany".
		return $this->hasMany(Pedido::class, 'id_estado_pedido', 'id_estado_pedido');
	}
	
}
