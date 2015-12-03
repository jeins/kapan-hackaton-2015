<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilePemerintah extends Model
{
    /**
     * @var string
     */
	protected $table = 'profile_pemerintah';

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
    public function projects(){
        return $this->hasMany('App\Models\ProjectInfo');
    }
}