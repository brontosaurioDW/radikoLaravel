<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	Producto::create([
  		'producto' => 'producto 1',
  		'descripcion' => 'descripcion test',
  		'marca' => 'marca test',
  		'precio' => 529.99,
  		'foto' => 'img_test.jpg',
  		'estado' => 1
  	]);
  }
}
