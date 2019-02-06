<?php

use Illuminate\Database\Seeder;
use App\Models\TipoPago;

class TiposPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //#1 Por ahora único tipo de pago	
		TipoPago::create([
			'tipo' => 'Tarjeta de crédito'
		]);
    }
}
