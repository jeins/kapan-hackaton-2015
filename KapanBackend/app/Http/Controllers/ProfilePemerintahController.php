<?php

namespace App\Http\Controllers;

use App\Models\ProfilePemerintah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilePemerintahController extends Controller
{
    /**
     * retrieve pemerinta projects
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProfiles(){
        $profiles = ProfilePemerintah::all();

        return response()->json($profiles);
    }

    /**
     * get selected profile by id
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProfile($id){
        $profile = ProfilePemerintah::find($id);

        return response()->json($profile);
    }

    /**
     * update selected profile
     *
     * @request PUT
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateProfile(Request $request, $id){
        $profilePemerintah = ProfilePemerintah::find($id);

        $profilePemerintah->email = $request->input('email');
        $profilePemerintah->password = Hash::make($request->input('password'));
        $profilePemerintah->fullname = $request->input('fullname');

        $profilePemerintah->save();

        return response()->json($profilePemerintah);
    }
}