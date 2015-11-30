<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{
	protected $table = 'project_comment';
    protected $fillable = ['project_info_id', 'rakyat_profile_id', 'comment', 'like_dislike_project', 'like_comment', 'dislike_comment'];
}