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
        if (!$request->user()->member) {
            return redirect()->route('pages.home')->with('error', 'Anda harus memiliki anggota untuk mengakses dashboard.');
        }

        return $next($request);
    }
}
