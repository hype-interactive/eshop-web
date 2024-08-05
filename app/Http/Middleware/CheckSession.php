<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if session is active or not null
        if (!Session::has('user')) {
            // Check if the current route is not the login route
            if ($request->routeIs('customer-login')) {
                return $next($request); // Allow access to login page
            }
            return redirect()->route('customer-login'); // Redirect to login route
        }

        return $next($request); // Allow access to the URL

}
}
