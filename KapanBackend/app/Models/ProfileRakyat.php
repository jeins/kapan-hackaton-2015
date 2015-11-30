<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileRakyat extends Model
{
	protected $table = 'profile_rakyat';
	protected $primaryKey = 'id';
    protected $fillable = ['token', 'fullname'];
}