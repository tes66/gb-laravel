<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminStatus
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
        $user = \Auth::user();
        if (!$user->is_admin){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
