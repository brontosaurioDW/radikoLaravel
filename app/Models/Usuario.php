<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /** @var string El nombre de la tabla */
    protected $table = "users";

    /** @var array Los campos que se pueden cargar de manera masiva. */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'telephone', 'foto', 'estado', 'tipo'
    ];

    /** @var array Las reglas de la validación. */
    public static $rules = [
        'name' => 'required|min:3',
        'avatar' => 'sometimes|image' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comentarios()
    {
        return $this->hasMany(Review::class);
    }
    
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function huerta()
    {
        return $this->hasOne(Huerta::class);
    }
	
	public function direcciones()
    {
        return $this->hasMany(Direccion::class);
    }
}