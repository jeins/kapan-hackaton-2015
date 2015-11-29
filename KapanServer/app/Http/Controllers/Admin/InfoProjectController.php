<?php


namespace App\Http\Controllers\Admin;

use App\Models\InfoProject;
use App\Models\PemerintahProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoProjectController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllProject(){
        $projects = InfoProject::all();

        return response()->json($projects);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectById($id){
        $project = InfoProject::find($id);

        return response()->json($project);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectByPemerintah($id){
        $pemerintah = PemerintahProfile::find($id);

        $projects = $pemerintah->projects;

        return response()->json($projects);
    }
}