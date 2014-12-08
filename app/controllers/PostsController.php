<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		$this->layout->content = View::make('posts.index', compact('posts'));

		/*return Response::json( array (
			'error' => false,
			'posts' => $posts->toArray()),
			200
		)->header('Content-Type', "application/json");*/
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('posts.create', compact('post'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//almacenar el nuevo Post
		$input = Input::all();
		$input['user_id'] = 1; //autor temporal
		Post::create( $input );
	 
		return Redirect::route('posts.index')->with('message', 'El nuevo Post se ha creado');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function show(Post $post)
	{
		$this->layout->content = View::make('posts.show', compact('post'));
		
		/*return Response::json( array (
			'error' => false,
			'posts' => $post->toArray()),
			200
		);*/
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  Post $post
	 * @return Response
	 */
	public function edit(Post $post)
	{
		$this->layout->content = View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function update(Post $post)
	{
		$input = array_except(Input::all(), '_method');
		$post->update($input);
		return Redirect::route('posts.show', $post->id)->with('message', 'Post actualizado.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function destroy(Post $post)
	{
		//
	}

}