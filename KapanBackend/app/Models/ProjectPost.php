<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPost extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'project_posts';

	/**
	 * @var string
	 */
	protected $primaryKey = 'id';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function profileRakyat(){
        return $this->belongsTo('App\Models\ProfileRakyat');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function projectPostLike(){
		return $this->hasMany('App\Models\ProjectPostLike');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function projectInfo(){
		return $this->belongsTo('App\Models\ProjectInfo');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function projectProgress(){
		return $this->belongsTo('App\Models\ProjectProgress');
	}
}