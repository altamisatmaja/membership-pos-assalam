<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPelangganController extends Controller
{
    public function index(){
        $user = Auth::user();
        $member = $user->member;
        return view('pelanggan.dashboard', compact('member', 'user'));
    }

    public function update(){
        $user = Auth::user();
        $member = $user->member;
        return view('pelanggan.pages.profile.index', compact('member'));
    }

    public function barcode(){
        return view('pelanggan.pages.barcode.index');
    }
}
