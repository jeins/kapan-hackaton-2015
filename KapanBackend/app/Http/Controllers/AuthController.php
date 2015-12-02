<?php


namespace App\Http\Controllers;

use JWT;
use GuzzleHttp;
use App\Models\ProfileRakyat;
use App\Models\ProfilePemerintah;
use Symfony\Component\HttpFoundation\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private $token_secret = 'TOKENSECRETKEY!!!';
    private $googleSecret = '4e0pgAua3fsifLKvy-r30KsK';
    private $facebookSecret = '';

    /**
     * generate token
     *
     * @param $user
     * @return string
     */
    private function generateToken($user){
        $payload = [
            'sub'         => $user->id,
            'status_auth' => $user->status_auth,
            'iat'         => time(),
            'exp'         => time() + (2 * 7 * 24 * 60 * 60) // expire 1 tahun
        ];

        return JWT::encode($payload, $this->token_secret);
    }

    /**
     * register new admin
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerNewAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email|enique:profile_pemerintah,email',
            'password'  => 'required',
            'fullname'  => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['error' => true, 'errmsg' => $validator->messages()], 400);
        }

        $admin = new ProfilePemerintah();
        $admin->fullname = $request->input('fullname');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->status_auth = 'admin';
        $admin->is_active = false;
        $admin->save();

        return response()->json(['token' => $this->generateToken($admin)]);
    }

    /**
     * admin login
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAdmin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $admin = ProfilePemerintah::where('email', '=', $email)->first();

        if($admin && Hash::check($password, $admin->password) && $admin->is_active){
            unset($admin->password);

            return response()->json(['token' => $this->generateToken($admin)]);
        }

        return response()->json(['error' => true, 'errmsg' => 'Wrong Email / Password'], 401);
    }

    /**
     * rakyat login with own Email & Password
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginRakyat(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $rakyat = ProfileRakyat::where('email', '=', $email)->first();

        if($rakyat && Hash::check($password, $rakyat->password)){
            unset($rakyat->password); //remove from memory

            return response()->json(['token' => $this->generateToken($rakyat)]);
        }

        return response()->json(['error' => true, 'errmsg' => 'Wrong Email / Password'], 401);
    }

    /**
     * rakyat normal signup
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function signupRakyat(Request $request){
        $validator = Validator::make($request->all(), [
            'fullname'  => 'required',
            'email'     => 'required|email|unique:profile_rakyat,email',
            'password'  => 'required'
        ]);

        if($validator->fails()){
           return response()->json(['error' => true, 'errmsg' => $validator->messages()], 400);
        }

        $rakyat = new ProfileRakyat();
        $rakyat->fullname = $request->input('fullname');
        $rakyat->email = $request->input('email');
        $rakyat->password = Hash::make($request->input('password'));
        $rakyat->status_auth = 'rakyat';
        $rakyat->save();

        return response()->json(['token' => $this->generateToken($rakyat)]);
    }

    /**
     * rakyat login with OAuth2
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function googleOAuth(Request $request)
    {
        $accessTokenUrl = 'https://accounts.google.com/o/oauth2/token';
        $peopleApiUrl = 'https://www.googleapis.com/plus/v1/people/me/openIdConnect';

        $params = [
            'code' => $request->input('code'),
            'client_id' => $request->input('clientId'),
            'client_secret' => $this->googleSecret,
            'redirect_uri' => $request->input('redirectUri'),
            'grant_type' => 'authorization_code',
        ];

        $client = new GuzzleHttp\Client();

        $accessTokenResponse = $client->post($accessTokenUrl, ['body' => $params]);
        $accessToken = $accessTokenResponse->json()['access_token'];

        $headers = array('Authorization' => 'Bearer ' . $accessToken);

        $profileResponse = $client->get($peopleApiUrl, ['headers' => $headers]);

        $profile = $profileResponse->json();

        if ($request->header('Authorization'))
        {
            $rakyat = ProfileRakyat::where('google_token', '=', $profile['sub']);

            if ($rakyat->first())
            {
                return response()->json(['message' => 'There is already a Google account that belongs to you'], 409);
            }

            $token = explode(' ', $request->header('Authorization'))[1];
            $payload = (array) JWT::decode($token, $this->token_secret, array('HS256'));

            $rakyat = ProfileRakyat::find($payload['sub']);
            $rakyat->google_token = $profile['sub'];
            $rakyat->fullname = $profile['name'];
            $rakyat->status_auth = 'rakyat';
            $rakyat->save();

            return response()->json(['token' => $this->generateToken($rakyat)]);
        } else
        {
            $rakyat = ProfileRakyat::where('google_token', '=', $profile['sub']);

            if ($rakyat->first())
            {
                return response()->json(['token' => $this->generateToken($rakyat->first())]);
            }

            $rakyat = new ProfileRakyat;
            $rakyat->google_token = $profile['sub'];
            $rakyat->fullname = $profile['name'];
            $rakyat->status_auth = 'rakyat';
            $rakyat->save();

            return response()->json(['token' => $this->generateToken($rakyat)]);
        }
    }

    public function facebookOAuth(Request $request){
        $accessTokenUrl = 'https://graph.facebook.com/v2.3/oauth/access_token';
        $graphApiUrl = 'https://graph.facebook.com/v2.3/me';

        $params = [
            'code' => $request->input('code'),
            'client_id' => $request->input('clientId'),
            'redirect_uri' => $request->input('redirectUri'),
            'client_secret' => $this->facebookSecret
        ];

        $client = new GuzzleHttp\Client();

        $accessToken = $client->get($accessTokenUrl, ['query' => $params])->json();

        $profile = $client->get($graphApiUrl, ['query' => $accessToken])->json();


        if ($request->header('Authorization'))
        {
            $rakyat = ProfileRakyat::where('facebook', '=', $profile['id']);

            if ($rakyat->first())
            {
                return response()->json(['message' => 'There is already a Facebook account that belongs to you'], 409);
            }

            $token = explode(' ', $request->header('Authorization'))[1];
            $payload = (array) JWT::decode($token, $this->token_secret, array('HS256'));

            $rakyat = ProfileRakyat::find($payload['sub']);
            $rakyat->facebook_token = $profile['id'];
            $rakyat->fullname = $profile['name'];
            $rakyat->status_auth = 'rakyat';
            $rakyat->save();

            return response()->json(['token' => $this->generateToken($rakyat)]);
        } else
        {
            $rakyat = ProfileRakyat::where('facebook', '=', $profile['id']);

            if ($rakyat->first())
            {
                return response()->json(['token' => $this->generateToken($rakyat->first())]);
            }

            $rakyat = new ProfileRakyat;
            $rakyat->facebook_token = $profile['id'];
            $rakyat->fullname = $profile['name'];
            $rakyat->status_auth = 'rakyat';
            $rakyat->save();

            return response()->json(['token' => $this->generateToken($rakyat)]);
        }
    }
}