<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Huerta extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "huertas";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = [
		'huerta',
		'cuit',
		'razon_social',
		'direccion',
		'telefono',
		'cantidad_max_envios',
		'foto',
		'destacado',
		'id_tipo_huerta',
		'email'
	];
	
	/** @var array Las reglas de la validación. */
	public static $rules = [
		'huerta' => 'required|max:100',
		'cuit' => 'required|max:11',
		'razon_social' => 'required',
		'direccion' => 'max:100',
		'telefono' => 'required|max:30'
	];

	public function tipoHuerta() 
	{
		return $this->belongsTo(TipoHuerta::class);
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}

	public function productos()
	{
		return $this->hasMany(Producto::class);
	}

	public function disponibilidad()
	{
		return $this->hasMany(Disponibilidad::class);
	}
	
	public function pedidos()
	{
		return $this->hasMany(Pedido::class, 'id_huerta', 'id');
	}
	
	public function usuario()
	{
		return $this->belongsTo(Usuario::class);
	}
	
}