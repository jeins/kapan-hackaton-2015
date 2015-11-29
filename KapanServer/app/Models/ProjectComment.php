<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{

    protected $fillable = ['id_project', 'id_rakyat', 'comment', 'like_dislike_project', 'like_comment', 'dislike_comment'];
}