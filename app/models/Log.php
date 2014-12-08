<?php

class Log extends \Eloquent {
	protected $fillable = [];

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