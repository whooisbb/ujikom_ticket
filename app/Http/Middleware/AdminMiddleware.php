<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->is_role == 1) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect('/login')->with('error', 'You do not have admin access.');
            }
        } else {
            Auth::logout();
            return redirect('/login')->with('error', 'Please login first.');
        }
    }
}