<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileRakyat extends Model
{
	protected $table = 'profile_rakyat';
	protected $primaryKey = 'id';
	protected $hidden = ['password'];
    protected $fillable = ['email', 'facebook_token', 'google_token', 'fullname'];
}