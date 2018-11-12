<?php

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Review::create([
    		'huerta_id' => 1,
            'usuario_id' => 1,
    		'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, pariatur!',
    		'stars' => 3
    	]);
    	Review::create([
    		'huerta_id' => 1,
            'usuario_id' => 1,
    		'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem voluptas in adipisci, possimus quidem tempora ea vitae maiores distinctio.',
    		'stars' => 4
    	]);
        Review::create([
            'huerta_id' => 1,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'stars' => 4
        ]);
        Review::create([
            'huerta_id' => 1,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veniam voluptate sapiente dolorum corporis, officia ipsum optio voluptatem, assumenda cumque quis ipsa nam laborum beatae libero. Voluptatum sed, asperiores saepe!',
            'stars' => 2
        ]);
        Review::create([
            'huerta_id' => 4,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nemo odio reprehenderit mollitia, quos.',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 1,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'stars' => 4
        ]);
        Review::create([
            'huerta_id' => 2,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'stars' => 4
        ]);
        Review::create([
            'huerta_id' => 5,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quas quam, vel aperiam cumque placeat omnis est, culpa, atque temporibus aut inventore.',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 6,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'stars' => 2
        ]);
        Review::create([
            'huerta_id' => 3,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quas quam, vel aperiam cumque placeat omnis est, culpa, atque temporibus aut inventore.',
            'stars' => 1
        ]);        
        Review::create([
            'huerta_id' => 4,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'stars' => 3
        ]);
        Review::create([
            'huerta_id' => 2,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'stars' => 5
        ]);
        Review::create([
            'huerta_id' => 7,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat aspernatur, magnam voluptate accusantium qui obcaecati quasi culpa, consequuntur reiciendis incidunt nam sapiente veniam ducimus perferendis. Beatae quaerat nostrum fugiat fuga.',
            'stars' => 4
        ]);
        Review::create([
            'huerta_id' => 8,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet.',
            'stars' => 3
        ]);

        Review::create([
            'huerta_id' => 7,
            'usuario_id' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quas quam, vel aperiam cumque placeat omnis est, culpa, atque temporibus aut inventore.',
            'stars' => 5
        ]);
    	Review::create([
    		'huerta_id' => 9,
            'usuario_id' => 1,
    		'comentario' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    		'stars' => 2
    	]);
    }
}
