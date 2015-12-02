<?php


namespace App\Http\Middleware;

use JWT;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{

    /**
     * @var Guard
     */
    protected $auth;

    /**
     * @var string
     */
    private $token_secret = 'TOKENSECRETKEY!!!';

    /**
     * Authenticate constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->adminUri = ['admin/*'];
        $this->rakyatUri = ['rakyat/*'];
    }

    /**
     * @param $request
     * @param Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next){
        if($request->header('Authorization')){
            $token = explode(' ', $request->header('Authorization'))[1];
            $payload = (array) JWT::decode($token, $this->token_secret, array('HS256'));

            if($payload['exp'] < time()){
                return response()->json(['error' => true, 'errmsg' => 'Token has expired!']);
            }

            $page = explode('/', $request->path());
            $regexA = '#' . implode('|', $this->adminUri) . '#';
            $regexR = '#' . implode('|', $this->rakyatUri) . '#';

            // user filter admin
            if(preg_match($regexA, $request->path()) && $payload['status_auth'] != $page[0]){
                return response()->json(['error'=>true, 'errmsg' => 'cannot access admin page!']);
            }

            // user filter rakyat
            if(preg_match($regexR, $request->path()) && $payload['status_auth'] != $page[0]){
                return response()->json(['error'=>true, 'errmsg' => 'cannot access rakyat page!']);
            }            

            $request['user'] = $payload;

            return $next($request);
        } else{
            return response()->json(['error' => true, 'errmsg' => 'Authentication invalid'], 401);
        }
    }
}