<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\facades\auth;
use Symfony\Component\HttpFoundation\Response;

class adminredirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
