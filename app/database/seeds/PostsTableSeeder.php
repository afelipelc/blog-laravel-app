<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
    $posts = array(
      ['titulo' => 'Hola Laravel!', 'descripcion' => 'Primer post en mi App de Blog', 'imagen' => 'imagen.jpg', 'contenido' => 'Después del primer intento por crear un pequeño proyecto con Laravel, al fin empieza a tomar forma. Este es el por de Hola Mundo...!', 'tags' =>'hola, mundo, laravel', 'user_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['titulo' => 'Patrón MVC', 'descripcion' => 'Breve descripción acerca del MVC', 'imagen' => 'imagen.jpg', 'contenido' => 'Es una forma de desarrollar aplicaciones de software que se divide en 3 capas (Modelo, Vista y Controlador) cuya implementacion facilita el desarrollo de software ya que el programador se enfoca en la manipulación de partes específicas sin tener que mezclar todo el código de los componentes. MVC no es el único patrón existente, pero es uno de los más utilizados.', 'tags' =>'mvc', 'user_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime]
    );

    DB::table('posts')->insert($posts);
	}

}