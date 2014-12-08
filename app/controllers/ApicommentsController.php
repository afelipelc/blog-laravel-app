<?php

class ApicommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /apicomments
	 * @param Post $post
	 * @return Response
	 */
	public function index(Post $post)
	{
		//$comments = Comment::where('post_id', $postId)->get();
		return Response::json( array (
			'error' => false,
			'post' => $post->id,
			'comments' => $post->comments->toArray()),
			200
		)->header('Content-Type',"application/json; charset=utf-8")->header("Access-Control-Allow-Origin", "*");
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /apicomments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /apicomments
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /apicomments/{id}
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
	 * GET /apicomments/{id}/edit
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
	 * PUT /apicomments/{id}
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
	 * DELETE /apicomments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}