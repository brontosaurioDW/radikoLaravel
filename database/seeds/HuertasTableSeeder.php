<?php

use Illuminate\Database\Seeder;
use App\Models\Huerta;

class HuertasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	Huerta::create([
  		'huerta' => 'Jardín Orgánico',
  		'cuit' => 30354568459,
  		'razon_social' => 'Huerta S.A.',
  		'direccion' => NULL,
      'cantaidad_max_envios' => 15,
      'foto' => 'organico.jpg',
      'destacado' => true
    ]);
    Huerta::create([
      'huerta' => 'Huertas Orgánicas Urbana',
      'cuit' => 33214569528,
      'razon_social' => 'Gonzales y Perez S.R.L',
      'direccion'=> 'Av. Estado de Israel 4799',
      'cantaidad_max_envios' => 20,
      'foto' => 'huertaorganica.jpg',
      'destacado' => false
    ]);
    Huerta::create([
      'huerta' => 'Tallo Verde',
      'cuit' => 34245632145,
      'razon_social' => 'Tallo S.A.',
      'direccion'=> 'Ruta 192 Km. 8 - Open Door - Luján',
      'cantaidad_max_envios' => 10,
      'foto' => 'talloverde.jpg',
      'destacado' => true
    ]);
    Huerta::create([
      'huerta' => 'Estilo Orgánico',
      'cuit' => 30457896529,
      'razon_social' => 'Gatofer y Asociados',
      'direccion'=> '3 de Febrero 940 San Isidro Buenos ',
      'cantaidad_max_envios' => 25,
      'foto' => 'estiloorganico.png',
  		'destacado' => true
    ]);
  }
}