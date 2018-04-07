<?php

namespace App\Http\Middleware;

use Closure;

class DoctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->isDoctor()) {
            return back()->withFlashDanger(trans('exceptions.frontend.auth.unauthorized'));
        }
        
        return $next($request);
    }
}
