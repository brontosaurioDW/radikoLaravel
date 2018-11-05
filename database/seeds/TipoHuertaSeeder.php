<?php

use Illuminate\Database\Seeder;
use App\Models\TipoHuerta;

class TipoHuertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	TipoHuerta::create([
    		'tipo' => 'báscia'
    	]);
    	TipoHuerta::create([
    		'tipo' => 'premium'
    	]);
    }
}
