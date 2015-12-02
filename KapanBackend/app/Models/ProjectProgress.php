<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
	protected $table = 'project_progress';
	protected $primaryKey = 'id';

	public function project(){
		return $this->belongsTo('App\Models\ProjectInfo');
	}

	public function projectPost(){
		return $this->hasMany('\App\Models\ProjectPost');
	}
}