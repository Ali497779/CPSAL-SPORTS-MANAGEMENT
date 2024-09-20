<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->is_verified) {
            return $next($request);
        }
        auth()->logout();

        return to_route('auth.login')->with('message', 'Your account is not verified');
    }
}
