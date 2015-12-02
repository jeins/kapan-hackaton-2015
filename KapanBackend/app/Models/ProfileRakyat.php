<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileRakyat extends Model
{
	protected $table = 'profile_rakyat';
	protected $primaryKey = 'id';
	protected $hidden = ['password'];

	public function projectPost(){
		return $this->hasMany('App\Models\ProjectPost');
	}

	public function projectPostLike(){
		return $this->hasMany('App\Models\ProjectPostLike');
	}

	public function postComment(){
		return $this->hasMany('App\Models\PostComment');
	}
}