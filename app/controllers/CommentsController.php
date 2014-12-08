<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /comments
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /comments/create
	 * @param  Post  $post
	 * @return Response
	 */
	public function create(Post $post)
	{

		$this->layout->content = View::make('comments.create', compact('post'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function store(Post  $post)
	{
		$input = Input::all();
		$input['post_id'] = $post->id;
		$input['user_id'] = 1;
		Comment::create( $input );
	 
		return Redirect::route('posts.show', $post->id)->with('Comentario guardado.');
	}

	/**
	 * Display the specified resource.
	 * GET /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /comments/{id}/edit
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
	 * PUT /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /comments/{id}
	 *
	 * @param  Post  $post
	 * @param  Comment  $comment
	 * @return Response
	 */
	public function destroy(Post $post, Comment $comment)
	{
		$comment->delete();
		return Redirect::route('posts.show', $post->id)->with('message', 'Comentario eliminado.');
	}

}