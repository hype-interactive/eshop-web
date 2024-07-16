<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SessionTimeoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

        public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $lastActivityTime = $request->session()->get('last_activity_time');
            $sessionTimeout = $request->session()->get('session_timeout');

            if (time() - $lastActivityTime > $sessionTimeout) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect('/')->withErrors(['session_expired' => 'Your session has expired due to inactivity. Please log in again.']);
            }

            $request->session()->put('last_activity_time', time());
        }

        return $next($request);
    }
}
