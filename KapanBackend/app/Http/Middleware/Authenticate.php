<?php


namespace App\Http\Middleware;

use JWT;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{

    protected $auth;
    private $token_secret = 'TOKENSECRETKEY!!!';

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next){
        if($request->header('Authorization')){
            $token = explode(' ', $request->header('Authorization'))[1];
            $payload = (array) JWT::decode($token, $this->token_secret, array('HS256'));

            if($payload['exp'] < time()){
                return response()->json(['error' => true, 'errmsg' => 'Token has expired!']);
            }

            $request['user'] = $payload;

            return $next($request);
        } else{
            return response()->json(['error' => true, 'errmsg' => 'Authentication invalid'], 401);
        }
    }
}