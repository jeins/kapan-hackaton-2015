<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{

	/**
	 * @var string
	 */
	protected $table = 'post_comments';

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