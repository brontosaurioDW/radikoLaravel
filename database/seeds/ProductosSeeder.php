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
	//Productos huerta #1
		//Frutas
	Producto::create([
		'producto' => 'Manzana roja',
		'descripcion' => 'Son ricas en pectina (buen aliada contra el colesterol y la diabetes), aminoácidos, ácidos, azúcares, fibras. Popularmente se le asignan propiedades antiinflamatoria del aparato digestivo, gracias a la pectina es a la vez laxante suave y astringente en caso de diarréas o colitis, diurético y depurativa, incluso anticatarral e hipotensora.',
		'marca' => 'Jardín Orgánico',
		'precio' => 78.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'man01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Naranaja',
		'descripcion' => 'Las naranjas tienen un alto contenido de vitamina C, así como niveles de potasio, fibra, vitamina B, ácido fólico y antioxidantes.',
		'marca' => 'Jardín Orgánico',
		'precio' => 45.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'nar01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Frutilla',
		'descripcion' => 'Aumenta las defensas del organismo por el aporte de vitamina C, un efecto que es mayor cuando las frutillas son maduras. Ideal para prevenir resfríos y enfermedades respiratorias.',
		'marca' => 'Jardín Orgánico',
		'precio' => 25.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'fru01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Kiwi',
		'descripcion' => 'Es una de las pocas frutas que contiene ácido fólico, una sustancia necesaria para que las embarazadas desarrollen el feto en buenas condiciones. Además, el kiwi ayuda a luchar contra el cáncer de esófago y el de pulmón.',
		'marca' => 'Jardín Orgánico',
		'precio' => 70.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'kiw01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Durazno',
		'descripcion' => 'Aportan vitaminas, entre las que destaca la vitamina C y de minerales, y proporciones moderadas de carotenoides con actividad provitamínica A como alfa-caroteno, beta-caroteno y criptoxantina, así como de otros carotenoides sin esta actividad como luteína y zeaxantina.',
		'marca' => 'Jardín Orgánico',
		'precio' => 125.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'dur01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
		//Verduras
    Producto::create([
		'producto' => 'Tomate redondo',
		'descripcion' => 'Tomates deliciosos de estación. Es un alimento con escasa cantidad de calorías. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio).',
		'marca' => 'Mitden',
		'precio' => 36.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'tom01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Lechuga mantecosa',
		'descripcion' => 'La lechuga, desde el punto de vista alimentario, es especialmente apreciada por su frescura, gran digestibilidad y contenido de agua.',
		'marca' => 'Mitden',
		'precio' => 75.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'lec01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Morrón amarillo',
		'descripcion' => 'Los morrones amarillos son ricos en fibra, lo que ayuda a producir sensación de saciedad, al mismo tiempo que combate el estreñimiento. En este aspecto también resulta beneficioso la gran cantidad de agua que poseen.',
		'marca' => 'Jardín Orgánico',
		'precio' => 44.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'mor01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Zanahoria',
		'descripcion' => 'Ideal para hacer jugos de zanahoria.',
		'marca' => 'Mitden',
		'precio' => 29.99,
		'unidad_de_medida_id' => 1,
		'foto' => 'zan01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Palta',
		'descripcion' => 'La palta es una de las frutas más comunes en Latinoamérica.  Contiene una grasa parecida a la de la aceituna que es muy recomendable para el corazón.',
		'marca' => 'Jardín Orgánico',
		'precio' => 39.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pal01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 1,
		'huerta_id' => 1
    ]);
    Producto::create([
		'producto' => 'Pepino',
		'descripcion' => 'Cien gramos de pepino aportan aproximadamente un 10% de la ingesta diaria recomendada de Vitamina C.
		Además, el pepino no contiene grasa, es bajo en calorías y colesterol y es muy utilizado en la medicina, por sus cualidades emolientes, calmantes y refrescantes y sobretodo alcalinizantes.',
		'marca' => 'marca test',
		'precio' => 115.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pep01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 1
    ]);
		//Harinas
    Producto::create([
		'producto' => 'Baguettin saborizado',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Ecoville',
		'precio' => 122.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Pan lactal mediano',
		'descripcion' => 'Sin conservantes ni aditivos químicos.',
		'marca' => 'Ecoville',
		'precio' => 99.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'pan02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 3,
		'huerta_id' => 1
    ]);
		//Granjas
    Producto::create([
		'producto' => 'Nuggets de pollo',
		'descripcion' => 'Pata muslo coeco + rebozador + sal + harina de trigo + proteina de soja + huevo coeco',
		'marca' => 'Coeco',
		'precio' => 299.99,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra01.jpg',
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Pollo pastoril',
		'descripcion' => 'Es alimentado exclusivamente con nutrientes de origen vegetal provistos por pasturas y granos y por minerales de origen marino que complementan su dieta animal.',
		'marca' => 'Coeco',
		'precio' => 453.80,
		'unidad_de_medida_id' => 1,
		'foto' => 'gra02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 4,
		'huerta_id' => 1
    ]);
		//Lacteos
    Producto::create([
		'producto' => 'Queso de cabra semiduro sabor provenzal',
		'descripcion' => 'Ingredientes: Leche de cabra, sal, cuajos, fermentos lácticos.',
		'marca' => 'Cabras de Cafayate',
		'precio' => 170.50,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Tofu',
		'descripcion' => 'La incorporación del tofu en la dieta aporta varios beneficios para la salud. Por su versatilidad es fácil de ser incorporado en las preparaciones diarias, en forma práctica y accesible.',
		'marca' => 'Soyana',
		'precio' => 138.90,
		'unidad_de_medida_id' => 1,
		'foto' => 'lac05.jpg', //ok
		'estado' => 1,
		'categoria_id' => 5,
		'huerta_id' => 1
    ]);
		//Carnes
    Producto::create([
		'producto' => 'Colita de cuadril',
		'descripcion' => 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.',
		'marca' => 'Don Edgardo',
		'precio' => 595.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'car01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Peceto orgánico',
		'descripcion' => 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.',
		'marca' => 'Don Edgardo',
		'precio' => 441.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'car02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 1
    ]);
	Producto::create([
		'producto' => 'Hamburguesa orgánica',
		'descripcion' => 'Linar Group es la primera empresa en argentina en desarrollar carne vacuna orgánica, desde el productor hasta la mesa del consumidor. Don Edgardo se constituye así en un nuevo producto en el mercado argentino: Carne Vacuna Certificada Orgánica.',
		'marca' => 'Don Edgardo',
		'precio' => 22,
		'unidad_de_medida_id' => 5,
		'foto' => 'car03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 6,
		'huerta_id' => 1
    ]);
		//Especias
	Producto::create([
		'producto' => 'Pimentón ahumado',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos y con certificación Kosher - parve.
		Este producto es rico en vitamina K, vitamina B5 y vitamina B6.
		Su alto contenido de hierro ayuda a prevenir la anemia. Favorece a la buena circulación y mejora la presión arterial.',
		'marca' => 'Arytza',
		'precio' => 98.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Mix dulce - Sabor Toffee',
		'descripcion' => 'Para saborizar bebidas frías, calientes y pastelería. Contiene Cacao, sabor caramelo y crema.',
		'marca' => 'Saros',
		'precio' => 127.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Mix dulce - Sabor marroqui',
		'descripcion' => 'Con canela, jengibre, nuez moscada, cardamomo y clavo de olor
		Un aroma irresistible, donde el dulzor de la canela y el distintivo sabor del jengibre se mezclan con notas de finas especias dulces como la nuez moscada y el cardamomo, mas una pizca de clavo de olor.',
		'marca' => 'Saros',
		'precio' => 127.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'esp03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 7,
		'huerta_id' => 1
    ]);	
		//Semillas
	Producto::create([
		'producto' => 'Arroz Blanco',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 70.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Arroz integral',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 73.50,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Arroz Yamaní',
		'descripcion' => 'Producto sin conservantes ni aditivos. 100 % natural, ápto para celíacos.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 85.70,
		'unidad_de_medida_id' => 5,
		'foto' => 'sem03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 8,
		'huerta_id' => 1
    ]);		
		//Embasados
	Producto::create([
		'producto' => 'Aceto balsámico',
		'descripcion' => 'Elaborado en barricas de roble en forma artesanal. Ingredientes: vino orgánico, mosto de uva orgánico. Libre de gluten.',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 175.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb01.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Aceite de oliva extra virgen',
		'descripcion' => 'Aceite de Oliva, Extra Virgen, prensado en frío.',
		'marca' => 'Esencias de la Tierra',
		'precio' => 296.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb02.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 1
    ]);	
	Producto::create([
		'producto' => 'Vinagre de uva blanco',
		'descripcion' => 'Vino orgánico..',
		'marca' => 'Terrasana - Sabores de la tierra',
		'precio' => 121.90,
		'unidad_de_medida_id' => 5,
		'foto' => 'emb03.jpg', //ok
		'estado' => 1,
		'categoria_id' => 9,
		'huerta_id' => 1
    ]);	
	
	
	//Productos huerta #2
    Producto::create([
		'producto' => 'Ajo',
		'descripcion' => 'Lorem ipsum dolor sit.',
		'marca' => 'marca test',
		'precio' => 150.00,
		'unidad_de_medida_id' => 1,
		'foto' => 'p-9.jpg',
		'estado' => 1,
		'categoria_id' => 2,
		'huerta_id' => 2
    ]);
	//Productos huerta #3
    Producto::create([
      'producto' => 'Ajo 2',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit explicabo illo saepe, error? Explicabo, dolorum, molestiae! Laborum iure totam nesciunt. Facilis eius ea temporibus veritatis quo non maxime cum dolor repellendus in. Cum, dolore deleniti alias. Natus sint quidem, nesciunt consequuntur impedit quaerat accusamus earum sequi fuga incidunt, quis pariatur.',
      'marca' => 'marca test',
      'precio' => 150.00,
      'unidad_de_medida_id' => 1,
      'foto' => 'p-9.jpg',
      'estado' => 1,
      'categoria_id' => 3,
      'huerta_id' => 3
    ]);
    
    Producto::create([
      'producto' => 'Pera',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit explicabo illo saepe, error? Explicabo, dolorum, molestiae! Laborum iure totam nesciunt. Facilis eius ea temporibus veritatis quo non maxime cum dolor repellendus in. Cum, dolore deleniti alias. Natus sint quidem, nesciunt consequuntur impedit quaerat accusamus earum sequi fuga incidunt, quis pariatur.',
      'marca' => 'marca test',
      'precio' => 150.00,
      'unidad_de_medida_id' => 1,
      'foto' => 'p-9.jpg',
      'estado' => 1,
      'categoria_id' => 4,
      'huerta_id' => 6
    ]);
    Producto::create([
      'producto' => 'Calabaza',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit explicabo illo saepe, error? Explicabo, dolorum, molestiae! Laborum iure totam nesciunt. Facilis eius ea temporibus veritatis quo non maxime cum dolor repellendus in. Cum, dolore deleniti alias. Natus sint quidem, nesciunt consequuntur impedit quaerat accusamus earum sequi fuga incidunt, quis pariatur.',
      'marca' => 'marca test',
      'precio' => 150.00,
      'unidad_de_medida_id' => 1,
      'foto' => 'p-9.jpg',
      'estado' => 1,
      'categoria_id' => 5,
      'huerta_id' => 7
    ]);
    Producto::create([
      'producto' => 'Ajo',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit explicabo illo saepe, error? Explicabo, dolorum, molestiae! Laborum iure totam nesciunt. Facilis eius ea temporibus veritatis quo non maxime cum dolor repellendus in. Cum, dolore deleniti alias. Natus sint quidem, nesciunt consequuntur impedit quaerat accusamus earum sequi fuga incidunt, quis pariatur.',
      'marca' => 'marca test',
      'precio' => 150.00,
      'unidad_de_medida_id' => 1,
      'foto' => 'p-9.jpg',
      'estado' => 1,
      'categoria_id' => 6,
      'huerta_id' => 4
    ]);
    Producto::create([
      'producto' => 'Ajo',
      'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit explicabo illo saepe, error? Explicabo, dolorum, molestiae! Laborum iure totam nesciunt. Facilis eius ea temporibus veritatis quo non maxime cum dolor repellendus in. Cum, dolore deleniti alias. Natus sint quidem, nesciunt consequuntur impedit quaerat accusamus earum sequi fuga incidunt, quis pariatur.',
      'marca' => 'marca test',
      'precio' => 150.00,
      'unidad_de_medida_id' => 1,
      'foto' => 'p-9.jpg',
      'estado' => 1,
      'categoria_id' => 6,
      'huerta_id' => 3
    ]);
  }
}
