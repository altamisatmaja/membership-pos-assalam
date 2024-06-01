<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class ActivateAdminController extends Controller
{
    public function index()
    {
        $members = Member::with('user')->get();
        // dd($members);
        return view('admin.pages.renew.index', compact('members'));
    }

    public function show($id)
    {
        $member = Member::where('id', $id)->first();
        return view('admin.pages.renew.show', compact('member'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nomor_pas' => 'required|integer|min:10',
            ], [
                'nomor_pas.required' => 'Wajib diisi',
                'nomor_pas.min' => 'Minimal karakter 11',
                'nomor_pas.integer' => 'Harus berupa angka'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $member = Member::where('id', $id)->first();

            $currentMasaAktif = $member->masa_aktif ?? Carbon::now();
            if (!$currentMasaAktif instanceof Carbon) {
                $currentMasaAktif = Carbon::parse($currentMasaAktif);
            }
            $newMasaAktif = $currentMasaAktif->addYears($request->masa_aktif);

            $member->masa_aktif = $newMasaAktif;
            $member->activated_at = now();
            $member->nomor_pas = $request->nomor_pas;
            $member->status = 'Aktif';
            $member->save();

            return redirect()->route('admin.dashboard.activate')->with('success', 'Member sudah diaktivasi.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.activate')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
