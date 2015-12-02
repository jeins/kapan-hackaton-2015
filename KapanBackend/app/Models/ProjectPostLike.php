<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPostLike extends Model
{
	protected $table = 'project_post_like';
	protected $primaryKey = 'id';

	public function projectPost(){
		return $this->belongsTo('App\Models\ProjectPost');
	}

	public function profileRakyat(){
		return $this->belongsTo('App\Models\ProfileRakyat');
	}
}