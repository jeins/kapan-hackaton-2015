<?php
namespace App\Http\Controllers;

use App\Models\ProjectProgress;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;

class ProjectProgressController extends Controller
{
    public function getProjectProgressByProjectId($id){
        $project = ProjectInfo::find($id);

        if($project!=NULL){
          $progress = $project->projectProgress->toArray();
          return response()->json($progress);
        }
        return response()->json(['error' => true, 'errmsg' => 'no project with this id']);
    }
}
