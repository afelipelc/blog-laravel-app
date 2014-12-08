<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('email');
			$table->string('username');
			$table->string('password');
			$table->string('rol');
			$table->boolean('activo');
			// required for Laravel 4.1.*
      //$table->string('remember_token', 100)->nullable();
      //laravel 4.2
      $table->rememberToken();
      //si quieres agregar el campo a la tabla existente:
      //ALTER TABLE  `users` ADD  `remember_token` VARCHAR( 100 ) NULL AFTER  `activo` ;
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
