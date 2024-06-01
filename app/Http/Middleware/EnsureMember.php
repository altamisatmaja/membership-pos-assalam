<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class EnsureMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->member->status != 'Aktif') {
            return redirect()->route('pages.home')->with('error', 'Anda belum terdaftar sebagai member di AssalamHypermarket.');
        }

        return $next($request);
    }
}
