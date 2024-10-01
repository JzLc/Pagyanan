<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // if (auth()->check() && auth()->user()->role === 'admin') {
        //     return redirect()->route('admin.dashboard'); // Redirect to homepage or any other page for non-admin users
        // }
        // return $next($request);
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('login');
        }
    
        return $next($request);
    }
}
