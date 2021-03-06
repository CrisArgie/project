<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (auth()->user()?->user_type != 'admin') {
        //     abort(Response::HTTP_FORBIDDEN);
        // }

        if (auth()->user()->user_type !== 'admin' && auth()->user()->user_type !== 'technician') {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
