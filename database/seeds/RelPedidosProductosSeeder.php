<?php

use Illuminate\Database\Seeder;

use App\Models\RelPedidosProductos;

class RelPedidosProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
            'producto_id' => 1,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
            'producto_id' => 2,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
            'producto_id' => 7,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
            'producto_id' => 9,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
            'producto_id' => 18,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
            'producto_id' => 21,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 2,
            'producto_id' => 41,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 2,
            'producto_id' => 44,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 2,
            'producto_id' => 48,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
            'producto_id' => 30,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
            'producto_id' => 32,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
            'producto_id' => 34,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
            'producto_id' => 36,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 3,
            'producto_id' => 38,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 4,
            'producto_id' => 32,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 4,
            'producto_id' => 33,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 4,
            'producto_id' => 34,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 5,
            'producto_id' => 19,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 5,
            'producto_id' => 22,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 5,
            'producto_id' => 24,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 6,
            'producto_id' => 10,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 6,
            'producto_id' => 11,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
            'producto_id' => 5,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
            'producto_id' => 7,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
            'producto_id' => 11,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 7,
            'producto_id' => 18,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 8,
            'producto_id' => 20,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 8,
            'producto_id' => 24,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 9,
            'producto_id' => 41,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 9,
            'producto_id' => 43,
    		'cantidad' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 9,
            'producto_id' => 45,
    		'cantidad' => 1
    	]);
    }
}
