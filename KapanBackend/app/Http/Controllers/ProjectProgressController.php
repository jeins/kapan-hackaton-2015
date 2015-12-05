<?php
namespace App\Http\Controllers;

use App\Models\ProjectProgress;
use App\Models\ProjectInfo;
use Illuminate\Http\Request;

class ProjectProgressController extends Controller
{
    /**
     * get specific project progress by project id
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectProgressByProjectId($id){
        $project = ProjectInfo::find($id);

        if($project!=NULL){
          $progress = $project->projectProgress->toArray();
          return response()->json($progress);
        }
        return response()->json(['error' => true, 'errmsg' => 'tidak ada progress untuk proyek id ini']);
    }

    /**
     * update selected project progress
     * @request PUT
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateProjectProgress(Request $request, $id){
        $project = ProjectInfo::find($id);

        if($request->input('profile_pemerintah_id') == $project->profile_pemerintah_id){
          $progress = ProjectProgress::where('project_info_id', '=', $id)->first();
          $progress->description = $request->input('description');
          $progress->angka_progress = $request->input('angka_progress');
          $progress->tanggal_update = date("Y-m-d H:i:s");

          $progress->save();

          return response()->json($progress);
        }
        return response()->json(['error' => true, 'errmsg' => 'tidak berwenang merubah project progress dari pemerintah lainnya']);
    }
}
