<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPost extends Model
{
	protected $table = 'project_posts';
	protected $primaryKey = 'id';

	public function profileRakyat(){
        return $this->belongsTo('App\Models\ProfileRakyat');
	}

	public function projectPostLike(){
		return $this->hasMany('App\Models\ProjectPostLike');
	}

	public function projectInfo(){
		return $this->belongsTo('App\Models\ProjectInfo');
	}

	public function projectProgress(){
		return $this->belongsTo('App\Models\ProjectProgress');
	}
}