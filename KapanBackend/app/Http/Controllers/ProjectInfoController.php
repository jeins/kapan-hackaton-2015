<?php


namespace App\Http\Controllers;

use App\Models\ProjectInfo;
use App\Models\ProfilePemerintah;
use App\Models\PostComment;
use App\Models\ProfileRakyat;
use Illuminate\Http\Request;

class ProjectInfoController extends Controller
{

    /**
     * retrieve all project
     * @request GET
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllProject(){
        $projects = ProjectInfo::with('profilePemerintah')->get();

        return response()->json($projects);
    }

    /**
     * get specific project by id
     * @request GET
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectById($id){
        $project = ProjectInfo::with('profilePemerintah')->find($id);

        $totalCommands = $project->projectPost->count();

        $jadwal_realisasi = $project->jadwal_realisasi;
        $datetime = explode(" ",$jadwal_realisasi);
        $jadwal_realisasi = $datetime[0];

        $waktu_pelaksaan = $project->waktu_pelaksanaan;
        $datetime = explode(" ",$waktu_pelaksaan);
        $waktu_pelaksaan = $datetime[0];

        $diff = abs(strtotime($jadwal_realisasi) - strtotime($waktu_pelaksaan));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        $data_waktu = $days." hari, ".$months." bulan, ".$years." tahun lagi";

        $project->data_waktu = $data_waktu;

        return response()->json(array_merge($project->toArray(), ['total_komentar' => $totalCommands]));
    }

    /**
     * get project from specific pemerintah (id)
     * @request GET
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectByPemerintah($id){
        $pemerintah = ProfilePemerintah::find($id);

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
        $getPemerintahId = $request->input('profile_pemerintah_id');

        if(ProfilePemerintah::where('id', '=', $getPemerintahId)->count() > 0){
            $saveProject = ProjectInfo::create($request->all());

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
        $project = ProjectInfo::find($id);

        if($request->input('profile_pemerintah_id') == $project->profile_pemerintah_id){
            $project->nama = $request->input('nama');
            $project->jenis = $request->input('jenis');
            $project->deskripsi = $request->input('deskripsi');
            $project->outcome = $request->input('outcome');
            $project->lokasi = $request->input('lokasi');
            $project->status_project = $request->input('status_project');
            $project->biaya = $request->input('biaya');
            $project->waktu_pelaksanaan = $request->input('waktu_pelaksanaan');
            $project->jadwal_realisasi = $request->input('jadwal_pelaksanaan');

            $project->save();

            return response()->json($project);
        }
        return response()->json(['error' => true, 'errmsg' => 'tidak berwenang merubah project dari pemerintah lainnya']);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProjectInfoComments($id){
        $project = ProjectInfo::find($id);

        $posts = $project->projectPost->toArray();

        $index = 0;
        foreach ($posts as $post) {
            $profileRakyat = ProfileRakyat::where('id', '=', $post['profile_rakyat_id'])->get()->toArray();
            $posts[$index] = array_merge($posts[$index], ['profile_rakyat' => $profileRakyat]);

            $comments = PostComment::where('project_posts_id', '=', $post['id'])->with('profileRakyat')->get()->toArray();
            if(sizeof($comments) > 0){
                $posts[$index] = array_merge($posts[$index], ['comments' => $comments]);
            }
            $index++;
        }

        return response()->json($posts);
    }
}
