<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthPelangganController extends Controller
{
    public function index()
    {
        return view('pelanggan.auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $request->authenticate();
            $request->session()->regenerate();

            if (Auth::check()) {
                if (Auth::user()->role == 'Pelanggan') {
                    return redirect()->route('pages.home');
                } else {
                    return redirect()->route('pages.home');
                }
            }

            return redirect()->back()->with('status', 'Terjadi kesalahan. Mohon coba lagi.');  // Kembali ke halaman sebelumnya jika autentikasi gagal
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'Terjadi kesalahan ' . $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
