<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Register;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::guard('register')->user()->role === 'admin') {
            return $next($request);
        }
        return redirect('/')->with('error', 'Unauthorized access'); // Redirect unauthorized users
    }
}
