<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\TokenMismatchException;
use Laravel\Lumen\Http\Middleware\VerifyCsrfToken as BaseVerifyCsrfToken;

class VerifyCsrfToken extends BaseVerifyCsrfToken {

    /**
     * url avoid VerifyCsrfToken
     *
     * @var array
     */
    protected $except_urls = [
        'auth/rakyat/*',
        'admin/*', //TODO:HAPUS KL UDAH ADA CLIENT
        'rakyat/*' //TODO:HAPUS KL UDAH ADA CLIENT
    ];

    /**
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return \Illuminate\Http\Response
     * @throws TokenMismatchException
     */
    public function handle($request, Closure $next)
    {
        $regex = '#' . implode('|', $this->except_urls) . '#';

        if ($this->isReading($request) || $this->tokensMatch($request) || preg_match($regex, $request->path()))
        {
            return $this->addCookieToResponse($request, $next($request));
        }

        throw new TokenMismatchException;
    }

}