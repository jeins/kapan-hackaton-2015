<?php

namespace App\Http\Middleware;

use Closure;

class MediatypeMiddleware
{

    /**
     * just allow request from content-type=application/json
     * @param $request
     * @param Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next){
        if($request->header('content-type') !== 'application/json'){
            return response()->json(['errmsg' => 'Unexpected Media Type'], 415);
        }

        return $next($request);
    }
}