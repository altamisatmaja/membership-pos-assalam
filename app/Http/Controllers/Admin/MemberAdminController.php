<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberAdminController extends Controller
{
    public function index(){
        $members = Member::with('user')->get();
        return view('admin.pages.member.index', compact('members'));
    }

    public function seacrh(Request $request){
        $user = auth()->user();
        $members = Member::with('user')->where('nama_member', 'like', "%".$request->nama_member."%")->get();

        return view('admin.pages.member.index', compact('members'));
    }

    public function show($nomor_pas){
        $members = Member::where('nomor_pas', $nomor_pas)->first();

        return view('admin.pages.member.show', compact('members'));
    }
}
