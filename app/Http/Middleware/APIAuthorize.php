<?php

namespace App\Http\Middleware;

/**
 *
 */
class APIAuthorize
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request                 $request
     * @param \Closure(\Illuminate\Http\Request):mixed $next
     *
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return $request->isXmlHttpRequest() ? $next($request) : route('login');
    }

}
