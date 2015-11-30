<?php


namespace App\Http\Controllers\Admin;

use App\Models\InfoProject;
use App\Models\PemerintahProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoProjectController extends Controller
{

    /**
     * retrieve all project
     * @request GET
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllProject(){
        $projects = InfoProject::all();

        return response()->json($projects);
    }

    /**
     * get specific project by id
     * @request GET
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectById($id){
        $project = InfoProject::find($id);

        return response()->json($project);
    }

    /**
     * get project from specific pemerintah (id)
     * @request GET
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectByPemerintah($id){
        $pemerintah = PemerintahProfile::find($id);

        $projects = $pemerintah->projects;

        return response()->json($projects);
    }

    /**
     * add new project
     * @request POST
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addNewProject(Request $request){
        $getPemerintahId = $request->input('pemerintah_profile_id');

        if(PemerintahProfile::where('id', '=', $getPemerintahId)->count() > 0){
            $saveProject = InfoProject::create($request->all());

            return response()->json($saveProject);
        }

        return response()->json(['error' => true, 'errmsg' => 'bukan anggota pemerintah!']);
    }

    /**
     * update selected project
     * @request PUT
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateProject(Request $request, $id){
        $project = InfoProject::find($id);

        if($request->input('pemerintah_profile_id') == $project->pemerintah_profile_id){
            $project->nama = $request->input('nama');
            $project->jenis = $request->input('jenis');
            $project->deskripsi = $request->input('deskripsi');
            $project->outcome = $request->input('outcome');
            $project->lokasi = $request->input('lokasi');
            $project->status_selesai = $request->input('status_selesai');
            $project->biaya = $request->input('biaya');
            $project->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
            $project->jadwal_realisasi = $request->input('jadwal_pelaksanaan');

            $project->save();

            return response()->json($project);
        }
        return response()->json(['error' => true, 'errmsg' => 'tidak berwenang merubah project dari pemerintah lainnya']);
    }
}