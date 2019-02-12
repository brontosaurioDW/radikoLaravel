<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function(Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha_pedido');
            $table->decimal('subtotal', 8, 2);
            $table->decimal('costo_envio', 8, 2);
			$table->decimal('total', 8, 2);
            $table->text('observaciones')->nullable();
            $table->timestamps();
			
			$table -> unsignedInteger('usuario_id');
			
			$table -> unsignedInteger('huerta_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
