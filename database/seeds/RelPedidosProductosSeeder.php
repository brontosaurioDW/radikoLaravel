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
    		'producto_id' => 1
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 2
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 7
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 9
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 18
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 21
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    	RelPedidosProductos::create([
    		'pedido_id' => 1,
    		'producto_id' => 3
    	]);
    }
}
