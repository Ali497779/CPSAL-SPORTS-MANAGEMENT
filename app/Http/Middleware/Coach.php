<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Coach
{
    public function handle(Request $request, Closure $next): Response
    {
        abort_if(! auth()->user()->hasRole('coach'), 403);

        return $next($request);
    }
}
