<?php

namespace App\Http\Controllers;

use App\Models\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostCommentsController extends Controller
{
	public function addCommentToPost(Request $request, $id){
		$comment = new PostComment();
		$comment->profile_rakyat_id = $request['user']['user_id'];
		$comment->project_posts_id = $id;
		$comment->comment = $request->input('comment');
		$comment->save();

		return response()->json($comment);
	}
}