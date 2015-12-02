<?php


namespace App\Http\Controllers;

use App\Models\ProfileRakyat;
use Illuminate\Http\Request;

class ProfileRakyatController extends Controller
{
    private $token_secret = 'TOKENSECRETKEY!!!';

    public function createToken($user){
        $payload = [
            'user_id'     => $user->id,
            'status_auth' => $user->status_auth,
            'iat'         => time(),
            'exp'         => time() + (2 * 7 * 24 * 60 * 60) // expire 1 tahun
        ];

        return JWT::encode($payload, $this->token_secret);
    }

    public function getRakyat(Request $request){
        $rakyat = ProfileRakyat::find($request['user']['user_id']);

        return $rakyat;
    }

    public function updateRakyat(Request $request){
        $rakyat = ProfileRakyat::find($request['user']['user_id']);

        $rakyat->fullname = $request->input('fullname');
        $rakyat->email = $request->input('email');
        $rakyat->save();

        $token = $this->createToken($rakyat);

        return response()->json(['token' => $token]);
    }
}