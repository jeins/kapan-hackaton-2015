<?php

namespace App\Http\Controllers\Admin;

use App\Models\PemerintahProfile;
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
        $profile = PemerintahProfile::find($id);

        return response()->json($profile);
    }

    /**
     * save new profile, email must be unique
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addNewProfiles(Request $request){
        $emailExist = PemerintahProfile::where('email', '=', $request->input('email'))->count();

        if($emailExist > 0){
            return response()->json(['error' => true, 'errmsg'=>'email exist'], 208);
        }

        $profile = PemerintahProfile::create($request->all());

        return response()->json($profile);
    }
}