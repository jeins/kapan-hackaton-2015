<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
    protected $fillable = ['id_project', 'description', 'tanggal_update'];
}