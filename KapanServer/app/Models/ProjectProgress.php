<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
	protected $table = 'project_progress';
	protected $primaryKey = 'id';
    protected $fillable = ['project_info_id', 'description', 'tanggal_update'];
}