<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Laura',
    		'last_name' => 'Mitono',
    		'email' => 'lau@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-3039-8007',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
        User::create([
            'name' => 'Florencia',
            'last_name' => 'Ederli',
            'email' => 'fespi@mail.com',
            'password' => \Hash::make('123'),
            'telephone' => NULL,
            'foto' => NULL,
            'estado' => 'activo'
        ]);
    	User::create([
    		'name' => 'Florencia',
    		'last_name' => 'Sepúlveda',
    		'email' => 'flor@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '2365-4578',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
    	User::create([
    		'name' => 'Emiliano',
    		'last_name' => 'Hotes',
    		'email' => 'emi@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '23544568',
    		'foto' => 'emi.jpg',
    		'estado' => 'activo'
    	]);
    	User::create([
    		'name' => 'Germán',
    		'last_name' => 'Rodríguez',
    		'email' => 'ger@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-8475-3654',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
    	User::create([
    		'name' => 'Federico',
    		'last_name' => 'Noto',
    		'email' => 'fede@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-3039-8007',
    		'foto' => 'fede.jpg',
    		'estado' => 'suspendido'
    	]);
    	User::create([
    		'name' => 'Santiago',
    		'last_name' => 'Gallino',
    		'email' => 'santi@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '25484569',
    		'foto' => NULL,
    		'estado' => 'suspendido'
    	]);
    	User::create([
    		'name' => 'Mabel',
    		'last_name' => 'García',
    		'email' => 'mabe@mail.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-2136-5478',
    		'foto' => NULL,
    		'estado' => 'activo'
    	]);
    	User::create([
    		'name' => 'Carlos',
    		'last_name' => 'Gomez',
    		'email' => 'info@jardinorganico.com.ar',
    		'password' => \Hash::make('123'),
    		'telephone' => '11 4568-1223',
    		'foto' => 'carlos.jpg',
    		'estado' => 'activo'
    	]);
    	User::create([
    		'name' => 'Pedro',
    		'last_name' => 'Martinez',
    		'email' => 'hola@huertaorganica.com.ar',
    		'password' => \Hash::make('123'),
    		'telephone' => '11-6547-8542',
    		'foto' => 'pedro.png',
    		'estado' => 'suspendido'
    	]);
    	User::create([
    		'name' => 'Oscar',
    		'last_name' => 'Lopez',
    		'email' => 'huerta@talloverde.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '0-800-88-82556',
    		'foto' => 'oscar.png',
    		'estado' => 'pendiente de pago'
    	]);
    	User::create([
    		'name' => 'Mariano',
    		'last_name' => 'Pedraza',
    		'email' => 'info@estilorganico.com',
    		'password' => \Hash::make('123'),
    		'telephone' => '15-2839-83358',
    		'foto' => 'mariano.jpg',
    		'estado' => 'dado de baja'
    	]);
    }
}