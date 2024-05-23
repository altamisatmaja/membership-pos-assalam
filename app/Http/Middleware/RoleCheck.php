<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles){
        foreach ($roles as $role) {
            if (Auth::check() && Auth::user()->role == $role) {
                return $next($request);
            }
        }

        $currentUserRole = Auth::check() ? Auth::user()->role : null;

        $redirectTo = '';

        switch ($currentUserRole) {
            case 'Admin':
                $redirectTo = 'admin.login';
                $message = 'Anda bukan Admin!';
                break;
            default:
                $redirectTo = 'login';
                $message = 'Email atau password salah!';
                break;
        }

        Auth::logout();
        return redirect()->route($redirectTo)->with('status', $message);
    }

}
