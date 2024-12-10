<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckFirstVisit
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
        if (!session()->has('has_visited')) {
            // Logic to show the page transition, for example setting session variable
            session(['has_visited' => true]);
            // Continue the request
        }
        
        return $next($request);
    }
}