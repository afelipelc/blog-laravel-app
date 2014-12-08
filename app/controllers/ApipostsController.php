<?php

class ApipostsController extends \BaseController {

	/**
	 * Display a listing of the POSTS.
	 * GET /apiposts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return Response::json( array (
			'error' => false,
			'posts' => $posts->toArray()),
			200
		)->header('Content-Type',"application/json; charset=utf-8")->header("Access-Control-Allow-Origin", "*");
	}
//Cross-domain


	/**
	 * Show the form for creating a new resource.
	 * GET /apiposts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /apiposts
	 *
	 * @return Response
	 */
	public function store()
	{

		$post = new Post;
    $post->titulo = Request::get('titulo');
    $post->descripcion = Request::get('descripcion');
    $post->imagen ="";
    $post->contenido = Request::get('contenido');
 		$post->tags = Request::get('tags');
 		$post->user_id = 1; //asociación temporal

    $post->save();
 
    return Response::json(array(
        'error' => false,
        'post' => $post),
        200
    )->header('Content-Type',"application/json; charset=utf-8")->header("Access-Control-Allow-Origin", "*");
	}

	/**
	 * Display the specified resource.
	 * GET /apiposts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function show(Post $post)
	{
		return Response::json( array (
			'error' => false,
			'post' => $post),
			200
		)->header('Content-Type',"application/json; charset=utf-8")->header("Access-Control-Allow-Origin", "*");
	}

	//	'comments' => $post->comments->toArray()
	/**
	 * Show the form for editing the specified resource.
	 * GET /apiposts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /apiposts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::whereId($id)->first();
 
    if ( Request::get('titulo') ) $post->titulo = Request::get('titulo');
    if ( Request::get('descripcion') ) $post->descripcion = Request::get('descripcion');
    if ( Request::get('imagen') ) $post->imagen = Request::get('imagen');
    if ( Request::get('contenido') ) $post->contenido = Request::get('contenido');
    if ( Request::get('tags') ) $post->tags = Request::get('tags');
 
    $post->save();
 
    return Response::json(array(
        'error' => false,
        'message' => 'Post Actualizado'),
        200
    );
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /apiposts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
