<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardAdminController extends Controller
{
    public function index(){
        $members = Member::orderBy('created_at')->take(10)->get();

        $member = Member::get();
        $total_member = count($member);

        $threeDaysAgo = Carbon::now()->subDays(3);
        $member_baru = Member::where('created_at', '>=', $threeDaysAgo)->count();

        $member_tidak_aktif = Member::where('masa_aktif', '<', Carbon::now())->count();

        return view('admin.pages.dashboard', compact('members', 'total_member', 'member_baru', 'member_tidak_aktif'));

    }
}
