<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	/** @var string El nombre de la tabla */
	protected $table = "productos";

	/** @var array Los campos que se pueden cargar de manera masiva. */
	protected $fillable = [
		'producto', 
		'descripcion',
		'marca',
		'precio',
		'foto',
		'estado',
		'huerta_id',
		'unidad_de_medida_id',
		'categoria_id'
	];

	/** @var array Las reglas de la validación. */
	public static $rules = [
		'producto' => 'required| min:2',
		'descripcion' => 'required',
		'marca' => 'required',
		'precio' => 'required',
		'foto' => 'sometimes|image'

	];

	public function huerta()
	{
		return $this->belongsTo(Huerta::class);
	}

	public function unidadDeMedida()
	{
		return $this->belongsTo(UnidadDeMedida::class);
	}

	public function categoria()
	{
		return $this->belongsTo(Categoria::class);
	}

	public function pedido()
	{
		return $this->belongsTo(Pedido::class);
	}
}
