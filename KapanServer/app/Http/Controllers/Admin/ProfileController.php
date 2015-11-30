<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProfilePemerintah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * get selected profile by id
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProfile($id){
        $profile = ProfilePemerintah::find($id);

        return response()->json($profile);
    }

    /**
     * save new profile, email must be unique
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addNewProfiles(Request $request){
        $emailExist = ProfilePemerintah::where('email', '=', $request->input('email'))->count();

        if($emailExist > 0){
            return response()->json(['error' => true, 'errmsg'=>'email exist'], 208);
        }

        $profile = ProfilePemerintah::create($request->all());

        return response()->json($profile);
    }

    /**
     * update selected profile
     * @request PUT
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateProfile(Request $request, $id){
        $profilePemerintah = ProfilePemerintah::find($id);

        $profilePemerintah->email = $request->input('email');
        $profilePemerintah->password = $request->input('password'); // TODO: ADD HASH before save to DB
        $profilePemerintah->fullname = $request->input('fullname');

        $profilePemerintah->save();

        return response()->json($profilePemerintah);
    }
}