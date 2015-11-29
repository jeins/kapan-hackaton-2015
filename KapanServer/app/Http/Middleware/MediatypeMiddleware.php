<?php

namespace App\Http\Middleware;

use Closure;

class MediatypeMiddleware
{

    public function handle($request, Closure $next){
        if($request->header('content-type') !== 'application/json'){
            return response()->json(['errmsg' => 'Unexpected Media Type'], 415);
        }

        return $next($request);
    }
}