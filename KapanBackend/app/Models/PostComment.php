<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
	protected $table = 'post_comments';
	protected $primaryKey = 'id';

	public function projectPost(){
		return $this->belongsTo('App\Models\ProjectPost');
	}

	public function profileRakyat(){
		return $this->belongsTo('App\Models\ProfileRakyat');
	}
}