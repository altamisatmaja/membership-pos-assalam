<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileAdminController extends Controller
{
    public function index(){
        return view('admin.pages.profile.index');
    }

    public function update(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'password' => 'required|min:4',
                'password_confirmation' => 'required_with:password|same:password|min:4'
            ], [
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Panjang karakter password minimal 4',
                'password_confirmation.min' => 'Panjang karakter password minimal 4',
                'password_confirmation.required_with' => 'Konfirmasi password harus sama dengan password',
                'password_confirmation.same' => 'Konfirmasi password harus sama dengan password',
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user = User::where('id', auth()->id())->first();
            $user->password = Hash::make($request->password);
            $updated =  $user->save();
            if ($updated){
                return redirect()->back()->with('success','Password berhasil diubah!');
            } else {
                return redirect()->back()->with('error','Password gagal diubah, silahkan coba lagi!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'Terjadi kesalahan ' . $e->getMessage());
        }
    }
}
