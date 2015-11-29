<?php


namespace App\Http\Controllers\Admin;

use App\Models\InfoProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoProjectController extends Controller
{

    public function getAllProject(){
        $projects = InfoProject::all();

        return response()->json($projects);
    }

    public function getProjectById($id){
        $project = InfoProject::find($id);

        return response()->json($project);
    }
}