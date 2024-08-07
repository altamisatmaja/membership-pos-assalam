<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DashboardPelangganController extends Controller
{
    public function index(){
        $user = Auth::user();
        $member = Member::where("id_user", $user->id)->first();
        // dd(auth()->user()->member->status == 'Aktif');

        // if($member != NULL){
        //     $member = $user->member;
        // }
        return view('pelanggan.dashboard', compact('member', 'user'));
    }

    public function update(){
        $user = Auth::user();
        $member = $user->member;
        return view('pelanggan.pages.profile.index', compact('member'));
    }

    public function barcode(){

        $user = Auth::user();
        $member = Member::where("id_user", $user->id)->first();
        $nomor_pas = $member->nomor_pas;
        // dd(intval($nomor_pas));

        return view('pelanggan.pages.barcode.index', compact('user', 'member', 'nomor_pas'));
    }

    public function edit(Request $request)
{
    try {
        $user = auth()->user();
        $member = $user->member;

        $validator = Validator::make($request->all(), [
            'nama_member' => 'required',
            'kewarganegaraan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rt_rw' => 'required',
            'kode_zip' => 'required',
            'no_hp' => 'required',
            'no_telp' => 'required',
            'status_member' => 'required',
            'jumlah_tanggungan' => 'required',
            'pendapatan_bulanan' => 'required',
            'kena_pajak' => 'required',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();

        if ($request->hasFile('gambar_member')) {
            File::delete('uploads/' . $member->gambar_member);

            $gambar = $request->file('gambar_member');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_member'] = $nama_gambar;

            $request->session()->put('gambar_member', $nama_gambar);
        }

        $member->update($input);

        return redirect()->back()->with('success', 'Update profile berhasil');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

}
