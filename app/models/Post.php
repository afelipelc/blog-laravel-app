<?php

class Post extends \Eloquent {
	protected $fillable = [];

  /**
  * One Post belongs to one User
  */
  public function user()
  {
    return $this->belongsTo('User');
  }

  /**
  * One Post has Many comments
  */
  public function comments()
  {
    return $this->hasMany('Comment');
  }
}