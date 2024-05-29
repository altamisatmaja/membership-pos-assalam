<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberPelangganController extends Controller
{
    public function index()
    {
        // Ignored, really
    }

    public function store(Request $request)
    {
        try {
            $user = auth()->user();
            $validator = Validator::make($request->all(), [
                'gambar_member' => 'required',
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
                'nomor_pas' => 'min:11',
            ], [
                'nomor_pas' => 'Minimal nomor pas harus 11',
            ]);

            // dd($request->all());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();

            if ($request->hasFile('gambar_member')) {
                $gambar = $request->file('gambar_member');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_member'] = $nama_gambar;

                $request->session()->put('gambar_member', $nama_gambar);
            }

            $input['id_user'] = $user->id;
            $input['masa_aktif'] = now()->addYear();

            // dd($input);
            Member::create($input);

            return redirect()->route('pages.membership')->with('success', 'Pendaftaran berhasil, silahkan nmenghubungi CS untuk diverifikasi');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
