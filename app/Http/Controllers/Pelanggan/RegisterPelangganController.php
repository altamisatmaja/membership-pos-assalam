<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterPelangganController extends Controller
{
    public function index(){
        return view('pelanggan.auth.register');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'password_confirmation' => 'required_with:password|same:password|min:6'
            ], [
                'name.required' => 'Nama wajib diisi!',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format harus berupa email',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Panjang karakter password minimal 6',
                'password_confirmation.min' => 'Panjang karakter password minimal 6',
                'password_confirmation.required_with' => 'Konfirmasi password harus sama dengan password',
                'password_confirmation.same' => 'Konfirmasi password harus sama dengan password',
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();
            $input['password'] = Hash::make($request->password);
            $input['email_verified_at'] = now();
            $user = User::create($input);
            if ($user){
                return redirect()->route('login')->with('success','Pendaftaran berhasil dilakukan!');
            } else {
                return redirect()->back()->with('error','Pendaftaran akun gagal dilakukan, silahkan coba lagi!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'Terjadi kesalahan ' . $e->getMessage());
        }
    }
}
