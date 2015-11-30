<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{

    protected $fillable = ['info_project_id', 'rakyat_profile_id', 'comment', 'like_dislike_project', 'like_comment', 'dislike_comment'];
}