<?php


namespace App\Http\Controllers;

use App\Models\ProfileRakyat;
use Illuminate\Http\Request;

class ProfileRakyatController extends Controller
{
    private $token_secret = 'TOKENSECRETKEY!!!';

    public function createToken($rakyat){
        $payload = [
            'sub'   => $rakyat->id,
            'iat'   => time(),
            'exp'   => time() + (2 * 7 * 24 * 60 * 60) // expire 1 tahun
        ];

        return JWT::encode($payload, $this->token_secret);
    }

    public function getRakyat(Request $request){
        $rakyat = ProfileRakyat::find($request['user']['sub']);

        return $rakyat;
    }

    public function updateRakyat(Request $request){
        $rakyat = ProfileRakyat::find($request['user']['sub']);

        $rakyat->fullname = $request->input('fullname');
        $rakyat->email = $request->input('email');
        $rakyat->save();

        $token = $this->createToken($rakyat);

        return response()->json(['token' => $token]);
    }
}