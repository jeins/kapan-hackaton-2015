<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'project_progress';

	/**
	 * @var string
	 */
	protected $primaryKey = 'id';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function project(){
		return $this->belongsTo('App\Models\ProjectInfo');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function projectPost(){
		return $this->hasMany('\App\Models\ProjectPost');
	}
}