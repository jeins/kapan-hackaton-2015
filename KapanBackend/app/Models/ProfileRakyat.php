<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileRakyat extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'profile_rakyat';

	/**
	 * @var string
	 */
	protected $primaryKey = 'id';

	/**
	 * @var array
	 */
	protected $hidden = ['password'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function projectPost(){
		return $this->hasMany('App\Models\ProjectPost');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function projectPostLike(){
		return $this->hasMany('App\Models\ProjectPostLike');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function postComment(){
		return $this->hasMany('App\Models\PostComment');
	}
}