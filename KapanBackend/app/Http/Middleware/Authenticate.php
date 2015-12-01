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
            $regex = '#' . implode('|', $this->adminUri) . '#';
            if(preg_match($regex, $request->path()) && $payload['status_auth'] != $page[0]){
                return response()->json(['error'=>true, 'errmsg' => 'cannot access admin page!']);
            }

            $request['user'] = $payload;

            return $next($request);
        } else{
            return response()->json(['error' => true, 'errmsg' => 'Authentication invalid'], 401);
        }
    }
}