<?php


namespace App\Http\Controllers;

use JWT;
use GuzzleHttp;
use Illuminate\Http\Request;
use App\Models\ProfileRakyat;
use Symfony\Component\HttpFoundation\File;

class AuthController extends Controller
{
    private $token_secret = 'TOKENSECRETKEY!!!';
    private $googleSecret = '4e0pgAua3fsifLKvy-r30KsK';

    protected function generateToken($rakyat){
        $payload = [
            'sub'   => $rakyat->id,
            'iat'   => time(),
            'exp'   => time() + (2 * 7 * 24 * 60 * 60) // expire 1 tahun
        ];

        return JWT::encode($payload, $this->token_secret);
    }

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
            $rakyat->save();

            return response()->json(['token' => $this->generateToken($rakyat)]);
        }
    }
}