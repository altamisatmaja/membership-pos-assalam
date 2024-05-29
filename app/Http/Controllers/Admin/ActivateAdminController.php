<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ActivateAdminController extends Controller
{
    public function index()
    {
        $members = Member::with('user')->get();
        return view('admin.pages.renew.index', compact('members'));
    }

    public function show($nomor_pas)
    {
        $member = Member::where('nomor_pas', $nomor_pas)->first();
        return view('admin.pages.renew.show', compact('member'));
    }

    public function update(Request $request, $nomor_pas)
    {
        try {
            $request->validate([
                'masa_aktif' => 'required|integer|min:1|max:3',
            ]);

            $member = Member::where('nomor_pas', $nomor_pas)->first();

            $currentMasaAktif = $member->masa_aktif ?? Carbon::now();
            if (!$currentMasaAktif instanceof Carbon) {
                $currentMasaAktif = Carbon::parse($currentMasaAktif);
            }
            $newMasaAktif = $currentMasaAktif->addYears($request->masa_aktif);

            $member->masa_aktif = $newMasaAktif;
            $member->save();

            return redirect()->route('admin.dashboard.activate')->with('success', 'Member sudah diaktivasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.activate')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
