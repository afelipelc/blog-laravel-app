<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
    $comments = array(
      ['user_id' => 1, 'comentario' => 'Que bien que estén haciendo algo con Laravel :)', 'post_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['user_id' => 1, 'comentario' => 'Así como actualmente existen diversos patrones, los Frameworks también y con la adopción de estos es más fácil desarrollar algo, ya que facilitan las tareas repetitivas como la creación de la BD', 'post_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime],
    );
    DB::table('comments')->insert($comments);
	}

}