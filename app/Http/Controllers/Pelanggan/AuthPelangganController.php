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

            $redirectTo = '';

            if (Auth::check()) {
                switch (Auth::user()->role) {
                    case 'Pelanggan':
                        $redirectTo = 'customer.dashboard';
                        break;
                }
            } else {
                $loginRoute = '';
                switch ($request->input('role')) {
                    case 'Pelanggan':
                        $loginRoute = 'customer.login';
                        break;
                }
                return redirect()->route($loginRoute)->with('status', 'Username atau password salah.');
            }

            return redirect()->route($redirectTo);
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
