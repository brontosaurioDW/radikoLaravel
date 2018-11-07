<?php

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Comentario::create([
    		'id_huerta' => 1,
    		'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, pariatur!',
    		'stars' => 3
    	]);
    	Comentario::create([
    		'id_huerta' => 1,
    		'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, pariatur!',
    		'stars' => 4
    	]);
    	Comentario::create([
    		'id_huerta' => 1,
    		'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, pariatur!',
    		'stars' => 3
    	]);
    }
}
