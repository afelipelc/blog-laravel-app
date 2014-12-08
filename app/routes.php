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
/*
Route::get('/', function ()
{
    return Redirect::route('posts.index');
});
*/

Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

/*
Route::get('/authtest', array('before' => 'auth.basic', function()
{
    //return View::make('hello');
  return Redirect::route('posts.index');
}));*/

//proteger rutas
Route::group(array('before' => 'auth'), function()
{
  # si queremos que al ingresar por ejemplo a /post/1
  # automáticamente nos retorne el objeto sin tener que hacer consultas dentro de la acción para obtener el objeto correspondiente
  # se puede configurar la ruta para que lo haga automáticamente
  Route::model('posts', 'Post');
  Route::model('comments', 'Comment');
  Route::bind('posts', function($value, $route) {
    return Post::whereId($value)->first();
  });
  Route::bind('comments', function($value, $route) {
    return Comment::whereId($value)->first();
  });

  Route::resource("posts", "PostsController");
  Route::resource('posts.comments', 'CommentsController');
  Route::resource("comments", "CommentsController");
  Route::resource("users", "UsersController");
  Route::resource("logs", "LogsController");
  
}); //fin protección de rutas



  Route::resource("apiposts", "ApipostsController");
  Route::group(array('prefix' => 'api/v1'), function()
  {
      Route::resource('posts', 'ApipostsController');
      Route::resource('posts.comments', 'ApicommentsController');
  });

