<?php

class Post extends \Eloquent {
	protected $fillable = ['titulo', 'descripcion', 'imagen', 'contenido', 'tags', 'user_id'];

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