<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilePemerintah extends Model
{
	protected $table = 'profile_pemerintah';
	protected $primaryKey = 'id';
    protected $hidden = ['password'];

    public function projects(){
        return $this->hasMany('App\Models\ProjectInfo');
    }
}