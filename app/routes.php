<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

# si queremos que al ingresar por ejemplo a /post/1
# automáticamente nos retorne el objeto sin tener que hacer consultas dentro de la acción para obtener el objeto correspondiente
# se puede configurar la ruta para que lo haga automáticamente
Route::model('posts', 'Post');
Route::bind('posts', function($value, $route) {
  return Post::whereId($value)->first();
});

Route::resource("posts", "PostsController");
Route::resource("users", "UsersController");
Route::resource("comments", "CommentsController");
Route::resource("logs", "LogsController");
