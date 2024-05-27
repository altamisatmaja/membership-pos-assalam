<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MemberSecondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 3; $i <= 10; $i++) {
            User::create([
                'id' => $i,
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password'),
            ]);
        }


        for ($i = 3; $i <= 10; $i++) {
            Member::create([
                'id_user' => $i,
                'nomor_pas' => 'PAS-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'gambar_member' => '17165063976.png',
                'nama_member' => 'Member ' . $i,
                'kewarganegaraan' => 'Indonesia',
                'tempat_lahir' => 'Kota ' . $i,
                'tanggal_lahir' => '1990-01-0' . ($i % 10 + 1),
                'jenis_kelamin' => $i % 2 == 0 ? 'Laki-laki' : 'Perempuan',
                'agama' => 'Islam',
                'alamat' => 'Alamat ' . $i,
                'provinsi' => 'Provinsi ' . $i,
                'kabupaten' => 'Kabupaten ' . $i,
                'kecamatan' => 'Kecamatan ' . $i,
                'kelurahan' => 'Kelurahan ' . $i,
                'rt_rw' => '00' . $i . '/00' . ($i + 1),
                'kode_zip' => '4013' . $i,
                'no_hp' => '0812345678' . $i,
                'no_telp' => '022123456' . $i,
                'status' => 'Aktif',
                'jumlah_tanggungan' => $i % 5,
                'pendapatan_bulanan' => 5000 + ($i * 100),
                'kena_pajak' => 1,
                'npwp' => '12.345.678.9-01' . $i . '.345',
                'deleted' => 'Tidak dihapus',
                'masa_aktif' => '2025-01-01',
                'activated_at' => Carbon::now(),
                'status_member' => 'Aktif'
            ]);
        }

    }
}
