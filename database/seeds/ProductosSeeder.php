<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Producto::create([
      'producto' => 'tomate',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officiis ratione commodi autem ex veritatis eveniet eligendi quisquam pariatur debitis?',
      'marca' => 'La huerta humilde',
      'precio' => 36.00,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-1.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Lechuga',
      'descripcion' => 'El rey de la verdura',
      'marca' => 'marca test',
      'precio' => 75.50,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-2.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Morrón amarillo',
      'descripcion' => 'Los hermanos',
      'marca' => 'marca test',
      'precio' => 44.00,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-3.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Zanahoria',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi similique consequuntur laboriosam itaque sit illum numquam corporis, odio totam amet.',
      'marca' => 'marca test',
      'precio' => 29.99,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-4.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Naranaja',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quae ipsum excepturi, quibusdam ab quas sunt aliquam hic atque error facilis fugit cumque perspiciatis maiores omnis molestiae labore iusto. Itaque!',
      'marca' => 'marca test',
      'precio' => 45.00,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-5.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Frutilla',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim modi repellat iusto repellendus voluptate distinctio! Itaque at iure aut laborum aliquid ipsum repellendus minus similique! Aperiam eum omnis ipsa magni.',
      'marca' => 'marca test',
      'precio' => 25.50,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-6.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Palta',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate at eos, saepe ipsa.',
      'marca' => 'marca test',
      'precio' => 39.00,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-7.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Pepino',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ex nam ea ullam culpa voluptatum, vero aliquam voluptates quasi alias incidunt esse tenetur ipsam eius architecto in? Ducimus, minus! Adipisci tempora ducimus esse, perspiciatis.',
      'marca' => 'marca test',
      'precio' => 115.00,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-8.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
    Producto::create([
      'producto' => 'Ajo',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit explicabo illo saepe, error? Explicabo, dolorum, molestiae! Laborum iure totam nesciunt. Facilis eius ea temporibus veritatis quo non maxime cum dolor repellendus in. Cum, dolore deleniti alias. Natus sint quidem, nesciunt consequuntur impedit quaerat accusamus earum sequi fuga incidunt, quis pariatur.',
      'marca' => 'marca test',
      'precio' => 150.00,
      'id_unidad_de_medida' => 1,
      'foto' => 'p-9.jpg',
      'estado' => 1,
      'id_huerta' => 1
    ]);
  }
}
