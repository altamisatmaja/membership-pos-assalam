<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberAdminController extends Controller
{
    public function index(){
        $members = Member::with('user')->get();
        return view('admin.pages.member.index', compact('members'));
    }
}
