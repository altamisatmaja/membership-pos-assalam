<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function shop(){
        return view('pages.shop');
    }

    public function membership(){
        if (!Auth::check()) {
            return redirect()->route('customer.login');
        }
        return view('pages.membership');
    }

    public function pre_membership(){
        if (!Auth::check()) {
            return redirect()->route('customer.login');
        }

        return view('pages.pre-membership');
    }

    public function about(){
        return view('pages.about');
    }
}
