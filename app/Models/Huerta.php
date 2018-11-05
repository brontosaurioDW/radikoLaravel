<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Huerta extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "huertas";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	//protected $fillable = ['nombre', 'genero', 'precio', 'anio_estreno'];

	/** @var array Las reglas de la validación. */
	// public static $rules = [
	// 	'nombre' => 'required|min:2',
	// 	'genero' => 'required|min:3',
	// 	'precio' => 'required|numeric',
	// ];


	public function tipoHuerta() 
	{
		return $this->belongsTo(TipoHuerta::class, 'id', 'id');
	}
}