<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // if (auth()->check() && auth()->user()->role === 'user') {
        //     return redirect('/'); // Redirect to homepage or any other page for non-user access
        // }
        // return $next($request);
        if (! Auth::check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
