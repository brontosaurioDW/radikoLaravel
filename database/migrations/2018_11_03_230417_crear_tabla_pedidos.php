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
            $table->increments('id_pedido');
            $table->dateTime('fecha_pedido');
            $table->decimal('subtotal', 8, 2);
            $table->text('observaciones')->nullable();
            $table->timestamps();
			
			$table -> unsignedInteger('id_cliente');
			$table -> foreign('id_cliente')->references('id')->on('users');
			
			$table -> unsignedInteger('id_huerta');
			$table -> foreign('id_huerta')->references('id')->on('huertas');
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
