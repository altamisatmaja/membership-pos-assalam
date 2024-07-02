<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function index(){
        return view('admin.pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        $redirectTo = '';

        if(Auth::check()) {
            switch (Auth::user()->role) {
                case 'Admin':
                    $redirectTo = 'admin.dashboard';
                    break;
            }
        } else {
            $loginRoute = '';
            switch ($request->input('role')) {
                case 'Admin':
                    $loginRoute = 'admin.login';
                    break;
            }
            return redirect()->route($loginRoute)->with('status', 'Anda bukan admin.');
        }

        return redirect()->route($redirectTo);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
