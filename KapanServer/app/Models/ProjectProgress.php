<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
    protected $fillable = ['info_project_id', 'description', 'tanggal_update'];
}