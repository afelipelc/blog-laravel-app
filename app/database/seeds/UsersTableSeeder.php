<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(['nombre' => 'Felipe', 'email' => 'afelipelc@gmail.com', 'username' => 'afelipe'
, 'password' => '123', 'rol' => 'admin', 'activo' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime
			]);

    DB::table('users')->insert($users);

	}

}