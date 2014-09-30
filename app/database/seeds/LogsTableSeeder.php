<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LogsTableSeeder extends Seeder {

	public function run()
	{
		$logs = array(
      ['user_id' => 1, 'descripcion' => 'Ha creado un nuevo Post', 'post_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['user_id' => 1, 'descripcion' => 'Ha creado un nuevo Post', 'post_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['user_id' => 1, 'descripcion' => 'Ha dejado un nuevo comentario', 'post_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['user_id' => 1, 'descripcion' => 'Ha dejado un nuevo comentario', 'post_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime]
    );
    DB::table('logs')->insert($logs);
	}

}