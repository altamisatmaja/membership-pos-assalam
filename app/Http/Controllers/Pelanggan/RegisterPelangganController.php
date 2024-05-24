<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterPelangganController extends Controller
{
    public function index(){
        return view('pelanggan.auth.register');
    }
}
