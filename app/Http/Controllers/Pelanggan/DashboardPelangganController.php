<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPelangganController extends Controller
{
    public function index(){
        return view('pelanggan.dashboard');
    }

    public function update(){
        return view('pelanggan.pages.profile.index');
    }

    public function barcode(){
        return view('pelanggan.pages.barcode.index');
    }
}
