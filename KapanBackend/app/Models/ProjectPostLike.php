<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectPostLike extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'project_post_like';

	/**
	 * @var string
	 */
	protected $primaryKey = 'id';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function projectPost(){
		return $this->belongsTo('App\Models\ProjectPost');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function profileRakyat(){
		return $this->belongsTo('App\Models\ProfileRakyat');
	}
}