<?php

class Comment extends \Eloquent {
	protected $fillable = ['post_id', 'comentario', 'user_id'];

  /**
  * One Comment belongs to one User
  */
  public function user()
  {
    return $this->belongsTo('User');
  }

  /**
  * One Comment belongs to one Post
  */
  public function post()
  {
    return $this->belongsTo('Post');
  }
}