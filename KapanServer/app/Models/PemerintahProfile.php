<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemerintahProfile extends Model
{
    protected $fillable = ['email', 'password', 'fullname'];
}