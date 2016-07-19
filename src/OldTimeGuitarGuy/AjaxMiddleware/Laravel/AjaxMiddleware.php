<?php

namespace OldTimeGuitarGuy\Laravel\AjaxMiddleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AjaxMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return $next($request);
        }

        return new Response('', 400);
    }
}
