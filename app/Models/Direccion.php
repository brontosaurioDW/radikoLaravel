<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "direcciones";
	
	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = [
		'referencia', 
		'calle',
		'numero',
		'piso',
		'departamento',
		'telefono',
		'aclaracion',
		'usuario_id'
	];
	
	/** @var array Las reglas de la validación. */
	public static $rules = [
		'referencia' => 'required|max:50',
		'calle' => 'required|max:100',
		'numero' => 'required',
		'telefono' => 'required|max:20',
		'aclaracion' => 'max:255'
	];
	
	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
	
	public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
