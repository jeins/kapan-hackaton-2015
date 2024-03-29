<?php

namespace App\Http\Controllers;

use App\Models\ProjectPost;
use App\Models\ProjectPostLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProjectPostController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addPostInProjectInfoOrProgress(Request $request, $id){
        $post = new ProjectPost();
        $post->profile_rakyat_id = $request['user']['user_id'];
        if(strpos($request->path(), 'project')){
            $post->project_info_id = $id;
        } else if(strpos($request->path(), 'progress')){
            $post->project_progress_id = $id;
        }
        $post->post = $request->input('post');
        //$post->post_image = $request->input('post_image');

        $post->save();

        return response()->json($post);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editPost(Request $request, $id){
        $currentUser = $request['user']['user_id'];
        
        $post = ProjectPost::find($id);
        $postUserId = $post->profileRakyat->id;

        if($currentUser == $postUserId){
            $post = ProjectPost::find($id);
            $post->post = $request->input('post');
            $post->save();

            return response()->json($post);
        }

        return response()->json(['error'=>true, 'errmsg' => 'cannot edit post by other user!'], 400);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function likePost(Request $request){

        $alreadyLikePost = ProjectPostLike::where('project_posts_id', '=', $request->input('project_posts_id'))
                            ->where('profile_rakyat_id', '=', $request['user']['user_id'])->count();

        if($alreadyLikePost == 0){
            $postLike = new ProjectPostLike();
            $postLike->like_count = 1;
            $postLike->project_posts_id = $request->input('project_posts_id');
            $postLike->profile_rakyat_id = $request['user']['user_id'];
            $postLike->save();

            return response()->json($postLike);
        }

        return response()->json(['error' => true, 'errmsg' => 'already like this post']);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function unlikePost(Request $request){
        $alreadyLikePost = ProjectPostLike::where('project_posts_id', '=', $request->input('project_posts_id'))
                            ->where('profile_rakyat_id', '=', $request['user']['user_id'])->count();

        if($alreadyLikePost > 0){
            $getLikePostId = ProjectPostLike::where('project_posts_id', '=', $request->input('project_posts_id'))
                            ->where('profile_rakyat_id', '=', $request['user']['user_id'])->get(['id'])->toArray()[0];
            $postLike = ProjectPostLike::destroy($getLikePostId);

            return response()->json($postLike);
        }

        return response()->json(['error' => true, 'errmsg' => 'like some post first!']);
    }
}