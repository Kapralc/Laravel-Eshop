<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HandlePageTransition
{
    public function handle(Request $request, Closure $next)
    {
        // Zkontrolujeme, zda máme v session hodnotu, která určuje, zda uživatel již navštívil stránku
        if (!Session::has('has_visited_before')) {
            // Pokud neexistuje, znamená to, že jde o první návštěvu
            Session::put('has_visited_before', true);
        }

        // Předáme požadavek dál do aplikace
        return $next($request);
    }
}