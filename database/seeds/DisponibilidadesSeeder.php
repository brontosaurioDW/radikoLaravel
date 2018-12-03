<?php

use Illuminate\Database\Seeder;
use App\Models\Disponibilidad;

class DisponibilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //huerta #1	
		Disponibilidad::create([
			'dias' 		=> 'lunes',
			'inicio' 	=> '09:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		Disponibilidad::create([
			'dias' 		=> 'martes',
			'inicio' 	=> '09:00:00',
			'final'		=> '18:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		Disponibilidad::create([
			'dias' 		=> 'jueves',
			'inicio' 	=> '08:00:00',
			'final'		=> '17:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
		Disponibilidad::create([
			'dias' 		=> 'viernes',
			'inicio' 	=> '10:00:00',
			'final'		=> '19:00:00',
			'activo'	=> 1,
			'huerta_id' => 1,
		]);
    }
}
